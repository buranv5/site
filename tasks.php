<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body style="background-color: black; color: white;">
            <?php

                $ID = $_POST["ID"];
                
                $conn = new mysqli("localhost", "root", "0209", "world");
                $query = "select * from city where ID=$ID";
                $result = $conn->query($query);
                $masss = $result->num_rows;     
                
                while ($row = $result->fetch_row()) {
                    for ($i = 0; $i < count($row); $i++) {
                        echo"<p>$row[$i]</p>";
                    }
                }
            ?>
            
        <form enctype="multipart/formdata" method="post" action="profile.php">
                <p><input type="file" name="file"></p>
                <p><input type="submit" value="Отправть"><p>
        </form>
    </body>
</html>