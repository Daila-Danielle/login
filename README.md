<h1>Sistema de login e cadastro de usuario usando a linguagem PHP</h1>
→ Resumo
Projeto de uma cópia do Instagram. Ele conta com a maioria das funções do Instagram real. Desde criação de conta, até realizar publicações. O instafake é constituído de sistema conectado a um banco de dados, onde ficam salvos os dados de cadastro de usuários da rede social, e todas suas postagens. Outro diferencial é que as senhas são gravadas criptografadas criando um nível de proteção maior.

→ Tecnologias
→ Python
→ Flask
→ Flask Session
→ Mysql
→ HTML5, CSS3
→ bcrypt
→ smtplib

→ Descrição detalhada
► Banco de dados
O Instafake possui um banco de dados desenvolvido no MySQL Workbench.
O db_instafake possui as tabelas usuario_dadospessoais e publicacoes que possuem uma relação (1,n)

→ Modelo Físico:


► Cadastrar Usuários

<h1>Tela de cadastro de usuario</h1>

<p> Nessa tela o 'usuario' irá fazer o cadastro conforme solicitado nos campos</p>
<img src= "https://user-images.githubusercontent.com/111146154/209555437-42811575-8bbb-4d68-a0d7-a4c1c87a9604.png">
<p>  será feita uma verificação para ver se o Email já está cadastrado no banco de dados, se estiver será exibida uma mensagem e será redirecionado para a tela de cadastro </p>
<img src= "https://user-images.githubusercontent.com/111146154/209555462-36361fe9-48ec-49f1-9c2d-211176bfec87.png">
<p> Se não tiver um email já cadastrado, será exibido uma mensagem de sucesso e será redirecionado para a tela de login </p>
<img src= "https://user-images.githubusercontent.com/111146154/209555512-baf1c3bb-8418-4980-b3eb-13a23946b6f5.png">
<h1>Tela de login</h1>
<p> Nessa tela o 'usuario' irá digitar o email que utilizou no cadastro e a senha, será feita uma verificação para ver se o email e a senha estão corretos de acordo com o banco de dados</p>
<img src= "https://user-images.githubusercontent.com/111146154/209554028-9cdc59fb-5330-45cd-9246-7130cc2e2d14.png">
<p> Caso o email ou a senha não estejam corretos é exibido uma mensagem de erro e retorna para a pagina de login</p>
<img src= "https://user-images.githubusercontent.com/111146154/209554741-69b8a6f2-08ed-4c43-a30a-49daff926401.png">
<p> Caso os dados estejam corretos é redirecionado para a pagina 'home'</p>
<img src = "https://user-images.githubusercontent.com/111146154/209554940-a50628ae-a8eb-44c5-88c3-7f65fbe97c93.png">
<p> Tem a opção de 'sair' onde será deslogado da sessão e voltará para pagina de login</p>
<img src = "https://user-images.githubusercontent.com/111146154/209555393-8a6f780c-d333-46a5-b86b-ad0749a6e640.png">
