<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/d/d1/Brasão_dos_Estados_Unidos_do_Brazil_%281889%29.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inicio</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        height: 100dvh;
        width: 100%;
      }
      .nav-link {
        color: white !important;
      }
      .navbar-brand {
        color: white !important;
      }
      .dropdown-menu {
        background-color: #0a4275 !important;
        transition: all 0.5s ease;
      }
      .dropdown-item {
        color: white !important;
        transition: all 0.6s ease;
      }
      .dropdown-item:hover {
        color: black !important;
      }
      .pagina {
        margin-top: 3rem;
        margin-bottom: 3rem;
      }
      .text-center {
        margin-top: 2.5rem;
        margin-bottom: 2rem;
      }
      footer {
        bottom: 0;
        left: 0;
        right: 0;
      }
      .btn {
        perspective: 500px !important;
      }
      .btn i {
        transform-style: preserve-3d !important;
        transition: all 0.9s ease;
      }
      .btn i:hover {
        transform: translateY(8px) rotateY(45deg);
      }
      .row {
        flex-wrap: wrap !important;
        justify-content: center !important;
      }
    </style>
  </head>

  <body>
    <header>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #0a4275 !important;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://i.redd.it/24-july-1922-the-brazilian-state-of-piau%C3%AD-adopts-a-flag-v0-7dejdzsu4hed1.png?width=1024&format=png&auto=webp&s=7a2a12e119af42520a4e82460e32af7500a8e090" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Estados Unidos do Brasil
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">Opção</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Opção</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu suspenso
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Opção</a></li>
                  <li><a class="dropdown-item" href="#">Outra opção</a></li>
                  <li><a class="dropdown-item" href="#">E a outra da outra</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- TÍTULO -->
      <figure class="text-center">
        <blockquote class="blockquote">
          <p>ESTADOS UNIDOS DO BRASIL</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Todas as notícias <cite title="Source Title">Você encontra aqui</cite>
        </figcaption>
      </figure>

      <!-- CARDS -->
      <div class="container">
        <div class="row row-cols-auto">
          <div class="col">
            <div class="card h-100" style="width: 16rem;">
              <img src="https://i.redd.it/24-july-1922-the-brazilian-state-of-piau%C3%AD-adopts-a-flag-v0-7dejdzsu4hed1.png?width=1024&format=png&auto=webp&s=7a2a12e119af42520a4e82460e32af7500a8e090" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A curiosa história dos "Estados Unidos do Brasil"</h5>
                <p class="card-text">Nome que sucedeu ao Império do Brasil foi derrubado durante a Ditadura Militar. Mas qual a história por trás dessa mudança?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Publicado em: 10/09/1849</small>
                <small class="text-muted">Visualizações: 10</small>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100" style="width: 16rem;">
              <img src="https://i.redd.it/24-july-1922-the-brazilian-state-of-piau%C3%AD-adopts-a-flag-v0-7dejdzsu4hed1.png?width=1024&format=png&auto=webp&s=7a2a12e119af42520a4e82460e32af7500a8e090" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A curiosa história dos "Estados Unidos do Brasil"</h5>
                <p class="card-text">Nome que sucedeu ao Império do Brasil foi derrubado durante a Ditadura Militar. Mas qual a história por trás dessa mudança?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Publicado em: 10/09/1846</small>
                <small class="text-muted">Visualizações: 90</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 16rem;">
              <img src="https://i.redd.it/24-july-1922-the-brazilian-state-of-piau%C3%AD-adopts-a-flag-v0-7dejdzsu4hed1.png?width=1024&format=png&auto=webp&s=7a2a12e119af42520a4e82460e32af7500a8e090" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A curiosa história dos "Estados Unidos do Brasil"</h5>
                <p class="card-text">Nome que sucedeu ao Império do Brasil foi derrubado durante a Ditadura Militar. Mas qual a história por trás dessa mudança?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Publicado em: 10/09/1846</small>
                <small class="text-muted">Visualizações: 90</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 16rem;">
              <img src="https://i.redd.it/24-july-1922-the-brazilian-state-of-piau%C3%AD-adopts-a-flag-v0-7dejdzsu4hed1.png?width=1024&format=png&auto=webp&s=7a2a12e119af42520a4e82460e32af7500a8e090" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Estados Unidos do Brasil</h5>
                <p class="card-text">Estados Unidos do Brasil foi o nome oficial do Brasil durante o regime republicano, da Proclamação da República, em 1889, até 1968.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Publicado em: 10/09/1845</small>
                <small class="text-muted">Visualizações: 100</small>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- PAGINAÇÃO -->
      <div class="pagina">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Próximo</a>
            </li>
          </ul>
        </nav>
      </div>

    </main>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
