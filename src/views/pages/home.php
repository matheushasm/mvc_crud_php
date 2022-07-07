<?php $render('header'); ?>
<a href="<?=$base?>/novo">Novo Usuário</a>

<h1>Usuários</h1>
<table border="1" width="100%">
    <th>ID</th>  
    <th>Nome</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['name']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="<?=$base?>/usuario/<?=$usuario['id']?>/edit">[ editar ]</a>
                <a onclick="return confirm('Excluir <?=$usuario['name']?>?')" href="<?=$base?>/usuario/<?=$usuario['id']?>/del" >[ excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>