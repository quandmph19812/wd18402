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
		
		<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>
										Thông tin người nhận
									</th>
									<th>
										Thanh toán
									</th>
									<th>
										Trạng thái
									</th>
									<th>
										Vận chuyển
									</th>
									<th>
										Tổng tiền
									</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($DonHang as $item) ?>
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
										<h8 class="item_cart"><?=$name.' -- '.$email.' -- '.$tel.' -- '.$diachi ?></h8>
									</td>
									<td>
										<strong><?=$thanhtoan?></strong>
									</td>
									<td>
									<strong><?=$trangthai1?></strong>
									</td>
									<td>
										<strong><?=$vanchuyen?></strong>
									</td>
									<td class="options">
										<strong>$<?= $_SESSION['orders']['total_bill']?></strong>
									</td>
									<td class="options">
									<a href="<?= BASE_URL . "?act=xemspdonhang&id=" .$id ?>"><input type="button" class="btn_1" value ="Xem đơn hàng"></a>
									</td>
								</tr>
								
								
								
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
