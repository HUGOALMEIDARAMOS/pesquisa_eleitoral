<?php
session_start();
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Eleições 2018</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<style type="text/css" media="screen">
		html{
		margin: 0px;
		padding: 0px;
		}
		body{
		background: #fff;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center mt-5  text-primary"><strong>ELEIÇÕES 2018</strong></h1>
			<p class="text-center mb-3">Este é um simples site que eu <strong> Hugo Leonardo</strong> fiz para amigos votarem, não possuo nenhum vinculo com qualquer que seja o partido.</p>
			<?php
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>
			<div class="row">
				<?php
$result_candidato = " select * from candidatos ORDER BY cadidato ASC";
$resultado_candidatos = mysqli_query($conn, $result_candidato);
while ($row_candidato = mysqli_fetch_assoc($resultado_candidatos)) {
	?>
				<div class="col-sm-12 col-md-3  align-content-sm-center">
					<div class="card mb-3 border-primary" style="width: 15rem;">
						<img class="card-img-top" src="imagem/<?php echo $row_candidato['imagem']; ?>">
						<div class="card-body">
							<h5 class="card-title text-center text-primary font-weight-bold"><?php echo $row_candidato['cadidato']; ?></h5>
							<a href="votar.php?id=<?php echo $row_candidato['id']; ?>"  class="btn btn-primary btn-block">Votar</a>
						</div>
					</div>
				</div><?php
}
?>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
