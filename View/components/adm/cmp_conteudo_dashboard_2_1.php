        <!-- Begin Page  DashBoard Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Reportar Erro</a>
          </div>

          <!-- Content Row -->
          <div class="row" id="dataServicos" >

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Serviços Concluídos </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="servicosConcluidos">  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Pedidos Solicitados </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="servicosSolicitados"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Tarefas </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="servicosPorcent"></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar"  style="" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" id="barraProgss"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2"  id="divAtraso">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pedidos em Atraso </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="atrasos"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">

               <!-- Card Header - Dropdown -->
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between border border-primary">
                  <h6 class="m-0 font-weight-bold text-primary">Área de Reservas </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Menu:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" id="tabelaAgendamento">
                  <div class="chart-area">
                  <div class="table-responsive table-hover">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Área Reservada</th>
                          <th>Usuário Solicitante</th>
                          <th>Data de Reserva</th>
                          <th>Data de Entrega</th>
                        </tr>
                      </thead>
                      <tbody id="corpoAgendamento">
                      </tbody>
                     </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->

            <div class="col-xl-4 col-lg-5" id="tabelaLiberacao">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between border border-success">
                  <h6 class="m-0 font-weight-bold text-success"> Liberação de Entrada </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                
                <!-- Card Body Ajustar tamanho normal do card-body -->
                <div class="card-body" style='min-height: 360px; '>
                        <div class="row align-items-center justify-content " style='margin-bottom: 10px; margin-top: -15px;'> 
                          <div class="col"> Nome </div>
                          <div class="col"> CPF </div>
                          <div class="col"> Liberado Por. </div>         
                        </div>
                 <div id="conteudoLiberacao">

                 </div>   


                </div> 
                <!-- End Card body -->

              </div>

            </div>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Content Column -->
            <div class="col-lg-12 mb-6" id="tabelaServicos2">
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 border border-warning">
                  <h6 class="m-0 font-weight-bold text-warning">Ordem de Serviço - Solicitadas </h6>
                </div>

                  <div>        
                  <div class="table-responsive table-hover">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Tipo de Servico</th>
                          <th>Observacao</th>
                          <th>Usuario Solicitante</th>
                          <th>Data Cadastrada</th>
                          <th>Concluida</th>
                        </tr>
                      </thead>
                      <tbody id="corpoServicosAdm">
                      </tbody>
                     </table>
                    </div>
                  </div>
                </div>
                  </div>

               </div>
          </div> 

 
        </div> <!-- /.container-fluid -->

