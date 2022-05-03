<?php 
echo '<head>
    <title>Message Board system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center"><center>
    <h1>Message Board system</h1>
    <h3>Contents list: </h3>';
        $database = new mysqli("mysql.eecs.ku.edu","m926n810","Yi7saine","m926n810");
        if ($database->connect_error) {
            die("Connect failed: ".$myqsli->connect_error);
        }else{
            $delete1 = $_POST["1"];
            $delete2 = $_POST["2"];
            echo $delete1. $delete2;
            $database->close();
        }
        echo '</center></div></body></html>';
?>