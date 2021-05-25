<?php

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // echo '<pre>';
    // var_dump($_FILES['file']['size']);
    // echo '</pre>';

    if (!is_dir('data')) {
        mkdir('data');
    }

    $file = $_FILES['file'];
    $file_path = '';
    if ($file['type'] === "application/pdf" && $file['size']/1048576 < 5 ) {
        $file_path = 'data/' . $file['name'];
        if (move_uploaded_file($file['tmp_name'], $file_path)) {
            $message = '<h1 style="color: green;">File Uploaded Successfully</h1>';
        } else {
            $message = '<h1 style="color: red;">File could not be uploaded</h1>';
        }
    } else {
        $message = '<h1 style="color: red;">File must be a pdf file and size must be less than 5MB</h1>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18BCE2166 Ex5</title>
</head>

<body>
    <?php echo $message ?>
</body>

</html>