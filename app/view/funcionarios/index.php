<div id="javascript-ajax-result-box"></div>
<a href="<?php echo URL . 'funcionarios/insert'; ?>" class="btn btn-primary" id="btn-novo-cliente">
    <i class="fas fa-user-plus"></i>
    Novo Funcionario
</a>
<br>
<table id="table-cliente" class="table-striped">
    <thead style="background-color: #ddd; font-weight: bold;">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Perfil</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($funcionarios as $funcionario) { ?>
        <tr>
            <td><?php if (isset($funcionario->id)) echo htmlspecialchars($funcionario->id, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($funcionario->nome)) echo htmlspecialchars($funcionario->nome, ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td><?php if (isset($funcionario->cpf)) echo htmlspecialchars($funcionario->cpf, ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td>
                <?php if (isset($funcionario->cpf)) echo htmlspecialchars($funcionario->perfil, ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td>
                <a href="<?php echo URL . 'funcionarios/delete/' . htmlspecialchars($funcionario->id, ENT_QUOTES, 'UTF-8'); ?>">Excluir</a>
            </td>
            <td>
                <a href="<?php echo URL . 'funcionarios/edit/' . htmlspecialchars($funcionario->id, ENT_QUOTES, 'UTF-8'); ?>">Editar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>