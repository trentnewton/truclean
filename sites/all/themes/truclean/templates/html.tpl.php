<!doctype html<?php print $rdf_header; ?>>
<html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"<?php print $rdf_namespaces; ?> itemscope itemtype="http://schema.org/WebSite">
	<head<?php print $rdf_profile?>>
		<title><?php print $head_title; ?></title>
		<link type="text/plain" rel="author" href="/humans.txt">
		<?php print $head; ?>
		<?php print $styles; ?>
		<link rel="stylesheet" type="text/css" href="https://web.salesin.com/App_Themes/Main/LoginSection.css" />
	</head>
	<body id="top" class="<?php print $classes; ?>" <?php print $attributes;?> itemscope itemtype="http://schema.org/WebPage">
		<?php include ($directory."/partials/svg.php"); ?>
		<div id="skip-link">
			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $scripts; ?>
		<script language='javascript' type='text/javascript' src="https://web.salesin.com/Javascript/md5.js"></script>
		<script language='javascript' type='text/javascript' src="https://web.salesin.com/Javascript/LoginControlGeneration.js"></script>
		<?php print $page_bottom; ?>
	</body>
</html>