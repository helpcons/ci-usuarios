<!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Novo Cliente</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard v3</li>
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
                            <input type="text" class="form-control" name="nome">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_de_nascimento">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Telefone</label>
                            <input type="text" class="form-control" name="telefone">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Endereço</label>
                            <input type="text" class="form-control" name="endereco">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Limite de crédito</label>
                            <input type="text" class="form-control" name="limite_de_credito">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
    
              </div>
            </div>
          </div>
        </section>
      </main>
      <!--end::App Main-->