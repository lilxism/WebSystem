<?php
function makeOptions ($arr){
    foreach($arr as $a=>$b) {
        echo "<option value='$a'>$a</option>";
    }
}
function makeSelect($name,$arr){
    if(is_array($arr)){
        echo "<select name='$name'>\n";
        makeOptions($arr);
        echo "</select>";
    }
}

function makeform($name,$arr){
    echo "<form method='post' action='arrayassoc.php'>";
    makeSelect($name,$arr);
    echo "<input type='submit' name='submit' value='Go'>";
    echo "</form>";
}

$month_arr["Jan"]=31;
$month_arr["Feb"]="28 days, if leap year 29";
$month_arr["Mar"]=31;
$month_arr["Apr"]=30;
$month_arr["May"]=31;
$month_arr["Jun"]=30;
$month_arr["Jul"]=31;
$month_arr["Aug"]=31;
$month_arr["Sep"]=30;
$month_arr["Oct"]=31;
$month_arr["Nov"]=30;
$month_arr["Dec"]=31;

if(!isset($_POST["submit"])) {
    echo "<h1>Days in a Month Again</h1>";
    echo "Please choose a month: <br/>";
    makeform('month',$month_arr);
}else{
    $select=$_POST['month'];
    echo "There are $month_arr[$select] days in $select";
}