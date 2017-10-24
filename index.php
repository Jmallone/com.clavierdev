<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>ClavierDev</title>
    
    <link href='http://fonts.googleapis.com/css?family=Arvo:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/header.css" type="text/css"/>
    <link rel="stylesheet" href="css/post.css" type="text/css"/>
    <link rel="stylesheet" href="css/rodape.css" type="text/css"/>
    <link rel="stylesheet" href="css/responsivo.css" type="text/css"/>
    <link rel="stylesheet" href="css/video_post.css" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/scroll.js"></script>
    
    <script src="js/jquery.bxslider.min.js"></script>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    
    <script src="js/galeria.js" type="text/javascript"></script>
    
    <!--começa o slide-->
    
    <link href="css/movingboxes.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <link href="css/movingboxes-ie.css" rel="stylesheet" media="screen" />
    <![endif]-->

    <!-- Required script -->
    <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script src="js/jquery.movingboxes.js"></script>

    <!-- Demo only -->
    <link href="css/demo.css" rel="stylesheet">

        
    <script>
      $(function(){

        $('#slider').movingBoxes({
          /* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
          width: 500,
          panelWidth: 0.5,
          */
          startPanel   : 1,      // start with this panel
          wrap         : false,  // if true, the panel will infinitely loop
          buildNav     : true,   // if true, navigation links will be added
          navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
        });

      });
    </script>
    
    
  </head>
  
  <body>
    <header>
      <a href="index.php"><img src="./img/logo1.png" alt="Logo da empresa"/></a>
      <input type="checkbox" id="control-nav" style="display : none"/>
      <label for="control-nav" class="control-nav"></label>
      <label for="control-nav" class="control-nav-close"></label>
      <nav id="menu" class="fR">
        <ul class="l2">
          <li class="nav1"><a class="scroll" href="#post">Home</a></li>
          <li class="nav2"><a class="scroll" href="#sobre">Sobre</a></li>
          <li class="nav3"><a class="scroll" href="#servicos">Serviços</a></li>
          <li class="nav4"><a class="scroll"  href="#clientes">Portfólio</a></li>
          <li class="nav5"><a class="scroll" href="#equipe">Equipe</a></li>
          <li class="nav6"><a class="scroll" href="#contato">Contato</a></li>
          <hr/>
        </ul>
      </nav>
    </header>
    
    <div id="post">
      <div class="homepage-hero-module">
        <div class="video-container">
          <div class="filter"><a href="index.php"><img src="./img/logo1.png" alt="Logo da ClavierDev"></a><h1>Clavier Dev</h1><p>Seu site de desenvolvimento web</p></div>
          <video autoplay loop class="fillWidth">
            <source src="./M$/For_Wes4.mp4" type="video/mp4" />
            <source src="./WEM/For_Wes4.webm" type="video/webm" />
          </video>
          <div class="poster hidden">
             <img src="./Snapshots/For_Wes.jpg" alt="">
          </div>
        </div>
      </div>
    
      <section id="sobre" class="estilo_redundancia">
      
        <div class="panelsobre">
        <h2>Sobre nós:</h2>
        <img src="img/web.jpg">
          <div class="alien"><p>Somos uma empresa que visa não simplesmente fazer sites, queremos fazer verdadeiros projetos de web design, queremos buscar a melhor integração entre o usuario do site e o dono do site.</p></div>
          <div class="p1"><p>Buscamos proporcionar sempre a melhor identidade visual para o site que fazemos.</p></div>
          <div class="p2"><p>Queremos que o usuário se sinta a vontade no site, com design atraente e boa UX.</p></div>
          
        </div>
      </section>
      
      <section id="servicos" class="estilo_redundancia">
        <h2>Serviços</h2>
        <div class="servico1">
          <img src="img/responsive.png" alt="Design de Sites">
          <p>Fazemos sites com elegância e muita qualidade, com um atendimento de ponta e especializado.</p>
            <!--<div id="botao1">
              <p><a href="#contato">Sites</a></p>
            </div>-->
        </div>
        <div class="servico2">
          <img src="img/hosting.png" alt="Hospedagem">
          <p>Você pode hospedar seu site conosco, com qualidade, segurança, disponibilidade 24 horas.</p>
            <!--<div id="botao2">
              <p><a href="#contato" >Hospedagem</a></p>
            </div>-->
        </div>
        <div id="escada">
            <div id="botao3">
              <p><a href="#contato">Sites</a></p>
            </div>
          
            <div id="botao4">
              <p><a href="#contato" >Hospedagem</a></p>
            </div>
        </div>
        <div class="clear"></div>
        
      </section>    
      
      
      <section id="clientes" class="estilo_redundancia">
        <h2>Portfólio</h2>        
          <ul id="slider">
            <li>
              <a href="http://www.caetanoeotavioimoveis.com.br/" target="blank"><img src="img/caetano.png" alt="site imobiliaria"></a>
              <h2 style="font-size: 2em">Imobiliaria</h2>
              <p>Imobiliaria Caetano e Otavio</p>
            </li>
            <li>
              <a href="http://umudieseltrr.com.br/" target="blank"><img src="img/umudiesel.png" alt="site umudiesel"></a>
              <h2 style="font-size: 2em">Umudiesel TRR</h2>
              <p>Umudiesel - Transporte</p>
            </li>
          </ul><!-- end Slider #1 -->       
      </section>
      
      
      <section id="equipe" class="estilo_redundancia">
        <h2>Equipe</h2>
        <section class="partgeral">
          
            <div class="part1">
              <div class="partimg">
                <div id="descricao1">
                  <p>Michel Gomes</p>
                  <div class="icon">
                    <!-- <a href="#"><img src="img/behance.png"></a>
                    <a href="#"><img src="img/linkedin.png"></a> -->
                    <a href="https://github.com/jmallone" target="blank"><img src="img/github.png"></a>
                  </div>
                </div>
              </div>
            </div>
            <p>
            <div class="part2">
              <div class="partimg">
                <div class="descricao2">
                  <p>Rafael Bastiansch</p>
                  <div class="icon">
                      <!-- <a href="#"><img src="img/behance.png"></a> -->
                      <a href="https://www.linkedin.com/in/rafaelbastiansch" target="blank"><img src="img/linkedin.png"></a>
                      <a href="https://github.com/rbastiansch" target="blank"><img src="img/github.png"></a>
                    </div>
                </div>
              </div>
            </div>
            <p>
            <div class="part3">
              <div class="partimg">
                <div class="descricao3">
                  <p>William Parra</p>
                  <div class="icon">
                      <a href="https://www.facebook.com/william.pereiraparra" target="blank"><img src="img/facebook.png"></a>
                      <!--<a href="#"><img src="img/behance.png"></a>
                      <a href="#"><img src="img/linkedin.png"></a>
                      <a href="#"><img src="img/github.png"></a> -->
                    </div>
                </div>
              </div>
            </div>
        </section>
          
      </section>
      
      
      <section id="contato" class="estilo_redundancia">
        <h2>Contato</h2>

        <?php
          if (isset($_POST['enviar'])) {
            //code email here
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];
            
            // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
            require_once("phpmailer/class.phpmailer.php");
            include 'phpmailer/PHPMailerAutoload.php';
            // Inicia a classe PHPMailer
            $mail = new PHPMailer();
            // Define os dados do servidor e tipo de conexão
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = "host.muxdigital.com.br"; // Endereço do servidor SMTP
            $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
            $mail->Username = 'contato@clavierdev.com'; // Usuário do servidor SMTP
            $mail->Password = 'clavier2015'; // Senha do servidor SMTP
            // Define o remetente
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->From = $email; // Seu e-mail
            $mail->FromName = $email; // Seu nome
            // Define os destinatário(s)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->AddAddress('contato@clavierdev.com', 'ClavierDev Contato');
            //$mail->AddAddress('ciclano@site.net');
            //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
            //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
            // Define os dados técnicos da Mensagem
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
            // Define a mensagem (Texto e Assunto)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->Subject  = "Enviado pelo Formulario"; // Assunto da mensagem
            $mail->Body = $mensagem;
            $mail->AltBody = ""; 
            // Define os anexos (opcional)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
            // Envia o e-mail
            $enviado = $mail->Send();
            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();
            // Exibe uma mensagem de resultado
            if ($enviado) {
              echo "<h1>E-mail enviado com sucesso!</h1>";
            } else {
              echo "Não foi possível enviar o e-mail.";
              echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
            }
          }
        ?>
        <form action="index.php#contato" method="POST"><br><p>
          <b>Nome: <br><input type="text" width="50px" name="nome" style="
              width: 85%;
              height: 27px;
            "><br><p>
          Email: <br><input type="text" name="email" style="
              width: 85%;
              height: 27px;
            "><br><p>
          Mensagem:</b> <br><textarea name="mensagem" style="
              width: 85%;
              height: 85px;
            "></textarea><br><p>
          <input class="botaoformulario" name="enviar" value="Enviar" type="submit" >
        </form> 
        <div class="info"><h1>OLÁ, EM QUE PODEMOS AJUDAR?</h1><p><h3>Fique a vontade de mandar suas Dicas, Sugestões e Orçamentos.</h3></div>
        
        <div class="clear"></div>
      </section>
      
    </div>
    
    <section id="rodape">
      <p>contato@clavierdev.com</p>
    </section>
  </body>
</html>