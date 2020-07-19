<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="abc">
    </div>
</body>
<script>
    $.ajax({
        type: "post",
        url: "",       
        success: function (response) {
           $('#abc').html(response);
        }
    });
</script>
</html>