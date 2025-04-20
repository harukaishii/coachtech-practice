<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$desired_product = htmlspecialchars($_POST['desired_product'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name ."<br>";
print "ご希望の商品は、". $desired_product ."<br>";
print "注文数は、" . $number;
