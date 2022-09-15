<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah user</title>
</head>
<body>

<form action="proses-create.php" method="post">
    
<table>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td colspan="3"><br></td>
</tr>
<tr>
    <td style="vertical-align: top;">alamat</td>
    <td style="vertical-align: top;">:</td>
    <td><textarea name="alamat" cols="30" rows="3"></textarea></td>
</tr>
<tr>
    <td colspan="3"><br></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="simpan"></td>
</tr>
</table>
</body>
</html>