<!DOCTYPE html>
<html>
<head>
    <title>Folder Navigation</title>
</head>
<body>
    <h1>Folder Navigation</h1>
    <ul>
        <?php
        function listDirectory($path) {
            $items = scandir($path);
            
            foreach ($items as $item) {
                if ($item !== '.' && $item !== '..') {
                    $itemPath = $path . '/' . $item;
                    
                    if (is_dir($itemPath)) {
                        // If it's a directory, generate a link to navigate into it
                        echo '<li><a href="' . $itemPath . '">' . $item . '</a></li>';
                    } else {
                        // If it's a file, display the file name
                        echo '<li>' . $item . '</li>';
                    }
                }
            }
        }
        
        $startDirectory = 'web250'; // Relative path to the starting directory
        listDirectory($startDirectory);
        ?>
    </ul>
</body>
</html>
