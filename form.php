<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>
<body>
<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $mensagem = $_POST["mensagem"];

    ?>
<div id="retorno">
    <img src="imgs/logo.png">
        <div id="retornotitulo">
        
        <div id="titulo4">
            <p>Obrigado!</p><?php echo $name;?>
        </div>
        <div id="titulo">
                <p>Entraremos em contato.</p>
        </div>
        </div>
    </div>
    <div id="dadosform">

    </div>
    <div class="footer">
    <img src="imgs/logo.png">
    
    <p><b><a href="index.php#inicio">Inicio</a></b><br>
    
    <a href="index.php#inicio">Home</a><br>
        <a href="index.php#servicos">Serviços</a><br>
        <a href="index.php#equipe">Nossa Equipe</a><br>
        <a href="index.php#projeto">Projetos</a><br>
        <a href="index.php#contato">Contato</a><br>
        </p>
   
        <p>
        <b><a href="index.php#sobrenos">Sobre Nós</a></b><br>
        
        <a href="index.php#sobrenos">Informações</a><br>
        </p>
       
        <p>
        <b><a href="index.php#footer">Suporte</a></b><br>

       
        <a href="index.php#footer">FAQ</a><br>
        <a href="index.php#footer">Telefone</a><br>
        <a href="index.php#footer">Chat</a><br>
</p>
    <div id="redesocial"> 
    <img src="imgs/git.png">
    <img src="imgs/link.png">
</div>
</body>
</html>