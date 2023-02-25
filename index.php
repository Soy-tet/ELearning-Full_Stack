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
    <link rel="shortcut icon" type="image/jpg" href="./ICON\favicon01.ico"/>
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
<!-- CONTENT  -->
    <div class="container">
        <!-- SIDE Left BAR  -->
        <div class="container_left">
            <ul>
                <h2>
                    <!-- <img src=".\ICON\favicon.ico" alt=""> -->
                    <p class="btn-best">Best</p>
                    <p>Top Super team</p>
                </h2>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-3tF7dmiYqxfHfnb.png" alt="">
                        <div class="team_des">
                          <p>O'Doyle</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-6lSqkfgfPtJXqAB.png" alt="">
                        <div class="team_des">
                          <p>Bowser</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-asUFJw29SCZIOBA.png" alt="">
                        <div class="team_des">
                          <p>Aspect</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <li>
                    <div class="container_icon_team">
                        <img src=".\ICON\AI\8-cv3Pnd0C6ipOr79.png" alt="">
                        <div class="team_des">
                          <p>Kraken</p>
                          <p class="des">The meaning of DESCRIPTION is an act of desccccccccccccccccccccribin</p>
                        </div>
                    </div>
                    <h2>21k</h2>
                </li>
                <button class="button-37" role="button">browse all +100</button>
            </ul>
        </div>
        <!-- SIDE RIGHT CONTENT -->
        <div class="container_right">

        </div>
    </div>
</body>
</html>