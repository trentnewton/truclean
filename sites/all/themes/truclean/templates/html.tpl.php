<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php print $head_title; ?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php global $base_path; print $base_path; ?><?php print $directory; ?>/dist/assets/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php global $base_path; print $base_path; ?><?php print $directory; ?>/dist/assets/img/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php global $base_path; print $base_path; ?><?php print $directory; ?>/dist/assets/img/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php global $base_path; print $base_path; ?><?php print $directory; ?>/dist/assets/img/manifest.json">
	<link rel="mask-icon" href="<?php global $base_path; print $base_path; ?><?php print $directory; ?>/dist/assets/img/safari-pinned-tab.svg" color="#286bb3">
	<meta name="theme-color" content="#ffffff">
	<?php print $styles; ?>
	<?php print $head; ?>
	</head>
	<body id="top" class="<?php print $classes; ?>" <?php print $attributes;?> itemscope itemtype="http://schema.org/WebPage">
		<?php include ($directory."/partials/svg.php"); ?>
		<div id="skip-link">
			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $scripts; ?>
		<?php print $page_bottom; ?>
	</body>
</html>