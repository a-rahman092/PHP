<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Text to Speech</title>
</head>

<body>
    <div class="container mt-3">
        <h3 class="text-center mb-3">Online Text to Speech Converter</h3>
        <div id="audioplayer"></div>
        <form method="post">
            <div class="form-group">

                <textarea id="txt" name="txt" class="form-control" rows="10"></textarea>
				<small>NOTE: Maximum 200 characters will be converted to speech</small>
            </div>
            <div class="form-group text-center">
                <input type="button" class="btn btn-primary" name="submit" value="Convert to speach"
                    onclick="getAudio()" />
            </div>

        </form>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    </div>


    <script>
    function getAudio() {
        var txt = jQuery('#txt').val()
        jQuery.ajax({
            url: 'get.php',
            type: 'post',
            data: 'txt=' + txt,
            success: function(result) {
                jQuery('#audioplayer').html(result);
            }
        });
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>