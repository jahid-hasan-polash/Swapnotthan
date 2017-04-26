<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Message from website</h2>

<div id="content" class="container">
	<label>Name:</label>
	<p style="padding-left: 40px">
		{!! $user['username'] !!}
	</p>
	<label>Email:</label>
	<p style="padding-left: 40px">
		{!! $user['email'] !!}
	</p>
	<label>Message:</label>
	<p style="padding-left: 40px">
		{!! $user['message'] !!}
	</p>

</div>

</body>
</html>