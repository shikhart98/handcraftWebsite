<?php
session_start();
if(isset($_POST['submit']))
{
    include 'dbconnection.php';
    //Getting values from user form
    $emailAddress = $_POST['emailAddress'];
    $userPassword = $_POST['userPassword'];

    //check empty fields
    if(empty($emailAddress) || empty($userPassword))
    {
        header('Location:../login.php?login=emptyfields');
        exit();
    }
    else
    {
            //filter email address
            if(!filter_var($emailAddress,FILTER_VALIDATE_EMAIL))
            {
                header('Location:../login.php?login=invalidemail');
                exit();
            }
            else
            {
                // fire up query to check whether it's an registered user or not
                $stmt = "select * from users where email = '$emailAddress';";
                $query = mysqli_query($conn,$stmt);
                $result = mysqli_num_rows($query);

                if($result>0)// password verify
                {
                  $row = mysqli_fetch_assoc($query);
                  $hashedPwd = password_verify($userPassword,$row['password']);
                  if ($hashedPwd == false)
                  {
                    header('Location:../login.php?login=passwordmissmatch&emailAddress='.$emailAddress.'');
                    exit();
                  }
                  elseif ($hashedPwd == true)
                  {
                    $_SESSION['EmailID'] = $row['EmailID'];
                    $_SESSION['FirstName'] = $row['FirstName'];
                    $_SESSION['LastName'] = $row['LastName'];
                    $_SESSION['UserID'] = $row['UserID'];
                    header('Location:../index.php');
                    exit();
                  }
                }
                else
                {
                  header('Location:../login.php?login=norecord');
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
