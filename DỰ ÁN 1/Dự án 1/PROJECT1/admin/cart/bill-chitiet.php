<?php
if (isset($bill) && is_array($bill)) {
    extract($bill);
}
?>
<div class="main">
    <div class="main-content dashboard">
        <div class="checkout-area ml-110 mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-8">
                        <h5 class="checkout-title billing-from">ĐÃ ĐẶT ĐƯỢC HÀNG. CẢM ƠN BẠN ĐÃ MUA HÀNG BÊN SHIRT FS</h5>
                        <h5 class="checkout-title billing-from">Trạng thái đơn hàng <?php if ($status == 0) {
                                                                                        echo "Đơn hàng mới";
                                                                                    } elseif ($status == 1) {
                                                                                        echo "Đang xử lý";
                                                                                    } elseif ($status == 2) {
                                                                                        echo "Đang giao hàng";
                                                                                    } else {
                                                                                        echo "Giao hàng thành công";
                                                                                    }
                                                                                    ?></h5>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from">
                            <h5 class="checkout-title">
                                THÔNG TIN ĐƠN HÀNG
                            </h5>
                            <div class="row">
                                <li>Mã đơn hàng: DAM-<?= $id ?></li> -<li>Ngày đặt hàng: <?= $ngaydathang ?></li>-<li>Tổng đơn hàng: <?= $tongdonhang ?></li>-<li>Phương thức thanh toán: <?= $pttt ?></li>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from" action="index.php?act=billconfirm">
                            <h5 class="checkout-title">
                                Thông tin đặt hàng
                            </h5>
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="eg-input-group">
                                        <label for="first-name1">Tên tài khoản</label>
                                        <input type="text" id="first-name1" value="<?= $username ?>" placeholder="Tên tài khoản" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="eg-input-group">
                                        <label for="first-name">Họ và tên người đặt</label>
                                        <input type="text" id="first-name" value="<?= $full_name ?>" placeholder="Họ và tên người đặt" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" value="<?= $address ?>" placeholder="Địa chỉ của bạn" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label for="first-name">Số điện thoại</label>
                                        <input type="text" value="<?= $phone ?>" placeholder="Số điện thoại của bạn" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label for="first-name">Địa chỉ email người đặt</label>
                                        <input type="text" value="<?= $email ?>" placeholder="Your Email Address" disabled>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from">
                            <h5 class="checkout-title">
                                Phương thức thanh toán
                            </h5>
                            <div class="row"><input class="form-check-input" type="radio" disabled id="flexRadioDefault1">
                                <?php if ($pttt == 1) {
                                    echo "Thanh toán khi nhận hàng";
                                } else if ($pttt == 2) {
                                    echo "Thanh toán bằng chuyển khoản";
                                } else if ($pttt == 3) {
                                    echo "Thanh toán online";
                                } else {
                                    echo "Không tìm thấy phương thức thanh toán";
                                } ?>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from">
                            <h5 class="checkout-title">
                                THÔNG TIN GIỎ HÀNG HÀNG
                            </h5>
                            <div class="row">
                                <table class="table cart-table">

                                    <tbody>
                                        
                                        <?php
                                        $idbill = $_GET['id'];
                                        $bill = loadall_cart($idbill);
                                        function bill_chi_tiet($listcart)
                                        {
                                            global $img_path;
                                            $tong = 0;
                                            $i = 0;
                                            echo '<thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Price </th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            ';
                                            foreach ($listcart as $cart) {
                                                $hinh = $img_path . $cart['image'];
                                                $tong += $cart['thanhtien'];
                                                $sanphamct = "index.php?act=sanphamct&idsp=" . $cart['idsp'];
                                                echo '<tbody>
            <tr>
                           <td class="image-col">
                               <a href="' . $sanphamct . '"><img src="' . $hinh . '" alt=""></a>
                           </td>
                           <td class="product-col"><a href="' . $sanphamct . '" class="product-title">' . $cart['namesp'] . '</a></td>
                           <td class="discount-col"><span class="discount-price">' . number_format($cart['price']) . '</span></td>
                           <td class="quantity-col">
                               ' . $cart['soluong'] . '
                           </td>
                           <td class="total-col">' . number_format($cart['thanhtien']) . '</td>
                               
                       </tr>
                       </tbody>
                       ';

                                                $i += 1;
                                            }
                                            echo '<div class="row mt-60">
    <div class="col-xxl-6 col-lg-4">
        <table class="table total-table ">
            <tbody>
                <tr class="">
                    <td class="tt-left">Tổng đơn hàng</td>
                    <td class="tt-right">' . number_format($tong) . '</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>';
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>