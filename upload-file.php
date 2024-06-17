<?php
$errors = array();
 $successMessage="";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $errors = array();
    // Check if file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0 && empty($errors)) {
        $uploadDir = "uploads/"; 
        $uploadedFile = $uploadDir . basename($_FILES["image"]["name"]);
        $uploadOk = true;
        
        // Check if file already exists
        if (file_exists($uploadedFile)) {
            $errors[] = "Sorry, file already exists.";
            $uploadOk = false;
        }
        
        // Check file size
        if ($_FILES["image"]["size"] > 5000000) { // 5000KB limit
            $errors[] = "Sorry, your file is too large.";
            $uploadOk = false;
        }
        
        // Allow only certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        $fileExtension = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION));
        if (!in_array($fileExtension, $allowedTypes)) {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = false;
        }
        
        // Check if $uploadOk is set to false by an error
        if ($uploadOk === false) {
            $errors[] = "Sorry, your file was not uploaded.";
        } else {
            // If everything is OK, try to upload file
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadedFile)) {
                $successMessage = "The file ". htmlspecialchars(basename($_FILES["image"]["name"])). " has been uploaded.";
                $errors = array();
            } else {
                $errors[] = "Sorry, there was an error uploading your file.";
            }
        }
        
    } else {
        $errors = array();
        $errors[] = "No file uploaded.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <h2>Upload Image</h2>
    
    <?php
    // Display errors if there are any
    if (!empty($errors)) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    }
    
    // Display success message if file was uploaded successfully
    if (isset($successMessage)) {
        echo '<p>' . $successMessage . '</p>';
    }
    ?>
    
    <form action="upload-file.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <button type="submit" name="submit">Upload Image</button>
    </form>
</body>
</html>
