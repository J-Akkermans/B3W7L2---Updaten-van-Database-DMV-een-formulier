<?php 
    include 'resources/Functions/db_connection.php';    
    include 'resources/functions/function.php';
    $CharData = selectIndivual("characters", $_GET['id']);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header> <h1><?php echo $CharData['name'] ?></h1>

    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
        <img class="avatar" src="resources/images/<?php echo $CharData['avatar'] ?>">
            <div class="stats" style="background-color: <?php echo $CharData['color']; ?>">
                <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $CharData['health']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $CharData['attack']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $CharData['defense']; ?></li>
                </ul>
                <ul class="gear">
                <?php if($CharData['weapon'] != NULL){ ?>
                    <li>                        
                         <b>Weapon</b>: Fire Breath
                    </li> 
                    <?php }?>

                    <?php if($CharData['armor'] != NULL){ ?>
                    <li>
                        <b>Armor</b>: Giant Shell
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo nl2br($CharData['bio']);?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Jenna Akkermans 2021</footer>
</body>
</html>