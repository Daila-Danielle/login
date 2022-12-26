<!-- 
CREATE TABLE tb_usuario(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255),
email VARCHAR(255) UNIQUE,
senha VARCHAR(255),
celular VARCHAR(150)) -->


<!-- faz a conexao com o banco de dados -->
<?php
    #define as informações de conexão com o banco de dados
    define('HOST', '');
    define('USER', '');
    define('PASS', '');
    define('BASE', '');

    $conexao = new MySQLi(HOST, USER, PASS, BASE);
    if(!$conexao) {
        echo 'Deu ruim parça!';
    }
