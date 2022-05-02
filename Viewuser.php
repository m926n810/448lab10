<?php 
echo '<head>
    <title>Message Board system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center"><center>
    <h1>Message Board system</h1>
    <h3>User list: </h3>';
        $database = new mysqli("mysql.eecs.ku.edu","m926n810","Yi7saine","m926n810");
        if ($database->connect_error) {
            die("Connect failed: ".$myqsli->connect_error);
        }else{
            $query = "SELECT * FROM Users";

            if($result = $database->query($query)) {
                echo '<table><tr>
                    <th>User id</th>
                </tr>
                ';
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>".$row['user_id']."</td>
                </tr>";
                }
                echo "</table>";
                $result->free();
            }else{
                echo "<h3>We have no user yet :(</h3>";
            }
            $database->close();
        }
        echo '</center></div></body></html>';
?>