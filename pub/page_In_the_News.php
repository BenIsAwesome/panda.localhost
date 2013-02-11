<!-- http://chaitanya.sdev.kony.com/news-items-list -->

<?php include('inc-head.php') ?>

<body>
  <?php include('inc-header.php') ?>
	
	<?php include('master_billboard.php') ?>
		  
  <div id="pri-content" class="container group">
  	<div id="posts">
		  <?php include('kony_feature_news_tease.php') ?>
		  <?php include('kony_feature_news_tease.php') ?>
		  <?php include('kony_feature_news_tease.php') ?>
		  <?php include('kony_feature_news_tease.php') ?>
		  <?php include('kony_feature_news_tease.php') ?>
  	</div>
    <!-- aside for categories and archives? -->
    <aside id="sidebar-press">
		<?php include('kony_feature_news_categories.php') ?>
		<?php include('kony_feature_news_archives.php') ?>
    </aside>
  </div>
		
  <?php include('inc-footer.php') ?> 
	
</body>
</html>