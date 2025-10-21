<?php
// Defina a senha que você quer usar aqui
$senha_texto_plano = 'admin123';

// Gera o hash da senha
$hash_da_senha = password_hash($senha_texto_plano, PASSWORD_DEFAULT);

echo "<h1>Gerador de Senha e Comando SQL</h1>";
echo "<p><b>Senha em texto plano:</b> " . htmlspecialchars($senha_texto_plano) . "</p>";
echo "<p><b>Hash gerado para a senha:</b></p>";
echo "<textarea rows='3' cols='80' readonly>" . htmlspecialchars($hash_da_senha) . "</textarea>";
echo "<hr>";
echo "<h2>Comando SQL para Inserir o Usuário</h2>";
echo "<p>Copie e cole o código abaixo na aba 'SQL' do seu phpMyAdmin para criar o usuário 'admin' com essa senha:</p>";

$login = 'admin';
$sql_insert = "INSERT INTO usuario (login, senha) VALUES ('" . $login . "', '" . $hash_da_senha . "');";

echo "<textarea rows='4' cols='80' readonly>" . htmlspecialchars($sql_insert) . "</textarea>";

?>
