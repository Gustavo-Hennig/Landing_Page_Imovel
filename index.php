<?php
include_once('config.php');
include_once('email.php');
if (isset($_POST['submit'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //verifica se o email está correto
	$result = mysqli_query($conexao, "INSERT INTO formulario(nome,email,telefone) VALUES ('$nome','$email','$telefone')");
/*	if($result){
		$obj_email=new Email();
		$obj_email->remetente_nome="$nome";
		$obj_email->remetente_email="$email";
		$obj_email->responder_para="Julio";
		$obj_email->email_destinatario="julio.hippler@gmail.com";
		$obj_email->assunto="Novo Cadastro no site";
		$obj_email->mensagem_HTML="Foi realizado um novo cadastro no site";
		$obj_email->enviar();
	}*/
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Minha Landing Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<meta name="description" content="Conteúdo do meu site.">
	<meta name="keywords" content="palavras,separadas,por,virgula">
	<meta name="author" content="Guilherme" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
	<meta charset="utf-8" />
</head>

<body>
	<header>
		<div class="container">
			<div>
				<div class="logo-1"></div>
				<!--logo-1-->
			</div>
			<div>
				<div class="logo-2"></div>
				<!--logo-2-->
			</div>
			<div class="clear"></div>
			<!--clear-->
		</div>
		<!--container-->

	</header>

	<section class="cover-form">

		<div class="container bg">
			<div class="chamada-bg">
				<p>
					Côte d' Azur Ville
				</p>
			</div>
			<div class="form-container">
				<h2>PODE ACREDITAR, POR DENTRO É AINDA MAIS BONITO.</h2>
				<form action="index.php" method="POST" onSubmit="alert('Dados enviados com Sucesso!')">
					<div class="form-wraper">
						<p>Nome Completo</p>
						<input type="text" name="nome" required placeholder="Nome">
					</div>
					<!--form-wraper-->

					<div class="form-wraper">
						<p>E-mail</p>
						<input type="text" name="email" required placeholder="E-mail">
					</div>
					<!--form-wraper-->

					<div class="form-wraper">
						<p>Telefone</p>
						<input type="text" name="telefone" required placeholder="Telefone">
					</div>
					<!--form-wraper-->

					<div class="form-wraper">
						<input type="submit" name="submit" id="submit" value="Enviar">
					
					</div>
					<!--form-wraper-->
					<div class="form-wraper">
						<p>* Campos Obrigatórios</p>
					</div>
					<!--form-wraper-->
				</form>
			</div>
			<!--form-container-->
		</div>
		<!--container-->

	</section>
	<!--cover-form-->

	<section class="chamada">

		<div class="icone-seta"></div>
		<div class="container">
			<div>
				<h2>VIVA A VIDA DOS SEUS SONHOS!</h2>
			</div>
			<div>
				<p>Quer ser dono deste imóvel? Preencha o formulário e agende uma visita com nossos corretores. Conheça um pouco mais deste empreendimento:</p>
			</div>
		</div>
		<!--container-->

	</section>
	<!--chamada-->

	<section class="mosaico">

		<div class="container">

			<div class="flex-mosaico" style="flex-direction: row-reverse;">

				<div style="background-image: url('imagens/mosaico1.jpg');" class="item-1-mosaico"></div>
				<!--item1-mosaico-->

				<div class="item-2-mosaico">
					<h4>
						Conceito Aberto
					</h4>
					<p>
						Ambientes totalmente integrados, várias opções de projetos e decorações, tudo o que você precisa em um só lugar!
					</p>
				</div>
				<!--item2-mosaico-->
			</div>
			<!--flex-mosaico-->


			<div class="flex-mosaico">

				<div style="background-image: url('imagens/mosaico2.jpg');" class="item-1-mosaico"></div>
				<!--item1-mosaico-->

				<div class="item-2-mosaico">
					<h4>
						Varanda com churrasqueira
					</h4>
					<p>
						Poderá desfrutar de toda a experiência de se viver ao lado do mar, para aproveitar esses momentos ao máximo basta apreciar da sua varanda!
					</p>
				</div>
				<!--item2-mosaico-->
			</div>
			<!--flex-mosaico-->


			<div class="flex-mosaico" style="flex-direction: row-reverse;">

				<div style="background-image: url('imagens/mosaico3.jpg');" class="item-1-mosaico"></div>
				<!--item1-mosaico-->

				<div class="item-2-mosaico">
					<h4>
						Sala de jogos
					</h4>
					<p>
						Para as confraternizações entre família e amigos o que não pode faltar é espaço, para isto o imóvel é equipado com uma sala dedicada ao lazer, conta com mesa de jogos e copa exclusiva!
					</p>
				</div>
				<!--item2-mosaico-->
			</div>
			<!--flex-mosaico-->

			<div class="flex-mosaico">

				<div style="background-image: url('imagens/mosaico4.jpg');" class="item-1-mosaico"></div>
				<!--item1-mosaico-->

				<div class="item-2-mosaico">
					<h4>
						Natureza
					</h4>
					<p>
						E o pôr do sol aqui é mais bonito! Descanse após um dia de trabalho ou simplesmente aprecie esta vista à qualquer momento, o importante é ser feliz!
					</p>
				</div>
				<!--item2-mosaico-->
			</div>
			<!--flex-mosaico-->
		</div>
		<!--container-->

	</section>
	<!--mosaico-->

	<section class="footer">

		<div class="container">
			<div class="contato">
				<h2>
					Entre em contato conosco e agende uma visita agora mesmo! Estamos te esperando
				</h2>
				<h3>
					&#128241; (45) 99860-0635 - Whatsapp
				</h3>
				<h5>
					&#128241; (45) 3284-8759 - Telefone
				</h5>

			</div>
			<!--contato-->
		</div>
		<!--container-->

	</section>
	<!--footer-->

</body>

</html>