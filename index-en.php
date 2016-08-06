<?php include("../redirect.php"); ?>
<html>
<head>
 <title>Hack Airport City - unlimited and free coins and banknotes</title>
<? include('../tapzoo.wilkins.fr/header-en.php'); ?>
</head>
<body>
<? include('../tapzoo.wilkins.fr/menu.php'); ?>

<h1>Hack Airport City - unlimited and free coins and banknotes</h1>
<?

if (post('coins') || post('billets')) {
 $ip = $_SERVER['REMOTE_ADDR'];
 $host = $_SERVER['REMOTE_HOST'];

 $coins = min(500000000,intval(post('coins')));
 $billets = min(  1000000,intval(post('billets')));
 if (!$coins) { $coins = "0"; }
 if (!$billets) { $billets = "0"; }
 $str = '
<? 
function logg($text) {
 $log = fopen("cheats.log","a+");
 $text = date("[Y-m-d H:i:s] ").$text;
 fwrite($log,"$text\n");
 fclose($log);
}
logg("From:'.$host.'['.$ip.'] -> '.number_format($coins,0,"."," ").' coins + '.number_format($billets,0,"."," ").' billets");
#if ($_SERVER["REMOTE_ADDR"] == "208.90.215.181") { logg("Exiting"); exit; }
#if (strpos($_SERVER["REMOTE_ADDR"],"208.90") === 0) { logg("Exiting"); exit; }
$dir = "game_data";
$time = time();
file_put_contents("$dir/$time.post.txt",print_r($_POST,1));
file_put_contents("$dir/$time.get.txt",print_r($_GET,1));
file_put_contents("$dir/$time.post.json",json_encode($_POST));
file_put_contents("$dir/$time.get.json",json_encode($_GET));
?>
{"gameServiceResponse": {"offerReceivedGold": '.$billets.', "funnel": "0", "errors": [], "dc_version": "27,0", "serverTime": "1308172283", "iaps": [{"identifier": "iap_10_gold"}, {"identifier": "iap_10_gold_to_coins"}, {"identifier": "iap_22_gold"}, {"identifier": "iap_22_gold_to_coins"}, {"identifier": "iap_60_gold"}, {"identifier": "iap_60_gold_to_coins"}, {"identifier": "iap_125_gold"}, {"identifier": "iap_125_gold_to_coins"}, {"identifier": "iap_275_gold"}, {"identifier": "iap_275_gold_to_coins"}, {"identifier": "iap_700_gold"}, {"identifier": "iap_700_gold_to_coins"}, {"identifier": "iap_1500_gold"}, {"identifier": "iap_1500_gold_to_coins"}], "gameState": "null", "viewsIn24Hours": 11, "email_confirmed": 0, "offerReceivedMoney": '.$coins.', "iapSale": 0, "enableOfferwall": false, "levels_in_other_games": {}, "minimumPriorityToLazyLoad": -1}}';
 file_put_contents("gameState",$str);
 echo "Now if you want to get (in addition to what you already have) :<br>
- ".number_format($billets,0,"."," ")." billets and<br>
- ".number_format($coins,0,"."," ")."  coins<br>
follow this plan :

<ul>
<li>Quit Airport City</li>
<li>Go into Settings / Wifi (you need to be in Wifi to use this hack)</li>
<li>Click on the little blue arrow (>) of the connection you are using</li>
<li>On the DNS line, add &laquo;&nbsp;78.224.146.115&nbsp;&raquo; as the first item of the list. Eg: 78.224.146.115, 212.27.32.130, 212.27.53.253</li>
<li>Once it's done, go back to the list of wifi networkds and quit Settings.</li>
<li>Launch Airport City</li>
<li>After few secondes you should get a message saying 'Congratulations you won ... '</li>
<li>Theorically, you should have the banknotes and coins you ordered \o/</li>
<li>But now, you can't access internet and play with friends. So quit Airport City, and go back to Settings, and in your Wifi network, delete the ip 78.224.146.115 from the list.</li>
<li>Now you can launch Airport City again, and play normally with the coins and banknotes !</li>
<li>You can use this tip as much as you want&hellip;</li>
</ul>

";

}


?>

<div id="form">
<fieldset>
<legend>How to hack ?</legend>

Choose the amount of coins and banknotes you would like to win :<br/>

<form action="" method="post">
coins : <input type="text" name="coins" value="100000000"/><br/>
banknotes : <input type="text" name="billets" value="1000000"/><br/>
<input type="submit" value="Get free banknotes!"/>
</form>
</fieldset>
</div>


<? include('../tapzoo.wilkins.fr/footer.php'); ?>
</body>
</html>
