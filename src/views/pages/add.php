<?php $render('header'); ?>

    <h1>Adicionando Usuário</h1>
    <form method='POST' action='<?=$base?>/novo'>
        <label>
            Nome:
            <input type="text" name="name" />
        </label><br/><br/>
        <label>
            Email:
            <input type="email" name="email" />
        </label><br/><br/>
        <label>
            <input type="submit" value="Criar"/>
        </label>
    </form>
    
<?php $render('footer'); ?>