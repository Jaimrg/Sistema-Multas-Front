

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
                <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold color-2"><i class="fas fa-id-card me-2"></i>Pagar Multa</a>                
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h4 class="fs-2 m-0">Pagamento</h4>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </nav>

            <div class="container-fluid px-5 py-5">
                <div class="card bg-white relative rounded-lg shadow flex w-full mx-auto">
                    <!---->
                    <span class="flex">

                        <form onsubmit="event.preventDefault()" class="w-full flex flex-wrap my-5 mx-5 text-justify md:text-left md:mx-10 form-group">
                            <h5 class="w-full">
                                Pagar Multa
                            </h5>
                            <div class="row py-1">
                                <div class="col-sm-4">
                                    <label for="meio" class="form-label"><b class="b">Meio</b> <b class="text-red">*</b></label>
                                    <select class="form-select form-control" id="meio" name="meio">
                                        <option selected value ="1" class="bg-green">M-Pesa</option>
                                        <option value="2">E-Mola</option>
                                                                               
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="valor" class="form-label"><b class="b">Montante</b> <b class="text-red">*</b></label>
                                    <input type="text" id="valor" name="valor" class="form-control" placeholder="valor" aria-label="marca">
                                </div>

                                <div class="col-sm-4">
                                    <label for="telefone" class="form-label"><b class="b">Numero de Telefone</b> <b class="text-red">*</b></label>
                                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="telefone" aria-label="modelo">
                                    <input type="hidden" id="id" name="nome" class="form-control" placeholder="telefone" aria-label="modelo" value=<?php echo $_GET['id']; ?>>
                                </div>
                            </div>
                            



                            <div class="row py-3">
                                <div class="col-sm-6">
                                    <button type="submit" name="submeter" id="submeter" value="submit" class="btn px-5 w-full btn-success pull-right">Pagar</button>
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
                        var meio = $("#meio").val();
                        var valor = $("#valor").val();
                        var telefone = $("#telefone").val();
                        var id = $("#id").val();                                                                               
                        if (id != "") { //&& apelido != "" && data_nascimento != "" && sexo != "" && numero_documento != "" && tipo_documento != ""
                            $.ajax({
                                url: "http://127.0.0.1:8000/api/pagar-multa/"+ id + '/' + valor,
                                method: "PUT",
                                data: {
                                    'meio': meio,
                                    'valor': valor,
                                    'telefone': telefone,                                    
                                },
                                dataType: 'json',
                                success: function(data) {
                                    $("#telefone").val('');
                                    $("#valor").val('');                                    
                                    $("#meio").val('').trigger("change");                                                                        
                                    swal({
                                        icon: 'success',
                                        title: 'Otimo',
                                        text: "Multa Paga com Sucesso",
                                        footer: '<a href="">?</a>'
                                    })
                                    //alert(data.message);
                                    //window.location.href="Painel_Automobilista.php"
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