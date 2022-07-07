<?php $render('header'); ?>

    <h1>Editando Usuário</h1>
    <form method='POST' action='<?=$base?>/usuario/<?=$usuario['id']?>/edit'>
        <label>
            Nome:
            <input type="text" name="name" value="<?=$usuario['name']?>"/>
        </label><br/><br/>
        <label>
            Email:
            <input type="email" name="email" value="<?=$usuario['email']?>"/>
        </label><br/><br/>
        <label>
            <input type="submit" value="Salvar"/>
        </label>
    </form>
    
<?php $render('footer'); ?>