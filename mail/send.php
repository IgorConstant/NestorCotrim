<?php

date_default_timezone_set('Brazil/East');

$date = date('d/m/Y');

$nome = !empty($_POST['inputName']) ? filter_var($_POST['inputName'], FILTER_SANITIZE_STRING) : null;
$telefone = !empty($_POST['inputPhone']) ? filter_var($_POST['inputPhone'], FILTER_SANITIZE_STRING) : null;
$email = !empty($_POST['inputEmail']) ? filter_var($_POST['inputEmail'], FILTER_SANITIZE_STRING) : null;
$msg = !empty($_POST['inputMessage']) ? filter_var($_POST['inputMessage'], FILTER_SANITIZE_STRING) : null;

# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("PHPMailer/class.phpmailer.php");
require_once("PHPMailer/class.smtp.php");

# Inicia a classe PHPMailer
$mail = new PHPMailer();

# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
$mail->Port = 465; // Porta TCP para a conexão
$mail->SMTPAutoTLS = true; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = ''; # Usuário de e-mail
$mail->Password = ''; // # Senha do usuário de e-mail

# Define o remetente (você)
$mail->From = ""; # Seu e-mail
$mail->FromName = "#"; // Seu nome

# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();


# Define os destinatário(s)
$mail->AddAddress(''); # Os campos podem ser substituidos por variáveis


# Define os dados técnicos da Mensagem
$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; # Charset da mensagem (opcional)
$mail->SMTPDebug = 4; #Ativar Caso queira debugar o Envio de e-mail
$mail->SMTPSecure = "ssl";


# Define a mensagem (Texto e Assunto)
$mail->Subject = "Contato via E-mail - Landing Page - Nestor Cotrim"; # Assunto da mensagem
$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";


$msg = '<table width="650" cellspacing="0" cellpadding="0" border="0" bordercolor="#e4e4e4" align="center">
    <tr style="background:#ffffff;">
        <td align="center"> <br> <br> <img width="30%" src="https://nestorcotrim.com.br/wp-content/uploads/2020/02/logo_horizontal.png" alt="logo"> <br> <br> <br></td>
    </tr>
<tr style="background: #f0811e">
    <td>
        <br>
        <br>
        <b><p style="color: #fff;text-align:center;">Nome: ' . $nome . '</p></b>
        <b><p style="color: #fff;text-align:center;">Telefone/WhatsApp: ' . $telefone . '</p></b>
        <b><p style="color: #fff;text-align:center;">E-mail: ' . $email . '</p></b>
        <b><p style="color: #fff;text-align:center;">Mensagem: ' . $msg . '</p></b>
        <b><p style="color: #fff;text-align:center;">Enviado em: ' . $date . '</p></b>
        <br>
        <br>
    </td>
</tr>

</table>';


$mail->Body = $msg;
# Envia o e-mail
$enviado = $mail->Send();


if ($enviado) {
    echo "<script>alert('Sua mensagem foi enviada com sucesso!');</script>";
    header("Location: ../pages/obrigado.php");
} else {
    echo "<script>alert('#');</script>";
    header("Location: ");
}
