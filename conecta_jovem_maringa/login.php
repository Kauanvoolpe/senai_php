<?php
    session_start();
    include 'conecta.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Usa prepared statements para prevenir injeção de SQL
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $dados = $result->fetch_assoc();
        // Verifica se a senha fornecida corresponde ao hash no banco de dados
        if (password_verify($senha, $dados['senha'])) {
            $_SESSION["user"] = $dados['login'];
            header("Location: inicio.php"); // Redirecionamento via PHP
            exit();
        }
    }

    // Se o login ou a senha estiverem incorretos
    echo ("<script>alert('Login ou senha inválido! Tente novamente!');</script>");
    echo ("<script>window.location.replace('index.php');</script>");
    
    $stmt->close();
    mysqli_close($conn);
?>