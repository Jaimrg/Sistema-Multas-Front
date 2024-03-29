<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/styles.css"/>
    <title>Marcações</title>

    <style>
        :root{
            --color-green:rgb(40, 167, 69);
        }
        .color-2{
            color: var(--color-green);
        }
    </style>
</head>
<body>
    
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-road me-2"></i> INTRAT</div>
            <div class="list-group list-group-flush my-3">
                <a href="Painel_Automobilista.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-id-card me-2"></i>Informações da Carta</a>
                <a href="Ver_Marcacoes.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color"><i
                        class="fas fa-tachometer-alt me-2"></i>Marcação de atendimento</a>
                <a href="Marcacoes.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color-2"><i
                        class="fas fa-chart-line me-2"></i>Marcações</a>            
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h4 class="fs-2 m-0">Marcações</h4>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Jaime Rungo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Definicoes</a></li>
                                <li><a class="dropdown-item" href="#">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <section id="s">
                    <h5>Lista de Marcações</h5>
                    <p>Encontre abaixo a lista de marcações</p>
                </section>

                <section>
                    <div class="py-2">
                        <div class="row py-1">
                            <div>
                                <h5>Filtros de Pesquisa</h5>
                            </div>
                            <div class="row py-1">
                                <form class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-4">
                                        <label for="formGroupExampleInput2" class="form-label">Tipo de Marcação</label>
                                        <select class="form-select" id="specificSizeSelect">
                                          <option selected>Todas</option>
                                          <option value="1">Renovacao</option>
                                          <option value="2">Reclamacao</option>
                                          
                                        </select>
                                      </div>
                                    <div class="col-sm-4">
                                        <label for="formGroupExampleInput2" class="form-label">Ordenar Por</label>
                                        <select class="form-select" id="specificSizeSelect">
                                          <option selected>Mais Recentes</option>
                                          <option value="1">Mais Antigos</option>
                                          
                                        </select>
                                      </div>
                                    <div class="col-sm-4">
                                        <label for="formGroupExampleInput2" class="form-label">Estado da Marcação</label>
                                      <select class="form-select" id="specificSizeSelect">
                                        <option selected>Todas</option>
                                        <option value="1">Pendentes</option>
                                        <option value="2">Abertas</option>
                                        <option value="3">Fechadas</option>
                                      </select>
                                    </div>
                                    
                                    <div class="col-auto">
                                      <button type="submit" class="btn px-5 btn-success">Pesquisar</button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4">
                        <div class="py-3">
                            
                            <div class="dados1">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>                            
                                            <th>#</th>
                                            <th>Tipo de Marcação</th>
                                            <th>Data de Marcação</th>
                                            <th>Estado da Marcação</th>
                                            <th>Estado do Pagamento</th>
                                            <th>Acções</th>
                                        </tr>                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>