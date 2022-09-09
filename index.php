<?php
include_once('conn.php');

if(isset($_POST['username'])){

        $user = $_POST['username'];
        $senha = $_POST['password'];

        $sql_code = " SELECT * FROM `login` WHERE usuario = '$user' LIMIT 1";
        $sql_exec = $conexao->query($sql_code) or die($mysqli->error);

        $acesso = $sql_exec->fetch_assoc();
        if(password_verify($senha, $acesso['senha'])){
            header("Location: index-2.html");
        }
        else{
            echo "dados invalidos.";
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<link rel="canonical" href="pages-sign-in.html" />

	<title>Login</title>
    <style>
        body{
            background-color: #242424;
        }
    </style>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
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
									<div class="text-center">
                                    <p class="lead">Login</p>
									</div>
									<form action="index.php" method="post">
										<div class="mb-3">
											<label class="form-label">Usuário</label>
											<input class="form-control form-control-lg" type="name" name="username" placeholder="Digite seu usuário">
										<div class="mb-3">
											<label class="form-label">Senha</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Digite sua senha" />
											<small>
												<a href="cadastro.php">Cadastre-se</a>
                                                
											</small>
										</div>
										<div class="text-center mt-3">
											<button type="submit" name="submit"class="btn btn-lg btn-primary">Acessar</button> 
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
</body>
</html>