<!DOCTYPE>
<html>
<head>
<title> Simple form</title>
</head>
<body>
<?php
if(!isset($_POST['submit'])){
?>
<form method="post" action="form.php">
    <label for="day">Please select a day:  </label>
    <select name="day">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
}else {
    $selected = $_POST['day'];
    if ($selected == "Monday") {
        echo "Laugh on Monday, laugh for danger.";
    } else if ($selected == "Tuesday") {
        echo "Laugh on Tuesday, kiss a stranger.";
    } else if ($selected == "Wednesday") {
        echo "Laugh on Wednesday, laugh for a letter.";
    } else if ($selected == "Thursday") {
        echo "Laugh on Thursday, something better.";
    } else if ($selected == "Friday") {
        echo "Laugh on Friday, laugh for sorrow.";
    } else if ($selected == "Saturday") {
        echo "Laugh on Tuesday, joy tomorrow.";
    } else {
        echo "No information.";
    }
}

?>
</body>
</html>