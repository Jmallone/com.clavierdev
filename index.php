<!DOCTYPE html>
<html>
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
		<!-- bxSlider CSS file -->
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		
		<script src="js/galeria.js" type="text/javascript"></script>
		
		
	</head>
	
	<body>
		<header>
			<a href="index.php"><img src="./img/logo1.png"/></a>
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
		
			<div id="sobre" class="estilo_redundancia">
			
				<div class="panelsobre">
				<h2>Sobre nos:</h2>
				<img src="img/web.jpg">
					<div class="alien"><p>Somos uma empresa que visa não simplesmente fazer sites, queremos fazer verdadeiros projetos de web design, queremos buscar a melhor integração entre o usuario do site e o dono do site.</p></div>
					<div class="p1"><p>Buscamos proporcionar sempre a melhor identidade visual para o site que fazemos.</p></div>
					<div class="p2"><p>Queremos que o usuário se sinta a vontade no site, com design atraente e boa UX.</p></div>
					
				</div>
			</div>
			
			<div id="servicos" class="estilo_redundancia">
				<h2>Serviços</h2>
				<div class="servico1">
					<img src="img/responsive.png" alt="Design de Sites">
					<p>Fazemos sites com elegância e muita qualidade, com um atendimento de ponta e especializado.</p>
						<div id="botao2">
							<p><a href="#contato">Web Designer</a></p>
						</div>
				</div>
				<div class="servico2">
					<img src="img/hosting.png" alt="Hospedagem">
					<p>Você pode hospedar seu site conosco, com qualidade, segurança, disponibilidade 24 horas sem quedas.</p>
						<div id="botao1">
							<p><a href="#contato" >Hospedagem</a></p>
						</div>
				</div>
				<div class="clear"></div>
				
			</div>
			
			
			
			<div id="clientes" class="estilo_redundancia">
				<h2>Portifolio</h2>
				
	<div id="imagens">
		<ul class="bxslider">
		  <li>SITE 1<img src="img/imgsite.png" /></li>
		  <li>SITE 2<img src="img/imgsite.png" /></li>
		  <li>SITE 3<img src="img/imgsite.png" /></li>
		  <li>SITE 4<img src="img/imgsite.png" /></li>
		</ul>
	</div>	
				
			</div>
			
			<div id="equipe" class="estilo_redundancia">
			<h2>Equipe</h2>
					<div class="partgeral">
						
							<div class="part1">
								<div class="partimg">
									<div class="dodeca">
									  <div class="dode1">
										<div class="dode2">
										  <img src="https://scontent-gru1-1.xx.fbcdn.net/hphotos-xap1/v/l/t1.0-9/625689_391262730939932_795208602_n.jpg?oh=aa25154d1fa70755ba7c67279eeb08cf&oe=5683E5BF" alt="Michel Gomes" />
										</div>
									  </div>
									</div>
									<div id="descricao1">
										<p>Michel Jécksom</p>
										<div class="icon">
											<a href="#"><img src="img/behance.png"></a>
											<a href="#"><img src="img/linkedin.png"></a>
											<a href="#"><img src="img/github.png"></a>
										</div>
									</div>
								</div>
							</div>
						
					
					
				
							<div class="part2">
								<div class="partimg">
									<div class="dodeca">
									  <div class="dode1">
										<div class="dode2">
										  <img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/1235959_226520970837983_1870703498_n.jpg?oh=edc1e075dc8b61e9fe85421fb115a4b5&oe=567D79FC&__gda__=1451097171_61640be8f46b1a296f3c337526c56a57" alt="Rafael" />
										</div>
									  </div>
									</div>
									<div class="descricao2">
										<p>Rafael Bastião</p>
										<div class="icon">
												<a href="#"><img src="img/behance.png"></a>
												<a href="#"><img src="img/linkedin.png"></a>
												<a href="#"><img src="img/github.png"></a>
											</div>
									</div>
								</div>
							</div>

							<div class="part3">
								<div class="partimg">
									<div class="dodeca">
									  <div class="dode1">
										<div class="dode2">
										  <img src="https://scontent-gru1-1.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10296574_662205570512669_7805549108539542368_n.jpg?oh=462c84f70ccda7a09557cbf247d41cb7&oe=563E2544" alt="" />
										</div>
									  </div>
									</div>
									<div class="descricao3">
										<p>William Parrudo</p>
										<div class="icon">
												<a href="#"><img src="img/behance.png"></a>
												<a href="#"><img src="img/linkedin.png"></a>
												<a href="#"><img src="img/github.png"></a>
											</div>
									</div>
								</div>
							</div>
					</div>
					
			</div>
			
			
			<div id="contato" class="estilo_redundancia">
			


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
			</div>
		</div>
		<div id="rodape">

			<p>contato@clavierdev.com</p>

		</div>
	</body>
</html>
