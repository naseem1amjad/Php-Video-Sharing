<?php

include 'dbConnection.php';

function mySanitize($mystr){
	return str_replace(array("'", "\"", "&quot;"), "",htmlspecialchars($mystr));
}

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

	$first_name = mySanitize($_POST['FirstName']);

	$last_name = mySanitize($_POST['LastName']);
	$email = mySanitize($_POST['Email']);
	$video_type = mySanitize($_POST['TypeOfVideo']);
	$video_title = mySanitize($_POST['VideoTitle']);
    if (!in_array($extension, ['mkv', '3gp', 'mp4', 'wmv'])) {
        echo "Your file extension must be .mkv, .3gp , .wmv or .mp4";
    } elseif ($_FILES['myfile']['size'] > 700000000) { // file shouldn't be larger than 700Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads, is_deleted, First_Name, Last_Name, Email, Video_Type, Video_Title, Status) VALUES ('$filename', $size, 0, 0,'$first_name','$last_name','$email','$video_type','$video_title', 'Pending')";
            if (mysqli_query($conn, $sql)) {				
                echo "File uploaded successfully with following information.<BR>";
				echo "First Name = ".$first_name."<BR>";
				echo "Last Name = ".$last_name."<BR>";
				echo "Email = ".$email."<BR>";
				echo "Video Type = ".$video_type."<BR>";
				echo "Video Title = ".$video_title."<BR>";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}