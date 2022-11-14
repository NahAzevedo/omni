<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Omni</title>
</head>
<body>
    <ul>
        <li><a href="index.php#contato">Contato</a></li>
        <li><a href="index.php#projeto">Projetos</a></li>
        <li><a href="index.php#equipe">Nossa Equipe</a></li>
        <li><a href="index.php#servicos">Serviços</a></li>
        <li><a href="index.php#sobrenos">Sobre Nós</a></li>
        
    </ul>
    <div id="inicio">
        <div id="iniciotitulo">
            <div id="titulo">
                <p>CONHEÇA A OMNI</p>
            </div>
            <div id="titulo2">
                <p>SEMPRE EM DIREÇÃO<br> AO FUTURO!</p>
            </div>
            <div id="titulo">
                <p>A equipe certa para desenvolver seu projeto <br>
                através das mais altas tecnologia do mercado!</p>
            </div>
            
            <button><a href="index.php#contato">Entrar em contato<a></button>
            
        </div>
        <img src="imgs/logo.png">
    </div>
    <div id="sobrenos">
        
    <img src="imgs/logo.png">
        <div id="sobrenostitulo">
        
        <div id="titulo4">
            <p>SOBRE NÓS</p>
        </div>
        <div id="titulo">
                <p>Somos uma pequena empresa de desenvolvimento de <br>
                    sistemas com o objetivo de trazer soluções eficazes e <br>
                    tecnológicas para os mais variados problemas de <br>
                    nossos clientes. <br>
                    Confira abaixo os serviços que oferecemos.</p>
        </div>
        </div>
    </div>

    <div id="servicos">
        <div id="tituloservicos">
            <p>SERVIÇOS OFERECIDOS</p><br>
        </div>
        <div class="alinhamentoservicos">
        <div id="mobile">
            <div id="titulo1">
                <b><p>Desenvolvimento Mobile</p></b>
            </div>
            <div id="titulo3">
                <p>Aplicativos interativos, intuitivos e otimizados. 
                    Planejados para facilitar as atividades cotidianas, 
                    de uma maneira mais simples e rápida!<br>
                    </p>
            </div>
            <img src="imgs/mobile.png">
        </div>
        
        <div id="ensino">
        <div id="titulo1">
                <b><p>Design</p></b>
            </div>
        <div id="titulo3">
        <p>Sistemas com designs criativos, inovadores, e 
            especialmente pensados para melhor experiência do usuário!
                    </p>
        </div>
        <img src="imgs/design.png">
        </div>
        <div id="web">
            <div id="titulo1">
                <b><p>Desenvolvimento Web</p></b>
            </div>
            <div id="titulo3">
                <p>Sites customizados e responsivos, criados da melhor maneira para atender as suas necessidades!<br>
                    </p>
            </div>
            <img src="imgs/web.png">
        </div>
</div>
    </div>
    <div id="equipe">
            <div id="tituloequipe">
            <p>NOSSA EQUIPE</p>
            </div><br><br>

        <div class="flex-container">
            <div id="integrante">
                <p>Isabelle Fernanda Severo Hondo</p>  
                <img src="imgs/isa.png">   
            </div>
            <div id="integrante">            
                <p>Kaio Vinícius Ferreira de Oliveira</p>  
                <img src="imgs/kaio.png">    
            </div>
            <div id="integrante">
                <p>Nayara de Azevedo Leal</p>  
                <img src="imgs/nay.png">   
            </div> 

    </div></div>


    <div id="projeto">
        <div id="tituloprojeto">
            <p>PROJETO</p>
            
            </div>
            <div class="alinhamentoprojeto">

            <div id="titulo">
                <b><p>Brailet</p></b>
            

                    <p>Este projeto propõe o desenvolvimento de uma plataforma de ensino, 
                        contendo uma mesa automatizada para auxiliar docentes no processo 
                        de alfabetização de crianças com cegueira total.
                    </p>
        </div>
            <div id="foto">
        <div id="fotoprojeto">
        <img src="imgs/app1.png" title="Telas Mobile">
        <img src="imgs/app.png">
        <img src="imgs/app2.png">
        <img src="imgs/app3.png">
        <img src="imgs/app4.png">
</div>
</div>
</div>

    </div>
    <div id="contato">
    <div class="alinhamentocontato">  
        <div id="titulocontato">
            <p>ENTRE EM CONTATO CONOSCO!</p><br>
            <img src="imgs/logo.png">
        </div>     
        <div id="formcontato">
        <form action="form.php" method="post">
            <div class="text-form"> Preencha os dados a seguir</div><br>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="text" name="email" placeholder="Digite o seu E-mail">
                </div>
                <div class="form-group">
                    <label for="phone"></label>
                    <input type="text" name="phone" placeholder="Digite o seu telefone">
                </div>
                <div class="form-group">
                    <label for="mensagem"></label>
                    <input type="text" name="mensagem" placeholder="Digite a sua mensagem">
                </div>
                <input type="submit" class="btn" value="Enviar">
                
            </form>
        </div>
</div>  
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


</div>
</body>
</html>