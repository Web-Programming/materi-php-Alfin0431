<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To PHP</title>
</head>
<body>
    <?php echo "<h1>Welcome to my first website with PHP</h1>";?>
    <p>Lorem ipsum dolor sit amet consectetur adipisic ing elit. Voluptatibus, praesentium consequatur debitis adipisci maiores magnam deleniti alias quisquam nam, deserunt cum asperiores minus accusamus enim facere corrupti? Iusto, autem in.</p>
    <P>My Name is <?php echo "<b>Alfin</b>";?></P>
    <hr/>
    <h4> Menulis Variabel di PHP</h4>
    <hr/>
    <?php
        $nama = "Alfinnn"; //String
        $umur = 20; //Number
        $Laki_Laki = true; //Boolean
        $saldo = null; //null
        $hobby = ["Adventure", "Swimming", "Hiking"]; //Array
        $makanan = array("Ayam", "Telor", "Daging"); //Array
        #ini juga komentar

        //Variabel Statis
        const PI = 3.14;
        echo "Nilai PI =", PI;
        echo "<br/>";
        echo "Umur = $umur";
        echo "<br/>";
        //echo "Hobi 1. $hobby[0]";

        //Menampilkan nilai array
        foreach ($hobby as $key => $value) {
            echo "Hobi",($key+1)," = $value <br/>";
        }

        $Saldo = 1000; //Dollar
        //Tampilkan symbol dolar ($) menggunakan echo
            echo "Saldo"," = \"$$Saldo\" <br/>";
        
    ?>
</body>
</html>