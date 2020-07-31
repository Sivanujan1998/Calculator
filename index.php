<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Calculator</title>
   
    <link rel="stylesheet" type="text/css" href="cal.css">
</head>
<body>
    <?php
    if(isset($_GET['message'])){
        if($_GET['message']=='wrong'){
            echo "<h2><b><font color=red>Wrong method try again!! </font></b></h2>";
        }else if($_GET['message']=='change'){
            echo "<h2><b><font color=red>please input a correct method (eg - 5%) </font></b></h2>";
        }else if($_GET['message']=='wrong1'){
            echo "<h2><b><font color=red>YAY!!! ERROR CAPTURED <br>(please input correct way)</font></b></h2>";
        }else if($_GET['message']=='wrong2'){
            echo "<h2><b><font color=red>You can't devide by 0!!</font></b></h2>";
        }
    }
?>

    <form name="design" action="result.php" method="POST">
    <input class="t1" type="textbox" name="input"  size=25  readonly>
  <center>  
      <table>
    <tr>
    <td><input class="b1" type="button" onclick="cancel()" value="C"></td>
    <td><input class="b1" type="button" onclick="plusorminus()" value="+/-"></td>
    <td><input class="b1" type="button" onclick="percen()" value="%"></td>
    <td><input class="b1" type="button" onclick="devide()" value="/"></td>
    </tr>
    <tr>
    <td><input class="b1" type="button" onclick="num7()" value="7"></td>
    <td><input class="b1" type="button" onclick="num8()" value="8"></td>
    <td><input class="b1" type="button" onclick="num9()" value="9"></td>
    <td><input class="b1" type="button" onclick="multi()" value="x"></td>
    </tr>
    <tr>
    <td><input class="b1" type="button" onclick="num4()" value="4"></td>
    <td><input class="b1" type="button" onclick="num5()" value="5"></td>
    <td><input class="b1" type="button" onclick="num6()" value="6"></td>
    <td><input class="b1" type="button" onclick="sub()" value="-"></td>
    </tr>
    <tr>
    <td><input class="b1" type="button" onclick="num1()" value="1"></td>
    <td><input class="b1" type="button" onclick="num2()" value="2"></td>
    <td><input class="b1" type="button" onclick="num3()" value="3"></td>
    <td><input class="b1" type="button" onclick="add()" value="+"></td>
    </tr>
    <tr>
    <td><input class="b1" type="button" onclick="num0()" value="0"></td>
    <td><input class="b1" type="button" onclick="point()" value="."></td>
    <td><input class="b1" type="button" onclick="leftb()" value="("></td>
    <td><input class="b1" type="button" onclick="rightb()" value=")"></td>
    </tr>
    <tr>
    
    <td colspan="2" ><input class="b2" type="button" onclick="del()" value="delete"></td>
    <td colspan="2"><input class="b3" type="submit"  value="="></td>
    </tr>
    </table>
  
  </center>

    </form>
    <script src="cal.js"></script>
</body>
</html>