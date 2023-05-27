<style>
    table{
        width: 100%;
    }
    
    .th td{
        font-weight: 600;
    }
    .btn_all a input{
        padding: 10px 10px;
        border-radius: 5px;
        border: 2px solid lightslategray;
    }
    .btn-xoa a input{
        padding: 5px 20px;
        border-radius: 5px;
        border: 2px solid lightslategray;
    }
    .thongtin input{
        width: 100%;
        padding: 5px 5px;
        border-radius: 5px;
        border: 1px solid grey;
    }


</style>
<section class="row mt mb view-cart">
    <div class="boxtrai mr">
        <form action="index?act=bill" method="post">
            <div class="row mb">
                <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="box-content row billform">
                    <table class="thongtin">
                        <?php
                        if (isset($_SESSION['username'])) {
                            $username = $_SESSION['username']['username'];
                            $address = $_SESSION['username']['address'];
                            $email = $_SESSION['username']['email'];
                            $phone = $_SESSION['username']['phone'];
                        } else {
                            $username = "Vui lòng đăng nhập để đặt hàng!";
                            $address = "Vui lòng đăng nhập để đặt hàng!";
                            $email = "Vui lòng đăng nhập để đặt hàng!";
                            $phone = "Vui lòng đăng nhập để đặt hàng!";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="username" value="<?= $username ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="phone" value="<?= $phone ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="box-title">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="box-content row ">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt" checked>Chuyển khoản khi nhận hàng</td>
                            <td><input type="radio" value="3" name="pttt" checked>Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="row mb ">

                <div class="box-title">THÔNG TIN GIỎ HÀNG</div>
                <div class="box-content row cart">
                    <table>
                        
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill btn_all">
                <a href="index.php?act=billcomfirm"><input type="button" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG"></a>
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