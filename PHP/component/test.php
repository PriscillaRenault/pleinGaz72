<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') : ?>
    <li>
        <a href="/PLEINGAZ72/index.php">Accueil</a>
    </li>
    <li>
        <a href="/PLEINGAZ72/PHP/events.php">Nos évènements</a>
    </li>
    <li>
        <a href="/PLEINGAZ72/PHP/pilots.php">Nos pilotes</a>
    </li>
    <!-- <li>
                        <a href="/PHP/team.php">Le ❤️ de Team</a>
                    </li> -->
    <li>
        <a href="/PLEINGAZ72/PHP/contact.php">Contact</a>
    </li>
    <!-- header for others pages -->
<?php else : ?>
    <li><a href="../../index.php"> Accueil</a></li>
    <li><a href="../events.php">Nos évènements</a></li>
    <li><a href="../pilots.php">Nos Pilotes</a></li>
    <!-- <li><a href="../team.php">Le ❤️ de Team</a></li> -->
    <li><a href="../contact.php">Contact</a></li>
<?php endif; ?>