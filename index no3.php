<!-- 21091397028_Kania Meliana Fityanti -->

<?php
    require_once 'phpNo3.php';
?>

<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="Nomor3.css">
    <title>Praktikum 4</title>
</head>
<body>
<h2><center>Soal No.3</center></h2>
<table align="center">

<tr align="center">
    <thead>
    <td>Objek</td>
    <td>Umur</td>  
    <td>Nama</td>  
    <td>Panjang Ekor</td>  
    <td>Cara Bergerak</td>
    </thead>      
</tr>

<tbody>
<tr>
    <td>01</td>
    <td><?=$katak->getUmur() ?> </td>  
    <td><?=$katak->getnama() ?> </td>  
    <td>-</td>  
    <td><?=$katak->carabergerak() ?> </td>      
</tr>

<tr>
    <td>02</td>
    <td><?=$kecebong->getUmur() ?></td>  
    <td><?=$kecebong->getNama() ?></td>  
    <td><?=$kecebong->getpanjangekor() ?></td>  
    <td><?=$kecebong->carabergerak() ?></td>      
</tr>
</tbody>

</table>
</body>
</html>