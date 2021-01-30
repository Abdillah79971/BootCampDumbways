<html>
<head>
<title>Program untuk menghitung jumlah huruf</title>
</head>
<body>
<h1>Program untuk menghitung jumlah huruf</h1>
<hr>
<br>
<form method="post" action="" enctype="multipart/form-data">
<label>Huruf Yang Dihitung : </label>
<input type="text" name="huruf" />
<br>
<label>Kalimat / Huruf : </label>
<input type="text" name="kalimat" />
<br>
<input type="submit" name="ok" value="Hitung" />&nbsp;<input type="reset">
</form>
</body>
</html>
<?php
//Fungsi
function hitungHurufDariKalimat($Kalimat, $Huruf)
{
    for($no = 0;$no < 14;$no++)
    {
        echo "Hasil hitung huruf (a) muncul sebanyak " . substr_count($Kalimat, $Huruf) . " kali <br>";
    }
}
//

//Ambil Data Dari Form
if(isset($_POST['ok'])){
$huruf = $_POST['huruf'];
$kalimat = $_POST['kalimat'];
//

//Panggil Fungsi
echo hitungHurufDariKalimat($kalimat,$huruf);
//
}
?>