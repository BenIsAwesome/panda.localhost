<!-- http://share.axure.com/Q32C4A/Events.html -->

<?php include('inc-head.php') ?>

<body>
  <?php include('inc-header.php') ?>
  <?php include('master_billboard.php') ?>
		
		<article id="pri-content" class="container group">
			<div class="story-branch" id="all">	
				
				<h3 class="webinar-subheading">All Events</h3>
				
        <?php include('kony_feature_webinar_listing.php') ?>
        <?php include('kony_feature_webinar_listing.php') ?>
        <?php include('kony_feature_webinar_listing.php') ?>
        <?php include('kony_feature_webinar_listing.php') ?>
				
				<h3>Past Events</h3>
				
				<!-- one include for each column -->
				<?php include('kony_feature_webinar_listing_past.php') ?>
				<?php include('kony_feature_webinar_listing_past.php') ?>

			</div>
		</article>
		
  <?php include('inc-footer.php') ?> 
	
</body>
</html>