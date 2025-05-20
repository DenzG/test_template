<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> <?php echo $site_name; ?> </title>
	<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<?php if ($in_concat === true) { ?>
		<link rel="shortcut icon" href="./assets/img/logo/favicon.ico">
		<?php include './layouts/script.php'; ?>
		<?php include './layouts/styles.php'; ?>
	<?php } else { ?>
		<link rel="shortcut icon" href="../assets/img/logo/favicon.ico">
		<?php include '../layouts/script.php'; ?>
		<?php include '../layouts/styles.php'; ?>
	<?php } ?>
</head>

<?php if ($in_concat === true) { ?>
	<body data-bs-theme="light">
		<!-- <?php // include './layouts/header.php'; ?> -->
		<div class="">
			<?php echo $content; ?>
		</div>
		<!-- <?php // include './layouts/footer.php'; ?> -->
<?php } else { ?>
	<body data-bs-theme="light">
		<!-- <?php // include '../layouts/header.php'; ?> -->
		<div class="page">
			<?php echo $content; ?>
		</div>
		<!-- <?php // include '../layouts/footer.php'; ?> -->
	<?php } ?>
	</body>
</html>