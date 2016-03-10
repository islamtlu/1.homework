<?php require_once ("header.php"); ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Debattle</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Debattle_b.php">Request</a></li>
		<li> <a href="table_b.php"> Current</a></li>
          </ul>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
	
		<h1> Start A Debattle </h1>
		<h3> Everything is Challengeable </h3>
		<br>
		<form>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
					<label for="to">User to Challenge</label>
					<input name="to" id="to" type="text" class="form-control">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
					<label for="motion">Motion</label>
					<input name="motion" id="motion" type="text" class="form-control">
					</div>
				</div>		
			</div>
			
			<div class="row">
				<div class="col-md-3">
				<label for="position">Position</label>
				
					<div class="radio">
					<label><input type="radio" name="position" Checked> Pro </label>
					</div>
					
					<div class="radio">
					<label><input type="radio" name="position"> Against  </label>
					</div>
				</div>			
			</div>
			<br>
			<div class="row">
				<div class="col-md-3">
				<label for="visibility">Visibility</label>
				
					<div class="radio">
					<label><input type="radio" name="visibility" Checked> Open </label>
					</div>
					
					<div class="radio">
					<label><input type="radio" name="visibility"> Closed </label>
					</div>
				</div>			
			</div>
			<br>
			<div class="row">
				<div class="col-md-3">
				<label for="start_date">Start Date</label>
				
					<div class="date">
					<input type="date" class="form-control" name="start_date" id="start_date"> 
					</div>
				</div>	
			</div>
			<br>
			<div class="row">
			<div class="col-md-3">
			<label for="end_date">End Date</label>
				
					<div class="date">
					<input type="date" class="form-control" name="end_date" id="end_date" > 
					</div>
			</div>			
			</div>
			<br>
			<div class="row">
			<div class="col-md-3">
			<label for="colour">Choose your favourite colour</label>
				
					<div class="color">
					<input type="color" class="form-control" name="color"> 
					</div>	
				</div>		
			</div>
			<br>
				
			<div class="row">
			<div class="col-md-3">
					<div class="form-group">
					<label for="characters">Set the number of characters</label>
					<input type="number" class="form-control" name="characters" min="1" max="300" class="form-control">
					</div>
				</div>			
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-6">
					<input class="btn btn-success hidden-xs" type="submit" value="Start the Challenge">
					<input class="btn btn-success btn-block visible-xs-block" type="submit" value="Save data 2">
				</div>
			</div>
<br>
			<div class="row">
		
			</div>
			
		</form>




  </body>
</html>