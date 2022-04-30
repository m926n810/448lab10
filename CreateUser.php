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
            $query = "  INSERT INTO Users (user_id) 
                        VALUES ('$userid')";
            
            if($myqsli->query($query)===TRUE) echo "<h3> Created user $userid successfully!</h3>";
            else echo "<h3>ERROR: ".$mysqli->error."</h3>";
            $myqsli->close();
        }
    echo '</div></center></body></html>';
?>