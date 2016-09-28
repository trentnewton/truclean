<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" <?php print $rdf_namespaces; ?> itemscope itemtype="http://schema.org/WebSite">
	<head profile="<?php print $grddl_profile; ?>">
		<title><?php print $head_title; ?></title>
		<?php print $head; ?>
		<?php print $styles; ?>
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