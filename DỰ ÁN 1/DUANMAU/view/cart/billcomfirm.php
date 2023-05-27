<style>
    table {
        width: 100%;
    }

    .th td {
        font-weight: 600;
    }

    .btn_all a input {
        padding: 10px 10px;
        border-radius: 5px;
        border: 2px solid lightslategray;
    }

    .btn-xoa a input {
        padding: 5px 20px;
        border-radius: 5px;
        border: 2px solid lightslategray;
    }

    .thongtin input {
        width: 100%;
        padding: 5px 5px;
        border-radius: 5px;
        border: 1px solid grey;
    }
</style>
<section class="row mt mb view-cart">
    <div class="boxtrai mr">
        <form action="index?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="box-title">CẢM ƠN</div>
                <div class="box-content row ">
                    <h2>cảm ơn quý khách đã đặt hàng</h2>
                </div>
            </div>
            <?php
                if (isset($bill) && (is_array($bill))) {
                    extract($bill);
                }
            ?>
            <div class="row mb">
                <div class="box-title">THÔNG TIN ĐƠN HÀNG</div>
                <div class="box-content row ">
                    <li>- Mã đơn hàng: DAM-<?= $bill['id'] ?></li>
                    <li>- Ngày đặt hàng: <?= $bill['ngaydathang'] ?></li>
                    <li>- Tổng đơn hàng: <?= $bill['tongdonhang'] ?></li>
                    <li>- Phương thức thanh toán: <?= $bill['pttt'] ?></li>
                </div>
            </div>
            <div class="row mb">
                <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="box-content row billform">
                    <div>
                        <div>
                            <label for="">>Người đặt hàng</label>
                            <input type="text" name="username" value="<?= $username ?>" disabled>
                        </div>
                        <div>
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" value="<?= $address ?>" disabled>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="text" name="email" value="<?= $email ?>" disabled>
                        </div>
                        <div>
                            <label for="">Điện thoại</label>
                            <input type="text" name="phone" value="<?= $phone ?>" disabled>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row mb">
                <div class="box-title">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="box-content row ">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="bill_pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="2" name="bill_pttt" checked>Chuyển khoản khi nhận hàng</td>
                            <td><input type="radio" value="3" name="bill_pttt" checked>Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb ">

                <div class="box-title">THÔNG TIN GIỎ HÀNG</div>
                <div class="box-content row cart">
                    <table>

                        <?php
                        bill_chitiet($billct);
                        ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill btn_all">
                <a href="index.php?act=billconfirm"><input type="button" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG"></a>
                <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</section>