<?php

// Include the database connection file
include_once("config.php");
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)  or die (mysqli_error()); 
?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AI-belha - Coletor de Dados para Treinamento</title>
	<link rel="stylesheet" href="simple.css">
</head>

<body id="top">
	<header>
		<h1>AI-belha - Coletor de Dados para Treinamento</h1>
		<p>Esta é uma página para coleta de dados a ser utilizados para treinamento da Inteligência Artificial. </p>
        <?php
/*        echo "Teste de Conexão com o Banco de Dados: \n";
        // Fetch contacts (in descending order)
        $result = mysqli_query($mysqli, "SELECT * FROM respostas;")  or die (mysqli_error()); 
        if ($result) {
//            while ($row = mysqli_fetch_row($result) or die (mysqli_error())) {
                $row = mysqli_fetch_row($result) or die (mysqli_error());
                echo("Cod: $row[0]\n");
                echo("Foto: $row[1]\n");
                echo("Tipo: $row[2]\n");
                echo("Cor: $row[3]\n");
//            }
         } */
        ?>
	</header>
	<main>
        <article id="text__paragraphs">
            <header>
                <h2>Introdução</h2>
            </header>
            <p>Este é um site para coleta anônima de informação sobre as imagens de abelhas apresentadas. Cada vez que você abrir
                este site, verá uma imagem diferente. Favor responder de acordo com as características que você notar na imagem. 
                Caso alguma das características não se aplicar a imagem apresentada, utilize esta opção. Quanto mais imagens você
                nos ajudar a classificar, mais ajuda o projeto.
            </p>
            <h3>Imagem a ser Analizada:</h3>    
        	<p><img src="fotos\jatai-01.jpg" alt="Imagem a ser Analizada"></p>
            <section id="forms">
                <header>
                    <h2>Características:</h2>
                </header>
    			<form>
                    <p>Cor do Corpo</p>
                    <ul>
                        <li><label for="radio1"><input id="radio2" name="radio" type="radio" checked="checked"> Amarelada</label></li>
                        <li><label for="radio2"><input id="radio3" name="radio" type="radio"> Alaranjada</label></li>
                        <li><label for="radio3"><input id="radio3" name="radio" type="radio"> Escura</label></li>
                        <li><label for="radio4"><input id="radio3" name="radio" type="radio"> Preta</label></li>
                    </ul>

                    <p>
                        <input type="submit" value="Submeter">
                        <input type="reset" value="Carregar Outra">
                    </p>
                </form>
            </section>
        </article>

    </main>
    
	<footer>
		<p>AI-belha. 2023.</p>
	</footer>
</body>

</html>
