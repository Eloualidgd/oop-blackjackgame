<?php
require 'Blackjack.php';
session_start();
if (empty($_SESSION['player'])) {
    $player = new Blackjack;
    $dealer = new Blackjack;
    $_SESSION['player'] = $player;
    $_SESSION['dealer'] = $dealer;
}

//$_SESSION["score"] += $_SESSION['player']->getScore();
//$score_now = $_SESSION['score'];
echo "score: ". $_SESSION['player']->getScore()."<br>";


$hit = $stand = $surrender = "";

//wordt er op de knop geklikt (en welke)
if(isset($_GET['hit'])) {
    if ($_SESSION['player']->getScore() < 21) {
        $_SESSION['player']->Hit();
    }
}
if(isset($_GET['stand'])) {
    $_SESSION['player']->Stand();
}

if(isset($_GET['surrender'])) {
    $_SESSION['player']->Surrender();
}
//if(isset($_GET['win'])) {
  //  if ($_SESSION['player']->getScore() ==21)
    //$_SESSION['player']->win();
//}




?>
<form action='game.php' method='get'>
    <input type='submit' value='HIT' name='hit'>
    <input type='submit' value='STAND' name='stand'>
    <input type='submit' value='SURRENDER' name='surrender'>
</form>