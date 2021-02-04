<?php
if(isset($_POST['submit'])){
	$yt=$_POST['yt'];
	$arr=explode('watch?v=',$yt);
	if(isset($arr['1'])){
		$vid=$arr['1'];
		$url="https://img.youtube.com/vi/$vid/hqdefault.jpg";
		$ch=curl_init($url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$image=curl_exec($ch);
		curl_close($ch);
		header('Content-type:image/jpeg');
		header('Content-Disposition:attachment;filename="youtube.jpg"');
        echo $image;

	}
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Youtube Thumbnail Downloader</title>
</head>

<body>
    <div class="container my-3 text-center">
        <h1 class="mb-3">Youtube Thumbnail Downloader</h1>
        <form method="post" action="thumbnail.php">
            <div class="form-group">
                <input type="textbox" name="yt" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Download Thumbnail " />
            </div>
        </form>
    </div>
    
</body>
</html>