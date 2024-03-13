<?php
include "../vendor/autoload.php";

        if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'send'){

            $createDate = date('Y-m-d H:i:s');


            $contactEmail = filter_var($_POST['contactEmail'], FILTER_SANITIZE_EMAIL);
            if(filter_var($contactEmail, FILTER_VALIDATE_EMAIL)){

            echo $contactName = filter_var($_REQUEST['contactName'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
            $contactEmail = filter_var($_REQUEST['contactEmail'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
            $contactMobile = filter_var($_REQUEST['contactMobile'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
            $contactSubject = filter_var($_REQUEST['contactSubject'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
            $contactMessage = filter_var($_REQUEST['contactMessage'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

                $message_body = "";
                $message = '
                <table width="80%" class="tbl" cellpadding="3">
                    <tr>
                        <td ><strong>&nbsp;1. Account Holder Name </strong></td>
                        <td>:</td>
                        <td>'.$contactName.'</td>
                    </tr>
                    <tr>
                        <td><strong>&nbsp;3. Email Address</strong></td>
                        <td>:</td>
                        <td>'.$contactEmail.'</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>&nbsp;4. Mobile No. </strong></td>
                        <td valign="top">:</td>
                        <td>'.$contactMobile.'</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>&nbsp;5. Transaction type </strong></td>
                        <td valign="top">:</td>
                        <td>'.$contactSubject.'</td>
                    </tr>
                    <tr>
                        <td><strong>&nbsp;6. Complaint Description </strong></td>
                        <td>:</td>
                        <td>'.$contactMessage.'</td>
                    </tr>
                    ';


                    $message .= '
                    </table>';

                $message_body .= 'Complaint has been submitted by  <strong> '.$contactName.'</strong>. <br />Information is detailed below :<br />'.$message;


                $mail = new PHPMailer();

                $mail->SMTPDebug = 2;       // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'mail.abhipatel.ml';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = "contact@abhipatel.ml";                 // SMTP username
                $mail->Password = 'ufc@2810';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                   // TCP port to connect to

                $mail->setFrom("contact@abhipatel.ml");
                $mail->addAddress("contact@abhipatel.ml");     // Add a recipient
                //$mail->addCC("jvdave@aacbl.in", SITE_TITLE);     // Add a recipient
                //$mail->addCC("info@aacbl.in", SITE_TITLE);     // Add a recipient
                $mail->addReplyTo($contactEmail, $contactName);     // Add a recipient

                //$mail->addBCC('suport@aacbl.in');

                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = "Contact- ".$contactName;
                $mail->Body    = $message_body;
                $mail->AltBody = $message_body;

               if(!$mail->send()) {
                    $response['status'] = 'Error';
                    $response['msg'] = 'Error in sending email.';
                }else {
                    $response['status'] = 'Success';
                    $response['msg'] = 'Please be informed that we have registered your complaint for the fraudulent transactions and the complaint number for the same is <span class="text-dark">'.$FcomplaintID.'</span> <br>Please keep noted the for future reference..';
                }
            }else{
                $response['status'] = 'Error';
                $response['msg'] = 'Security Error.';
        }
    }
        print(json_encode($response));
?>
