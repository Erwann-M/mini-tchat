
<!-- appel de la fonction pour ajouter un utilisateur a la bdd 
(elle retourne true ou false en fonction de si l'insertion en bdd c'est bien passé ou non ) -->

<?php if (addUserInDatabase($bdd)) : ?>
    <div class="error__container">
        <p class='message__404'>Ton compte a bien été créer !!! </p>
        <button class='btn__general'><a href='index.php?page=connexion' class='btn__link'>Connexion</a></button>
    </div>
<?php else : ?> 
    <div class="error__container">
        <p class='message__404'>Un probleme est survenu, veuillez reessayer...</p>
        <button class='btn__general'><a href='index.php?page=inscription' class='btn__link'>Rééssayer</a></button>
    </div>
<?php endif ?>
