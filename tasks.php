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

                // for($r = 0; $r<255; $r++){
                //     echo "<button class='colorbutton' style='background-color: rgb($r, $r, $r)'></button>";
                // }
                    
                

                // for($i = 0; $i<255; $i++){
                //     $u = 255-$i;
                //     echo "<button class='colorbutton' style='background-color: rgb($i, 0, $u)'></button>";
                // }
            ?>
    </body>
</html>