<?php 
echo '<head>
    <title>Message Board system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center"><center>';
        $database = new mysqli("mysql.eecs.ku.edu","m926n810","Yi7saine","m926n810");
        if ($database->connect_error) {
            die("Connect failed: ".$myqsli->connect_error);
        }else{
            $userid = $_POST["user_id"];
            $post = $_POST["post"];
            $validate = FALSE;

            $validateuser = "SELECT user_id FROM Users WHERE user_id = '$userid'";
            $query = "INSERT INTO Post (content,author_id) VALUES ('$post','$userid')";

            if($result = $database->query($validateuser)) {
                while($row = $result->fetch_assoc()){
                    if($row["user_id"] == $userid) $validate = TRUE;
                }
                $result->free();
            }

            if($validate){
                if($database->query($query)===TRUE) echo " <h3>Created user $userid's post successfully!</h3>";
                else echo "<h3>ERROR: ".$database->error."</h3>";
            }else echo "<h3>User $userid does not exist in the database!</h3>";

            $database->close();
        }
        echo '</div></center></body></html>';
?>