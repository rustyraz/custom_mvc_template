<!DOCTYPE html>
<html>
<head>
	<title>First MVC Skeleton Framework - by Peter</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background: #eeeeee;
		}
	</style>

</head>
<body >

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<legend><h3>MVC Framework by Peter</h3></legend>
		</div>
		<div class="col-md-12">
			<p class="pull-center" ><h3 style="color:#b3d4dc;">This is a header</h3></p>
		</div>
		<div class="col-md-12">
			<div class="well">
				Hello <?=$data['name']?>
			</div>
			<div class="panel panel-default" style="display:block; min-height:200px; background:#f2f6f9; color:#898e92;">
				<div class="panel-body">
					<div >
						<h3 style="color:">Awseome section</h3>
						<p>It looks nice on both desktop and mobile browsers. Try it by resizing your window (or opening it on your smartphone and pc).</p>
					</div>
				</div>
			</div>
		</div>

			

	</div>
</div>

</body>
</html>