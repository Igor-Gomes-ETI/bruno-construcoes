<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  * 
  * 
  * // Replace contact@example.com with your real receiving email address
  * $receiving_email_address = 'contato@igorgomes.eti.br';
  * 
  * if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  *   include( $php_email_form );
  * } else {
  *   die( 'Não foi possível carregar a biblioteca "PHP Email Form"!');
  * }
  * 
  * $contact = new PHP_Email_Form;
  * $contact->ajax = true;
  * 
  * $contact->to = $receiving_email_address;
  * $contact->from_name = $_POST['name'];
  * $contact->from_email = $_POST['email'];
  * $contact->subject = $_POST['subject'];
  * 
  * // Remova o comentário abaixo do código se quiser usar SMTP para enviar e-mails. Você precisa inserir suas credenciais SMTP corretas
  * ----
  * $contact->smtp = array(
  *   'host' => 'example.com',
  *   'username' => 'example',
  *   'password' => 'pass',
  *   'port' => '587'
  * );
  * ----
  * 
  * $contact->add_message( $_POST['name'], 'From');
  * $contact->add_message( $_POST['email'], 'Email');
  * $contact->add_message( $_POST['message'], 'Message', 10);
  * 
  * echo $contact->send();
  */

  ////////////////////////////////////////////

  $name = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['subject'];
  $message = $_POST['message'];
  //Remetente-> esse email tem que ser valido do dominio (uma conta de email do seu dominio)
  $email_remetente = 'contato@igorgomes.eti.br';

  //Configurações do email
  $email_destinatario = 'igorgomesads@gmail.com'; //pode ser qualquer email que receberá a mensagem
  $email_reply = $email;
  $email_assunto = "$pagina - Bruno Alves Construções"; //esse será o assunto da mensagem

  //Montando o corpo da mensagem
  $email_conteudo = "Nome: $name \n";
  $email_conteudo .= "E-mail: $email \n";
  $email_conteudo .= "Assunto: $assunto \n";
  $email_conteudo .= "Mensagem: \n$message \n";

  //seta os headers
  $email_readers = implode(
      "\n",
      array(
          "From: $email_remetente",
          "Reply-To: $email",
          "Return-path: $email_remetente",
          "MIME-Version: 1.0",
          "X-Peiority: 3",
          "Content-Type: text/html; charset=UTF-8"
      )
  );

  //enviando email
  if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_readers)) {
      echo    "<script language='javascript' type='text/javascript'>
                  alert('Obigrado {$name}, Sua mensagem foi enviada.');
              </script>";
  } else {
      echo "<script language='javascript' type='text/javascript'>
              alert('{$name}, houve um erro no envio da mensagem.');
          </script>";
  }
?>
