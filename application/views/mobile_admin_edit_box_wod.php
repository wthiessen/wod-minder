<div data-role="page" id="Main">
	<div data-role="header">
		<a href="<?php echo base_url(); ?>welcome" data-ajax ="false" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1>Pick Box</h1>
	</div><!-- /header -->
	<div data-role="content">		
		<div class="content-primary">	
			<ul data-role="listview" data-filter="true" data-filter-placeholder="Search boxes..." data-filter-theme="d" data-theme="d" data-divider-theme="d">
				<?php echo $box_list;?>
			</ul>
		</div>
	</div>
</div><!--Page Main-->
<?php echo $box_wod_pages;?>