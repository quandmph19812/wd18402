<?php require_once PATH_VIEW . 'layouts/partials/header.php' ?>


<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/client/css/cart.css">
<main class="bg_gray">
		<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?= BASE_URL?>">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
			<h1>Đơn hàng của <?=$name?> </h1>
		</div>
		<?php
                    					if(isset($_SESSION['user'])){
                        					extract($_SESSION['user']);
											}?>
		<!-- /page_header -->
		<?php if (isset($_SESSION['error'])) : ?>
                                        <div class="alert alert-danger">
                                            <?= $_SESSION['error'] ?>
                                        </div>
                                        <?php unset($_SESSION['error']); ?>
                                    <?php endif; ?>
		
		<table class="table table-striped cart-list kiemtradonhang">
							<thead>
								<tr>
									<th>
										Thông tin người nhận
									</th>
									<th>
										Sản phẩm
									</th>
									<th>
										Số lượng
									</th>
									<th>
										Giá tiền
									</th>
									<th>
										Thanh toán
									</th>
									<th>
										Trạng thái
									</th>
									<th>
										Tổng tiền
									</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($DonHangDaMua as $item) : ;?>
									<!-- // if($pttt==0){
                                    //     $thanhtoan = "Nhận hàng trả tiền";
                                    // }else{
                                    //     $thanhtoan= "Thanh toán QR";
                                    // }
                                    // if($ptvc==0){
                                    //     $vanchuyen = "Nhanh";
                                    // }else{
                                    //     $vanchuyen = "Hỏa Tốc";
                                    // }
                                    // if($trangthai==0){
                                    //     $trangthai1="Chưa giao hàng";
                                    // }elseif($trangthai==1){
                                    //     $trangthai1 = "Đang giao hàng";
                                    // }else{
                                    //     $trangthai1= "Đã giao hàng";
                                    // }
									$xemspdonhang = "index.php?act=xemspdonhang&id=".$id; -->
									<tr>
									<td>
										<h8 class="item_cart"><?=$item['user_name'].' -- '.$item['user_phone'].' -- '.$item['user_address'] ?></h8>
									</td>
									<td>
										<strong><?=$item['product_name']?></strong>
									</td>
									<td>
										<strong><?=$item['quantity']?></strong>
									</td>
									<td>
										<strong><?=number_format($item['price'])?>đ</strong>
									</td>
									<td>
										<strong><?php
										if ($item['status_payment'] == 0) {
											echo "Trả tiền khi nhận hàng";
										} elseif ($item['status_payment'] == 1) {
											echo "Chuyển khoản";
										} else {
											// Handle unexpected values
											echo "Unknown payment method";
										}
										?></strong>
									</td>
									<td>
									<strong><?php
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
										?></strong>
									</td>
									<td class="options">
										<strong>$<?=number_format($item['total_bill'])?>đ</strong>
									</td>
									
								</tr>
								
								<?php endforeach; ?>
								
							</tbody>
						</table>
					</div>
					<!-- /cart_actions -->
	
		</div>
		<!-- /container -->
		
		<!-- /box_cart -->
		
	</main>
	<!--/main-->
<?= require_once PATH_VIEW . 'layouts/partials/footer.php' ?>
