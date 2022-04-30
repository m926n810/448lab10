<?php 
echo '<head>
    <title>Message Board system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center"><center>';
        $myqsli = new mysqli("mysql.eecs.ku.edu","m926n810","Yi7saine","m926n810");
        if ($mysqli->connect_error) {
            die("Connect failed: ".$myqsli->connect_error);
        }else{
            $userid = $_POST["user_id"];
            $post = $_POST["post"];

            $validate_user = "SELECT user_id FROM Users WHERE user_id = '$userid'";
            $query = "  INSERT INTO Post (post_id, content, author_id) 
                        VALUES (NULL, '$post','$userid')";

            if($mysqli->query($validate_user)===TRUE) {
                if($myqsli->query($query)===TRUE) echo " <h3>Created user $userid's post successfully!</h3>";
                else echo "<h3>ERROR: ".$mysqli->error."</h3>";
                $validate_result->free();
            }else echo "<h3>User $userid does not exist in the database!</h3>";
            $myqsli->close();
        }
        echo '</div></center></body></html>';
?>