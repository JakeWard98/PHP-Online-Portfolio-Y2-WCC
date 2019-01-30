<?php
session_start(); //This lets the server know that you have capturing and using session data


	$target_dir = "../../gallery/";  //this is where the file goes
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);  //what the file is
	$uploadOk = 1;  //assumes the file uploads ok (true)
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  //determins file extension 
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"]))  //isset checks to see if the user has submitted the form
	//$_POST must match the POST method on the form
	//if method is get use $_GET instead
		{
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			//getimagesize does an initial check to see if the file is an image
			//getimagesize is a function will determine the size of any supported given image file and return the dimensions along with the file type 
			if($check !== false) 
			{
				$msg = "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} 
			else 
			{
				$msg = "File is not an image.";
				$uploadOk = 0;
			}
			
			// Check if file already exists
			if (file_exists($target_file)) 
			{
				$msg = "Sorry, file already exists.";
				$uploadOk = 0;
			}
			
			 // Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) 
			{
				$msg = "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "jpg"
			&& $imageFileType != "JPG"
			&& $imageFileType != "png"
			&& $imageFileType != "PNG"
			&& $imageFileType != "jpeg"
			&& $imageFileType != "JPEG"
			&& $imageFileType != "gif"
			&& $imageFileType != "GIF")
			{
				$msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) //We have found an error
			{
				//$msg = "Sorry, your file was not uploaded.";
				$_SESSION['msg'] = $msg;
				// if everything is ok, try to upload file
				header("Location: ../cms.php");
				exit();
			} 
			else 
			{
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
				{
					$msg = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					$_SESSION['msg'] = $msg;
					header("Location: ../cms.php");
					exit();
				} 
				else 
				{
					$msg = "Sorry, there was an error uploading your file.";
					$_SESSION['msg'] = $msg;
					header("Location: ../cms.php");
					exit();
				}
			}	
		}  //if isset statement closes
?>