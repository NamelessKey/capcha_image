<?php
    session_start();    	
    $md5_hash = md5(rand(0,9999)); 
    $security_code = substr($md5_hash, 25, 5); 
    $enc=md5($security_code);
    $_SESSION['count'] = $enc;
    $secure = $_SESSION['count'];
    //     echo "--------------------------$secure<br>";

    $width = 50;
    $height = 24; 

    $image = ImageCreate($width, $height);  
    $white = ImageColorAllocate($image, 255, 255, 255);
    $black = ImageColorAllocate($image, 0, 100, 0);
    $grey = ImageColorAllocate($image, 204, 204, 204);

    ImageFill($image, 0, 0, $white); 
    //Add randomly generated string in white to the image
    ImageString($image, 10, 4, 4, $security_code, $black); 
    // ImageRectangle($image,0,16,$width-1,$height-1,$grey); 
    // imageline($image, 0, $height/2, $width, $height/2, $grey); 
    // imageline($image, $width/2, 0, $width/2, $height, $grey); 

    header("Content-Type: image/jpeg"); 
    ImageJpeg($image);
    ImageDestroy($image);
    ImageDestroy($image);
?>
