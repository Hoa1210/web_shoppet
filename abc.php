<?php 
$filename = 'viewsssssssss';
$abc = file_exists( $filename );
if($abc) {
    echo 'Đã có folder';
}else{
   $a = mkdir( $filename ,  0777 ,  FALSE  );
   echo $a;
}
?>