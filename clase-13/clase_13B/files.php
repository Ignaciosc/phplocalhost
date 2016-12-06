<?php
define('BASE_PATH', dirname(__FILE__));
define('AVATARS_DIRECTORY', BASE_PATH . '/uploads/avatars/');
define('FILES_DIRECTORY', BASE_PATH . '/uploads/files/');

function uploadSingleFile($field, $directory, $filename = null)
{
	if ($_FILES[$field]['error'] == UPLOAD_ERR_OK)
    {
        $tmp_name = $_FILES[$field]['tmp_name'];
        $name = $filename ?: $_FILES[$field]['name'];

        move_uploaded_file($tmp_name, $directory . $name);
    }
}

function uploadFiles($field, $directory)
{
	foreach ($_FILES[$field]['error'] as $key => $error)
	{
	    if ($error == UPLOAD_ERR_OK)
	    {
	        $tmp_name = $_FILES[$field]['tmp_name'][$key];
	        $name = $_FILES[$field]['name'][$key];
	        move_uploaded_file($tmp_name, $directory . $name);
	    }
	}
}

function download($path)
{
	if (file_exists($path))
	{
	    header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename="' . basename($path).'"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($path));
	    readfile($path);
	    exit;
	}
}