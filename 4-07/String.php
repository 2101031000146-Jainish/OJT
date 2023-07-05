<?php
    $str= "Hello Lab";
    $result=addslashes($str);
    echo  $str.'<br/>';

    echo $result;
    echo '<br/>'. '<br/>'.'<br/>';
    $str1="Tony,Steve,Thor";
    $result1= explode(',',$str1);
    echo '<pre/>';
    print_r($result1);
    echo '<br/>'. '<br/>'.'<br/>';

    $implode = implode('-',$result1);
    echo $implode;
    echo '<br/>'. '<br/>'.'<br/>';
    
    echo strpos("Hello.. Hi Good Morning!","Hi");
    echo '<br/>'. '<br/>'.'<br/>';

    echo strlen("Hello..");
    echo '<br/>'. '<br/>'.'<br/>';

    echo stripos("Hello Hi Good Morning","Good");
    echo '<br/>'. '<br/>'.'<br/>';

    echo strrpos("Hello Hi Good Morning","Morning");
    echo '<br/>'. '<br/>'.'<br/>';

    $htmlentity="&It;H&gt;";
    htmlentities($htmlentity);
    echo $htmlentity;
    echo '<br/>'. '<br/>'.'<br/>';

    html_entity_decode($htmlentity);
    echo $htmlentity;
    echo '<br/>'. '<br/>'.'<br/>';

    $text="THIS IS NICE TEXT";
    echo lcfirst($text);
    echo '<br/>'. '<br/>'.'<br/>';

    $text="this is nice text";
    echo ucfirst($text);
    echo '<br/>'. '<br/>'.'<br/>';

    $text="this is nice text";
    echo ucwords($text);
    echo '<br/>'. '<br/>'.'<br/>';

    $psswrd="Abc@123";
    echo md5 ($psswrd);
    echo '<br/>'. '<br/>'.'<br/>';

    $psswrd1="Abc@123";
    echo sha1 ($psswrd1);
    echo '<br/>'. '<br/>'.'<br/>';

    $text1="       Abc@123";
    echo ltrim ($text1);
    echo '<br/>'. '<br/>'.'<br/>';

    $text2="Abc@123#&nbsp; &nbsp;";
    echo ltrim ($text2);
    echo '<br/>'. '<br/>'.'<br/>';

    $text3="       Abc@123       ";
    echo ltrim ($text3);
    echo '<br/>'. '<br/>'.'<br/>';

    $rtext="Hellooo";
    $text4="Good morning";
    echo str_replace("Good",$rtext,$text4);
    echo '<br/>'. '<br/>'.'<br/>';

    $amount=1000;
    $nformat= number_format($amount,2);
    echo $nformat;
    ?>