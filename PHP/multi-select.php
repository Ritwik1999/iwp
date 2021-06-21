<!--
    Prefer using checkboxes instead of multi select, because it is generally that from a drop down list, only one option is selected

    tl;dr - Use square brackets following the field name for both multiple select and checkboxes
-->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['cars'] as $car) {
        echo "$car" . '<br>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop down with multiple select</title>
    <style>
        legend {
            border: 1px solid maroon;
            padding: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: coral;
        }

        form * {
            margin: 5px;
        }
    </style>
    <script>
        window.onload = function() {
            let form = document.getElementsByTagName("form")[0];
            form.onsubmit = function(event) {
                event.preventDefault();
                console.log(document.getElementsByName("firstname")[0].value);
                console.log(document.getElementsByName("lastname")[0].value);
                for (var option of document.getElementsByName("cars[]")[0].options) {
                    if (option.selected) {
                        console.log(option.value);
                    }
                }
                console.log("Submitting form in 10 seconds...");
                setTimeout(() => {
                    form.submit();
                }, 10000);
            }
        }
    </script>
</head>

<body>
    <form method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            First Name: <br>
            <input type="text" name="firstname" required> <br>
            Last Name: <br>
            <input type="text" name="lastname" required> <br>
            Car Brands you like: <br>
            <select name="cars[]" multiple>
                <option value="Audi">Audi</option>
                <option value="Volvo">Volvo</option>
                <option value="Fiat">Fiat</option>
                <option value="Mercedes">Mercedes</option>
            </select>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>