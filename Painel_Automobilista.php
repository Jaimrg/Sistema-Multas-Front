<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />

    <title>Menu</title>

    <style>
        :root {
            --color-green: rgb(40, 167, 69);
        }

        .color-g {
            color: var(--color-green);
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-road me-2"></i> INTRAT
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="Painel_Automobilista.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color-g"><i class="fas fa-id-card me-2"></i>Informações da Carta</a>
                <a href="Ver_Marcacoes.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Marcação de atendimento</a>
                <a href="Marcacoes.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-chart-line me-2"></i>Marcações</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h4 class="fs-2 m-0">Menu de Navegação</h4>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <section>
                    <h5>Informações Da Carta</h5>
                    <p>Dados da Carta e Lista de Multas</p>
                </section>

                <section id="form-1">
                    <div class="py-2">
                        <div class="row py-1">
                            <div class="about-text">
                                <p class="">Preencha os campos e clique em pesquisar</p>
                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <label for="formGroupExampleInput2" class="form-label">Nº Da Carta de Condução</label>
                                        <input type="text" class="form-control" placeholder="No Da Carta" aria-label="No Da Carta">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="formGroupExampleInput2" class="form-label">Nº Do Documento Registado Na Carta</label>
                                        <input type="text" class="form-control" placeholder="No do Documento" aria-label="No do Documento">
                                    </div>
                                    <div class="col-12">
                                        <button type="Pesquisar" id="pesquisar" name="pesquisar" class="btn px-5 btn-success">Pesquisar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-3">

                            <h5>Dados Da Carta</h5>
                            <p>Encontre abaixo os detalhes da sua Carta</p>
                            <div class="row py-3 dados">
                                <?php
                                $curl = curl_init();

                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => 'http://127.0.0.1:8000/api/search/192827/2345675621723B',
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => '',
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 0,
                                    CURLOPT_FOLLOWLOCATION => true,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => 'GET',
                                ));

                                $response = json_decode(curl_exec($curl));


                                curl_close($curl);
                                foreach ((array) $response as $lista) { ?>
                                    <div class="col-6 col-sm-4">
                                        <h6>Nome</h6>
                                        <p><?= $lista->nome . " " . $lista->apelido ?></p>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <h6>Numero Da Carta</h6>
                                        <p><?= $lista->num_carta ?></p>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <h6>Morada</h6>
                                        <p><?= $lista->morada ?></p>
                                    </div>

                                    <!-- Force next columns to break to new line at md breakpoint and up -->
                                    <div class="w-100 d-none d-md-block"></div>

                                    <div class="col-6 col-sm-4">
                                        <h6>Inicio de Validade</h6>
                                        <p><?= $lista->inicio_validade ?></p>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <h6>Fim de Validade</h6>
                                        <p><?= $lista->fim_validade ?></p>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <h6>Estado</h6>
                                        <p>Activo</p>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="py-3">
                            <h5>Histórico de Multas</h5>
                            <p>Encontre abaixo o histórico de multas</p>
                            <div class="dados">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Artigo</th>
                                                <th>Descricao</th>
                                                <th>Valor</th>
                                                <th>Data</th>
                                                <th>Estado</th>
                                                <th>Accao</th>
                                                <th>Opcoes</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $curl = curl_init();

                                            curl_setopt_array($curl, array(
                                                CURLOPT_URL => 'http://127.0.0.1:8000/api/getall-multas',
                                                CURLOPT_RETURNTRANSFER => true,
                                                CURLOPT_ENCODING => '',
                                                CURLOPT_MAXREDIRS => 10,
                                                CURLOPT_TIMEOUT => 0,
                                                CURLOPT_FOLLOWLOCATION => true,
                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                CURLOPT_CUSTOMREQUEST => 'GET',
                                            ));

                                            $response = json_decode(curl_exec($curl));


                                            curl_close($curl);
                                            //print_r($response);

                                            foreach ((array) $response as $lista) { ?>
                                                <tr>
                                                    <td><?= $lista->artigo ?></td>
                                                    <td><?= $lista->descricao ?></td>
                                                    <td><?= $lista->valor ?></td>
                                                    <td><?= $lista->data_inc ?></td>
                                                    <td><?= $lista->estado == 0 ? 'Pendente' : 'Pago' ?></td>
                                                    <td><?= $lista->accao ?></td>
                                                    <td><a href="pagar_multa.php?id=<?= $lista->id ?>">
                                                            <button type="button" class="btn btn-primary">Pagar Multa</button>
                                                        </a></td>
                                                    <td><a href="pagar_multa.php?id=<?= $lista->id ?>">
                                                            <button type="button" class="btn btn-danger">Reclamar Multa</button>
                                                        </a></td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </section>



            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };

        $(function() {
            $("#pesquisar").on('click', function() {
                $.ajax({
                    url: "http://127.0.0.1:8000/api/search/192827/2345675621723B",
                    method: "GET",
                    data: {
                        num_carta: "192827",
                        num_identidade: "2345675621723B"
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        /*alert(response.num_carta+"  "+response.id); 
                        result = JSON.stringify(data);                   
                        alert(result['id']);*/
                        result = JSON.stringify(data);
                        dados = JSON.parse(data);
                        dados.forEach(item => {
                            alert(item.nome);
                        });
                    },
                    error: function(err) {
                        alert("Error")
                        console.log(err)
                    }
                })
            })

        })
    </script>
</body>

</html>