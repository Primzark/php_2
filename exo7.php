<?php
$show = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caché ou pas ?</title>
</head>
<body>
    
</body>


<?php if ($show) : ?>
    <div class="container">
        <div class="row">
            <p>je suis le bloc visible</p>
        </div>
    </div>
<?php else : ?>
    <div class="container">
        <p>Le bloc est caché</p>
    </div>
    <?php endif; ?>
    </html>
