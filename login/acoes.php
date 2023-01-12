<?php
    switch(@$_REQUEST["acao"]){
        case "cadastrar":  
            ini_set ( 'display_errors' , 1); error_reporting (E_ALL);
            
            #pega os dados digitado no formulario.
            $nome      = $_POST["nome"];
            $celular   = $_POST["celular"];
            $email     = $_POST["email"];
            $senha     = password_hash($_POST["senha"], PASSWORD_DEFAULT);
            $foto_perfil = $_FILES['foto_perfil'];

            #verifica se tem email já cadastrados se tiver exibe mensagem de erro
            #se não faz o INSERT no banco de dados.
            if(consulta_email()==True){
                print "<script>alert('Não foi possivel realizar o cadastro! EMAIL já cadastrado');</script>";
                print "<script>location.href='?pagina=cadastro-usuario';</script>";
            }
            else{
                #se tiver datos no arquivo da foto de perfil eles realiza o processo para salvar a imagem do usuario e inserir todos os dados no banco de dados, se não ele insere uma foto padrao
                if(empty($foto_perfil['tmp_name'])== False) { #essa função verifica se está vazio ou não se a variavel estiver vazia ela retorna True se estiver preenchida retorna False
                    print "<script>alert('cheguei aqui');</script>";
                    
                    var_dump($foto_perfil);
                    if($foto_perfil['size'] > 2097152) { #se o arquivo da foto for maior de 2mb exibe uma mensagem de arquivo muito grande
                        print "<script>alert('Arquivo muito grande! maximo 2MB');</script>";   
                    }
                    
                    $pasta = "img-perfil-usuario/"; #pasta onde as imagens serão salvas
                    $nomeDoArquivo = $foto_perfil['name']; #pega o nome do arquivo enviado pelo usuario
                    $novoNomeDoArquivo = uniqid(); #uniqid é uma função que da um nome aleatorio pro arquivo
                    $extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION)); # pega a extensão do arquivo e coloca tudo em minusculo

                    if ($extensao != "jpg" && $extensao != "png" ) { # Se o arquivo for diferente de jpg e png ele exibe uma mensagem de erro 
                        die('Tipo de arquivo não aceito');
                        
                    }
                    $path = $pasta . $novoNomeDoArquivo . "." . $extensao; # onde o arquivo será salvo e o nome como se fosse o href dele

                    $deu_certo = move_uploaded_file($foto_perfil['tmp_name'], $path); # função que pega um arquivo e salva em outro local especificado apo´s a virgula retorna true se deu certo e false se não
                    var_dump($deu_certo);
                }
                else{
                    $path = "img-perfil-usuario/foto_padrao.png";
                    $deu_certo = True;
                    
                }
                if($deu_certo==true){
                    
                    $sql = "INSERT INTO tb_usuario (nome, email, senha, celular, foto_perfil) VALUES ('{$nome}', '{$email}', '{$senha}', '{$celular}','{$path}')";
                    $res  = $conexao->query($sql);
                    
                    if ($res==true){
                        print "<script>alert('Cadastrado com Sucesso!');</script>";
                        print "<script>location.href='?pagina=login';</script>";
                    }
                    else{
                        print "<script>alert('Não foi possivel realizar o cadastro!');</script>";
                        print "<script>location.href='?pagina=cadastro-usuario';</script>";
                    }

                }else{
                    print "<script>alert('cheguei aqui');</script>";
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
