<!DOCTYPE>
<html>
<head>
    <title> Function </title>
</head>
<body>
<h1>The weather?</h1>
<?php
$month_arr=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$wea_arr=array("Sunshine","Clouds","Rain","Hail","Sleet","Snow","Wind","Cold","Heat","Fog","Humidity");
function option_month($month){
    echo "<option value='$month'>".strtoupper($month)."</option>";
}

function checkbox_weather($weather){
    echo "<input type='checkbox' name='weather[]' value='".$weather."'>";
    echo "<label> $weather </label><br/>";
}

function listIt($weather, $other){
    echo "<ul>\n";
    if(is_array($weather)) {
        foreach ($weather as $w) {
            echo "<li> $w </li>";
        }
    }
    if(is_array($other)) {
        foreach ($other as $w) {
            echo "<li> $w </li>";
        }
    }
    echo "</ul>";

}
if(!isset($_POST['submit'])){
?>
<h3>Please enter the information below: </h3>
<form method="post" action="function.php">
    <label for="city">City:</label>
    <input type="text" name="city"> <br/><br/>
    <label for="month">Month:</label>
    <select name="month">
        <?php
        foreach($month_arr as $k){
            option_month($k);
        }
        ?>
    </select>
    <br/><br/>
    <label for="year">Year:</label>
    <input type="text" name="year"> <br/><br/>

    Please choose the kinds of weather you experienced. Choose all that apply.<br/>
    <?php
    foreach($wea_arr as $w){
        checkbox_weather($w);
    }
    ?>
    <br/>
    <label for="other">Anything else? Please list other weather condition in box below. Separated by comas.
    </label>
    <br/>
    <input type="text" name="other"><br/><br/>
    <input type="submit" name="submit" value="Go">
</form>
<?php
}else{
    $city=$_POST['city'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    echo "In $year in the month of $month, you observed the following weather: <br/>";
    if(!empty($_POST['weather'])) {
        $weather = $_POST['weather'];
    }else{
        $weather=NULL;
    }
    if(!empty($_POST['other'])){
        $other=$_POST['other'];
        $other=explode(",",$other);
    }else{
        $other=NULL;
    }
    listIt($weather, $other);
}
?>
</body>
</html>

