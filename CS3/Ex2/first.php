<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18BCE2166 Ex1</title>

    <style>
        body {
            padding: 50px;
            border: 3px solid black;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form * {
            margin: 10px;
        }
    </style>

</head>

<body>
    <form action="second.php" method="POST">
        <label>
            Name:
            <input type="text" name="name" required>
        </label>
        <label>
            Password:
            <input type="password" name="password" required>
        </label>
        <div>
            Gender:
            <label>
                Male <input type="radio" name="gender" value="Male" checked>
            </label>
            <label>
                Female <input type="radio" name="gender" value="Female">
            </label>
        </div>
        <label>
            Date of Birth:
            <input type="date" name="dob" required>
        </label>
        <div>
            Education:
            <label>
                UG
                <input type="checkbox" name="ug" value="UG">
            </label>
            <label>
                PG
                <input type="checkbox" name="pg" value="PG">
            </label>
            <label>
                Professional
                <input type="checkbox" name="pro" value="Professional">
            </label>
        </div>
        <label>
            Email:
            <input type="email" name="email" required>
        </label>
        <span><button type="submit">Submit</button></span>
    </form>
</body>

</html>