<?php
session_start();
if(isset($_POST['submit']))
{
    include 'Connection.php';
    //Getting values from user form
    $emailAddress = $_POST['emailAddress'];
    $sellerPassword = $_POST['sellerPassword'];

    //check empty fields
    if(empty($emailAddress) || empty($sellerPassword))
    {
        header('Location:Login.php?login=emptyfields');
        exit();
    }
    else
    {
            //filter email address
            if(filter_var($emailAddress,FILTER_VALIDATE_EMAIL))
            {
                header('Location:Login.php?login=invalidemail');
                exit();
            }
            else
            {
                // fire up query to check whether it's an registered user or not
                $stmt = "select * from sellers where emailId = '$emailAddress';";
                $query = mysqli_query($con,$stmt);
                $result = mysqli_num_rows($query);

                if($result>0)// password verify
                {
                  $row = mysqli_fetch_assoc($query);
                  $hashedPwd = password_verify($sellerPassword,$row['sellerPwd']);
                  if ($hashedPwd == false)
                  {
                    header('Location:Login.php?login=passwordmissmatch&emailAddress='.$emailAddress.'');
                    exit();
                  }
                  elseif ($hashedPwd == true)
                  {
                    $_SESSION['Seller_ID'] = $row['emailId'];
                    header('Location:index.php');
                    exit();
                  }
                }
                else
                {
                  header('Location:Login.php?login=norecord');
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
