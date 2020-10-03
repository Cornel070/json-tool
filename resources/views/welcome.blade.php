<!DOCTYPE html>
<html>
<head>
    <title>Convert Json Data to CSV</title>
</head>
<body>

<form action="{{route('convert')}}" method="post">
	@if(session('success'))
	<a href="{{asset('files/Koboldata.json')}}" download>Download Json file</a>
	@else
    @csrf
    <h2>Json Api response downloader</h2>
    <input type="text" name="url" id="data-url" placeholder="Enter api url">
    <input type="submit" id="convert" value="Convert">
    @endif
</form>

<style type="text/css">
	form{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 1px 3px 1px rgba(60,64,67,0.149);
		box-sizing: border-box;
		height: 300px;
		width: 50%;
		margin: 0 auto;
	}

	#data-url{
		width: 400px;
		margin: 10px;
		height: 30px;
		border: 1px solid rgba(60,64,67,0.302);
		/*box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 1px 3px 1px rgba(60,64,67,0.149);*/
	}

	h2{
		text-align: center;
		margin-top: 20px;
		font-weight: bold;
	}

	#convert{
		background-color: teal;
		padding: 10px;
		border:0;
		border-radius: 2px;
		color: white;
		cursor: pointer;
	}

	a{
		text-decoration: none;
		width: 120px;
		height: 40px;
		background-color: teal;
		color: white;
		padding: 10px 2px 0 2px;
		border-radius: 2px;
	}
</style>
</body>
</html>