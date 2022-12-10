<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.6.1.js"></script>


<input id="myInput">

<div id="myDiv">
    <a href="">Data 1</a>
    <a href="">Data 2</a>
    <a href="">Data 3</a>
    <a href="">Data 4</a>
    <a href="">Data 5</a>
</div>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myDiv a").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>


</body>
</html>