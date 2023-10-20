<!-- main content output -->

<!--  <h3>Total de clientes: <//?php echo $amount_of_clientes; ?></h3>
        <h3>Total de clientes (via AJAX)</h3>   -->
        <div id="javascript-ajax-result-box"></div>

<!-- <h3>Lista de clientes (dados do model)</h3> -->
<a href="<?php echo URL . 'produtos/insert'; ?>" class="btn btn-primary" id="btn-novo-cliente">
 <i class="fas fa-user-plus"></i>
 Novo Produto 
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
            <?php foreach ($produtos as $produto) { ?>
                <tr>
                    <td><?php if (isset($produto->id)) echo htmlspecialchars($produto->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($produto->descricao)) echo htmlspecialchars($produto->descricao, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($produto->unidade)) echo htmlspecialchars($produto->unidade, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($produto->valor)) echo htmlspecialchars($produto->valor, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'produtos/delete/' . htmlspecialchars($produto->id, ENT_QUOTES, 'UTF-8'); ?>">Excluir</a></td>
                    <td><a href="<?php echo URL . 'produtos/edit/' . htmlspecialchars($produto->id, ENT_QUOTES, 'UTF-8'); ?>">Editar</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
