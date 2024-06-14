<h1><?=$titre?></h1>
<div id="contact">
    <p>Une question ? Envie de découvrir le logiciel ? Des suggestions à apporter ? Vous pouvez nous contacter via nos réseaux sociaux, notre adresse de contact ou venir nous rendre visite.</p>
    <form action="index.php?action=mail" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <input class="cta submit" type="submit" value="Envoyer">
    </form>

</div>