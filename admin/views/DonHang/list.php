<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">quản lý đơn hàng</h3>
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
                            <h3 class="card-title">Tất cả đơn hàng</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>SĐT</th>
                                        <th>Thanh toán</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>
                                            Hành động
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($donhang as $item) : ?>
                                        <tr class="align-middle">
                                            <td><?= $item['id'] ?></td>

                                            <td><?= $item['user_name'] ?></td>

                                            <td><?= $item['user_email'] ?></td>

                                            <td><?= $item['user_address'] ?></td>

                                            <td><?= $item['user_phone'] ?></td>
                                        
                                            <td><?php
                                                if ($item['status_payment'] == 0) {
                                                    echo "Trả tiền khi nhận hàng";
                                                } elseif ($item['status_payment'] == 1) {
                                                    echo "Chuyển khoản";
                                                } else {
                                                    // Handle unexpected values
                                                    echo "Unknown payment method";
                                                }
                                                ?></td>

                                            <td><?= $item['quantity'] ?></td>
                                            <td><?= number_format($item['total_bill']) ?>đ</td>
                                            <td><?php
                                                if ($item['status_delivery'] == 0) {
                                                    echo "Chờ xác nhận";
                                                } elseif ($item['status_delivery'] == 1) {
                                                    echo "Chờ lấy hàng";
                                                } elseif ($item['status_delivery'] == 2) {
                                                    echo "Chờ giao hàng";
                                                } elseif ($item['status_delivery'] == 3) {
                                                    echo "Đã giao hàng";
                                                } else {
                                                    // Handle unexpected values
                                                    echo "Unknown payment method";
                                                }
                                                ?></td>

                                            <td>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=don-hang-detail&id=<?= $item['id'] ?>" class="btn btn-info">Detail</a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=don-hang-update&id=<?= $item['id'] ?>" class="btn btn-success">Cập nhật</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->