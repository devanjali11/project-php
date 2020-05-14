 <?php
               
               if(isset($_POST['UserName']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Gender'])&& isset($_POST['PhoneNumber'])&& isset($_POST['PassWord'])&& isset($_POST['confirm PassWord']))
               {
                 $connection = mysqli_connect("localhost","root","","minorproject");
                  $un=$_POST['UserName'];
                  $fn=$_POST['FirstName'];
                  $ln=$_POST['LastName'];
                  $g=$_POST['Gender'];
                  $p=$_POST['PhoneNumber'];
                  $pass=$_POST['PassWord'];
                  $cp=$_POST['confirm PassWord'];
                  
                  $q="insert into signup values ('{$un}','{$fn}','{$ln}','{$g}',{$p},'{$pass}','{$cp}')";
                 
                  $result=$connection->query($q, MYSQLI_STORE_RESULT);
                  if($result)
                    {
                        echo "<span style=\"color: green\">User  Sucessfully Inserted</span>";
                        
                    }
                    else
                    {
                        echo "<span style=\"color: red\">Error in Insertion</span>";
                    }
                  
               }
               else
               {
                //echo "Please Enter all the Fields Value";
               }
               ?>