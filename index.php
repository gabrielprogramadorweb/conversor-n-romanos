<?php
// Importa as classes necessárias
use class\InteiroParaRomano;
use class\RomanoParaInteiro;

// Inclui os arquivos das classes
require_once("../atividade-1/class/InteiroParaRomano.php");
require_once('../atividade-1/class/RomanoParaInteiro.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Configuração da meta e título -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Numérico</title>
    <link rel="icon" href="../atividade-1/imagens/favicon.ico" type="image/x-icon">
    <!-- Inclusão do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Inclusão do arquivo de estilo personalizado -->
    <link rel="stylesheet" href="../atividade-1/css/style.css">
</head>

<body>
<div class="content">
    <!-- Inclusão da barra de navegação -->
    <?php include '../atividade-1/includes/nav.php'; ?>

    <!-- Container principal -->
    <div class="container">
        <div class="row mt-5">
            <!-- Coluna para converter inteiro em romano -->
            <div class="col-md-6">
                <h2>Inteiro em número romano</h2>

                <!-- Formulário para converter número inteiro em número romano -->
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="inteiro" class="form-label">Digite um número inteiro:</label>
                        <input type="number" id="inteiro" name="inteiro" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Converter para Romano</button>
                </form>

                <?php
                // Verifica se o formulário foi enviado
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Verifica se a entrada inteira está definida
                    if (isset($_POST['inteiro'])) {
                        // Converte a entrada para um número inteiro
                        $NumeroInteiro = intval($_POST['inteiro']);
                        
                        // Chama o método estático para converter inteiro para romano
                        $result = InteiroParaRomano::intToRoman($NumeroInteiro);

                        // Exibe o resultado
                        echo "<p class='mt-3'>O número inteiro $NumeroInteiro é igual a $result em algarismos romanos.</p>";
                    } else {
                        // Exibe uma mensagem de erro se a entrada não estiver definida
                        echo "<p class='mt-3 text-danger'>Por favor, insira um número inteiro.</p>";
                    }
                }
                ?>
            </div>

            <!-- Coluna para converter romano em inteiro -->
            <div class="col-md-6">
                <h2>Romano em número inteiro</h2>

                <!-- Formulário para converter número romano em número inteiro -->
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="romano" class="form-label">Digite um número romano:</label>
                        <input type="text" id="romano" name="romano" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Converter para Inteiro</button>
                </form>

                <?php
                // Processa o formulário de conversão romano para inteiro
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Verifica se a entrada romana está definida
                if (isset($_POST['romano'])) {
                    // Converte a entrada para letras maiúsculas
                    $NumeroRomano = strtoupper($_POST['romano']);

                    // Verifica se a entrada romana contém apenas caracteres válidos
                    if (preg_match('/^[IVXLCDM]+$/', $NumeroRomano)) {
                        // Chama o método estático para converter romano para inteiro
                        $result = RomanoParaInteiro::romanToInt($NumeroRomano);

                        // Exibe o resultado
                        echo "<p class='mt-3'>O número romano $NumeroRomano é igual a $result em números inteiros.</p>";
                    } else {
                        // Exibe uma mensagem de erro se a entrada contiver caracteres inválidos
                        echo "<p class='mt-3 text-danger'>Por favor, insira um número romano válido.</p>";
                    }
                } else {
                    // Exibe uma mensagem de erro se a entrada não estiver definida
                    echo "<p class='mt-3 text-danger'>Por favor, insira um número romano.</p>";
                }
                }
                ?>

            </div>
        </div>
    
    </div>

</div>

<!-- Inclusão do rodapé novamente -->
<?php include '../atividade-1/includes/footer.php'; ?>

<!-- Inclusão do script do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.
