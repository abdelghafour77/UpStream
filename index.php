<?php
include_once('getid3/getid3.php');
$getID3 = new getID3;
$file = $getID3->analyze('E:\[AkihitoSubs] Vinland Saga - Season 1 + Extras [BD 1080p][HEVC][x265][10Bit][Opus]\[AkihitoSubs] Vinland Saga - S01E01.mkv');
die(print_r($file));
echo ("Duration: " . $file['playtime_string'] .
    " / Dimensions: " . $file['video']['resolution_x'] . " wide by " . $file['video']['resolution_y'] . " tall" .
    " / Filesize: " . $file['filesize'] . " bytes<br />");
// header('Location: core/');
