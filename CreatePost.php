<?php 
echo '<head>
    <title>Message Board system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center"><center>';
        $database = new mysqli("mysql.eecs.ku.edu","m926n810","Yi7saine","m926n810");
        if ($mysqli->connect_error) {
            die("Connect failed: ".$myqsli->connect_error);
        }else{
            $userid = $_POST["user_id"];
            $post = $_POST["post"];
            $validate = FALSE;

            $validateuser = "SELECT user_id FROM Users";

            if($result = $database->query($validateuser)) {
                while($row = $result->fetch_assoc()){
                   echo "<h3>".$row["user_id"]."</h3>";
                }
                $result->free();
            }
            $database->close();
        }
        echo '</div></center></body></html>';
?>