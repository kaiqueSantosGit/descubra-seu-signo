<?php include('layouts/header.php'); ?>

<?php
// Recebe a data de nascimento e formata
$data_nascimento = $_POST['data_nascimento'];
$data_nascimento_formatada = date("d/m", strtotime($data_nascimento));

// Carrega o arquivo XML
$signos = simplexml_load_file("signos.xml");

// Converte a data de nascimento para o formato necessário
$dataNascimento = DateTime::createFromFormat('d/m', $data_nascimento_formatada);

// Inicializa a variável para armazenar o signo
$signo_encontrado = null;

// Loop para procurar o signo
foreach ($signos->signo as $signo) {
    $dataInicio = DateTime::createFromFormat('d/m', (string) $signo->dataInicio);
    $dataFim = DateTime::createFromFormat('d/m', (string) $signo->dataFim);

    // Ajuste para considerar datas que cruzam o ano (como Capricórnio: 22/12 - 20/01)
    if ($dataInicio > $dataFim) {
        if ($dataNascimento >= $dataInicio || $dataNascimento <= $dataFim) {
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
    <h1>Seu Signo</h1>
    <?php if ($signo_encontrado): ?>
        <h2><?php echo $signo_encontrado->signoNome; ?></h2>
        <p><?php echo $signo_encontrado->descricao; ?></p>
    <?php else: ?>
        <p>Signo não encontrado. Verifique a data informada.</p>
    <?php endif; ?>
    <a href="index.php" class="btn btn-secondary">Voltar</a>
</div>

<?php include('layouts/footer.php'); ?>
