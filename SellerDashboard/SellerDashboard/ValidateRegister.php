<?php

if(isset($_POST['submit']))
{   
    include 'Connection.php';
    //Getting values from user form
    $firstName    = $_POST['firstName'];
    $lastName     = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $userPassword = $_POST['userPassword'];
    $orgName = $_POST['orgName'];
    
    //check empty fields
    if(empty($firstName) || empty($emailAddress) || empty($userPassword) || empty($orgName))
    {
        header('Location:Signup.php?signup=emptyfields');
        exit();
    }
    else
    {
        //if input fields not empty and to check numbers in first name and last name
        if(!preg_match("/^[a-zA-Z]*$/",$firstName) || !preg_match("/^[a-zA-Z]*$/",$lastName))
        {
            header('Location:Signup.php?signup=charactererror');
            exit();
        }

        else
        {
            //validating email address
            if(!filter_var($emailAddress,FILTER_VALIDATE_EMAIL))
            {
                header('Location:Signup.php?signup=invalidemail');
                exit();
            }
            else
            {
                // fire up quert 
                $hashedPwd = password_hash($userPassword,PASSWORD_DEFAULT);

                $inputQuery = "Insert into sellers(f_name,l_name,emailId,sellerPwd, org_name) values('$firstName','$lastName','$emailAddress','$hashedPwd','$orgName');";

         
                if(mysqli_query($con,$inputQuery)){
                    header('Location:Signup.php?signup=successfull');
                    exit();
                }
                else{
                    header('Location:Signup.php?signup=error');
                    exit();
                }
            }
        }


    }
}

else
{
    echo 'submit not clicked';
}

?>
