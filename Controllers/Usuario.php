<?php
header('Content-Type: text/html; charset=utf-8');
include('../Model/UsuarioDAO.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer \SMTP;
require('../Helpers/vendor/phpmailer/phpmailer/src/Exception.php');
require('../Helpers/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require('../Helpers/vendor/phpmailer/phpmailer/src/SMTP.php');

class Usuario{
    
    public function cadastrarUsuario($dados){
        $usuarioDAO = new UsuarioDAO();
        
        if($usuarioDAO->insertUsuario($dados)){
            header('Location: ' . '../View/Pagina_parabens.html', true);
            exit();
        }
    }
    public function login($dados){
        $usuarioDAO = new UsuarioDAO();
        $dado = $usuarioDAO->loginUsuario($dados);    
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($dado,JSON_UNESCAPED_UNICODE);
         
    }
    public function recuperarSenha($dados){
        $usuarioDAO = new UsuarioDAO();
        $email = $dados["email"];
        $token = sha1(random_bytes(20));
        if($usuarioDAO->pegarUsuarioEmail($email, $token)){
            require('../Helpers/vendor/autoload.php');
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'weslley082@gmail.com';                     // SMTP username
                $mail->Password   = 'weslley1234';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to
        
                //Recipients
                $mail->setFrom('weslley082@gmail.com', 'Mailer');
                $mail->addAddress($dados["email"]);
                $mail->CharSet = 'utf-8';
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Recuperação de senha';
                $mail->Body    = '<p>Você perdeu a sua senha ?? não tem problema utilize esse token : '.$token.'</p>';
        
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
              }
        }else{
            echo "não foi possivel recuperar senha pq não existe usuario";
        }
        
    }
    public function resetarSenha($dados){
        $usuarioDAO = new UsuarioDAO();
        if($usuarioDAO->resetarSenha($dados)){
            header('Location: ' . '../View/Pagina_SenhaAlterada.html', true);
            exit();
        }
    } 
}

switch ($_SERVER['REQUEST_METHOD']){
    case 'POST' && $_POST['op']=='cadastro': 
                    $usuario = new Usuario();
                    unset($_POST['op']);
                    $dados = $_POST;
                    $usuario->cadastrarUsuario($dados);
                    break;
    case 'POST' && $_POST['op']=='login' :
                    $usuario = new Usuario();
                    unset($_POST['op']);
                    $dados = $_POST;
                    str_replace($dados['email'],"'", "''");
                    $usuario->login($dados);
                    break;
    case 'POST' && $_POST['op']=='recuperacao' :
                    $usuario = new Usuario();
                    $dados = $_POST;
                    str_replace($dados['email'], "'", "''");
                    $usuario->recuperarSenha($dados);
                    break;
    case 'POST' && $_POST['op']=='reset' :
                   $usuario = new Usuario();
                   $dados = $_POST;
                   $usuario->resetarSenha($dados);
                   break;
}