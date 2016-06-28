<?php
//跑1~49的陣列
header("Content-Type:text/html; charset=utf-8");
function ronNum(){
    for($i=1 ; $i <=49; $i++){
        $num[$i] = $i;
    }
    return  $num;
}
    
$num = ronNum();
// print_r($num);
// exit;
$n = 1;
$Lotto = array();
while($n<=6){
    $randNum = rand(1,49);
    //  echo $num[$randNum];
    if(isset($num[$randNum])){
        $Lotto[]= $num[$randNum];
        unset($num[$randNum]);
        $n++; 
    }
}

natsort($Lotto);//自然排序法
// $rus = implode (",", $Lotto);
// print_r($Lotto);
// echo "本期樂透".$rus;
// print_r($num);

$str_span = "";
foreach($Lotto as $value){
    $str_span .= "<span>".$value."</span>";
}


?>

<html>
    <head>
        <title>樂透</title>
        <style>
            span {
                 font-family:Courier, Arial;
                 font-size: 36px;
                 -webkit-border-radius: 40px;
                 -moz-border-radius: 40px;
                 border-radius: 40px;
                 background-color: yellow;
                 border: 3px solid orange;
                 color: red;
                 display: block;
                 float: left;
                 height: 38px;
                 padding: 7px 8px 13px 8px;
                 text-align: center;
                 vertical-align: top;
                 width: 44px;
            }
        </style>
    </head>
    <body>
        <?php echo $str_span; ?>
        <!--<span class="circle">10</span>-->
    </body>
    
</html>