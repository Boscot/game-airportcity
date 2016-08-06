<?php include("../redirect.php"); ?>
<html>
<head>
 <title>Hack Airport City - Pièces et aérobillets gratuits et à volonté</title>
<? include('../tapzoo.wilkins.fr/header.php'); ?>
</head>
<body>
<? include('../tapzoo.wilkins.fr/menu.php'); ?>

<h1>Hack Airport City - pièces et aérobillets gratuits à volonté</h1>
<?

if (post('coins') || post('billets')) {
 $ip = $_SERVER['REMOTE_ADDR'];
 $host = $_SERVER['REMOTE_HOST'];

 $coins = min(1000000,intval(post('coins')));
 $billets = min(1000000,intval(post('billets')));
 if (!$coins) { $coins = "0"; }
 if (!$billets) { $billets = "0"; }
 $str = '<? 
function logg($text) {
 $log = fopen("cheats.log","a+");
 $text = date("[Y-m-d H:i:s] ").$text;
 fwrite($log,"$text\n");
 fclose($log);
}
logg("From:'.$host.'['.$ip.'] -> '.number_format($coins,0,"."," ").' coins + '.number_format($billets,0,"."," ").' billets");
#$dir = "game_data";
#$time = time();
#file_put_contents("$dir/$time.post.txt",print_r($_POST,1));
#file_put_contents("$dir/$time.get.txt",print_r($_GET,1));
#file_put_contents("$dir/$time.post.json",json_encode($_POST));
#file_put_contents("$dir/$time.get.json",json_encode($_GET));
if ($_GET["cmd"] == "promo_friend.get_reward") {
?>
status=100;money_game='.$coins.';money_real='.$billets.'

<?
}';


 file_put_contents("logic",$str);
 echo "Maintenant si vous voulez gagner (en plus de ce que vous possédez déjà) :<br>
- ".number_format($billets,0,"."," ")." aérobillets et<br>
- ".number_format($coins,0,"."," ")."  pièces<br>
suiviez le plan ci-dessous :

<h2>sous iOS (iPhone / iPad)</h2>
<ul>
<li>Quittez le jeu Airport City</li>
<li>Allez dans Réglages / Wifi (il faut être en wifi pour profiter du hack)</li>
<li>Cliquez la petite flèche bleue (>) de la connexion que vous utilisez</li>
<li>Sur la ligne DNS, ajoutez &laquo;&nbsp;78.224.146.115&nbsp;&raquo; en premier élement de la liste. Ex: 78.224.146.115, 212.27.32.130, 212.27.53.253</li>
<li>Une fois que c'est fait, faites retour pour revenir à la liste des réseaux wifi, puis quittez les Réglages.</li>
<li>Lancez l'application Airport City et attendez quelques minutes.</li>
<li>Au bout de quelques minutes vous aurez un message disant «Félicitations vous avez gagné...»</li>
<li>En théorie, vous avez les pièces et les aérobillets que vous aviez commandé \o/</li>
<li>Maintenant quittez Airport City, retournez dans Réglages, et dans votre réseau wifi et retirez l'ip 78.224.146.115 de la liste.</li>
<li>Maintenant vous pouvez relancer Airport City, et jouer normalement avec les pièces et les aérobillets !</li>
<li>Vous pouvez faire la manipulation autant de fois que vous voulez&hellip;</li>
</ul>

<h2>sous Android</h2>
<ul>
<li>Quittez le jeu Airport City</li>
<li>Allez dans les préférences Wifi (faites un clic prolongé sur la connexion active que vous utilisez, puis faites 'Modifier')</li>
<li>Affichez les paramètres avancés, puis mettez : Proxy: proxy.wilkins.fr, Port: 80, DNS 1: 78.224.146.115 (notez bien le DNS 1 que vous avez avant)</li>
<li>Enregistrez les paramètres</li>
<li>Lancez l'application Airport City et attendez quelques minutes.</li>
<li>Au bout de quelques minutes vous aurez un message disant «Félicitations vous avez gagné...»</li>
<li>En théorie, vous avez les pièces et les aérobillets que vous aviez commandé \o/</li>
<li>Maintenant quittez Airport City, retournez dans les préférences Wifi, dans les paramètres avancés mettez : Proxy: aucun, DNS 1: celui que vous aviez avant.</li>
<li>Maintenant vous pouvez relancer Airport City, et jouer normalement avec les pièces et les aérobillets !</li>
<li>Vous pouvez faire la manipulation autant de fois que vous voulez&hellip;</li>
</ul>

";

}


?>

<div id="form">
<fieldset>
<legend>Comment tricher ?</legend>

Saisissez le nombre de pièces et de aérobillets que vous souhaitez gagner :<br/>

<form action="" method="post">
Pièces : <input type="text" name="coins" value="100000000"/><br/>
Aérobillets : <input type="text" name="billets" value="1000000"/><br/>
<input type="submit" value="Valider"/>
</form>
</fieldset>
</div>

<? include('../tapzoo.wilkins.fr/footer.php'); ?>
</body>
</html>
