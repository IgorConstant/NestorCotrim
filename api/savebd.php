<?php

include_once("server.php"); //usaria apenas essa linha, ao inves de digitar tudo com está em baixo 

$conexao = mysqli_connect("localhost", "root", "", "lp_nestorcotrim");

$nome = isset($_POST['inputNameModal']) ? ($_POST['inputNameModal']) : "";
$tel = isset($_POST['inputPhoneModal']) ? ($_POST['inputPhoneModal']) : "";

//inserindo registros

$contact = "INSERT INTO contato (nome, telefone, created) VALUES ('$nome', '$tel', NOW())";
$msg = mysqli_query($conn, $contact);

if ($msg) {
    header("Refresh:1; url=https://api.whatsapp.com/send?phone=5511987150003&text=Ol%C3%A1!%20Gostaria%20de%20maiores%20informa%C3%A7%C3%B5es%20sobre%20o%20Condom%C3%ADnio%20Terras%20de%20S%C3%A3o%20Jos%C3%A9%20Nome:%20$nome%20Telefone:%20$tel%20");
} else {
    echo "<script>alert('Ocorreu um problema ao enviar sua mensgem, entre em contato pelo WhatsApp:  (11) 99944-1433');</script>";
}
