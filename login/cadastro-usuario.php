
  <form enctype='multipart/form-data' method="POST" action="?pagina=salvar-usuario" id="form" >
    <input type="hidden" name="acao" value="cadastrar">

    <div class="barraDivisoria"><b>Cadastro</b></div> 
    <hr>
        <div class="caixa">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <label class="label">Nome completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" required> 
                </div>
                <div class="col-xs-12 col-sm-12">
                    <label class="label">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" required> 
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <label class="label">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" required> 
                </div>
                <div class="col-xs-12 col-sm-5">
                    <label class="label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required> 
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <label class="label">Foto de perfil</label>
                    <input type="file" class="form-control" id="foto_perfil" name="foto_perfil"> 
                </div>
            </div>

        </div>

        <center><div class="style-form-input full">
        <input type="hidden" name="cadastrar" value="cadastrar">
        <button class="btn-submit">Cadastrar</button>
    </div></center>

    </form>

      

