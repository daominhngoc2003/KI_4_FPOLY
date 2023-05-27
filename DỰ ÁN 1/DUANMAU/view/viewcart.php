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


</style>
<section class="row mt mb view-cart">
    <div class="boxtrai mr">
        <div class="row mb ">

            <div class="box-title"> GIỎ HÀNG</div>
            <div class="box-content row cart">
                <table>
                    <tr class="th">
                        <td>Hình</td>
                        <td>Sản phẩm</td>
                        <td>Đơn giá</td>
                        <td>Số lượng</td>
                        <td>Thành tiền</td>
                        <td>Thao tác</td>
                    </tr>
                    <?php
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $thanhtien = $cart[3] * $cart[4];
                        $tong += $thanhtien;
                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="XÓA"></a>';
                        echo '
                                        <tr>
                                            <td><img src="' . $hinh . '" alt="" height="80"></td>
                                            <td>' . $cart[1] . '</td>
                                            <td>' . $cart[3] . '</td>
                                            <td>' . $cart[4] . '</td>
                                            <td>' . $thanhtien . '</td>
                                            <td class="btn-xoa">' . $xoasp . '</td>
                                        </tr>
                                    ';
                        $i += 1;
                    }
                    echo '
                                        <tr>
                                            <td colspan = "4">Tổng đơn hàng</td>
                                            <td>' . $tong . '</td>
                                            <td></td>
                                        </tr>
                                    ';

                    ?>
                </table>
            </div>
        </div>
        <div class="row mb bill btn_all">
            <a href="index.php?bill"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG"></a>
            <a href="index.php?delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>

</section>