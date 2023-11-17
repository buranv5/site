<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New record</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="backgroung">
    <form action="newRecord.php" method="POST">
        <input name="name" type="text" placeholder="Name" require>
        <br>        
        <select name="countrycode" require>
            <?php
                $conn = new mysqli("localhost", "root", "0209", "world");
                $query = "select code from country";
                $result = $conn->query($query);
                
                while ($row = $result->fetch_row()) {
                    echo "<option value=$row[0]>$row[0]</option>";
                }
            ?>
        </select>
        <br>
        <input name="district" type="text" placeholder="District" require>
        <br>
        <input name="population" type="number" placeholder="Population" require>
        <br>
        <input type="submit">
    </form>

    <?php
        ini_set('display_errors', 1);
        try{
            if(isset($_POST["name"])){  
                // $name = $_POST["name"];
                // $countryCode = $_POST["country code"];
                // $district = $_POST["district"];
                // $population = $_POST["population"];     

                $conn = new mysqli("localhost", "root", "0209", "world");
                //                          insert into city values (0, 'n', 'AFG', 'afg', 7);
                $query = "insert into city values (0, '".$_POST["name"]."', '".$_POST["countrycode"]."', '".$_POST["district"]."', ".$_POST["population"].");";
                $result = $conn->query($query);

                //echo "<script type=".'"'."text/javascript".'"'.">window.open('/index.php', '_self');</script>";
            }
        }catch(Exception $e){
            echo $e->GetMessage();
        }
    ?> 
</body>