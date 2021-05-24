<?php

$n = isset($_GET['n']) ? (int)($_GET['n']) : 0;
$r = isset($_GET['r']) ? (int)($_GET['r']) : 0;
$ncr = 0;
$error = null;

if (!($n > 0 && $r > 0 && $n > $r)) $error = true;

if (!$error) {
    $numerator = factorial($n);
    $denominator = factorial($r) * factorial($n - $r);
    $ncr = $numerator / $denominator;
}

function factorial($num)
{
    if ($num <= 1) return 1;
    return $num * factorial($num - 1);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18BCE2166 Ex3</title>

    <style>
        body {
            padding: 50px;
            border: 3px solid black;
        }

        .note {
            color: orangered;
        }

        .result {
            color: green;
        }
    </style>

</head>

<body>
    <main>
        <h3>Ritwik Neema (18BCE2166) - nCR Calculator</h3>
        <form>
            <label>
                Enter n:
                <input type="number" step="1" name="n" value="<?php echo $n ?>">
            </label>
            <label>
                Enter r:
                <input type="number" step="1" name="r" value="<?php echo $r ?>">
            </label>
            <button type="submit">Calculate nCR</button>
        </form>
        <br>
        <div class="note">
            NOTE: Both n and r must be natural numbers and n must be greater than r
        </div>
        <div class="result">
            <?php if ($ncr) echo 'The value of ' . $n . 'C' . $r . ' is: ' . $ncr ?>
        </div>
    </main>
</body>

</html>