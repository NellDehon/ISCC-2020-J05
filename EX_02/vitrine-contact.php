<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style/vitrine.css" >
    </head>
    <body>
    <?php ($nav_en_cours ='contact')?>
    <?php include 'header.php'; ?>
       
       
        <footer>
            <img src="logo_epitech.png">
        </footer>
        <h2>Contact</h2>
        <form action="/ma-page-de-traitement" method="post">
            <div class="p6">
                <label for="name"><br>Nom :</label>
                <input type="text" id="name" name="user_name">
                <label for="mail"><br>e-mail :</label>
                <input type="email" id="mail" name="user_mail">
                <label for="msg"><br>Message :</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
        </form>
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>
    </body>

</html>