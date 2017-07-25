<?php /*

<jdoc:include type="modules" name=" " />
<jdoc:include type="message" />
<jdoc:include type="component" />

*/ ?>
<!DOCTYPE html>
<head>
<?php
/* отключаем mootools */
$headlink = $this->getHeadData();
unset($headlink['scripts']['/media/system/js/validate.js']);
unset($headlink['scripts']['/media/system/js/mootools-core.js']);
unset($headlink['scripts']['/media/system/js/mootools-more.js']);
unset($headlink['scripts']['/media/system/js/core.js']);
unset($headlink['scripts']['/media/jui/js/bootstrap.min.js']);
unset($headlink['scripts']['/media/jui/js/jquery-noconflict.js']);
unset($headlink['scripts']['/media/jui/js/jquery-migrate.min.js']);
$this->setHeadData($headlink);
if( isset($this->_script['text/javascript']) ) {
  $this->_script['text/javascript'] = preg_replace('%window\.addEvent\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script['text/javascript']);
  if( empty($this->_script['text/javascript']) )
  unset( $this->_script['text/javascript'] );
}
/* отключаем mootools */
unset($this->_generator); /* отключаем metagenerator */
/* $this->setGenerator('tro-lo-lo'); свой metagenerator */
?>
<jdoc:include type="head" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body class="">
<header>
	<div class="header">
		<a href="<?php echo $this->baseurl ?>" class="logo">
			<span class="logo__title">Твой праздник</span>
			<span class="logo__title-sm">Идеи праздника на каждый день!</span>
		</a>
		<div class="search">
			<input type="text" class="search__input" placeholder="поиск">
		</div>
	</div>
</header>
<div class="wrapper">
	<section class="content">
		<jdoc:include type="component" />
	</section>
	<!-- //= template/sidebar.html -->
</div>
<!--<script src="--><?php //echo $this->baseurl ?><!--/templates/--><?php //echo $this->template; ?><!--/js/jquery.min.js"></script>-->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

<script>
	$(document).ready(function() {
		$('.content').masonry({
			itemSelector: '.item'
		});
	});
</script>
</body>
</html>