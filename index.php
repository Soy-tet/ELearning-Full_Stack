<?php 
    session_start();
    include("./SQL/Function/chack_session.php");
    include('./SQL/CONNECTION/conn-INDEX.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <script src="https://kit.fontawesome.com/c90b4e63b2.js" crossorigin="anonymous"></script>
    <title>Knowlegde || Lesson</title>
</head>
<body>
<!-- NAV BAR  -->
    <div class="container-nav">
        <div class="container-left">
            <div class="icon"><?php echo $data['icon']; ?></div>
            <div class="navBar-head">@Leader-Username</div>
        </div>
        <div class="container-right">
            <?php while($data1 = mysqli_fetch_assoc($result)){ ?>
            <div class="header"><?php echo $data1['title']; ?></div>
           <?php } ?>
            <div class="icon-social"><?php echo $data['icon']; ?></div>
        </div>
    </div>
</body>
</html>