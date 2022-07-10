<?php
if (isset($_POST['Submit'])) {
    $harga_motor = (int) $_POST['rupiah1'];
    $uang_muka = (int) $_POST['rupiah2'];
    $lama_angsuran = (int) $_POST['lama_angsuran'];
    $bunga = (int) $_POST['bunga'];
    $minimal = ($harga_motor + ($bunga / 100 / 12 * $harga_motor)) * (30 / 100);

    $harga_motor = $uang_muka; // $harga_motor = $harga_motor - $uang_muka
    $angsuran_bunga_per_bulan = $harga_motor * $bunga / 100 / 12;
    $total_bunga = $angsuran_bunga_per_bulan * ($lama_angsuran * 12 - 1);
    $angsuran_pokok_per_bulan =  $harga_motor / ($lama_angsuran * 12 - 1);
    $total_angsuran_pokok = $angsuran_pokok_per_bulan * ($lama_angsuran * 12 - 1);
    $total_angsuran_per_bulan = $angsuran_bunga_per_bulan + $angsuran_pokok_per_bulan;
    $total_angsuran_semua = $total_bunga + $total_angsuran_pokok;

    $sisa_pinjaman = $harga_motor;
    // var_dump($uang_muka, $harga_motor, $angsuran_bunga_per_bulan, $total_bunga, (int) $angsuran_pokok_per_bulan, $total_angsuran_pokok, (int)$total_angsuran_per_bulan, $total_angsuran_semua);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simulasi Kredit Motor</title>
    <link rel="stylesheet" type="text/css" href="style_format.css">
</head>
<body>
<h1 class="text-center text-white card=title">Simulasi Kredit Motor</h1>
<h3 class="text-center text-white card=title">oleh Destya Vinka</h3>
        <table style="margin-left:auto;margin-right:auto" border="1" cellpadding=10 cellspasing=10>        
            <thead>
                <tr>
                    <th scope="col">Bulan</th>
                    <th scope="col">Angsuran Bunga</th>
                    <th scope="col">Angsuran Pokok</th>
                    <th scope="col">Total Angsuran</th>
                    <th scope="col">Sisa Pinjaman</th>
                </tr>
            </thead>
	    <tbody>
        <?php for ($i = 1; $i <= ($lama_angsuran * 12 - 1); $i++) : ?>
            <tr>
                <?php if ($uang_muka < $minimal) : ?>
                <td class="fw-bold text-center" colspan="5">Uang muka minimal 30%</td>
                <?php break;
                     endif ?>
                <th scope="row"><?= $i ?></th>
                <td>Rp.<?= number_format($angsuran_bunga_per_bulan) ?></td>
                <td>Rp.<?= number_format($angsuran_pokok_per_bulan) ?></td>
                <td>Rp.<?= number_format($total_angsuran_per_bulan) ?></td>
                <td>Rp.<?= number_format($sisa_pinjaman -= $angsuran_pokok_per_bulan) ?></td>
            </tr>
        <?php endfor ?>
        </tbody>
        </table>
        <br>
        <p class="back"> Kembali ke <a href="index.php"><font color="yellow">halaman sebelumnya</font></a></p>      
</body>
</html>