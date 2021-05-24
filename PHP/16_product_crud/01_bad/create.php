<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo $_SERVER['REQUEST_METHOD'] . '<br>';

// The $_FILES would contain an associative array with key as the name attribute given to the file input tag, it's value would be another associative array with several properties
// The value in the key ["tmp_name"] is the path where this image is temporarily stored on the server
// You need to store it somehwere in the file system, and store its path in the db 
// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;

$errors = [];
$title = '';
$price = '';
$description = '';

// echo '<pre>';
// var_dump($_SERVER);  // Observe $_SERVER['REQUEST_METHOD']
// echo '</pre>';
// exit;

// Without this if clause, what happens?
// as for any page $_SERVER['REQUEST_METHOD'] is 'GET' initially, without the clause, all variables that are to be inserted in the db would be empty, and $statement->execute() will throw an error saying the insert op violated not null constraint 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    if (!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }

    if (!is_dir('images')) {
        mkdir('images');
    }

    if (empty($errors)) {
        // Use the name attribute
        $image = $_FILES['image'] ?? null;
        $image_path = '';
        // $image will exist even if no file is uploaded, values will be either null or empty string. This is because when submitted, $_FILES has key(s) of name attribute of the file input element, which means $image exists (even when no file is uploaded)
        if ($image && $image['tmp_name']) {
            $image_path = 'images/' . random_string(8) . '/' . $image['name'];
            mkdir(dirname($image_path));    // Hover over dirname
            move_uploaded_file($image['tmp_name'], $image_path);
        }
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date) VALUES (:title, :image, :description, :price, :date);");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $image_path);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
        header('Location: index.php');
    }
}

function random_string($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }

    return $str;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">

    <title>Products CRUD</title>
</head>

<body>
    <h1>Create new Product</h1>

    <!-- Alternative syntax for php and html nesting -->
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div><?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- enctype is necessary when submitting files -->
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Image</label><br>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Product Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" name="description"><?php echo $description ?></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" step=".01" class="form-control" name="price" value="<?php echo $price ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>