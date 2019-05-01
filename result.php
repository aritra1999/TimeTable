<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KIIT-HELP | Home</title>
    <?php include'include/link.php';?>
</head>

<body>

    <?php include'include/header.php'?>

    <div class="container">
        <span id="top">
            <div align="left" style="display:inline-block;">
                TIME TABLE
            </div>
            <div align="right"  style="display:inline-block;font-size:1.5rem;">
            <?php echo $_POST['sec'];?>
            </div>
        </span><br>

        
        <?php 
        
            echo "It's ".date('l')."!";

        ?>

        <?php include'display.php';?>

        <div class="back">
            <a href="./">
                <img src="left-arrow.png" width="60px">
            </a>
        </div>

    </div>

    <?php include'include/footer.php'?>
</body>

</html>