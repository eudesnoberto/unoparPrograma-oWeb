<?php
include('layouts/header.php');

// Recebe a data de nascimento do usuário
$data_nascimento = $_POST['data_nascimento'];
$data_nascimento = date("d/m", strtotime($data_nascimento));

// Carrega o arquivo XML com os signos
$signos = simplexml_load_file("signos.xml");
$signo_encontrado = null;

foreach ($signos->signo as $signo) {
    $dataInicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
    $dataFim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
    $dataNascimento = DateTime::createFromFormat('d/m', $data_nascimento);

    if ($dataInicio > $dataFim) {
        if (($dataNascimento >= $dataInicio && $dataNascimento <= DateTime::createFromFormat('d/m', '31/12')) ||
            ($dataNascimento >= DateTime::createFromFormat('d/m', '01/01') && $dataNascimento <= $dataFim)) {
            $signo_encontrado = $signo;
            break;
        }
    } else {
        if ($dataNascimento >= $dataInicio && $dataNascimento <= $dataFim) {
            $signo_encontrado = $signo;
            break;
        }
    }
}
?>

<div class="container">
    <?php if ($signo_encontrado): ?>
        <div class="resultado-signo">
            <h2>Seu signo é: <?= $signo_encontrado->signoNome ?></h2>
            <p><?= $signo_encontrado->descricao ?></p>
        </div>
    <?php else: ?>
        <p class="text-center">Signo não encontrado para a data informada.</p>
    <?php endif; ?>
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</div>

</body>
</html>
