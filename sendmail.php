<?php
if(isset($_POST))
{
   
        $company_name= $_POST['company_name'];
        $email_address= $_POST['email_address'];
        $phone_no = $_POST['phone_no'];
        $emp_strength = $_POST['emp_strength'];
        $msg = $_POST['your_message'];

        $to      = 'varun.patidar@physiocell.com';
        //$to      = 'pqvivek@gmail.com';
        $subject = 'Physio Cell Corporate';
        $message  = 'Company Name : '.$company_name."\r\n";
        $message .= 'Email  : '.$email_address."\r\n";
        $message .= 'Mobile : '.$phone_no."\r\n";
        $message .= 'Employee Strength : '.$emp_strength."\r\n";
     
        $message .= 'Message : '.$msg;    
        $headers = 'From: noreply@physiocell.com' . "\r\n" .
            'Reply-To: noreply@physiocell.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        if(mail($to, $subject, $message, $headers))
        {
                echo json_encode(array('success'=>TRUE));
        }else
        {
            echo json_encode(array('success'=>FALSE));
        }
        // mail($to,"Harsh Parmar Services", "Thank you for Interest in Harsh Parmar Service! Our Team will Connect you within 24 hours.", $headers);

        }
?>