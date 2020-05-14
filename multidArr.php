<!DOCTYPE>
<html>
<head>
    <title> Multidimensional array</title>
    <style type="text/css">
        td,th {width:8em; border:1px solid black; padding-left: 4px;}
        th {text-align:center;}
        table{border-collapse:collapse;border:1px solid black;}
    </style>
</head>
<body>
<?php
    $arr=array(
        array("City","Country","Continent"),
        array("Tokyo","Japan","Asia"),
        array("Mexico City","Mexico","North America"),
        array("New York City","USA","North America"),
        array("Mumbai","India","Asia"),
        array("Seoul","Korea","Asia"),
        array("Shanghai","China","Asia"),
        array("Lagos","Nigeria","Africa"),
        array("Buenos Aires","Argentina","South America"),
        array("Cairo","Egypt","Africa"),
        array("London","UK","Europe")
    );
?>
City Table: <br/>
<table>
    <thread>
        <tr>
            <th>
                <?php echo $arr[0][0]; ?>
            </th>
            <th>
                <?php echo $arr[0][1]; ?>
            </th>
            <th>
                <?php echo $arr[0][2]; ?>
            </th>
        </tr>
    </thread>
    <?php
    $num=count($arr);
    for($row=1;$row<$num;$row++){
        echo "<tr>\n";
        foreach($arr[$row] as $t){
            echo "<td>".$t."</td>";
        }
        echo "</tr>\n";
    }
    ?>
</table>
</body>
</html>