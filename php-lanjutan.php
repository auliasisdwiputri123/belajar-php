<?php

// $nama = "Aulia";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo $nama;
echo $nama;
echo $nama;
*/

// $no = 10;

// for ($i=0; $i<$no; $i++) {
//     $n = $i +1;
//     echo $n." ".$nama."<br/>";
// }

// $no = 10;
// $i =0;

// $i =0;
// while ($i < $no) {
//     $n = $i +1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// }

// $no = 10;
// $i =0;
// do{
//     $n =$i+1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// } while ($i < $no)

// $data = array('Avanza', 'Lamborghini','Tesla','Xenia','XPander','Rubicon');

// echo $data[5]; //kalau mau jalanin indexs ke 5 aja

// foreach($data as $value) {
//     echo $value."<br>";
// }


//percabangan

// if ($nama == "Aulia") {
//     echo $nama."adalah orang surabaya";
// }
// else if ($nama == "Aul"){
//     echo $nama."bukan orang surabaya";
// }
// else{
//     echo $nama."darimana ya?";
// }

// switch($nama) {
//     case "Aulia":
//     $pesan = $nama."Adalah orang Surabaya";
//     case "bli":
//     $pesan = $nama."Adalah orang Bali";
//     break;
//     default :
//     $pesan = $nama."darimana ya?";
// }
// echo $pesan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perluangan </title>
</head>
<body>
    <h1>input nama dan jumlah ulang </h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">        
        <label>Nama </label>
        <input type="text" name="nama">
        <label>Jumlah </label>
        <input type="text" name="no">
        <input type ="submit" name="submit" value="submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

                switch($_POST['nama']) {
                case "Aulia":
                $pesan = $_POST['nama']."Adalah orang Surabaya";
                break;
                case "bli":
                $pesan = $_POST['nama']."Adalah orang Bali";
                break;
                default :
                $pesan = $_POST['nama']."darimana ya?";
            }

            for($i=0;$i<$_POST['no'];$i++){
                echo $pesan."<br>";
            }
        }
            else{
            echo "anda belum input nama dan jumlah";
        }
        
    ?>
</body>
</html>