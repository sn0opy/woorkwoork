<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Woork woork...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{@BASE}}/assets/css/style.css">
	
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script>
	$(document).ready(function() {
		$('input').focus(function() {
			$(this).select();
		});
	});
	</script>
</head>
<body>
	<div class="container">
		<div class="row-fluid">
			<div class="span2"></div>
			<div class="span8">
				<h1><img src="{{@BASE}}/assets/img/peon.jpg" alt="" /> Woork woork...</h1>
				<F3:include href="alert.tpl.php" />
				<F3:include href="{{@subtemplate}}" />
			</div>
			<div class="span2"></div>
		</div>
	</div>
</body>
</html>
