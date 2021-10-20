<?php
    $nama =$_POST ['nama'];
    $provinsi =$_POST ['provinsi'];
    $nk =$_POST ['nk'];
    $jk =$_POST ['jk'];
    $jp =$_POST ['jp'];
    $ikan =$_POST ['ikan'];
    $jml =$_POST ['jml'];
    $catatan =$_POST ['catatan'];
?>

<html>
    <head>
        <title> Hasil Perikanan Tangkap </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h3> Data Hasil Perikanan Tangkap </h3>
        <hr>
            <table>
            <tr>
                <td>Nama Nelayan</td>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td><?php echo $provinsi; ?></td>
            </tr>
            <tr>
                <td>Nomor Kapal</td>
                <td>:</td>
                <td><?php echo $nk; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $jk; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Perairan</td>
                <td>:</td>
                <td><?php echo $jp; ?></td>
            </tr>
            <tr>
            <td valign="top">Jenis Ikan Tangkapan</td>
            <td valign="top">:</td>
            <td><?php
                if(!empty ($ikan)){
                    echo "<ul>";
                    foreach ($ikan as $value){
                        echo "<li>$value</li>";
                    }
                    echo "</ul>";
                }?>
            </td>
            </tr>
            <tr>
                <td>Jumlah Hasil Tangkapan</td>
                <td>:</td>
                <td><?php echo $jml, " kg"; ?></td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>:</td>
                <td><td><?php echo $catatan; ?></td>
            </tr>
        </table>
        </form>
    </body>
</html>
