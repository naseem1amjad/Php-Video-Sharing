<?php include 'includes/filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
	<br>
	<a href="results.php">List of Vidoes</a>
    <div class="container">
      <div class="row">	  
        <form action="index.php" method="post" enctype="multipart/form-data" >
			<h2 class="heading">Video Upload Form</h2><br>
		<h3>First Name:
		<input type="text" name="FirstName" required></h3>
		<h3>Last Name:
		<input type="text" name="LastName" required></h3>
		<h3>Email
		<input type="email" name="Email" required></h3>
		<h3>Type of Video:</h3>
		<input type="radio" name="TypeOfVideo" id="Type1" value="Introduction Video" required><label for="Type1">Introduction Video</label><br>
		<input type="radio" name="TypeOfVideo" id="Type2" value="Funny Video"><label for="Type2">Funny Video</label><br>
		<input type="radio" name="TypeOfVideo" id="Type3" value="Teaching Video"><label for="Type3">Teaching Video</label><br>
		<input type="radio" name="TypeOfVideo" id="Type4" value="Commentary Video"><label for="Type4">Commentary Video</label><br>
		<h3>Video Title
		<input type="text" name="VideoTitle" required></h3>
          <h3>Upload File
          <input type="file" name="myfile" required></h3>
          <button type="submit" name="save" class="SubmitButton">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>