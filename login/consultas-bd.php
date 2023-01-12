<?php

# verifica se já existe esse email no banco de dados ------------------------------------------------------------------------------------ # 

function consulta_email(){
    include("conexao.php");
    $email = $_POST["email"];
    $sql = "SELECT email FROM tb_usuario WHERE email LIKE '$email' ";
    $sql = $conexao->query($sql);
    $row = $sql->fetch_row();
    return  $row;
}


# verifica se o usuario está cadastrado --------------------------------------------------------------------

function consulta_usuario(){
    include("conexao.php");
    $email= $_POST['email'];
    $sql = "SELECT * FROM tb_usuario WHERE email LIKE '$email' limit 1 ";
    $sql = $conexao->query($sql);
    return  $sql;
}

# busca o nome e o local da imagem de perfil do usuario

function consulta_foto($email){
    include("conexao.php");
    $sql = "SELECT foto_perfil FROM tb_usuario WHERE email LIKE '$email' ";
    $sql = $conexao->query($sql);
    $row = $sql->fetch_assoc();
    return  $row;

}