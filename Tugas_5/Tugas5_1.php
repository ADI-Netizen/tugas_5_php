<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    Tabel Logika 1111
    <table>
        <thead>
            <tr>
                <td>Input True</td>
                <td>Input 2</td>
                <td>AND</td>
                <td>OR</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>false</td>
                <td>false</td>
                <td><?php printf(false && false) ?></td>
                <td><?php printf(false || false) ?></td>
            </tr>
            <tr>
                <td>false</td>
                <td>true</td>
                <td><?php printf(false && true) ?></td>
                <td><?php printf(false || true) ?></td>
            </tr>
            <tr>
                <td>true</td>
                <td>false</td>
                <td><?php printf(true && false) ?></td>
                <td><?php printf(true || false) ?></td>
            </tr>
            <tr>
                <td>true</td>
                <td>true</td>
                <td><?php printf(true && true) ?></td>
                <td><?php printf(true || true) ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>