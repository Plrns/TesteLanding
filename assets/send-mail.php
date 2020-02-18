<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Caminho da biblioteca PHPMailer
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';

// Instância do objeto PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Configura para envio de e-mails usando SMTP
$mail->isSMTP();

// Servidor SMTP
$mail->Host = 'smtp.gmail.com';

// Usar autenticação SMTP
$mail->SMTPAuth = true;

// Usuário da conta
$mail->Username = 'pedro.nunes1432@gmail.com';

// Senha da conta
$mail->Password = '3589761542';

// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';

// Porta do servidor SMTP
$mail->Port = 465;

// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);

// Email do Remetente
$mail->From = 'pedro.nunes1432@gmail.com';

// Nome do Remetente
$mail->FromName = 'Pedro';

// Endereço do e-mail do destinatário
$mail->addAddress($email);
$mail->addAddress('rh@tinpix.com.br');

// Assunto do e-mail
$mail->Subject = 'Confirmacao do sorteio - Teste landing realizado por Pedro Lucas';

// Mensagem que vai no corpo do e-mail
$mail->Body = "
<html>
<head>
<meta charset='UTF-8'>
</head>
<body>
<img src='http://localhost:80/assets/img/logo.png' alt='logo-empresa'>
<h1 style='text-align:center'>Obrigado pela inscrição!</h1>
<div style='margin:0px auto; width:60%'>
<p style='text-align:justify'>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de Conteúdo aqui, conteúdo aqui, tornando-o texto legível. Muitas ferramentas de publicação electrónica e editores de páginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissão, e uma pesquisa por lorem ipsum irá encontrar muitos websites ainda na sua infância. Várias versões têm evoluído ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).</p><br>
</div>
<div style='margin:0px auto; width:30%;'>
<span style='text-align:center; font-weight:bold'>Nome: </span>$nome<br>
<span style='text-align:center; font-weight:bold'>Email: </span>$email<br>
<span style='text-align:center; font-weight:bold'>Telefone: </span>$telefone<br>
</div>

<div style='margin:0px auto; width:13%'>
<a href='http://localhost:80'><button style='margin-top:30px; background-color:dodgerblue; border:none; color:white;border-radius:5px; width:130px; height:30px'>VOLTAR AO SITE</button></a>
</div>
</body>
</html>";

// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !<br>';
    echo('Voltar ao site<br><br>');
    echo('<a href="home.php"><button>VOLTAR AO SITE</button></a>');
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;
?>