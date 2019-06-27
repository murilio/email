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


  $protocolo = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ?'http':'https';
  $host = $_SERVER['HTTP_HOST'];
  $raiz = $protocolo.'://'.$host;

  if(mail($para, $assunto, $message, $headers)){
    echo "enviado com sucesso";
    header('location:'. $raiz);
  }else{
    echo "Ocorreu um erro";
  }

?>
