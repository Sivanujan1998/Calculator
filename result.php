<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="result.css">
</head>
<body>
    <center><table>
    <div class="back">
    <div class="ans">
<?php
 
$outstring=($_POST['input']);

$arr1 =str_split($outstring);


$percen=0;
$dev=0;


                for($i=0;$i<count($arr1);$i++){
                    if ($arr1[$i]=="%"){
                        $percen++;
                    }
                    if ($arr1[$i]=="/"){
                        $dev++;
                    }
                }

                if($dev>0){
                    $arr3=explode('/', $outstring);
                    for($j=1;$j<count($arr3);$j++){
                    if($arr3[$j]==0){
                        header( "location:index.php ? message=wrong2");
                    }
                }
                    
                }



if ($percen>1) {
    header( "location:index.php ? message=wrong");
}
else if($percen==1){
                    $arr2=explode('%', $outstring);
                                if($arr2[0]==""){
                                header( "location:index.php ? message=wrong");
                                 }
                                else if ($arr2[1]=="") {
                              echo($arr2[0]/100);
                                }  else {
                                header( "location:index.php ? message=change");    
                    }
}else{
            try {
                $string = $outstring;
                $math_string ="print (".$string.");";
                $result = eval($math_string);
                echo $result;
                }
            
            catch(ParseError $e){
            header( "location:index.php ? message=wrong1");
                }
            }

            

 
?>
    </div>
    <div class="for" >
   <?php echo $outstring; 
   
   ?>
</div>
<div class="success" >
   <?php 
    echo "<h2><b><font color=green>successfully get the Answer!! </font></b></h2>";
   ?>
</div>
    

<input class="b4" type="button"  value="go to the index" onclick="location.href='index.php'">
</div>
</table>
    </center>
</body>
</html>