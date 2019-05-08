<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Painel Administrativo</title>
</head>
<body class="d-flex flex-column">
<div id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="" class="navbar-brand">Admin</a>
        <span class="navbar-text">
            Painel Administrativo
        </span>
    </nav>
</div>
<div id="main">
    <div class="row">
        <div class="col">
            <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                <li class="nav-item">
                    <span class="nav-link text-white-50"><small>MENU</small></span>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link active">Páginas</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Usuários</a>
                </li>
            </ul>
        </div>
        <div id="content" class="col-10">
            <?php include $content ?>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/resources/trix/trix.js"></script>
</body>
</html>