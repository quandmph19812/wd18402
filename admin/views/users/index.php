<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">quản lý user</h3>
                </div>
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content Header--><!--begin::App Content-->
    <div class="app-content"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh Mục</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>ho ten</th>
                                        <th>dia chi</th>
                                        <th>so dien thoai</th>
                                        <th>password</th>
                                        <th>type</th>
                                        <th>
                                            <a href="<?= BASE_URL_ADMIN . '?act=user-create' ?>" class="btn btn-primary">
                                                <p>thêm mới sản phẩm</p>
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) :  ?>
                                        <tr>
                                            <td><?= $user['id'] ?></td>
                                            <td><?= $user['name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['hoten_user'] ?></td>
                                            <td><?= $user['diachi'] ?></td>
                                            <td><?= $user['tel'] ?></td>
                                            <td><?= $user['password'] ?></td>
                                            <td><?= $user['type'] ? 'admin' : 'member' ?></td>
                                            <td>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=user-detail&id=<?= $user['id'] ?>">Show</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->