<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />

    <title>Agente</title>

    <style>
        :root {
            --color-green: rgb(40, 167, 69);
        }

        .color-2 {
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
                <a href="Painel_Administrador.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color-2"><i class="fas fa-id-card me-2"></i>Registrar Multa</a>
                <a href="Visualizar_dados_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Consultar Multa</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h4 class="fs-2 m-0">Registos</h4>
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

            <div class="container-fluid px-5 py-5">
                <div class="card bg-white relative rounded-lg shadow flex w-full mx-auto">
                    <!---->
                    <span class="flex">

                        <form onsubmit="event.preventDefault()" class="w-full flex flex-wrap my-5 mx-5 text-justify md:text-left md:mx-10 form-group">
                            <h5 class="w-full">
                                Registrar Multa
                            </h5>
                            <div class="row py-1">
                                <div class="col-sm-4">
                                    <label for="artigo" class="form-label"><b class="b">Artigo</b> <b class="text-red">*</b></label>
                                    <select class="form-select form-control" id="artigo" name="artigo">
                                        <option selected class="bg-green">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="marca" class="form-label"><b class="b">Marca do Veiculo</b> <b class="text-red">*</b></label>
                                    <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca" aria-label="marca">
                                </div>

                                <div class="col-sm-4">
                                    <label for="modelo" class="form-label"><b class="b">Modelo do Veiculo</b> <b class="text-red">*</b></label>
                                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" aria-label="modelo">
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-4">
                                    <label for="matricula" class="form-label"><b class="b">Matricula</b><b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Matricula" aria-label="matricula" id="matricula" name="data_nascimento">
                                </div>

                                <div class="col-sm-4">
                                    <label for="valor" class="form-label"><b class="b">Valor</b><b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Valor" aria-label="Data" id="valor" name="valor">
                                </div>

                                <div class="col-sm-4">
                                    <label for="num_carta" class="form-label"><b class="b">Numero da Carta</b> <b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="num_carta" aria-label="num_carta" id="num_carta" name="num_carta">
                                </div>
                            </div>

                            <div class="row py-2">

                                <div class="col-sm-4">
                                    <label for="descricao" class="form-label"><b class="b">Descricao</b> <b class="text-red">*</b></label>
                                    <textarea type="text" class="form-control" placeholder="descricao" aria-label="Descricao" id="descricao" name="morada"></textarea>
                                </div>
                                
                            </div>



                            <div class="row py-3">
                                <div class="col-sm-6">
                                    <button type="submit" name="submeter" id="submeter" value="submit" class="btn px-5 w-full btn-success pull-right">Submeter</button>
                                </div>
                            </div>
                        </form>
                    </span>
                </div>
            </div>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

            <script>
                /* var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");

                toggleButton.onclick = function() {
                    el.classList.toggle("toggled");
                };*/

                $(function() {
                    $("#submeter").on('click', function() {
                        var artigo = $("#artigo").val();
                        var marca = $("#marca").val();
                        var modelo = $("#modelo").val();
                        var matricula = $("#matricula").val();
                        var valor = $("#valor").val();
                        var num_carta = $("#num_carta").val();
                        var descricao = $("#descricao").val();                                                                    ;
                        if (marca != "") { //&& apelido != "" && data_nascimento != "" && sexo != "" && numero_documento != "" && tipo_documento != ""
                            $.ajax({
                                url: "http://127.0.0.1:8000/api/create-multas",
                                method: "POST",
                                data: {
                                    'artigo': artigo,
                                    'marca': marca,
                                    'modelo': modelo,
                                    'matricula': matricula,
                                    'valor': valor,
                                    'estado':0,
                                    'id_automobilista':1,
                                    'num_carta': num_carta,
                                    'descricao': descricao,
                                    'accao':"Pagamento",
                                    'data_inc':"2020-10-10",
                                    'data_fim':"2020-10-10",
                                    'id_agente':1
                                },
                                dataType: 'json',
                                success: function(data) {
                                    $("#artigo").val('');
                                    $("#marca").val('');
                                    $("#modelo").val('');
                                    $("#matricula").val('');
                                    $("#valor").val('').trigger("change");
                                    $("#num_carta").val('');
                                    $("#descricao").val('');                                    
                                    swal({
                                        icon: 'success',
                                        title: 'Otimo',
                                        text: "Multa Cadastrada com sucesso",
                                        footer: '<a href="">?</a>'
                                    })
                                    //alert(data.message);

                                },
                                error: function(err) {
                                    //                                    alert("Error")
                                    swal({
                                        icon: 'error',
                                        title: 'OPss...',
                                        text: err,
                                        footer: '<a href="">?</a>'
                                    })
                                    console.log(err)
                                }
                            })
                        } else {
                            alert("Por favor preencha todos campos!")
                        }
                    })

                })
            </script>

</body>

</html>