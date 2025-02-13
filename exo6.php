<?php
$dark_mode =true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<input type="checkbox" id="dark_mode" name="dark_mode" <?php echo $dark_mode ? 'checked' : ''; ?>>
<label for="dark_mode">dark mode</label>

<div id="myElement" class="<?php echo $dark_mode ? 'dark' : 'light'; ?>">
<p>Hello World</p>
</div>
    
</body>
</html>