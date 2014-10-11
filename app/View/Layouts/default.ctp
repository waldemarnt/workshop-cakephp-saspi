<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(
			array(
			'bootstrap',
			'font-awesome',
			'jquery-ui',
			'fullcalendar',
			'prettyPhoto',
			'rateit',
			'bootstrap-datetimepicker.min',
			'jquery.cleditor',
			'uniform.default',
			'bootstrap-toggle-buttons',
			'style',
			'bootstrap-responsive',
			'select2'
			)
		);

		echo $this->Html->script(
			array(
				'jquery',
				'bootstrap',
				'jquery-ui-1.9.2.custom.min',
				'fullcalendar.min',
				'jquery.rateit.min',
				'jquery.prettyPhoto',
				'excanvas.min',
				'jquery.flot',
				'jquery.flot.resize',
				'jquery.flot.pie',
				'jquery.flot.stack',
				'jquery.noty',
				'themes/default',
				'themes/default',
				'layouts/bottom',
				'layouts/topRight',
				'layouts/top',
				'sparklines',
				'jquery.cleditor.min',
				'bootstrap-datetimepicker.min',
				'jquery.uniform.min',
				'jquery.toggle.buttons',
				'filter',
				'charts',
				'custom',				
				'select2'

				)
			);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
		<!-- include Elements/header.ctp -->
		<?php 
			echo $this->element('fixed-top');
			echo $this->element('header');
		 ?>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->element('sidebar'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->element('sql_dump'); ?>
		<?php echo $this->element('footer'); ?>
</body>
</html>
