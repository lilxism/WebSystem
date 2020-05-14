<!DOCTYPE>
<html>
<head>
    <title> User registration </title>
</head>
<body>
<?php
$browsers=array("Firefox","Chrome","Internet Explorer","Safari","Opera","Other");
$speeds=array("Unknown","DSL","T1","Cable","Dialup","Other");
$os=array("Windows","Linux","Macintosh","Other");
class Select{
    private $name; //name of select field (String)
    private $value; //array of options (array)

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        if(is_array($value)) {
            $this->value = $value;
        }else{
            die("Error: value is not array");
        }
    }

    public function makeOptions($value){
        foreach($value as $v){
            echo "<option value='$v'> $v </option>";
        }
    }

    public function makeSelect(){
        echo "<select name='".$this->getName()."'>";
        echo "<option value='No Response'> -- Select One --</option>";
        $this->makeOptions($this->getValue());
        echo "<select/>";
    }


}

if(!isset($_POST['submit'])){
    ?>
    <h2> User registration form </h2>
    * Indicates required field. <br/>
    <form method="post" action="class.php">
        <label for="name"> Name*: </label>
        <input type="text" name="name"> <br/><br/>
        <label for="username"> Username*: </label>
        <input type="text" name="username"> <br/><br/>
        <label for="email">Email*: </label>
        <input type="text" name="email"> <br/><br/>
        <h3>Work Access</h3>
        Primary Browser:
        <?php
        $browser=new Select();
        $browser->setName('w_browser');
        $browser->setValue($browsers);
        $browser->makeSelect();
        unset($browser);
        ?>
        <br/><br/>
        Connection Speed:
        <?php
        $conn=new Select();
        $conn->setName('w_conn');
        $conn->setValue($speeds);
        $conn->makeSelect();
        unset($conn);
        ?>
        <br/><br/>
        Operating System:
        <?php
        $ops=new Select();
        $ops->setName('w_os');
        $ops->setValue($os);
        $ops->makeSelect();
        unset($ops);
        ?>
        <h3>Home Access</h3>
        Primary Browser:
        <?php
        $browser=new Select();
        $browser->setName('h_browser');
        $browser->setValue($browsers);
        $browser->makeSelect();
        unset($browser);
        ?>
        <br/><br/>
        Connection Speed:
        <?php
        $conn=new Select();
        $conn->setName('h_conn');
        $conn->setValue($speeds);
        $conn->makeSelect();
        unset($conn);
        ?>
        <br/><br/>
        Operating System:
        <?php
        $ops=new Select();
        $ops->setName('h_os');
        $ops->setValue($os);
        $ops->makeSelect();
        unset($ops);
        ?>
        <input type="submit" name="submit" value="Go">
    </form>
    <?php
}else{
    if(empty($_POST['name'])){
        die("Error: Please input name. <br/> <br/>
            <input type='submit' name='back' value='Back to form'
            onclick='self.location=\"class.php\"'</body></html>");
    }else {
        if (preg_match("/^[a-zA-Z]+$/", $_POST['name'])) {
            $name = $_POST['name'];
        } else {
            die("Error: Invalid name input. <br/> </br>
            <input type='submit' name='back' value='Back to form'
            onclick='self.location=\"class.php\"'</body></html>");
        }
    }
    if(empty($_POST['username'])){
        die("Error: Please input username. <br/> <br/>
            <input type='submit' name='back' value='Back to form'
            onclick='self.location=\"class.php\"'</body></html>");
    }else {
        $username = $_POST['username'];
    }
    if(empty($_POST['email'])){
        die("Error: Please input email. <br/> <br/>
            <input type='submit' name='back' value='Back to form'
            onclick='self.location=\"class.php\"'</body></html>");
    }else {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            die("Error: Please email invalid. <br/> <br/>
            <input type='submit' name='back' value='Back to form'
            onclick='self.location=\"class.php\"'</body></html>");
        }
    }
    $w_browser=$_POST['w_browser'];
    $h_browser=$_POST['h_browser'];
    $w_conn=$_POST['w_conn'];
    $h_conn=$_POST['h_conn'];
    $w_os=$_POST['w_os'];
    $h_os=$_POST['h_os'];

    echo "name: $name <br/>";
    echo "username: $username <br/>";
    echo "email: $email <br/>";
    echo "work browser: $w_browser <br/>";
    echo "work speed: $w_conn <br/>";
    echo "work os: $w_os <br/>";
    echo "home browser: $h_browser <br/>";
    echo "home speed: $h_conn <br/>";
    echo "home os: $h_os <br/>";


}
?>
</body>
</html>
