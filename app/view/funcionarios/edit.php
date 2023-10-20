<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edição de Funcionário</h3>
        </div>
        <div class="card-body">
        <form action="<?php echo URL; ?>clientes/update" method="POST">
          <div class="row">
            <div class="col-sm-6">
            <input type="hidden" name="cliente_id" value="<?php echo htmlspecialchars($funcionario->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <!-- text input -->
              <div class="form-group">
                 <label>Nome</label>
                 <input type="text" name="razao_social" value="<?php echo htmlspecialchars($cliente->nome, ENT_QUOTES, 'UTF-8'); ?>" required class="form-control"/>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                     <label>CPF</label>
                    <input autofocus type="text" name="cpf" value="<?php echo htmlspecialchars($funcionario->cpf, ENT_QUOTES, 'UTF-8'); ?>" required class="form-control" />
                </div>
            </div>
         </div>
            <!-- fim razao social  nome fantazia -->
            <div class="row">
            <div class="col-sm-4">
               <div class="form-group">
                  <label>Telefone</label>
                  <input type="text" name="telefone" value="<?php echo htmlspecialchars($funcionario->telefone, ENT_QUOTES, 'UTF-8'); ?>" id="telefone" class="form-control"/>
               </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                  <label for="estado">Perfil</label>
                  <select class="custom-select form-control-border" name="perfil" id="perfil">
                  <option value="AC">Vendedor</option>
                     <option value="AL">Administrador</option>
                     <option value="AP">Cliente</option>
                  </select>
                 </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="telefone" value="<?php echo htmlspecialchars($funcionario->telefone, ENT_QUOTES, 'UTF-8'); ?>" id ="telefone" required class="form-control"/>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" value="<?php echo htmlspecialchars($usuario->password, ENT_QUOTES, 'UTF-8'); ?>" id ="telefone" required class="form-control"/>
               </div>
            </div>
        </div> <!--- end row 2 -->
        
        <div class="row">
                <input type="submit" name="submit_update_cliente" value="Enviar" class="btn btn-primary"/>
            </div>
            <br/>
       </form>
        </div>
    </div>
  </div>    