<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">
        <header class="overflow-hidden">
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <a href="#">Homes</a>
                <a href="#">Film</a>
                {{-- <a href="#">Serie TV</a> --}}
            </nav>
        </header>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Film, serie TV e tanto altro.<br> Senza limiti.</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Guarda ciò che vuoi ovunque. Disdici quando vuoi.
                    Vuoi guardare Netflix? Inserisci l'indirizzo email per abbonarti o riattivare il tuo abbonamento.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-danger btn-lg px-4 me-sm-3" >Guarda i Film</button>
                    {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Esercizio</button> --}}
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="/img/header.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>

        <footer>

        </footer>
    </div>
</body>

</html>
