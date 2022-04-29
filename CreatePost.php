<?php 
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            $post=$_POST["post"];

            $validate_user = $mysqli->query("SELECT user_id FROM Users WHERE user_id = '$userid'");
            
            $query = "  INSERT INTO Post (content, author_id) 
                        VALUES ('$post','$userid')";
            if($validate_user->num_rows == 0) echo "<h3>User $userid does not exist in the database!</h3>";
            else{
                if($myqsli->query($query)===TRUE) echo " <h3>Created user $userid's post successfully!</h3>";
                else echo "<h3>ERROR: ".$mysqli->error."</h3>";
            }
            $myqsli->close();
        }
        echo '</div></center></body></html>';
?>