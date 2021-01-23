<?php

if(isset($_POST['submit']))
{   
    include 'dbconnection.php';
    //Getting values from user form
    $firstName    = $_POST['firstName'];
    $lastName     = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $userPassword = $_POST['userPassword'];
    
    //check empty fields
    if(empty($firstName) || empty($lastName) || empty($emailAddress) || empty($userPassword))
    {
        header('Location:../signup.php?signup=emptyfields');
        exit();
    }
    else
    {
        //if input fields not empty and to check numbers in first name and last name
        if(!preg_match("/^[a-zA-Z]*$/",$firstName) || !preg_match("/^[a-zA-Z]*$/",$lastName))
        {
            header('Location:../signup.php?signup=charactererror');
            exit();
        }

        else
        {
            //validating email address
            if(!filter_var($emailAddress,FILTER_VALIDATE_EMAIL))
            {
                header('Location:../signup.php?signup=invalidemail');
                exit();
            }
            else
            {
                // fire up quert 
                $hashedPwd = password_hash($userPassword,PASSWORD_DEFAULT);
                $username = $firstName . $lastName;
                $inputQuery = "Insert into users(username, email, password, full_name) values('$username','$emailAddress','$hashedPwd', '$username');";
                
                $_SESSION['userName'] = $username;
                $_SESSION['userEmail'] = $emailAddress;
                $_SESSION['fullName'] = $username;
                $queryRun = mysqli_query($conn,$inputQuery);

                header('Location:../signup.php?signup=successfull');
                exit();
            }
        }


    }
}

else
{
    echo 'submit not clicked';
}

?>
