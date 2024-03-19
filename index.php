<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudflare TVE Technical Project</title>
</head>
<body>

    <header>
        <h1>Cloudflare TVE Technical Project</h1>
    </header>

    <?php 
    foreach (getallheaders() as $name => $value) { 
        echo "$name: $value <br>"; 
    } 
    ?> 
    <footer>
        <p><b> By Thineswar </b></p>
    </footer>
</body>
</html>