<?php 
namespace Source\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class classEmail
{

    public function submitEmail()
    {

        $mail = new PHPMailer(true);

        try {

            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'meuemail@gmail.com';                     // SMTP username
            $mail->Password   = 'minhasenha';
            $mail->SMTPOptions = array(
                        'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                        )
            );
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            $mail->setFrom('meuemail@gmail.com');
            $mail->addAddress('destino@gmail.com');

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Testando meu envio de e-mail';
            $mail->Body    = '<strong>Ola, Tamires</strong><br> E-mail automatico, nao responda!';
            $mail->AltBody = 'Ola, Tamires. Esse e meu e-mail teste!';

            if($mail->send()){
                return 'E-mail enviado com sucesso!';
            }else{
                return 'Fail no envio do E-mail!';
            }
            
        } catch (Exception $e) {

            return "Erro ao enviar mensagem.";
            
        }
    }



}


?> 
