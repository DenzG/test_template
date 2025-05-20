<?php
include_once("./connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
	<!--  Your Contents here -->
	  <div class="text-center">
		<p class="text-7xl text-blue-700">Welcome to <?php echo $site_name; ?></p>
	  </div>
</main>

<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php include './layouts/base.php'; ?>
<script src="./assets/js/default.js?=<?php echo $randomNumber; ?>"></script>