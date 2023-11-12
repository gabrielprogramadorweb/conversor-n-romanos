<?php
use class\InteiroParaRomano;
use class\RomanoParaInteiro;
require_once("../atividade-1/class/InteiroParaRomano.php");
require_once('../atividade-1/class/RomanoParaInteiro.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Romano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../atividade-1/css/style.css">
</head>

<body >

<?php include '../atividade-1/includes/footer.php'; ?>

    
   
<div class="container">
    <div class="row mt-5">
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
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['inteiro'])) {
                    $NumeroInteiro = intval($_POST['inteiro']);
                    $result = InteiroParaRomano::intToRoman($NumeroInteiro);

                    echo "<p class='mt-3'>O número inteiro $NumeroInteiro é igual a $result em algarismos romanos.</p>";
                } else {
                    echo "<p class='mt-3 text-danger'>Por favor, insira um número inteiro.</p>";
                }
            }
            ?>
        </div>

        <div class="col-md-6">
            <!-- Formulário para converter número romano em número inteiro -->
            <h2>Romano em número inteiro</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="romano" class="form-label">Digite um número romano:</label>
                    <input type="text" id="romano" name="romano" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Converter para Inteiro</button>
            </form>

            <?php
            // Processa o formulário
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['romano'])) {
                    $NumeroRomano = strtoupper($_POST['romano']);
                    $result = RomanoParaInteiro::romanToInt($NumeroRomano);

                    echo "<p class='mt-3'>O número romano $NumeroRomano é igual a $result em números inteiros.</p>";
                } else {
                    echo "<p class='mt-3 text-danger'>Por favor, insira um número romano.</p>";
                }
            }
            ?>
        </div>
    </div>
    <div class="espaco"></div>
    </div>
    <?php include '../atividade-1/includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
