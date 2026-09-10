<?php 
//obter os dados do formulário
$nome = $_POST['nome'];
$anoNasc = (int) $_POST['ano_nascimento'];
$anoAtual = (int) date('Y'); //obtem o ano do sistema

//Processamento
$idade = $anoAtual - $anoNasc;
$diasvivivos = ($anoAtual - $anoNasc) * 365.25 ; 
$horasvividas = $diasvivivos * 24;
$minutosvividos = $horasvividas * 60;
$batimentoscardiacos = $minutosvividos * 75;
$expectativadevida = 90;
$batimentosrestantes = ($expectativadevida - $idade) * 365.25 * 24 * 60 * 75;
$respiracoes = $minutosvividos * 17;

//saída
//echo "<h2>$nome, você tem $idade anos.</h2>";
//echo "<h2>Você já viveu aproximadamente $diasvivivos dias.</h2>";

?> <!-- Fechar o php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo de Vida</title>

</head>
<body>
    <h1>Tempo de Vida</h1>
    <hr>
    <h2><?php echo $nome; ?>, você tem <?php echo number_format($idade, 0, ',', '.'); ?> anos.</h2>
    <h2>Você já viveu aproximadamente <?php echo number_format($diasvivivos, 0, ',', '.'); ?> dias.</h2>
    <h2>Você já viveu aproximadamente <?php echo number_format($horasvividas, 0, ',', '.'); ?> horas.</h2>
    <h2>Você já viveu aproximadamente <?php echo number_format($minutosvividos, 0, ',', '.'); ?> minutos.</h2>
    <h2>Você já respirou aproximadamente <?php echo number_format($respiracoes, 0, ',', '.'); ?> vezes.</h2>
    <h2>Você já teve aproximadamente <?php echo number_format($batimentoscardiacos, 0, ',', '.'); ?> batimentos cardíacos. </h2>
    <p> <?php if ($batimentosrestantes < 0): ?>
        <h2>Você já ultrapassou a expectativa de vida de <?php echo $expectativadevida; ?> anos!
        <?php else: ?> <h2>Você ainda tem aproximadamente <?php echo number_format($batimentosrestantes, 0, ',', '.'); ?> batimentos cardíacos restantes.</h2>
    <?php endif; ?>

</body>
</html>





