<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php?</title>
</head>
<body>

    <?php
    $conn = new mysqli("localhost", "root", "0209", "site");
    // $db = new mysqli("host", "login", "password", "name_db");


    $query = "desc users";
    $result = $conn->query($query);
    $masss = $result->num_rows;

        for ($j = 0; $j < $masss; $j++) {
            $result->data_seek($j);
            $mass = $result->fetch_array(MYSQLI_NUM);
            echo $mass[0]." ".$mass[1]."<br>";
        }


    //     $field1 = $_POST['field1'];

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
    ?> <div id="form3">   <?php
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
    </div>

</body>

</html>