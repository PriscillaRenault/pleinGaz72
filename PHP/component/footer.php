		<!-- footer fichier footer = footer.scss + bootstrap -->
		<footer class="container-fluid text-center bg-primary mt-2">
			<ul class="row m-4">
				<!-- Footer for index.php -->
				<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') : ?>
					<li class="col m-2">
						<a class="" target="_blank" href="https://www.facebook.com/pleingaz.soixantedouze/?locale=fr_FR"><img src="/PLEINGAZ72/assets/image/icons8-facebook-nouveau-50.png" alt="Facebook" class="networks__logo" /></a>
					</li>
					<li class="col m-2">
						<a class="" target="_blank" href="https://www.instagram.com/plein_gaz_72/">
							<img src="/PLEINGAZ72/assets/image/icons8-instagram-50.png" alt="Instagram" class="networks__logo" /></a>
					</li>
					<!-- footer for the other pages -->
				<?php else : ?>
					<li class="col m-2">
						<a class="" target="_blank" href="https://www.facebook.com/pleingaz.soixantedouze/?locale=fr_FR"><img src="../assets/image/icons8-facebook-nouveau-50.png" alt="Facebook" class="networks__logo" /></a>
					</li>
					<li class="col m-2">
						<a class="" target="_blank" href="https://www.instagram.com/plein_gaz_72/">
							<img src="../assets/image/icons8-instagram-50.png" alt="Instagram" class="networks__logo" /></a>
					</li>
				<?php endif; ?>
			</ul>
		</footer>