<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Venda</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo URL; ?>venda/add" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                    <!-- text input -->
                        <div class="form-group">
                            <label>Cliente</label>
                            <input type="text" name="cliente" value="" required class="form-control"/>
                            <input type="hidden" name="cliente_id" value="" required class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Vendedor</label>
                            <input type="text" name="vendedor" value="" required class="form-control"/>
                            <input type="hidden" name="vendedor_id" value="" required class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" name="cpf" value="" required class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" name="descricao" value="" required class="form-control"/>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Quantidade</label>
                            <input autofocus type="text" name="quantidade" value="" required class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">,
                        <div class="form-group">
                            <label>Tabela</label>
                            <input autofocus type="text" name="tabela" value="" required class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Valor Unit.</label>
                            <input autofocus type="text" name="valor" value="" required class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Desconto</label>
                            <input autofocus type="text" name="desconto" value="" required class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Valor Total</label>
                            <input autofocus type="text" name="valor_total" value="" required class="form-control" />
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Produto</th>
                      <th>Unid.</th>
                      <th>QTD</th>
                      <th>Valor</th>
                      <th>Valor Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($vendas as $venda) { ?>
                <tr>
                    <td><?php if (isset($venda->id)) echo htmlspecialchars($venda->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->descricao)) echo htmlspecialchars($venda->descricao, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->unidade)) echo htmlspecialchars($venda->unidade, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->quantidade)) echo htmlspecialchars($venda->valor, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->valor)) echo htmlspecialchars($venda->valor, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->valor)) echo htmlspecialchars(($venda->valor * $venda->quantidade), ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
                <br>
                <input type="submit" name="submit_add_venda" value="Enviar" class="btn btn-primary"/>
                <br/>
            </form>
        </div>
    </div>
  </div>
