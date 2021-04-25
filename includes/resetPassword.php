<?php
session_start();
function sendEmail ($to, $firstname, $lastname, $type="reset") {
    if ($type == "reset") {
        $subject = 'Craft Village India: Password Reset';
        $from = 'support@craftvillageindia.com';
        $newPass = substr(md5($to),0,9);
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Hi ' . $firstname . ' ' . $lastname . '!</h1>';
        $message .= '<p style="color:#080;font-size:18px;">You new password for the Craft Village India account is : ' . $newpass . '</p>';
        $message .= '</body></html>';
        
        // Sending email
        if(mail($to, $subject, $message, $headers)) {
            return true;
        } else{
            return false;
        }
    } else if ($type == "success") {
        $subject = 'Craft Village India: Password Reset Successful';
        $from = 'support@craftvillageindia.com';
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Hi ' . $firstname . ' ' . $lastname . '!</h1>';
        $message .= '<p style="color:#080;font-size:18px;">Your pass for the Craft Village India account has been updated successfully!</p>';
        $message .= '</body></html>';
    
        // Sending email
        if(mail($to, $subject, $message, $headers)) {
            return true;
        } else{
            return false;
        }
    }
    
}

if (isset($_POST) && isset($_POST['sendEmail'])) {
    include 'dbconnection.php';
    $email = $_POST['email'];
    if (empty($email)) {
        header('Location:../forgot_password.php?step=1&error=emptyfields');
        exit();
    } else {
        //filter email address
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            header('Location:../forgot_password.php?step=1&error=invalidemail');
            exit();
        } else {
            // fire up query to check whether it's an registered user or not
            $stmt = "select * from users where EmailID = '$email';";
            $query = mysqli_query($conn,$stmt);
            $result = mysqli_num_rows($query);
            if($result>0) {
                $row = mysqli_fetch_assoc($query);
                $newPass = password_hash(substr(md5($email), 0, 9), PASSWORD_DEFAULT);
                if (!sendEmail($email, $row['FirstName'], $row['LastName'])) {
                    header('Location:../forgot_password.php?step=1&error=failedtosendmail');
                    exit();
                } else {
                    $stmt = "update users set UserPwd='$newPass' where EmailID = '$email';";
                    $query = mysqli_query($conn,$stmt);
                    header('Location:../forgot_password.php?step=2');
                    exit();
                }
            } else {
                header('Location:../forgot_password.php?step=1&error=usernotregistered');
                exit();
            }
        }
    }
} else if (isset($_POST) && isset($_POST['reset_pwd'])) {
    include 'dbconnection.php';
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $email = $_POST['email'];
    if (empty($npass)) {
        header('Location:../forgot_password.php?step=2&error=passemptyfields');
        exit();
    } else if (empty($email)) {
        header('Location:../forgot_password.php?step=2&error=emailemptyfields');
        exit();
    } else {
        //filter email address
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            header('Location:../forgot_password.php?step=2&error=invalidemail');
            exit();
        } else {
            // fire up query to check whether it's an registered user or not
            $stmt = "select * from users where EmailID = '$email';";
            $query = mysqli_query($conn,$stmt);
            $result = mysqli_num_rows($query);
            if($result>0) {
                $row = mysqli_fetch_assoc($query);
                $cpass = password_hash($cpass,PASSWORD_DEFAULT);;
                $npass = password_hash($npass,PASSWORD_DEFAULT);
                $stmt = "update users set UserPwd='$npass' where EmailID = '$email' and UserPwd='$cpass';";
                $query = mysqli_query($conn,$stmt);
                sendEmail($email, $row['FirstName'], $row['LastName'], "success");
                header('Location:../forgot_password.php?step=3');
                exit();
            } else {
                header('Location:../forgot_password.php?step=2&error=usernotregistered');
                exit();
            }
        }
     }
}
?>