<?php
$uname = $_POST['username'];
$uage = $_POST['user_age'];
 ?>
    <!DOCTYPE html>

    <head>
        <title>Assignment-1</title>
    </head>

    <body>
        <br />
        <h1>"Hello <?php echo "$uname"; ?>"</h1>
        <br />
        <p>"In 10 years, you will be
            <?php echo ($uage+10)?> years old."</p>
    </body>

    </html>
