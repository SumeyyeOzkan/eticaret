<?php
include 'baglan.php';

//gelen ayar verilerinin dolu olup olmadığını kontrol eder
if(isset($_POST['genelayarkaydet'])) {
  
  //tablo güncelleme kodları
  $ayarkaydet=$db->prepare("UPDATE ayar SET
      ayar_title=:ayar_title,
      ayar_description=:ayar_description,
      ayar_keywords=:ayar_keywords,
      ayar_author=:ayar_author
      WHERE  ayar_id=0");

$update=$ayarkaydet->execute(array(
  'ayar_title'=>$_POST['ayar_title'],
  'ayar_description'=>$_POST['ayar_description'],
  'ayar_keywords'=>$_POST['ayar_keywords'],
  'ayar_author'=>$_POST['ayar_author']

));

if($update){
header("location:../production/genel-ayar.php?durum=ok");
}

else { header("location:../production/genel-ayar.php?durum=no"); }

}




?>