<!DOCTYPE>
<html>
<head>
    <title>Ways to travel</title>
</head>
<body>
<?php
if(!isset($_POST['submit'])){
?>
Travel takes many forms, whether across town, across the country,
or around the world. Here is a list of some common modes of the transportation
<ul>
    <?php
        $transport=array("Automobile","Jet","Ferry","Subway");
        foreach($transport as $t) {
            echo "<li> $t </li>";
        }
    ?>
</ul>

<form method="post" action="array.php">
    <label for="string"> Please add other way of travelling, separated by comas: </label>
    <input type='text' name='string'> <br/><br/>

    <?php
    //add into new array
    foreach($transport as $t) {
        echo "<input type='hidden' name='transport[]' value='$t'>";
    }
    ?>
    <input type='submit' name='submit' value='Go'>
</form>
<?php
}else {
    $transport = $_POST['transport'];
    $input = $_POST['string'];
    $input = explode(",", $input);
    $transport = array_merge($transport, $input);
    echo "Here is the list with new addition:";
    echo "<ul>";
    foreach ($transport as $t) {
        echo "<li>".trim($t)." </li>";
    }
    echo "</ul>";

?>

<form method="post" action="array.php">
    <label for="string"> Add more?</label>
    <input type="text" name="string">

    <?php
    //add into new array
    foreach($transport as $t) {
        echo "<input type='hidden' name='transport[]' value='$t'>";
    }
    ?>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
}
?>
</body>
</html>
<?php

?>
