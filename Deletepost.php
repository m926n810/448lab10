<?php 
echo '<head>
    <title>Message Board system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center"><center>
    <h1>Message Board system</h1>
    <h3>Deleted post(s):</h3>';
        $database = new mysqli("mysql.eecs.ku.edu","m926n810","Yi7saine","m926n810");
        if ($database->connect_error) {
            die("Connect failed: ".$myqsli->connect_error);
        }else{
            $result = $database->query("SELECT * FROM Post");
            for($i=1;$i<=$result->num_rows;$i++){
                $delete = $_POST["$i"];
                if($delete == $i){
                    $query ="DELETE FROM Post WHERE post_id = '$delete'";
                    if($database->query($query)===TRUE) echo "<h5>$i</h5>";
                    else echo "<h5>Error: ???</h5>";
                }
            }
            $database->close();
        }
        echo '</center></div></body></html>';
?>