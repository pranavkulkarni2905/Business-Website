<?php
 use PHPMailer\PHPMailer\PHPMailer;

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "contact.webmax2022@gmail.com"; //enter you email address
        $mail->Password = 'webmax2022'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

    
                //Email Settings
                $mail->isHTML(true);
                $mail->setFrom("contact.webmax2022@gmail.com","WebMax Solutions");
                $mail->addAddress("contact.webmax2022@gmail.com"); //enter you email address
                $mail->Subject = ("New Message On Contact Form:  ".$subject);
               
                $mail->Body = ($message);
                if ($mail->send()) {
                    echo "<script type='text/javascript'>
                alert('Your Message Has Been Sent Successfully. We Will Contact you soon.');
            window.location.replace('index.html');
       
        </script>";
                } else {
                    echo "<script type='text/javascript'>
                    alert('Something Went Wrong..Please try again later.');
                window.location.replace('index.html');
           
            </script>";
                }

          


}
    
?>