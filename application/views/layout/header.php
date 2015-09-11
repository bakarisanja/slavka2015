<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	
		<!--za jezik-->
	
		<a class="navbar-brand navbar-right" href="#"><span class="eng"></span> / <span class="srp"></span></a>
		
		
		<!--za smanjenje za mobilni-->
		 <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!--logo, uvek je tu-->
			<a class="navbar-brand" href="#"><span class="brand">SLA</span><span class="brand1">fashion</span></br><span class="brand2">unique accessories</span></a>
		</div>
		
		<!--za skupljanje kada se otvori na mobilnom-->
		<div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href=<?php echo base_url()."home"; ?>>home</a></li>
				<li><a href=<?php echo base_url()."blog"; ?>>blog</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">products <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<?php
						for ($i=0; $i<count($categorys); $i++){
							echo "<li><a href='".base_url()."category/".$categorys[$i]->category_id."/".$categorys[$i]->category_about."'>".$categorys[$i]->category_name."</a></li>";
							//echo $categorys[$i]->category_id.' '.$categorys[$i]->category_name;
						}
					?>
				  </ul>
				</li>
				<li><a href=<?php echo base_url()."how_to_buy"; ?>>how to buy</a></li>
				<li><a href=<?php echo base_url()."contact"; ?>>contact</a></li>
				<li><a href=<?php echo base_url()."about_me"; ?>>about me</a></li>
			</ul>
		</div>
		
	</div>
</nav>