<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $in1 = "Ayo ";
    $in2 = "Belajar ";
    $in3 = "Bersama ";
    $in4 = "Niomic";
    ?>

    <h1>Operator String</h1>
    <table>
        <thead>
            <tr>
                <td>Input 1</td>
                <td>Input 2</td>
                <td>Hasil</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $in1 ?></td>
                <td><?= $in2 ?></td>
                <td><?php echo $in1 . $in2 ?></td>
            </tr>
            <tr>
                <td><?= $in3 ?></td>
                <td><?= $in4 ?></td>
                <td><?php echo $in3 . $in4 ?></td>
            </tr>
</body>

</html>