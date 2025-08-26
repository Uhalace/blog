<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/d/d1/Brasão_dos_Estados_Unidos_do_Brazil_%281889%29.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--FONTS PARA O GOOGLE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 
    <title>Inicio</title>
  </head>
  <style type="text/css">
    *{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
body{
  height:100dvh;
  width:100%;
}
.nav-link{
  color:white !important;
}
.navbar-brand{
  color:white !important;
}
.dropdown-menu{
  background-color: #0a4275 !important;
  transition: all 0.5s ease;
}
.dropdown-item{
  color:white !important;
  transition: all 0.6s ease;
}
.dropdown-item:hover{
  color:black !important;
}
/*DIV DE PAGINAÇÃO*/
.pagina{
  margin-top: 3rem;
  margin-bottom: 3rem;
}
/*CONFIGURAÇÃO ADICIONAL DO TEXT-CENTER ONDE HÁ O TITULO*/
.text-center{
  margin-top: 2.5rem;
  margin-bottom: 2rem;
}
/* footer configuração */
footer{
  bottom:0;
  left:0;
  right:0;
  
}
/*  ROTAÇÃO DAS ICONS DO FOOTER */
.btn{
  perspective: 500px !important;
}
.btn i{
  transform-style: preserve-3d !important;
  transition: all 0.9s ease;
}
.btn i:hover {
  transform: translateY(8px) rotateY(45deg);
}
.row{
  flex-wrap: wrap !important;
  justify-content:center !important;
}
  </style>
  <body>
    <header>
    <!--NAV BAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #0a4275 !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="data:image/png;base64,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" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
        <li class="nav-item">
          <a class="nav-link" href="#">opção</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">opção</a>
        </li>
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
    <!--NAV BAR FIM-->
    <main>
    <!--TITULO-->
    <figure class="text-center">
  <blockquote class="blockquote">
    <p>ESTADOS UNIDOS DO BRASIL</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Todas as noticias <cite title="Source Title">Você encontra aqui</cite>
  </figcaption>
</figure>
    <!--TITULO-->
  <!--CARDS INICIO-->
    <div class="container">
  <div class="row row-cols-auto">
<!--     <div class="row row-cols-1 row-cols-md-4 g-4"> -->
  <div class="col">
    <div class="card h-100" style="width: 16rem;">
      <img src="https://aventurasnahistoria.com.br/media/_versions/brasil/estados_unidos_do_brasil_widelg.jpg" class="card-img-top" alt="...">
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
      <img src="https://aventurasnahistoria.com.br/media/_versions/brasil/estados_unidos_do_brasil_widelg.jpg" class="card-img-top" alt="...">
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
      <img src="data:image/png;base64,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" class="card-img-top" alt="...">
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
  <div class="col">
    <div class="card h-100" style="width: 16rem;">
      <img src="data:image/png;base64,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" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Publicado em: 10/09/1845</small>
        <small class="text-muted">Visualizações: 10</small>
      </div>
    </div>
  </div>
      </div>
</div>
    <!--CARDS FIM-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
<!--     PAGINACAO INICIO -->
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
<!--     PAGINAÇÃO FIM -->
    <!--footer-->
    <footer class="bg-body-tertiary text-center text-white "  style="background-color:  #0a4275 !important;">
  <!-- Grid container -->
  <div class="container p-4 pb-0" style="background-color:  #0a4275 !important;">
    <!-- Section: Social media -->
    <section class="mb-4" style="background-color: #0a4275 !important;">
      <!-- Facebook -->
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2025 Copyright:
    <a class="text-body text-white" style="color:white !important" href="">ZoldickCoorporation</a>
  </div>
  <!-- Copyright -->
</footer>
    <!--fim footer-->
  </body>
</html>


