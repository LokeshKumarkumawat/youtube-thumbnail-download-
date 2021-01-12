<?php
if(isset($_POST['submit'])){
	$lin=$_POST['lin'];
	$arr=explode('watch?v=',$lin);
	if(isset($arr['1'])){
		$vid=$arr['1'];
		$url="https://img.youtube.com/vi/$vid/sddefault.jpg";
		$ch=curl_init($url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$image=curl_exec($ch);
		curl_close($ch);
		header('Content-type:image/jpeg');
	    $date = date("d-m-y");
		header('Content-Disposition:attachment;filename=image.jpg');
		echo $image;

	}
}
?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <title>Youtube Thumbnail!</title>
</head>

<body>
    <div class="container">
        <div>
            <h1><span><img src="./images/youtube.png" alt="youtude logo"></span> Youtube Thumbnail Download</h1>
        </div>
        <div class="mar">
            <form method="POST">
                <div class="flex">
                    <div>
                        <input type="text" class="form-control inputtype " name="lin" required
                            placeholder="ex:  https://www.youtube.com/watch?v=F41FT5EJSg8">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btntype" name="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="steps">
            <p>stap 1 -: Open youtube on google chrome </p>
            <p>stap 2 -: Press hold on youtube video </p>
            <p>stap 3 -: Copy link address </p>
            <p>stap 4 -: Past in input box</p>
            <p>stap 5 -: Ex. https://www.youtube.com/watch?v=TOMh0liO--8</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>