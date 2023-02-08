<?php require_once 'header.php';
require_once PATH_DAO . 'GameDAO.php';
session_destroy();
?>
<div class="main-container">
    <img src="<?= PATH_IMG ?>main-img-white.png" alt="logo" class="logo-site" draggable="false" />
    <div class="set-informations">
        <form action="./chooseWord.php" class="form-main-page" method="post">
            <label for="name">Nom du Premier Joueur</label>
            <input type="text" name="pseudo-player-one" id="name-one" placeholder="pseudo1" required />
            <label for="name">Nom du Deuxième Joueur</label>
            <input type="text" name="pseudo-player-two" id="name-two" placeholder="pseudo2" required />
            <button type="submit">Valider</button>
        </form>
    </div>
</div>
<?php require_once('footer.php'); ?>