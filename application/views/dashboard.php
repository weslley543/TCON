    


 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Minhas Requisições</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" id="abrirModal" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus"></i> Solicitar Servico</button>
  
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            Essa semana
          </button>
        </div>
      </div>

      

      <h2>Serviços</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Serviço</th>
              <th>Prioridade</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody id="corpoTabela">
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalSolicitacoes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Solicitação de Serviço</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action='<?= base_url('Servicos/cadastrarServico')?>' method="POST">
        <div class="from-group">
          <label for="">Tipo de Serviço</label>
          <select value="Selecione um tipo de serviço" class="form-control" name="tipoServico">
              <option value="">Selecione um serviço</option>
              <option value="0">Serviços Gerais</option>
              <option value="1">Manutenção</option>
          </select>
          <label for="">Descrição do Serviço</label>
          <textarea name="descricao" class="form-control"></textarea>
          <div class="row">
            <div class="col-md-6"><label for="">Data Solicitada</label>
              <input name="data" id="data" class="form-control" type="date">
            </div>
            <div class="col-md-6"><label for="">Horário disponível em casa</label>
              <input name="hora" id="hora" class="form-control" type="time">
            </div>
            
          </div>
          <div class="btn-group mt-2">
            <button class="btn btn-success" id="enviar">Enviar</button>
            <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancelar</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
    