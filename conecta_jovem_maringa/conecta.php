<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "conecta_jovem_maringa";
    //habilita os relatórios de erro da classe mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $conn = new mysqli($hostname, $username, $password, $database);
        //define o charset para UTF-8
        $conn -> set_charset("utf8mb4");
    } catch (mysqli_sql_exception $e) {
        error_log("Erro na conexão com o BD:". $e->getMessage());
        //mensagem genérica para o usuário
        die("Ocorreu um erro interno no servidor do BD.");
    }
?>