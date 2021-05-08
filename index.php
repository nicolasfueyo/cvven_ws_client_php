<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="CSS/cvven-cli.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="container">
<h1 class="row justify-content-center titre">Recherche de disponiblité CVVEN :</h1>
<div class="row">
    <form action="resultats.php" method="post">
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control"  name="date">
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control" value="Envoyer">
        </div>
    </form>
</div>
</body>
</html>
