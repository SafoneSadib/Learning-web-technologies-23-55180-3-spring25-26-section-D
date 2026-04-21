<?php
$uploadErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_pic"])) {
    $file = $_FILES["profile_pic"];
    $fileName = $file["name"];
    $fileSize = $file["size"];
    
    // Get the file extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
    // Allowed extensions
    $allowed = array("jpeg", "jpg", "png");

    // Validations [cite: 30, 31]
    if (!in_array($fileExt, $allowed)) {
        $uploadErr = "Picture format must be in jpeg or jpg or png.";
    } elseif ($fileSize > 4194304) { // 4MB in bytes (4 * 1024 * 1024)
        $uploadErr = "Picture size should not be more than 4MB.";
    } else {
        $uploadErr = "<span style='color:green;'>File is valid! (Upload logic goes here)</span>";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Profile Picture</title></head>
<body>
    <fieldset style="width: 300px;">
        <legend><b>PROFILE PICTURE</b></legend> <form method="POST" action="" enctype="multipart/form-data"> 
            <img src="https://via.placeholder.com/100" alt="Profile Icon"><br><br>
            <input type="file" name="profile_pic"> <br><br>
            <hr>
            <input type="submit" value="Submit"> <br>
            <span style="color:red;"><?php echo $uploadErr; ?></span>
        </form>
    </fieldset>
</body>
</html>