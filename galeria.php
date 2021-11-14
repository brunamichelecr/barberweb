<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="author"
    content="Projeto Integrador Univesp - Alunos: BRUNA MICHELE CORREIA RIBEIRO, 2003356; ISAEL RODRIGUES DE FREITAS, 2015634; MARCOS RIBEIRO DE OLIVEIRA, 2005638; ROBERTA VIEIRA SAPIA, 1823446; SILVIO TACLA ALVES BARBOSA, 1714413; UILMA MATOS DOS SANTOS MELO, 2014371; WELLINGTON ZANELATTO, 2010657">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
<link href="jquery/jquery-ui.css" rel="stylesheet">

  <title>Yeshua Barber Shop</title>
</head>

<body class="bg-dark">
  <div class="container-fluid p-3 mb-2 text-white">
    <header class="mb-auto">
      <nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container gap-2">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">
              <li class="nav-item">
                <a href="index.html" class="nav-link me-2 w-100">Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link me-2 w-100"  data-bs-toggle="modal" data-bs-target="#exampleModal">Agendamentos</a>
              </li>
              <li class="nav-item">
                <a href="galeria.html" class="nav-link me-2 w-100 active">Galeria</a>
              </li>
              <li class="nav-item">
                <a href="catalogo.html" class="nav-link me-2 w-100">Catálogo</a>
              </li>
            </ul>
            <div class="d-flex">
              <div class="btn-group mb-1">
                <a href="https://www.facebook.com/yeshuabarbershop/" class="btn btn-warning" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                  <span class="visually-hidden" _msthash="1686659" _msttexthash="76505">Botão</span>
                </a>
                <a href="https://www.instagram.com/yeshuabarbershopsorocaba" class="btn btn-warning"
                  target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg>
                  <span class="visually-hidden" _msthash="1686932" _msttexthash="76505">Botão</span>
                </a>
                <a href="https://api.whatsapp.com/send?phone=5515998328568&text=Olá" class="btn btn-warning"
                  target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                      d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                  </svg>
                  <span class="visually-hidden" _msthash="1687205" _msttexthash="76505">Botão</span>
                </a>
              </div>

            </div>
          </div>
        </div>
      </nav>
    </header>
<main>
  <div class="container px-4 py-5 border-bottom">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card text-dark bg-warning">
        <img src="img/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-dark bg-warning">
        <img src="img/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-dark bg-warning">
        <img src="img/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-dark bg-warning">
        <img src="img/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<footer class="text-muted py-2">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Voltar ao topo</a>
    </p>
    <div class="row">
      <h2 class="text-white">Como chegar</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.573359554298!2d-47.496781985023105!3d-23.511871884707446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5f5bc06ed65f9%3A0x1a5a4482a917c0b!2sYeshua%20barber%20shop%20e%20sal%C3%A3o%20de%20beleza!5e0!3m2!1spt-BR!2sbr!4v1635208098684!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="col"></iframe>
    <p class="mb-0 col">Projeto Integrador desenvolvido como trabalho acadêmico. Eixo de Computação - Univesp - 2021</p>
  </div>
</div>
</footer>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">Agendamento</h5>
          <button type="button" class="btn-close btn-warning" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="tel" class="form-control" id="telefone" aria-describedby="telefone" placeholder="Telefone" >
                  <div id="telefone" class="form-text">*Este número receberá uma mensagem por whatsapp 1 hora antes do agendamento para confirmação.
                </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" aria-label="First name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Sobrenome" aria-label="Last name">
                  </div>
                </div>
                <div class="col mb-3">
                  <input type="text"  class="form-control" placeholder="Data de Nascimento" id="datepicker">
                </div>
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione o tipo de serviço</option>
                    <option value="1">Corte</option>
                    <option value="2">Pintura</option>
                    <option value="3">Barba</option>
                  </select>
                </div>
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione o profissional</option>
                    <option value="1">Adriano</option>
                    <option value="2">Oliveira</option>
                    <option value="3">Andreia</option>
                  </select>
                </div>
                <div class="col mb-3">
                  <input type="text"  class="form-control" placeholder="Selecione a Data" id="datepicker">
                </div>
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione o Horário</option>
                    <option value="1">10:00</option>
                    <option value="2">11:00</option>
                    <option value="3">12:00</option>
                  </select>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a class="btn btn-warning" data-bs-toggle="modal" href="#modalConfirmacao" role="button">Confirmar</a>
        </div>
      </div>
    </div>
  </div>

  

  <div class="modal fade" id="modalConfirmacao" tabindex="-1" aria-labelledby="modalConfirmacao" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">Agendamento</h5>
          <button type="button" class="btn-close btn-warning" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Agendamento concluído com sucesso!</p>
          <p> Em breve você receberá uma mensagem no whatsapp com um link para confirmação ou cancelamento de seu agendamento.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="jquery/jquery.js"></script>
    <script src="jquery/jquery-ui.js"></script>
    <script>
      $("#datepicker").datepicker();
    </script>
  </body>


</html>