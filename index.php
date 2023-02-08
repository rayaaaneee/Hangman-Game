<?php require_once 'header.php';
require_once PATH_DAO . 'GameDAO.php';

session_destroy();

$dao = new GameDAO();
$games = $dao->getLastGames();

?>
<div class="main-container">
    <div class="container-index-page main-container-recent-events">
        <div class="title-recents-events">
            <img src="<?= PATH_IMG ?>clock.png" alt="logo" class="logo-recent-events" draggable="false" />
            <h2>Dernières parties : </h2>
        </div>
        <div class="all-informations-games">
            <?php
            $i = 0;
            foreach ($games as $game) { ?>
                <div class="game">
                    <p><?= $game['player1']; ?> a joué contre <?= $game['player2']; ?> !</p>
                    <img src="<?= PATH_IMG ?>crown.png" alt="crown" class="logo-winner" draggable="false" />
                    <p><?= $game['winner']; ?> est le grand vainqueur, il a retrouvé le mot "<?= $game['word'] ?>" en <?= $game['errors']; ?> erreurs !</p>
                </div>
            <?php $i++;
            }
            ?>
        </div>
    </div>
    <div class="container-index-page main-container-start-game">
        <img src="<?= PATH_IMG ?>main-img-white.png" alt="logo" class="logo-site" draggable="false" />
        <div class="set-informations">
            <form action="./chooseWord.php" class="form-main-page" method="post">
                <label for="name">Nom du Premier Joueur</label>
                <input type="text" name="pseudo-player-one" id="name-one" placeholder="pseudo1" maxlength="15" required />
                <label for="name">Nom du Deuxième Joueur</label>
                <input type="text" name="pseudo-player-two" id="name-two" placeholder="pseudo2" maxlength="15" required />
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>