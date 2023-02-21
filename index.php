<?php

// ini sebuah komentar
/*
 ini sebuah komentar
 */

//  echo "Hello World";
//  print_r("Nama saya ainun <br>");
//  var_dump("kuliah di STT Terpadu Nurul Fikri");

//  // membuat variabel user
//  $nama = "Ainun";
//  $umur = 19;
//  $berat = 80;
//  $mahasiswa = true;

//  echo "nama saya adalah $nama <br>";
//  echo "umur saya adalah $umur tahun <br>";
//  echo "berat badan $berat kg <br>";

//  // membuat variable sistem
//  echo "Dokument root " . $_SERVER{"DOCUMENT_ROOT"};
//  echo "Nama File " . $_SERVER{'PHP_SELF'};

//  // membuat variabel konstanta 
//  define("PHI",3.14)
//  $jari = 8;
//  $luas = PHI * $jari * $jari;
//  $keliling = 2 * PHI * $jari;

//  echo "luas lingkaran dengan jari-jari = $jari = $luas";
//  echo "keliling lingkaran adalah $keliling"

 // membuat array
 $programs = ["php", "Javascript", "HTML", "CSS"];
 echo $programs[0];
 echo count($programs);
 $programs[]="Mysql";
 echo count($programs);

//  unset($program[0]);
 echo "<br>" . $programs[0];

 echo "<ol>";
 foreach($programs as $program){
    echo "<li> $program </li>";
 }
echo "</ol>";
?>