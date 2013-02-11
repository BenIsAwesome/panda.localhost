<!-- http://share.axure.com/Q32C4A/Industry_Blog.html -->

<?php include('inc-head.php') ?>

<body>
  <?php include('inc-header.php') ?>
	
	<?php include('master_billboard.php') ?>
		  
  <div id="pri-content" class="container group">
  	<div id="posts">
		  <?php include('kony_feature_blog_article.php') ?>
		  <?php include('kony_feature_blog_related_posts.php') ?>
  	</div>
    <!-- aside for categories and archives -->
    <aside id="sidebar-blog">
		<?php include('kony_feature_blog_categories.php') ?>
		<?php include('kony_feature_blog_archives.php') ?>
    </aside>
  </div>
		
  <?php include('inc-footer.php') ?> 
	
</body>
</html>