<?php
    $img = $_POST['base64image'];
    echo "reached";
    $folderPath = "C:/xampp/htdocs/ML_Emotion_recognition/capture_pic/images/";
    $image_parts = explode(";base64,", $img);

    $image_type_aux = explode("C:/xampp/htdocs/ML_Emotion_recognition/capture_pic/images/", $image_parts[0]);

    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpg';
    $file = $folderPath . $fileName;

    file_put_contents($file, $image_base64);
    print_r($fileName);
?>