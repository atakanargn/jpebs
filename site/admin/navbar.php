<?php include("config.php"); ?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><?php echo $siteB['title']; ?> / Management</a>
			</div>
			<?php if(isset($_COOKIE['jbAuth'])){
					if($_COOKIE['jbAuth']=='admin'){
					?>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="posts.php">Posts</a></li>
							<li><a href="pages.php">Pages</a></li>
							<li><a href="announce.php">Announcements</a></li>
							<li><a href="categories.php">Categories</a></li>
							<li><a href="tags.php">Tags</a></li>
							<li><a href="users.php">Users</a></li>
							<li><a href="settings.php">Settings</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<?php
					};
					
					if($_COOKIE['jbAuth']=='author'){
					?>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="posts.php">Posts</a></li>
							<li><a href="pages.php">Pages</a></li>
							<li><a href="categories.php">Categories</a></li>
							<li><a href="tags.php">Tags</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<?php
					};
			}
			?>
	</div>
</nav>