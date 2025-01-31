		<!-- footer fichier footer = footer.scss + bootstrap -->
		<footer class="footer">
			<ul class="footer__networks">
				<!-- Footer for index.php -->
				<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') : ?>
					<li>
						<a class="" target="_blank" href="https://www.facebook.com/pleingaz.soixantedouze/?locale=fr_FR">
							<img src="./assets/image/icons8-facebook-nouveau-50.png" alt="Facebook" class="footer__networks--logo" /></a>
					</li>
					<li>
						<a target="_blank" href="https://www.instagram.com/plein_gaz_72/">
							<img src="./assets/image/icons8-instagram-50.png" alt="Instagram" class="footer__networks--logo" /></a>
					</li>
					<!-- footer for the other pages -->
				<?php else : ?>
					<li>
						<a target="_blank" href="https://www.facebook.com/pleingaz.soixantedouze/?locale=fr_FR"><img src="../assets/image/icons8-facebook-nouveau-50.png" alt="Facebook" class="networks__logo" /></a>
					</li>
					<li>
						<a target="_blank" href="https://www.instagram.com/plein_gaz_72/">
							<img src="../assets/image/icons8-instagram-50.png" alt="Instagram" class="networks__logo" /></a>
					</li>
				<?php endif; ?>
			</ul>
			<div class='footer__legals'>
				© 2025 Team Plein Gaz 72. Tous droits réservés.
			</div>
		</footer>