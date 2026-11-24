<?php
$appName = "My First Ubuntu Application";
$server = gethostname();
?>

<html>
<head>
    <title>My First Application</title>
</head>
<body>
    <h1>Welcome to Version 2 Application!</h1> 
    <h2><?php echo $appName; ?></h2>
    <p>Latest deployment: Version 2</p>
    <p>Application is running successfully.</p>

    <p>Server Name: <?php echo $server; ?></p>

    <p>PHP Version: <?php echo phpversion(); ?></p>
</body>
</html>
