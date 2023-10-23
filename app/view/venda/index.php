<!-- main content output -->

<!--  <h3>Total de clientes: <//?php echo $amount_of_clientes; ?></h3>
        <h3>Total de clientes (via AJAX)</h3>   -->
        <div id="javascript-ajax-result-box"></div>

<!-- <h3>Lista de clientes (dados do model)</h3> -->
<a href="<?php echo URL . 'vendas/insert'; ?>" class="btn btn-primary" id="btn-novo-cliente">
 <i class="fas fa-user-plus"></i>
 Novo Venda 
</a> 
 </br>
</br>
<table id="table-cliente" class="table-striped">
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>ID</td>
                <td>Descrição</td>
                <td>Unidade</td>
                <td>Preço</td>
                <td>Excluir</td>
                <td>Atualizar</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($vendas as $venda) { ?>
                <tr>
                    <td><?php if (isset($venda->id)) echo htmlspecialchars($venda->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->descricao)) echo htmlspecialchars($venda->descricao, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->unidade)) echo htmlspecialchars($venda->unidade, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($venda->valor)) echo htmlspecialchars($venda->valor, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'vendas/delete/' . htmlspecialchars($venda->id, ENT_QUOTES, 'UTF-8'); ?>">Excluir</a></td>
                    <td><a href="<?php echo URL . 'vendas/edit/' . htmlspecialchars($venda->id, ENT_QUOTES, 'UTF-8'); ?>">Editar</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
