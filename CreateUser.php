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
            $query = "  INSERT INTO Users (user_id) 
                        VALUES ($userid)";
            
            if($myqsli->query($query)===TRUE) echo "<h3> Created user $userid successfully!</h3>";
            else echo "ERROR: ".$mysqli->error;
        }
    echo '</div></center>';
    $myqsli->close();
?>