<?php $this->load->helper('form'); ?>
<div data-role="page">
	<div data-role="header">
		<a href="<?php echo base_url(); ?>welcome" data-ajax ="false" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1><?php echo $title; ?></h1>
	</div>
	<div class="ui-grid-b">
		<div class="ui-block-a mobile-grid-header">&nbsp;</div>
		<div class="ui-block-b mobile-grid-header date-block">Date</div>
		<div class="ui-block-c mobile-grid-header number-block">Weight</div>
		<?php echo $weight_history;?>
	</div><!-- /grid-c -->
	<div>
	<?php	echo anchor('welcome', 'Cancel', array(	'data-ajax'=>'false',
															'data-role'=>'button',
															'data-inline'=>'true'));
	?>
	</div>
</div>
