<?php
    switch(@$_REQUEST["acao"]){
        case "cadastrar":  
            #pega os dados digitado no formulario.

            $nome      = $_POST["nome"];
            $celular   = $_POST["celular"];
            $email     = $_POST["email"];
            $senha     = password_hash($_POST["senha"], PASSWORD_DEFAULT);


            #verifica se tem email já cadastrados se tiver exibe mensagem de erro
            #se não faz o INSERT no banco de dados.
            if(consulta_email()==True){
                print "<script>alert('Não foi possivel realizar o cadastro! EMAIL já cadastrado');</script>";
                print "<script>location.href='?pagina=cadastro-usuario';</script>";
            }
            else{
                $sql = "INSERT INTO tb_usuario (nome, email, senha, celular)
                VALUES ('{$nome}', '{$email}', '{$senha}', '{$celular}')";
                $res  = $conexao->query($sql);
                if ($res==true){
                    print "<script>alert('Cadastrado com Sucesso!');</script>";
                    print "<script>location.href='?pagina=login';</script>";
                }
                else{
                    print "<script>alert('Não foi possivel realizar o cadastro!');</script>";
                    print "<script>location.href='?pagina=cadastro-usuario';</script>";
                }
            }
            
        break;
        case "verificar":
            session_start();
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $consulta = consulta_usuario();
            $usuario = $consulta->fetch_assoc();
            
            if (password_verify($senha, $usuario['senha']) ) {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('location:?pagina=home');
                print "<script>alert('Login efetuado!');</script>";
               # print "<script>location.href='?pagina=home';</script>";
            }
            else {
                print "<script>alert('Email ou senha incorretos!');</script>";
                unset ($_SESSION['email']);
                unset ($_SESSION['senha']);
                print "<script>location.href='?pagina=login';</script>";
            }
        break;

        default:
        print 'boiando9';
    
    }
