<?php
//Include needed files
include 'php/variables.php';
include 'php/query.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Load HEAD and CSS -->
        <?php include 'pages/head.html'; ?>
        <style>
            <?php include 'css/boomer.css'; ?>
	    </style>
    </head>
    <body>
        <!-- Load GITHUB-CORNERS -->
        <?php include 'pages/fork.html'; ?>
            <div class="code-area">
	            <div class="title">
                    <?php echo $snowflakes[array_rand($snowflakes)] ?>
                </div>
                <form action="" method="GET">
                    <input class="textarea" type="text" name="id" placeholder="216156825978929152"></input>
                </form>
                <?php if (isset($id)): ?>
        	        <div style="color:#fff;margin-top: 10%;">
        	            GMT<br><?php echo $gmt ?><br style="line-height: 2;">
        	            UNIX MS<br><?php echo $unixedSnowflake ?>
                    </div>
  	            <?php endif; ?>
            </div>
    </body>
</html>
