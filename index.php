<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/8fb1e1fba5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Nom restaurant</title>
</head>
<body>

<?php
if (!isset($_REQUEST['plat'])) {
    $_REQUEST["plat"]="";
    $_REQUEST["prix"]=0;
    $_REQUEST["total"]=0;
    $_REQUEST["list"]="";
    $totalprix=0;
    $list="";
}
else{
    $totalprix = $_REQUEST["total"];
    $totalprix = $totalprix + $_REQUEST["prix"];
    $list = $_REQUEST["list"];
}
?>

<div class="header">
    <h1>Nom restaurant</h1>
</div>
<form action="index.php" method="get">
    <div class="bloc-table">
        <div class="bloc1">
            <div class="table">
                <a href="index.php?plat=menu%20varié%20SKY&prix=1.1&total=<?php echo $totalprix; ?>&list=<?php echo $list;?>menu%20varié%20SKY<br>">
                    <img class="plat" src="resources/images/menu varié SKY.jpg">
                    menu varié SKY
                </a>
            </div>
        </div>
        <div class="bloc2">
            <div class="table">
                <a href="index.php?plat=menu%20varié%20DUO&prix=1.1&total=<?php echo $totalprix?>&list=<?php echo $list;?>menu%20varié%20DUO<br>">
                    <img class="plat" src="resources/images/menu varié DUO.jpg">
                    menu varié DUO
                </a>
            </div>
        </div>
        <div class="bloc3">
            <div class="table">
                <a href="index.php?plat=brochettes%20mix&prix=1.1&total=<?php echo $totalprix?>&list=<?php echo $list;?>brochettes%20mix<br>">
                    <img class="plat" src="resources/images/brochettes mix.jpg">
                    brochettes mix
                </a>
            </div>
        </div>
        <div class="bloc4">
            <div class="table">
                <a href="index.php?plat=menu%20Max%20(20%20Pieces)&prix=1.1&total=<?php echo $totalprix?>&list=<?php echo $list;?>menu%20Max%20(20%20Pieces)<br>">
                    <img class="plat" src="resources/images/menu Max (20 Pieces).jpg">
                    menu Max (20 Pieces)
                </a>
            </div>
        </div>
        <div class="bloc5">
            <div class="table">
                <a href="index.php?plat=menu%20Max%20(40%20Pieces)&prix=1.1&total=<?php echo $totalprix?>&list=<?php echo $list;?>menu%20Max%20(40%20Pieces)<br>">
                    <img class="plat" src="resources/images/menu Max (40 pieces).jpg">
                    menu Max (40 Pieces)               
                </a>
            </div>
        </div>
    </div>
</form>

<div class="bloc-table2">
    <div class="bloc11">
        <div class="table">
            <h1>Liste commande</h1>
            <?php
            echo $list;
            ?>
        </div>
    </div>
    <div class="bloc12">
        <div class="table">
            <h2>Total:</h2>
            <?php
            if ($_REQUEST["plat"] !=""){
                echo $totalprix." €";
            }
            ?>
        </div>
    </div>
    <div class="bloc13">
        <div class="table">
            <a href="index.php">Annuler la Commande</a>
        </div>
    </div>
</div>




<i class="far fa-grin-tongue-squint"></i>
<div class="footer">
    <a>Crée par François, Nicolas, Eliep</a>
</div>
</body>
</html>