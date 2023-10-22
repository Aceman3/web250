<!DOCTYPE html>
<html>
<head>
    <title>Assignments Links</title>
</head>
<body>
    <h1>List of Assignments</h1>
    <ul>
        <?php
        $directory = 'C:/xampp/htdocs/web250'; // Path to the "web250" directory
        $folders = scandir($directory);

        foreach ($folders as $folder) {
            $folderPath = $directory . '/' . $folder;
            if (is_dir($folderPath) && $folder != '.' && $folder != '..' && $folder != '.git' && $folder != '.vs' && $folder !== 'private') {
                // Generate links for folders (excluding ".", "..", ".git", and "private")
                echo '<li><a href="' . $folder . '">' . $folder . '</a></li>';
            }
        }
        ?>
    </ul>
</body>
</html>
