<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
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
                <a href="Ver_Marcacoes.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color-2"><i
                        class="fas fa-tachometer-alt me-2"></i>Marcação de atendimento</a>
                <a href="Marcacoes.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color"><i
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

           <div class="container-fluid px-5 py-5">
                <div class="card bg-white relative rounded-lg shadow flex w-full mx-auto"><!----> 
                    <span class="flex">
                        <form  class="w-full flex flex-wrap my-5 mx-5 text-justify md:text-left md:mx-10 form-group">
                            <h3 class="w-full">
                                Marcação de Atendimento
                            </h3>
                            <span class="w-full">
                                <p>O preenchimento deste formulário visa requerer a marcação de atendimento no estabelecimento do INTRAT(Instituto Nacional dos Transportes Terrestres).</p>
                            </span>
                            <span class="w-full">
                                <p><b class="font-bold text-red">Atenciosamente</b>
                                    preencha os campos com a informação solicitada.</p>
                            </span>
                            <span class="w-full ">
                                <b class="font-bold">Todos os campos marcados com o símbolo</b>
                                <b class="text-red">*</b> <b class="font-bold">deverão ser preenchidos</b>   
                            </span>
                            
                            <div class="py-2">
                                <span class="w-full">
                                    <p>Receberá uma SMS (no contacto descrito por si abaixo) com a informação do pagamento
                                      <br> Se não receber a SMS, poderá ver os detalhes do pagamento da marcação na tabela de marcações </br>
                                    </p>                                
                                </span>
                            </div>
                            <div class="row py-1">
                                <div class="col-sm-4">
                                            <label for="formGroupExampleInput2" class="form-label"><b>Tipo de Atendimento</b> <b class="text-red">*</b></label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Renovacao</option>
                                            
                                        </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="formGroupExampleInput2" class="form-label"><b>Local da Marcação</b> <b class="text-red">*</b></label>
                                <select class="form-select" id="specificSizeSelect">
                                    <option selected class="text-green">Dept. Maputo Cidade</option>
                                    <option value="1">Dept. Maputo Provincia</option>
                                    <option value="2">Dept. Gaza</option>
                                    <option value="3">Dept. Inhambane</option>
                                </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="formGroupExampleInput2" class="form-label"><b>Contacto a notificar</b> <b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Contacto a Notificar" aria-label="Contacto a Notificar">
                                </div>

                                
                            </div>
                            <div class="py-3">
                                <button type="Submeter" class="btn px-5 w-full btn-success pull-right">Submeter</button>
                            </div>
                        </form>                        
                    </span>
              </div>
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