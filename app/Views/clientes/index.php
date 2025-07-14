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
                            <a href="/clientes/novo" class="btn btn-primary">Novo cliente</a>
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
                                <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($clientes) && !empty($clientes)) : ?>
                                    <?php foreach ($clientes as $cliente) : ?>
                                        <tr>
                                            <td><?= esc($cliente['id_cliente']) ?></td>
                                            <td><?= esc($cliente['nome']) ?></td>
                                            <td><?= esc($cliente['data_de_nascimento']) ?></td>
                                            <?php helper('telefone'); ?>
                                            <td><?= esc(format_telefone($cliente['telefone'])) ?></td>
                                            <td><?= esc($cliente['endereco']) ?></td>
                                            <td><?= esc($cliente['limite_de_credito']) ?></td>
                                            <td>
                                              <a href="/clientes/editar/<?= $cliente['id_cliente'] ?>" class="btn btn-warning">Editar</a>
                                            </td>
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