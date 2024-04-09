<header>
    <nav class="nav">
        <!-- logo -->
        <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') : ?>
            <img src="./assets/image/logo.jpeg" alt="logo Team Plein Gaz 72" class="nav__logo" />
        <?php else : ?>
            <img src="../../assets/image/logo.jpeg" alt="logo Team Plein Gaz 72" class="nav__logo" />
        <?php endif; ?>
        <!-- Menu -->
        <ul class="nav__menuList inactive" id="js-menuList">
            <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') : ?>
                <li>
                    <a href="./PHP/index.php">Accueil</a>
                </li>
                <li>
                    <a href="./PHP/events.php">Nos évènements</a>
                </li>
                <li>
                    <a href="./PHP/pilots.php">Nos pilotes</a>
                </li>
                <!-- <li>
                        <a href="./PHP/team.php">Le ❤️ de Team</a>
                    </li> -->
                <li>
                    <a href="./PHP/contact.php">Contact</a>
                </li>
                <!-- header for others pages -->
            <?php else : ?>
                <li><a href="../index.php"> Accueil</a></li>
                <li><a href="events.php">Nos évènements</a></li>
                <li><a href="pilots.php">Nos Pilotes</a></li>
                <!-- <li><a href="team.php">Le ❤️ de Team</a></li> -->
                <li><a href="contact.php">Contact</a></li>
            <?php endif; ?>


        </ul>
        <!-- icone burger menu -->
        <i class="fa-solid fa-bars icons--bars fa-xl" id="js-Open"></i>

        <i class="fa-solid fa-xmark icons--xmark fa-xl inactive" id="js-Close"></i>
    </nav>
</header>