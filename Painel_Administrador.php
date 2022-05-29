<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />

    <title>Admintrador</title>

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
                <a href="Painel_Administrador.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color-2"><i class="fas fa-id-card me-2"></i>Registrar Automobilista</a>
                <a href="Visualizar_dados_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Visualizar Dados</a>
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
                                Dados do Automobilista
                            </h5>
                            <div class="row py-1">
                                <div class="col-sm-4">
                                    <label for="num_carta" class="form-label"><b class="b">Numero Da Carta</b> <b class="text-red">*</b></label>
                                    <input type="text" id="num_carta" name="num_carta" class="form-control" placeholder="Numero Da Carta" aria-label="Numero Da Carta">
                                </div>

                                <div class="col-sm-4">
                                    <label for="nome" class="form-label"><b class="b">Nome</b> <b class="text-red">*</b></label>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" aria-label="Nome">
                                </div>

                                <div class="col-sm-4">
                                    <label for="apelido" class="form-label"><b class="b">Apelido</b> <b class="text-red">*</b></label>
                                    <input type="text" id="apelido" name="apelido" class="form-control" placeholder="Apelido" aria-label="Apelido">
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-4">
                                    <label for="sexo" class="form-label"><b class="b">Sexo</b> <b class="text-red">*</b></label>
                                    <select class="form-select form-control" id="sexo" name="sexo">
                                        <option selected class="bg-green">Masculino</option>
                                        <option value="1">Femenino</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="data_nascimento" class="form-label"><b class="b">Data de Nascimento</b><b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Data" aria-label="Data" id="data_nascimento" name="data_nascimento">
                                </div>

                                <div class="col-sm-4">
                                    <label for="pais_origem" class="form-label" id=""><b class="b">Pais de Origem</b><b class="text-red">*</b></label>
                                    <select class="form-select form-control" id="pais_origem" name="pais_origem">
                                        <option selected value="Mocambique" class="bg-green">Mocambique</option>
                                        <option value="Africa do Sul">Africa do Sul</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row py-2">

                                <div class="col-sm-4">
                                    <label for="morada" class="form-label"><b class="b">Morada</b> <b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Morada" aria-label="Morada" id="morada" name="morada">
                                </div>

                                <div class="col-sm-4">
                                    <label for="tipo_documento" class="form-label"><b class="b">Tipo de Identificacao</b> <b class="text-red">*</b></label>
                                    <select class="form-select form-control" id="tipo_documento" name="tipo_documento">
                                        <option selected class="bg-green">Bilhete de Identidade</option>
                                        <option value="1">Passaporte</option>
                                        <option value="2">Dire</option>

                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="numero_documento" class="form-label"><b class="b">No. Da Identificacao</b> <b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Numero da Identificacao" aria-label="Identificacao" id="numero_documento" name="numero_documento">
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-4">
                                    <label for="categoria_carta" class="form-label"><b class="b">Categoria Da Carta</b> <b class="text-red">*</b></label>
                                    <select class="form-select form-control" id="specificSizeSelect">
                                        <option selected class="bg-green" id="categoria_carta" name="categoria_carta">A</option>
                                        <option value="1">B</option>
                                        <option value="2">C</option>
                                        <option value="2">C1</option>
                                        <option value="2">CE</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="inicio_validade" class="form-label"><b class="b">Inicio de Validade</b> <b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Validade" aria-label="Validade" id="inicio_validade" name="inicio_validade">
                                </div>

                                <div class="col-sm-4">
                                    <label for="fim_validade" class="form-label"><b class="b">Fim da Validade</b> <b class="text-red">*</b></label>
                                    <input type="text" class="form-control" placeholder="Validade" aria-label="Validade" id="fim_validade" name="fim_validade">
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
                        var num_carta = $("#num_carta").val();
                        var nome = $("#nome").val();
                        var apelido = $("#apelido").val();
                        var data_nascimento = $("#data_nascimento").val();
                        var sexo = $("#sexo").val();
                        var morada = $("#morada").val();
                        var tipo_documento = $("#tipo_documento").val();
                        var numero_documento = $("#numero_documento").val();
                        var categoria_carta = $("#categoria_carta").val();
                        var inicio_validade = $("#inicio_validade").val();
                        var fim_validade = $("#fim_validade").val();

                        if (nome != "") { //&& apelido != "" && data_nascimento != "" && sexo != "" && numero_documento != "" && tipo_documento != ""
                            $.ajax({
                                url: "http://127.0.0.1:8000/api/create-automobilista",
                                method: "POST",
                                data: {
                                    'num_carta': num_carta,
                                    'nome': nome,
                                    'apelido': apelido,
                                    'data_nasc': data_nascimento,
                                    'pais_origem':"Mocambique",
                                    'sexo': sexo,
                                    'morada': morada,
                                    'tipo_documento': tipo_documento,
                                    'num_identidade': numero_documento,
                                    'categoria': categoria_carta,
                                    'inicio_validade': inicio_validade,
                                    'fim_validade': fim_validade
                                },
                                dataType: 'json',
                                success: function(data) {
                                    $("#num_carta").val('');
                                    $("#nome").val('');
                                    $("#apelido").val('');
                                    $("#data_nascimento").val('');
                                    $("#sexo").val('').trigger("change");
                                    $("#morada").val('');
                                    $("#tipo_documento").val('');
                                    $("#numero_documento").val("").trigger("change");
                                    $("#categoria_carta").val("").trigger("change");
                                    $("#inicio_validade").val('');
                                    $("#fim_validade").val('');
                                    alert(data.message);

                                },
                                error: function(err) {
                                    alert("Error")
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