<!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Clientes</h3></div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <section class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registros</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 10px">Cód.</th>
                                <th>Nome</th>
                                <th>Data de Nascimento</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>Limite de crédito</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($clientes) && !empty($clientes)) : ?>
                                    <?php foreach ($clientes as $cliente) : ?>
                                        <tr>
                                            <td><?= esc($cliente['id_cliente']) ?></td>
                                            <td><?= esc($cliente['nome']) ?></td>
                                            <td><?= esc($cliente['data_de_nascimento']) ?></td>
                                            <td><?= esc($cliente['telefone']) ?></td>
                                            <td><?= esc($cliente['endereco']) ?></td>
                                            <td><?= esc($cliente['limite_de_credito']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Nenhum cliente encontrado.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                          <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                          </ul>
                        </div>
                      </div>
                        <!-- /.card -->
                </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </section>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->