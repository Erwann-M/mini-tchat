<div class="form__container">
    <h2 class="page__title">Connexion</h2>

    <form action="index.php" method="post" class="form">
        <?php
            $form = new Form();
            $form->input('pseudo', 'Votre pseudo');
            $form->input('password', 'Votre mot de passe');
            $form->submit('Se connecter');
        ?>
        <button class="btn__general"><a href="index.php?page=inscription" class="btn__link">S'inscrire</a></button>
    </form>
</div>
