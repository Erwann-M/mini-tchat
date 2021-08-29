<div class="form__container">
    <h2 class="page__title">Inscription</h2>

    <form action="index.php" method="post" class="form">
        <?php
            $form = new Form();
            $form->input('text', 'Votre pseudo');
            $form->setInput('password');
            $form->input('password1', 'Votre mot de passe');
            $form->input('password2', 'retapez le mdp');
            $form->submit('S\'inscrire');
        ?>
    </form>
</div>