if($myqsli->query($query)===TRUE) echo " <h3>Created user $userid's post successfully!</h3>";
                else echo "<h3>ERROR: ".$database->error."</h3>";