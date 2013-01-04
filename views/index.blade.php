<!DOCTYPE html>
<html>
<head>
	<title>Laravel Bundle Starter Kit</title>
	<style>
		body{
			font-family:'Helvetica Neue', Helvetica, Arial, Courier;
			font-size:200;
			color:#292929;
			width:800px;
			margin:40px auto;
		}
		li{
			margin:40px 0px;
		}
		li:first-child{
			margin-top:0px;
		}
	</style>
</head>
<body>

	<h1>Welcome to your new bundle!</h1>
	<p>This file is located in your bundles/bundlestarter/views/index.php</p>
	<p>{{ $data->say_hello; }}</p>

<br />
	<hr /><br />

	<h3>Now to begin creating your new bundle:</h3><br />

	<ol>
		<li>
			<p>Rename the 'bundlestarter' folder in the bundles directory to the desired bundle name</p>
		</li>
		<li>
			<p>Add the line below to the array inside of the application/bundles.php file</p>
			<pre>'bundlestarter' => array('auto' => true, 'handles' => 'bundlestarter'),</pre>
			<small>Be sure to change the two occurrences of 'bundlestarter' to the name of your new bundle</small>
		</li>
		<li>
			<p>Finally, if you are going to use the controllers/bundlecontroller.php file, be sure to replace the 2 occurences of 'bundlestarter' to the name of your bundle</p>
		</li>
	</ol>

	<br /><hr /><br />

	<h3>And, that's it!</h3>
	<p>You can now start crafting your new bundle.</p>

</body>
</html>
