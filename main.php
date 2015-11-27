<?php require_once("header.php"); ?>

<!-- ################# -->
<!-- ##### MENÜÜ ##### -->
<!-- ################# -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Romil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<br><br><br><br>
<!-- ################# -->
<!-- ##### SISU ##### -->
<!-- ################# -->
<div class="container-fluid">

	<div class="row">
	
		<div class="col-md-6 col-md-offset-1">
			<div class="jumbotron">
			  <h1>Hello, world!</h1>
			  <p>...</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-1">
			<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			  </div>
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Check me out
				</label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	
	</div>
	
</div>





<?php require_once("footer.php"); ?>