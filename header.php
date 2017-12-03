<?php
/**
 * Created by PhpStorm.
 * User: nguyennghi
 * Date: 12/3/17
 * Time: 4:09 PM
 */
?>

<style>
    .header{
        background-color: rgba(0,0,0,0.4);
        height: 70px;
        width: 100%;
        padding-top: 0;
    }

</style>
<div class="header">
<a>Photo Sharing</a>
    <input type="text" placeholder="Search Here" width="100px" height="30px">
    <a href="profile.php?id=<?=$_COOKIE['user']?>"><?=$_COOKIE['user']?></a>
    <a href="upload.php">Upload</a>
    <a href="profile.php?logout=true">Logout</a>

</div>
