<?php

session_start();

include_once "conexao.php";

if (isset($_GET['id'])) {

	if (isset($_COOKIE['voto_contado'])) {

		$_SESSION['msg'] = "<div class='alert alert-warning' role='alert'><span style='color:orange'>Você já votou!</span></div>";
		header("Location: index.php");

	} else {

		setcookie('voto_contado', $_SERVER['REMOTE_ADDR'], time() + 3);

		$result_cand = "UPDATE candidatos SET qtd_voto=qtd_voto+1 WHERE id='" . $_GET['id'] . "'";
		$resultado_candidato = mysqli_query($conn, $result_cand);

		if (mysqli_affected_rows($conn)) {
			$_SESSION['msg'] = "<div class='alert alert-success' role='alert'><span style='color:green'>Voto recebido com sucesso</span></div>";
			header("Location: resultado.php");
		} else {
			$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'><span style='color:red'>Erro ao votar</span></div>";
			header("Location: index.php");
		}
	}
}