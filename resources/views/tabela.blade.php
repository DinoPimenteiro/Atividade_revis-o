<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Campeonato Paulista</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Campeonato Paulista</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/tabela">Tabela</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/jogos">Últimos jogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/cadastro">Cadastre-se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="display-1">
        Tabela
    </h1>

    <table class="table table-striped-columns">
        <thead class="table-dark">
            <td> Clube </td>
            <td> Pontos </td>
            <td> VIT </td>
            <td> DER </td>
        </thead>
        <tbody class="table-light">
            <tr>
                <td>Corinthias</td>
                <td> 30 </td>
                <td> 70 </td>
                <td> 70 </td>
            </tr>
            <tr>
                <td>Mirassol</td>
                <td> 20 </td>
                <td> 10 </td>
                <td> 2 </td>
            </tr>
            <tr>
                <td>São Paulo</td>
                <td> 1 </td>
                <td> 7 </td>
                <td> 7 </td>
            </tr>
            <tr>
                <td>Santos</td>
                <td> 9 </td>
                <td> 0 </td>
                <td> 7 </td>
            </tr>
            <tr>
                <td>Fortaleza</td>
                <td> 30 </td>
                <td> 70 </td>
                <td> 70 </td>
            </tr>

        </tbody>
    </table>
</body>

</html>