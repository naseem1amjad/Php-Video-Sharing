<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'dbConnection.php';

$sql = "SELECT * FROM files Where is_deleted=0";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    } 
}
	else if (isset($_GET['del_id'])) {//Purge files
    $id = $_GET['del_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        
        unlink('uploads/' . $file['name']);
		echo $file['name']." purged successfully.";
		echo "<br>";
		echo "<a href='results.php'>List of Vidoes</a>";
        // Now update delete column
        
        $updateQuery = "UPDATE files SET is_deleted=1 WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

	
}

?>