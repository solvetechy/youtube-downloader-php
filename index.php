<?php 

/*
By Solve Techy

*/
    

include("st_youtube_downloader.php");

$object = new STYDownloader();
$fetched = $object->setID("5Peo-ivmupE")->get_info();

if($object->validate_video()){
  /* Perform Your Operation */
  echo json_encode($fetched);
  
}else{
    echo "Please type a valid URL";
}

?>