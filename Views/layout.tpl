<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{block name=title}Default Page Title{/block}</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="/main">HOME</a></li>
        <a class="navbar-brand" href="/notes">NEW</a>
    </ul> 
</nav>

{block name=body}{/block}

</body>
</html>
