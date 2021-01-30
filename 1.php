<html>
<head>
<title>Program menghitung perkreditan rumah</title>
</head>
<body>
<hi>Program sederhana menghitung kredit rumah</hi><hr>
<form method="post" action="" enctype="multipart/form-data">
<label>Pilih Tipe Rumah : </label>
<select name="rumah">
<option>Pilih Tipe Rumah</option>
<option value="rose">Rose</option>
<option value="gold">Gold</option>
<option value="platinum">Platinum</option>
</select>
<br>
<label>Pilih Berapa Lama Kredit : </label>
<select name="kredit">
<option>Pilih Lama kredit</option>
<option value="12">12 Bulan</option>
<option value="18">18 Bulan </option>
<option value="24">24 Bulan</option>
</select>
<br>
<input type="submit" name="ok" value="Kirim!">&nbsp;<input type="reset">
</form>
</body>
</html>
<?php
if(isset($_POST['ok'])){
    //Ambil data dari form
    $rumah = $_POST['rumah'];
    $kredit = $_POST['kredit'];
    //

    //harga tipe rumah
    $rose = 120000000;
    $gold = 300000000;
    $platinum = 360000000;
    //

    //Variable global
    global
    $angsuran,$lama_kredit,$potongan;
    //



    switch($rumah)
    {
        case "rose":
            $dp = 0.2;
            $potongan = $rose * $dp;
            echo "Type Rumah : Rose<br>";
            echo "Harga Rumah : " . $rose . "<br>";
            echo "Uang Muka : " . $potongan . "<br>";
            $sisa = $rose - $potongan;
            echo "Sisa : " . $sisa;
            if($kredit == 12)
            {
                echo "<br>Lama Kredit : 12<br>";
                $lama_kredit = 12;
                $angsuran = $sisa / $lama_kredit;
                echo "<br>Angsuran : " . $angsuran;
            }elseif($kredit == 18)
            {
                echo "<br>Lama Kredit : 18<br>";
                $lama_kredit = 18;
                $angsuran = $sisa / $lama_kredit;
                echo "<br>Angsuran : " . $angsuran;
            }elseif($kredit == 24)
            {
                echo "<br>Lama Kredit : 24<br>";
                $lama_kredit = 24;
                $angsuran = $sisa / $lama_kredit;
                echo "<br>Angsuran : " . $angsuran;
            }
            break;

            case "gold":
                $dp = 0.2;
                $potongan = $gold * $dp;
                echo "Type Rumah : Gold<br>";
                echo "Harga Rumah : " . $gold . "<br>";
                echo "Uang Muka : " . $potongan . "<br>";
                $sisa = $gold - $potongan;
                echo "Sisa : " . $sisa;
                if($kredit == 12)
                {
                    echo "<br>Lama Kredit : 12<br>";
                    $lama_kredit = 12;
                    $angsuran = $sisa / $lama_kredit;
                    echo "<br>Angsuran : " . $angsuran;
                }elseif($kredit == 18)
                {
                    echo "<br>Lama Kredit : 18<br>";
                    $lama_kredit = 18;
                    $angsuran = $sisa / $lama_kredit;
                    echo "<br>Angsuran : " . $angsuran;
                }elseif($kredit == 24)
                {
                    echo "<br>Lama Kredit : 24<br>";
                    $lama_kredit = 24;
                    $angsuran = $sisa / $lama_kredit;
                    echo "<br>Angsuran : " . $angsuran;
                }
                break;

                case "platinum":
                    $dp = 0.2;
                    $potongan = $platinum * $dp;
                    echo "Type Rumah : Rose<br>";
                    echo "Harga Rumah : " . $platinum . "<br>";
                    echo "Uang Muka : " . $potongan . "<br>";
                    $sisa = $platinum - $potongan;
                    echo "Sisa : " . $sisa;
                    if($kredit == 12)
                    {
                        echo "<br>Lama Kredit : 12<br>";
                        $lama_kredit = 12;
                        $angsuran = $sisa / $lama_kredit;
                        echo "<br>Angsuran : " . $angsuran . "<br>";
                    }elseif($kredit == 18)
                    {
                        echo "<br>Lama Kredit : 18<br>";
                        $lama_kredit = 18;
                        $angsuran = $sisa / $lama_kredit;
                        echo "<br>Angsuran : " . $angsuran;
                    }elseif($kredit == 24)
                    {
                        echo "<br>Lama Kredit : 24<br>";
                        $lama_kredit = 24;
                        $angsuran = $sisa / $lama_kredit;
                        echo "<br>Angsuran : " . $angsuran;
                    }
                    break;
    }
}
?>