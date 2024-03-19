<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudflare TVE Technical Project</title>
</head>
<body>

    <?php 
    foreach (getallheaders() as $name => $value) { 
        echo "$name: $value <br>"; 
    } 
    ?> 
    <footer>
        <p> By Thineswar </p>
    </footer>
</body>
</html>