<div ng-controller="myCtrl">
	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			     	<span class="sr-only">Toggle navigation</span>
			     	<span class="icon-bar"></span>
			     	<span class="icon-bar"></span>
			     	<span class="icon-bar"></span>
			   </button>
			   <a class="navbar-brand" href="#/">SaleStock</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			   <ul class="nav navbar-nav">
			     	<li><a href="#/people">People <span class="sr-only">(current)</span></a></li>
			     	<li><a href="#">Films</a></li>
			     	<li><a href="#">Starships</a></li>
			     	<li><a href="#">Vehicles</a></li>
			     	<li><a href="#">Species</a></li>
			     	<li><a href="#">Planets</a></li>
			   </ul>
			   <form class="navbar-form navbar-right" role="search">
			     	<div class="form-group">
			       	<input type="text" class="form-control" placeholder="Search">
			     	</div>
			     	<button type="submit" class="btn btn-default">Submit</button>
			   </form>
			   
			</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>

	<div ng-view>

	</div>