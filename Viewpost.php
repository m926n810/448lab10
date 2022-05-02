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
            $userid = $_POST["userid"];
            $query = "SELECT * FROM Post WHERE author_id = '$userid'";

            if($result = $database->query($query)) {
                echo '<table><tr>
                    <th>Post id</th>
                    <th>Content</th>
                    <th>author id</th>
                </tr>
                ';
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>".$row['post_id']."</td>
                    <td>".$row['content']."</td>
                    <td>".$row['author_id']."</td>
                </tr>";
                }
                echo "</table>";
                $result->free();
            }else{
                echo "<h3>This user has no post yet </h3>";
            }
            $database->close();
        }
        echo '</center></div></body></html>';
?>