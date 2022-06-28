<!DOCTYPE html>

<html lang="pt-pt"> 
    <head>
        <meta charset="utf-8">
        <title>Site</title>
        
        <link rel="stylesheet" href="css/Normalize.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,500&display=swap" rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> 

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style2.css"/>
    </head>

    <body>
        <nav class="navbar navbar-expand d-flex flex-column align-item-start fixed" id="sidebar">
            <a href="#" class="navbar-brand text-align mt-2">
                <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-upercase">
                    <i class="fas fa-road"></i> INTRAT
                </div>
            </a>
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100">
                    <a href="#" class="nav-link pl-4"><i class="fas fa-book"></i> Marcações</a>
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link pl-4"><i class="fas fa-file-alt"></i> Marcação de atendimento</a>
                </li>
                <li class="nav-item w-100">
                    <a href="#" class="nav-link pl-4 m"><i class="fas fa-id-card"></i> Informações da Carta</a>
                </li>
            </ul>     
            
        </nav>  

       

        <section class="p-4 my-container">
            <button class="btn my-4" id="menu-btn">Menu</button>
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
                                <button type="Pesquisar" class="btn btn-success">Pesquisar</button>
                            </div>
                          </div>
                       </div>  
                    </div>
                    <div class="py-3">
                        <h5>Dados Da Carta</h5>
                        <p>Encontre abaixo os detalhes da sua Carta</p>
                        <div class="row py-3 dados">
                        <div class="col-6 col-sm-4">
                            <h6>Nome</h6>
                            <p>Balton Miguel Dlakhama</p>
                        </div>
                        <div class="col-6 col-sm-4">
                            <h6>Numero Da Carta</h6>
                            <p>1035366</p>
                        </div>
                        <div class="col-6 col-sm-4">
                            <h6>Morada</h6>
                            <p>DE NDLAVELA Q-06 130 DA MATOLA</p>
                        </div>
                    
                        <!-- Force next columns to break to new line at md breakpoint and up -->
                        <div class="w-100 d-none d-md-block"></div>
                    
                        <div class="col-6 col-sm-4">
                            <h6>Inicio de Validade</h6>
                            <p>10 de Junho de 2021</p>
                        </div>
                        <div class="col-6 col-sm-4">
                            <h6>Fim de Validade</h6>
                            <p>10 de Junho de 2026</p>
                        </div>
                        <div class="col-6 col-sm-4">
                            <h6>Estado</h6>
                            <p>Activo</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="py-3">
                        <h5>Histórico de Multas</h5>
                        <p>Encontre abaixo o histórico de multas</p>
                        <div class="dados">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>                            
                                        <th>Artigo</th>
                                        <th>Descricao</th>
                                        <th>Valor</th>
                                        <th>Data</th>
                                        <th>Estado</th>
                                        <th>Accao</th>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Ultrapassagem Irregular</td>
                                        <td>500.00</td>
                                        <td>10/05/2021</td>
                                        <td>Nao Pago</td>
                                        <td>Inibicao Por 1 semana</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
            </section>
            
        </section>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            var menu_btn = document.querySelector("#menu-btn")
            var sidebar = document.querySelector("#sidebar")
            var container = document.querySelector(".my-container")

            menu_btn.addEventListener("click",()=>{
                sidebar.classList.toggle("active-nav")
                container.classList.toggle("active-cont")
            })
        </script>
    </body>
    
</html>