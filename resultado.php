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

li{
  width: 50%;
}

a{
  width: 50%;

}

		</style>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center mt-5  text-primary"><strong>ELEIÇÕES 2018</strong></h1>
			<p class="text-center mb-3">Abaixo segue a esquerda o nome do candidato e a direita quantos votos recebeu.</p>
			<?php
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>
			<div class="row">
                <div class="col-sm-12 col-md-12 btn-block  text-center">



				<?php
$result_candidato = " select  sum(qtd_voto) from candidatos ";
$resultado_candidatos = mysqli_query($conn, $result_candidato);
$linha = mysqli_num_rows($resultado_candidatos);

while ($linha = mysqli_fetch_array($resultado_candidatos)) {

	?>
    <H4 class="text-success"><strong><?php echo $linha['sum(qtd_voto)']; ?></strong> voto (s) contabilizado (s).</H4>
                </div>

<?php
}
?>


<?php
$result_candidato = " select * from candidatos ORDER BY qtd_voto DESC";
$resultado_candidatos = mysqli_query($conn, $result_candidato);
while ($row_candidato = mysqli_fetch_assoc($resultado_candidatos)) {

	?>


				<div class="col-sm-12 col-md-12  ">

					<ul class="list-group align-items-center">
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<?php echo $row_candidato['cadidato']; ?>
							<span class="badge badge-primary badge-pill"><?php echo $row_candidato['qtd_voto']; ?></span>
						</li>
					</ul>
				</div><?php
}
?>

               	<div class="col-sm-12 col-md-12 btn-block  text-center">
               		<a href="index.php"  class="btn btn-primary ">Voltar</a>
               	</div>


			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>