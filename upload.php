<?php
/**
 * Created by PhpStorm.
 * User: nguyennghi
 * Date: 12/3/17
 * Time: 4:16 PM
 */
?>
<!DOCTYPE html>
<html>
<body>

<form action="uploadHelper.php" method="post" enctype="multipart/form-data">
    <p>Say something about this image<input name="content" type="text"></p>
    <input type="text" name="tag">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

