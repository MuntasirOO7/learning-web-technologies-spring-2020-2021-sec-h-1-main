<?php

    session_start();
    
    if(isset($_POST['submit']))
    {
        
        

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "" || $password == "")
        {
            echo "Null Submission";
        }
        else
        {
            if (strlen($username)<3) 
                {
                    echo "UserName must contain at least two (2) characters";           
                }
            elseif (strlen($password)<8)

                {

                    echo "Password must not be less than eight(8) characters";
                }
            

            else
            {
                    if (ord($username >= 97 && ord($username) <= 122) || (ord($username) >= 65 && ord($username) <= 90) || (ord($username) >= 48 && ord($username) <= 57) || ord($username == 39) || ord($username == 45) || ord($username == 95)) 

                    {
                        echo "<i>Submission Succefull</i><br>";
                        header('location: Login.html');
                    }

                    else
                    {
                        echo " User Name can contain alpha numeric characters, period,dash or underscore only";
                    }
            }
                
        }
    }
?>