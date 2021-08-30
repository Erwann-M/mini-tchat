<div class="home__container">
    <div class="message__container">
    
    </div>
    <div class="textarea__container">
        <form action="index.php" method="post" class="textarea">
            <?php
                $form = new Form();
                $form->setInput("text");
                $form->textArea("message", "Votre Message ici", "message");
                $form->submit("Envoyer");
            ?>
        </form>
    </div>
</div>