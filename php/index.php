<?php
    if(isset($_POST['contact-us'])){
     
                
        require_once'mail.php';
        $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
        $mail->addAddress($_POST['email-contact-us']); 
        $mail->Subject = 'تم أرسال الرسالة بنجاح';
        $mail->Body    = 'تم أرسال الرسالة التي أرسلتها بنجاح';
        // move_uploaded_file($_FILES['img']['tmp_name'],"files/".$_FILES['img']['name']);
        // $mail->addAttachment('localhost/app/img.png','img.png'); 
        // $mail->addAttachment("files/".$_FILES['img']['name']);

        $mail->send();
        echo "العملية صارت (ياتزيه)";
        $mail->setFrom('em.industry1@gmail.com', 'EM Industry');
        $mail->addAddress('eesamousa2000@gmail.com'); 
        $mail->Subject = 'from : '.$_POST['email-contact-us'];
        $mail->Body    = 'name : '.$_POST['name-contact-us'].'<br>'.$_POST['text-contact-us'];
        $mail->send();
        header('refresh:5; url="../index.html"');
        }
    
    
    
    ?>