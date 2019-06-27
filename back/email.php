<?php
  $para ='murilio@sogo.com.br';
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $assunto = "Contato Alfa Group";
  $mensagem = addslashes($_POST['mensagem']);

  $message = "<strong>Mensagem de Contato</strong><br><br>";
  $message .= "<strong> Nome : </strong> $nome <br>";
  $message .= "<strong>E-mail : </strong> $email";
  $message .= "<strong> Mensagem </strong> $mensagem";
  $headers = "Content-type: text/html; charset=utf-8\n";


  if(mail($para, $assunto, $message, $headers)){
    echo "enviado com sucesso";
    header("Location: index.php");
  }else{
    echo "Ocorreu um erro";
  }

?>







<?php
















// if(isset($_POST['email']) && !empty($_POST['email'])){

//     $nome = addslashes($_POST['nome'])
//     $email = addslashes($_POST['email'])
//     $mensagem = addslashes($_POST['mensagem'])

//     $to = "murilio@sogo.com.br";
//     $subject = "Contato Alfa Group";
//     $body = "Nome: ".$nome. "\r\n"
//             "Email: ".$email. "\r\n"
//             "Mensagem: ".$mensagem. "\n"

    // from=email que pertence ao domínio
    // $header = "From: "."\r\n"
    //             ."Reply-To:".$email."\r\n"
    //             ."X=Mailer:PHP/".phpversion();

    // mail($to, $subject, $body, $header)


// }

?>