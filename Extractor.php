<?php
    // Include and initialize Extractor class
    require_once '/home/S3PLmL1FH32M/cloudflare_uk/jobicy.com/public_html/x00110a11/xml/Extractor.class.php';
    $extractor = new Extractor;

    // Path of archive file
    $archivePath = 'https://jobicycastwall.s3.amazonaws.com/PSUuyYWgMOUsXoJNkP5OG6aE/KQAaz8PdZuxh.xml.gz';

    // Destination path
    $destPath = 'S1VOuapRu88G/eLlTNyD7VdBi/zh509Tgb4x6X/extracted_files/';

    // Extract archive file
    $extract = $extractor->extract($archivePath, $destPath);

    if($extract){
        echo $GLOBALS['status']['success'];
    }else{
        echo $GLOBALS['status']['error'];
    }
?>
