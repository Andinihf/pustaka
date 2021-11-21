<?php
if ($merk === 'Nike') {
    $harga = "Rp 375,000";
} elseif ($merk === 'Adidas') {
    $harga = "Rp 300,000";
} elseif ($merk === 'Kickers') {
    $harga = "Rp 250,000";
} elseif ($merk === 'Eiger') {
    $harga = "Rp 275,000";
} elseif ($merk === 'Bucherri') {
    $harga = "Rp 400,000";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Output</title>
</head>

<style>
    fieldset {
        width: 40%;
        margin: 20px auto;
        border-radius: 5px;
    }

    select {
        width: 100%;
    }
</style>

<body>
    <fieldset>
        <legend>Data Transaksi</legend>

            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <?=$nama;?>
                    </td>
                </tr>

                <tr>
                    <th>Nomer HP</th>
                    <td>:</td>
                    <td>
                        <?=$nhp;?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <?=$merk;?>
                    </td>
                </tr>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <?=$ukuran;?>
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <th>:</th>
                    <td>
                        <?=$harga?>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('contohweb/')?>">Kembali</a>
                    </td>
                </tr>

            </table>
    </fieldset>
</body>

</html>