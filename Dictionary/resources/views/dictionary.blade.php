<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
</head>
<body>
<form method='POST' action='/dictionary'>
@csrf
<input type="text" name='keyword' placeholder='Enter a word'>
<button type="submit">Dịch</button>
</form>

</body>
</html>
