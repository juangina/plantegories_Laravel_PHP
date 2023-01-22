<?php

use Illuminate\Support\Facades\Storage;


// Initialize the session
session_start();

// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';

$_tempPath = '';

if( move_uploaded_file($_FILES['webcam']['tmp_name'],'../../storage/app/public/upload/'.$filename) ){
	$_tempPath = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '../../storage/app/public/upload/' . $filename;
	//$_tempPath = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/../upload/';
}

// Return image url
//echo $_tempPath;
echo $filename;