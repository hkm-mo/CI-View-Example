<?php
$this->add_css_file('/css/layout1.css');
?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->get_title(); ?></title>
		<?php echo $this->place_css_files(); ?>
	</head>
	<body>
		<div class="main-container">
			<h1>Layout 1</h1>
			<?php $this->place_body(); ?>
		</div>
		<div class="wrap">
			<div class="cell">A</div>
			<div class="cell">B</div>
		</div>
	</body>
</html>