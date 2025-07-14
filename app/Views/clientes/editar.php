<!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dados Cliente</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <a href="/clientes" class="btn btn-success" style="margin-right: 15px;">Voltar</a>
                  <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
                  <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Editar</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
    
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Dados Pessoais</h3>
                  </div>
                  <form action="<?= base_url('clientes/store') ?>" method="post">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" name="nome" value="<?= isset($cliente) ? esc($cliente['nome']) : '' ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_de_nascimento" value="<?= isset($cliente) ? esc($cliente['data_de_nascimento']) : '' ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" maxlength="15" onkeyup="handlePhone(event)" value="<?= isset($cliente) ? esc($cliente['telefone']) : '' ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Endereço</label>
                            <input type="text" class="form-control" name="endereco" value="<?= isset($cliente) ? esc($cliente['endereco']) : '' ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Limite de crédito</label>
                            <input type="text" class="form-control" name="limite_de_credito" value="<?= isset($cliente) ? esc($cliente['limite_de_credito']) : '' ?>">
                          </div>
                        </div>
                      </div>

                      <input type="hidden" name="id_cliente" value="<?= isset($cliente) ? esc($cliente['id_cliente']) : '' ?>">

                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
    
              </div>
            </div>
          </div>
        </section>
      </main>

      <script src="<?= base_url('../../theme/dist/js/scripts.js') ?>"></script>
      <!--end::App Main-->