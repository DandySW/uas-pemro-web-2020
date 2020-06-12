<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<a class="navbar-brand" href="https://www.sourcecodester.com/user/224918/track">SourceCodester || POS and Inventory System</a>
	</div>

	<ul class=" nav navbar-nav">
		<li id="cartme" style="cursor:pointer">
			<a id="cart_control"><i class="fa fa-shopping-cart fa-fw"></i> My Cart</a>
		</li>
		<li id="history"><a href="history.php"><span class="fa fa-list-alt"></span> History</a></li>
		<li>
			<form class="navbar-form" role="search" method="POST" action="search_result2.php">
				<div class="input-group" id="searchbox" style="width:500px;">
					<input type="text" class="form-control" placeholder="Cari Batang..." name="search" id="search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>
		</li>
	</ul>
	<ul class="nav navbar-top-links navbar-right">
		<li class="dropdown">
		<li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
		</li>
	</ul>
</nav>