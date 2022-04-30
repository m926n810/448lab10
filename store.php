$query = "INSERT INTO Post (post_id, content, author_id) VALUES (NULL, '$post','$userid')";


if($validate){
                if($myqsli->query($query)===TRUE) echo " <h3>Created user $userid's post successfully!</h3>";
                else echo "<h3>ERROR: ".$database->error."</h3>";
            }else echo "<h3>User $userid does not exist in the database!</h3>";

            if($row["user_id"] == $userid) $validate = TRUE;