<?php
if (isset($_GET['directory'])) {
    $directory = $_GET['directory'];
    $files = scandir($directory);
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $filePath = $directory . '/' . $file;
            echo "<p><a href='download.php?file=" . urlencode($filePath) . "'>$file</a></p>";
        }
    }
}
?>