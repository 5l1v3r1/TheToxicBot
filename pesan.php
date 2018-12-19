<?php
chat:
echo "root@($nama)-#";
$ngomong = trim(fgets(STDIN));
$bacotan=array("Hai :)","Bacot","Gajelas kontol","Garox","Mana gua tau","Gelud kuy","Apa urusan anda menanyakan hal itu","Bapak kao jual tv polytron");
$toxic=array("ngentod!", "anjeng!", "kontol!",".", "memek!", "kimak!", "jembod!", "jigong!", "njeng!");
$konci=array_keys($bacotan);
$toxic1=array_rand($toxic,2);
$asal1=array_rand($bacotan,2);
$hai=$bacotan[$konci[0]];
$kasar=$toxic[$toxic1[1]];
$asal=$bacotan[$asal1[1]];
if($ngomong == 'hai'){
  sleep(1);
  echo "hai juga $kasar\n";
}elseif(strpos($ngomong,'hai') == TRUE){
  sleep(1);
  echo "hai juga $kasar\n";
}elseif(strpos($ngomong,'bacot') == TRUE){
  sleep(1);
  echo "Anjing Lo $kasar\n";
}elseif(strpos($ngomong,'Siapa') == TRUE){
  sleep(1);
  echo "Yang nanya $kasar\n";
}elseif(strpos($ngomong,'gelud kuy') == TRUE){
  sleep(1);
  echo "kuy lah $kasar\n";
}elseif(strpos($ngomong,'siapa elu') == TRUE){
  sleep(1);
  echo "bot lah $asal\n";
}elseif(strpos($ngomong,'anjing') == TRUE){
  sleep(1);
  echo "anjing lu $kasar\n";
}elseif ($ngomong == FALSE){
  sleep(1);
  echo "Ngomong yang bener tod! $kasar\n";
}elseif(strpos($ngomong,'fajar ngentod') == TRUE){
  sleep(1);
  echo "Elu Juga Kek kontol !\n";
}elseif(strpos($ngomong,'ngentot') == TRUE){
  sleep(1);
  echo "bangsat $kasar\n";
}elseif(strpos($ngomong,'ngewe kuy') == TRUE){
  sleep(1);
  echo "Dih Gay $kasar\n";
}elseif(strpos($ngomong,'lu laki apa cewe') == TRUE){
  sleep(1);
  echo "Laki lah $kasar\n";
}elseif (strpos($ngomong,'siapa ericko lim') == TRUE){
  sleep(1);
  echo "Si Pemakan Jembod $kasar\n";
}elseif (strpos($ngomong,'fajar firdaus') == TRUE){
  sleep(1);
  echo "Si Programmer Ganteng :)\n";
}else{
  sleep(1);
  echo "$asal $kasar\n";
}
goto chat;
?>
