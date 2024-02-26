<?php

if (isset($_POST['acao'])) {
    // echo 'enviado';
    $arquivo = $_FILES['file'];

    $arquivo_nome = explode('.', $arquivo['name']);

    if ($arquivo_nome[sizeof($arquivo_nome) - 1] != 'jpg') {
        die('Você não pode fazer upload deste tipo de arquivo');
    } else {
        echo 'Upload feito com sucesso';
        move_uploaded_file($arquivo['tmp_name'], '../uploads/' . $arquivo['name']);
    }
}


?>

<!-- Formulário HTML para upload de arquivos -->
<form enctype="multipart/form-data" action="" method="POST">

    <input type="file" name="file">

    <input type="submit" name="acao" value="Enviar">
</form>