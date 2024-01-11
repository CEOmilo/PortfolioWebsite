<?php
$directory = '/share'; // Replace with the actual path to your FTP directory
$files = scandir($directory);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTP File Listing</title>
</head>
<body>
    <h3>Files in the FTP Directory</h3>
    <ul>
        <?php
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<li><a href='$directory/$file'>$file</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
