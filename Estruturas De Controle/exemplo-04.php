<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="ok">
</form>

<?php

if (isset($_GET)) {
    $nome = $_GET["nome"];
    $nascimento = $_GET["nascimento"];

    echo "'$nome' nasceu em '$nascimento'";
}

// $meses = array(
//     "Janeiro", "Fevereiro", "Março",
//     "Abril", "Maio", "Junho", "Julho",
//     "Agosto", "Setembro", "Outubro",
//     "Novembro", "Dezembro"
// );

// foreach ($meses as $index => $mes) {
//     echo $index . "<br>" . $mes . "<br>";
// }
