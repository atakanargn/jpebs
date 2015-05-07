<?php include("config.php"); ?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><?php echo $siteB['title']; ?></a>
			</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

				<?php 
				$pageNums=mysql_num_rows(mysql_query("select * from jb_pages"));
				if(!($pageNums==0)){
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
					
					<?php
					$sqlP=mysql_query("select * from jb_pages order by id asc");
					while($pageB=mysql_fetch_array($sqlP)){
						echo '<li><a href="page.php?q='.$pageB['link'].'">'.$pageB['name'].'</a></li>';
					}
					?>
					</ul>
					</li>
		<?php	} ?>
		
<?php 
				$cateNums=mysql_num_rows(mysql_query("select * from jb_categories"));
				if(!($cateNums==0)){
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
					
					<?php
					$sqlCa=mysql_query("select * from jb_categories order by id asc");
					while($cateB=mysql_fetch_array($sqlCa)){
						echo '<li><a href="categorie.php?q='.$cateB['link'].'">'.$cateB['name'].'</a></li>';
					}
					?>
					</ul>
					</li>
		<?php	} ?>
		
			</ul>
		<form action="search.php" method="GET" class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" name="q">
			</div>
			<button type="submit" class="btn btn-default">Search</button>
		</form>
      <ul class="nav navbar-nav navbar-right">
	  <li><li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Giriş Yap <b class="caret"></b></a>
        <ul class="dropdown-menu" style="width:480px;">

	<li><div style="margin:16px;">
	

<form class="form-horizontal" action="login.php" method="POST">
    <legend>Giriş Yap!</legend>
    <div class="form-group" style="margin:16px;">
      <label for="inputUser" class=" control-label">Kullanıcı Adı</label>

        <input type="text" class="form-control" id="inputUser">

	<label for="inputPass" class=" control-label">Şifre</label>

        <input type="text" class="form-control" id="inputPass">
		<br/>
	<input type="submit" style="width:49%;" class="btn btn-primary" value="Submit">
	<button type="reset" style="width:49%;" class="btn">Cancel</button>
    </div>
</form>




	</div></li>
	<li class="divider"></li>

        </ul>
      	</li></li>
		<li><a href="mailto:<?php echo $siteB['contact-mail']; ?>">Contact</a></li>
      </ul>
		</div>
	</div>
</nav>