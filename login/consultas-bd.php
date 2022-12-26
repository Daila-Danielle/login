<?php

# verifica se já existe essee email no banco de dados ------------------------------------------------------------------------------------ # 

function consulta_email(){
    include("conexao.php");
    $email = $_POST["email"];
    $sql = "SELECT email FROM tb_usuario WHERE email LIKE '$email' ";
    $sql = $conexao->query($sql);
    $row = $sql->fetch_row();
    return  $row;
}


function consulta_usuario(){
    include("conexao.php");
    $email= $_POST['email'];
    $sql = "SELECT * FROM tb_usuario WHERE email LIKE '$email' limit 1 ";
    $sql = $conexao->query($sql);
    return  $sql;
}
