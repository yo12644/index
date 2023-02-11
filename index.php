<form method="POST" action="upload.php" enctype="multipart/form-data">
<p><input type="file" name= "file"/></p>
    <p><input type="submit" name="upload" value ="Upload Image"></p>
</form>

<?php

$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <?php echo $files[$a]; ?>

        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>

        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
            Delete
        </a>
    </p>-
    <?php
};
