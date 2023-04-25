<h1>Contactez-nous</h1>
<?php if(isset($success)): ?>
    <?php if($success): ?>
        <p>Votre message a bien été envoyé !</p>
    <?php else: ?>
        <p>Une erreur s'est produite lors de l'envoi de votre message.</p>
    <?php endif; ?>
<?php endif; ?>
<form method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <div>
        <button type="submit" name="submit">Envoyer</button>
    </div>
</form>

