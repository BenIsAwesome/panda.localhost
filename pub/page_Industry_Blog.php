<!-- http://share.axure.com/Q32C4A/Industry_Blog.html -->

<?php include('inc-head.php') ?>

<body>
  <?php include('inc-header.php') ?>
	
	<?php include('master_billboard.php') ?>
		  
  <div id="pri-content" class="container group">
  	<div id="posts">
		  <?php include('kony_feature_blog_tease.php') ?>
		  <?php include('kony_feature_blog_tease.php') ?>
		  <?php include('kony_feature_blog_tease.php') ?>
		  <?php include('kony_feature_blog_tease.php') ?>
		  <?php include('kony_feature_blog_tease.php') ?>
  	</div>
    <!-- aside for categories and archives? -->
    <aside id="sidebar-blog">
		<?php include('kony_feature_blog_categories.php') ?>
		<?php include('kony_feature_blog_archives.php') ?>
    </aside>
    
     <div class="item-list"><ul class="pager"><li class="pager-current first">1</li>
<li class="pager-item"><a title="Go to page 2" href="/blog-posts?page=1">2</a></li>
<li class="pager-item"><a title="Go to page 3" href="/blog-posts?page=2">3</a></li>
<li class="pager-item"><a title="Go to page 4" href="/blog-posts?page=3">4</a></li>
<li class="pager-item"><a title="Go to page 5" href="/blog-posts?page=4">5</a></li>
<li class="pager-item"><a title="Go to page 6" href="/blog-posts?page=5">6</a></li>
<li class="pager-item"><a title="Go to page 7" href="/blog-posts?page=6">7</a></li>
<li class="pager-item"><a title="Go to page 8" href="/blog-posts?page=7">8</a></li>
<li class="pager-item"><a title="Go to page 9" href="/blog-posts?page=8">9</a></li>
<li class="pager-next"><a title="Go to next page" href="/blog-posts?page=1">next ›</a></li>
<li class="pager-last last"><a title="Go to last page" href="/blog-posts?page=9">last »</a></li>
</ul></div> 
  </div>
		
  <?php include('inc-footer.php') ?> 
	
</body>
</html>