<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="backgroung">
    <div> 
        <div id="Autorisation" class="autorisation">
            <h2>Log in</h2>
            <form action="" method="POST">
                <p id="Wrong name" <?php if(intval($incorrectPwd) != 1) echo'hidden="true"';?> >Wrong name</p>
                <p>Name: <input type="text" required name="nameIF"/></p>
                <p id="F*ck you" <?php if(intval($incorrectName) != 1) echo'hidden="true"';?> >Wrong password</p>
                <p>Password: <input type="text" required name="pwdIF"/></p>
                <br>
                <input type="submit" value='Enter'>
                <br>
                <a href="/registration.php">Log up</a>
                <br>
                <br>
                <a href="/tasks.php">Go to tasks</a>
            </form>
        </div>
    <div> 

    <?php    
    echo "<button onclick=".'"'."window.location.href='newRecord.php'".'"'.">Add new record</button><br><br>";

    $userName = $_POST["nameIF"];
    $userPwd = $_POST["pwdIF"];
    $IdToDelete = $_POST["IdToDelete"];


    $incorrectName = true;
    $incorrectPwd = true;
    $conn = new mysqli("localhost", "root", "0209", "world");
    //$conn = new mysqli("host", "login", "password", "name_db");

    if(intval($IdToDelete) != 0){
        // $IdToDelete = intval($IdToDelete);
        $query = "delete from city where ID = $IdToDelete;";
        $result = $conn->query($query);
    }

    if ($userName != "" && !$userPwd == "") {

        if($userName == "admin" && $userPwd == "admin"){ 
            $query = "desc fullycity;";
            $result = $conn->query($query);

            echo"<div style='margin: 2px 5px;'>";
            
            while ($row = $result->fetch_row()) {
                    echo "<input class='center' type='text' value='$row[0]'>  ";
            }     
            echo"</div><br>";
        
            $query = "select * from fullycity;";
            $result = $conn->query($query);   

            while ($row = $result->fetch_row()) {
                    echo"<div style='margin: 2px 5px;'>";
                    for ($i = 0; $i < count($row); $i++) {
                        echo "<input class='center' type='text' value='$row[$i]'>  ";
                }
                echo"</div>";
            }    
        }
        elseif($userName == "admin1" && $userPwd == "admin1"){
            echo "<table  border='1'>";
            $query = "desc fullycity;";
            $result = $conn->query($query);
            
            echo"<tr>";
            
            while ($row = $result->fetch_row()) {
                    echo "<th>$row[0]</th> ";
            }     
                echo"</tr>";
        
            $query = "select * from fullycity;";
            $result = $conn->query($query);
            
            while ($row = $result->fetch_row()) {
                echo"<tr>";
                for ($i = 0; $i < count($row); $i++) {
                    echo "<td>$row[$i]</td>";
                }
                echo "<td><form method='POST' action='tasks.php'><input name='ID' type='text' value='$row[0]' hidden='true'><input type='submit' value='Show details'></form></td>";
                echo "<td><form method='POST' action='index.php'><input name='IdToDelete' type='text' value='$row[0]' hidden='true'><input type='submit' value='Delete record'></form></td>";
                
                echo"</tr>";
            }    
            echo "</table>";
        }
        
    }

    
    ?>

    


<?php

    //$field1 = $_POST['field1'];
    //     $field2 = $_POST['field2'];
    //     echo <<<_END
    // <form align="center" action="index.php" method="post" id="form2">
    // <pre>
    // Name <input type="text" name="name" value="$field1"> 
    // Content <input type="text" name="content" value="$field2">
    // <input type="submit" value="перезапись"> 
    // <input type="hidden" name="Id" value="$Id">
    // <input type="hidden" name="reset" value="yes">
    // <input type="hidden" name="save_field1" value="$field1">
    // <input type="hidden" name="save_field2" value="$field2">
    
    // </pre> </form>
    // _END;
    // } //$_POST['save_field1']) && isset($_POST['save_field2'])
    // if (isset($_POST['reset']) && isset($_POST['Id']) && isset($_POST['name']) && isset($_POST['content'])) {
    //     $name = $conn->real_escape_string($_POST['name']);
    //     $id = $conn->real_escape_string($_POST['Id']);
    //     $content = $conn->real_escape_string($_POST['content']);
    //     // $save_field1 = $conn->real_escape_string($_POST['save_field1']);
    //     //  $save_field2 = $conn->real_escape_string($_POST['save_field2']);
    //     $query = "UPDATE books SET name='$name',content='$content' WHERE Id = $id";
    //     $conn->query($query);
    //     //$conn->query($query);
    //     // $query = "UPDATE books SET value = '$name' where name = '$save_field2'";
    //     // $conn->query($query);
    // }
    // if (
    //     isset($_POST['do']) &&
    //     isset($_POST['name']) &&
    //     isset($_POST['content'])
    // ) {
    //     $name = $conn->real_escape_string($_POST['name']);
    //     $content = $conn->real_escape_string($_POST['content']);
    //     $query = "INSERT INTO books (name, content) VALUES ('$name', '$content')";
    //     try {
    //         $result = $conn->query($query);
    //     } catch (Exception $result) {
    //         echo "Сбой при вставке данных проверьте поля!";
    //     }
    // }
    // function id_exsite($id)
    // {
    //     $query = "SELECT * from books where id = $id";
    //     // $result = $conn->query($query);
    //     return isset($result);
    // }
    // echo <<<_END
    // <form action="index.php" method="post" id="form">
    // <pre>
    // Name <input type="text" name="name" > 
    // Content <input type="text" name="content" >
    // <input type="hidden" name="do" value="yes">
    // <input type="submit" value="запись"> 
    // </pre> </form>
    // _END;
    //     $query = "SELECT * FROM books";
    //     $result = $conn->query($query);
    //     $masss = $result->num_rows;

    //     for ($j = 0; $j < $masss; $j++) {
    //         $result->data_seek($j);
    //         $mass = $result->fetch_array(MYSQLI_NUM);
    //         echo <<<_END
    // <pre>
    // Id $mass[0] 
    // Name $mass[1]
    // Content $mass[2]
    // </pre>
    // <form action="index.php" method="post">
    // <input type="hidden" name="delete" value="yes">
    // <input type="hidden" name="Id" value="$mass[0]">
    // <input type="submit" name="action" value="Удалить запись">
    // <input type="hidden" name="reset" value="yes">
    // <input type="hidden" name="Id" value="$mass[0]">
    // <input type="hidden" name="field1" value="$mass[1]">
    // <input type="hidden" name="field2" value="$mass[2]">
    // <input type="submit" name="action" value="Редактировать">
    // </form> 
    // _END;
    //     }
    //     $result->close();
    //     $conn->close();
    
?>

</body>

</html>