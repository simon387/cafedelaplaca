<?php include_once "util/constants.php" ?>
<?php include_once "util/translate.php" ?>
<!DOCTYPE html>
<html lang="<?php tr('en') ?>">
<?php include "components/head.php"; ?>
<body>
<?php include "components/topbar.php"; ?>
<?php include "components/header.php"; ?>
<?php include "components/sections/hero.php"; ?>
<main id="main">
	<?php include "components/sections/about.php"; ?>
	<?php include "components/sections/whyus.php"; ?>
	<?php include "components/sections/menu.php"; ?>
	<?php include "components/sections/special.php"; ?>
	<?php include "components/sections/events.php"; ?>
	<?php include "components/sections/bookatable.php"; ?>
	<?php include "components/sections/testimonials.php"; ?>
	<?php include "components/sections/gallery.php"; ?>
	<?php include "components/sections/chefs.php"; ?>
	<?php include "components/sections/contact.php"; ?>
</main>
<?php include "components/footer.php"; ?>
<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<?php include "components/jsimports.php"; ?>
</body>
</html>
