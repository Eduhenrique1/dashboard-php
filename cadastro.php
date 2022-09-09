<?php
require_once('conn.php');
// require_once('index.php');


if(isset($_POST['username']))
{
    $nome = $_POST['name'];
    $usuario = $_POST['username'];
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $result = mysqli_query($conexao, "INSERT INTO login(nome, usuario, senha) VALUES('$nome', '$usuario', '$senha')");
    return
    header("Location: index.php");
    die();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="pages-sign-up.html" />

	<title>Cadastro de usuário</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
   
	<!-- END SETTINGS -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-10', { 'anonymize_ip': true });
</script></head> -->
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->
<style>
        body{
            background-color: #242424;
        }
    </style>
</head>
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<main class="d-flex w-100 h-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
                        
                        <div class="text-center mt-4">
							<img src="logo.png" alt="">	
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
                                <div class="text-center mt-4">
                                <h1 class="h2">Cadatro de usuario</h1>
						</div>
									<form action="cadastro.php" method="POST"> 
										<div class="mb-3">
											<label class="form-label">Nome</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Digite um nome." />
										</div>
										<div class="mb-3">
											<label class="form-label">usuário</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Digite um usuário." />
										</div>
										<div class="mb-3">
											<label class="form-label" id="labelSenha">Senha</label>
											<input class="form-control form-control-lg" id="senha" type="password" name="password" placeholder="Digite uma senha." />
										</div>
										<div class="mb-3">
											<label class="form-label" id="labelConfirmSenha">Confirmar senha</label>
											<input class="form-control form-control-lg" type="password" id="confirmSenha" name="confirmpassword" placeholder="Confirme a senha." />
										</div>
										<div class="text-center mt-3">
											<button type="submit" name="submit" class="btn btn-lg btn-primary">cadastrar</button> 
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>



    <script src="confirm.js"></script>
</body>
</html>