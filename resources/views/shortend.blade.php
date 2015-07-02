<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>LARL - Open Source Laravel 5 URL Shortener</title>
	</head>
	<body>
		<div class="row">
			<div class="small-12 column">
				<a href="/"><img src="/images/logo.png"></a>
				<h6><i>Open Source Laravel 5 URL Shortener</i></h6>
			</div>
		</div>
		<div class="row">
			<div class="small-12 column">
				<div class="panel radius text-center">
					<h5>Your URL (<a href="{{$shortend->url}}">{{$shortend->url}}</a>) has been shortened to the URL below:</h5>
					<br/>
						<h1><a href="{{Request::root()}}/{{$shortend->short}}">{{Request::root()}}/{{$shortend->short}}</a></h1>
					<br/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 column">
			<form data-abide method="post">
				<fieldset>
					<legend class="radius">Shorten another URL</legend>
						<label>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input class="radius" name="url" type="url" required placeholder="Example: http://www.google.com">
						</label>
					    <small class="error">- Please provide us a URL to shorten for you! <br/>- Don't forget http:// at the beginning!</small>
				</fieldset>
			</form>
			</div>
		</div>
		<div class="row">
			<div class="small-12 column">
				<h6><a href="https://github.com/hosseinhkj/Larl"><img src="/images/github.png"> Github Project Page</a></h6>
			</div>
		</div>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/foundation/stylesheets/app.css" />
		<link rel="stylesheet" href="/foundation/stylesheets/custom.css" />
		<script src="/foundation/bower_components/modernizr/modernizr.js"></script>
		<script src="/foundation/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="/foundation/bower_components/foundation/js/foundation.min.js"></script>
		<script src="/foundation/js/app.js"></script>
	</body>
</html>
