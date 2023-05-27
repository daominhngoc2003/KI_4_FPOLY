<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<td>Thao tác</td>';
        $xoa_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoa_td2 = '';
    }
    echo '
                        <tr class="th">
                        <td>Hình</td>
                        <td>Sản phẩm</td>
                        <td>Đơn giá</td>
                        <td>Số lượng</td>
                        <td>Thành tiền</td>
                        ' . $xoasp_th . '
                    </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
        if ($del == 1) {

            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="XÓA"></a></td>';
        } else {

            $xoasp_td = '';
        }
        echo '
                        
                                        <tr>
                                            <td><img src="' . $hinh . '" alt="" height="80"></td>
                                            <td>' . $cart[1] . '</td>
                                            <td>' . $cart[3] . '</td>
                                            <td>' . $cart[4] . '</td>
                                            <td>' . $thanhtien . '</td>
                                            ' . $xoasp_td . '
                                        </tr>
                                    ';
        $i += 1;
    }
    echo '
                                        <tr>
                                            <td colspan = "4">Tổng đơn hàng</td>
                                            <td>' . $tong . '</td>
                                            ' . $xoa_td2 . '
                                        </tr>
                                    ';
}

function bill_chitiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '
                        <tr class="th">
                        <td>Hình</td>
                        <td>Sản phẩm</td>
                        <td>Đơn giá</td>
                        <td>Số lượng</td>
                        <td>Thành tiền</td>
                    </tr>';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['image'];
        $tong += $cart['thanhtien'];
        echo '
                        
                                        <tr>
                                            <td><img src="' . $hinh . '" alt="" height="80"></td>
                                            <td>' . $cart['name'] . '</td>
                                            <td>' . $cart['price'] . '</td>
                                            <td>' . $cart['soluong'] . '</td>
                                            <td>' .  $cart['thanhtien']  . '</td>
                                        </tr>
                                    ';
        $i += 1;
    }
    echo '
                                        <tr>
                                            <td colspan = "4">Tổng đơn hàng</td>
                                            <td>' . $tong . '</td>
                                        </tr>
                                    ';
}


function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
    }
    return $tong;
}
function insert_bill($iduser, $username, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,email,address,phone,pttt,ngaydathang,tongdonhang) values('$iduser','$username',$email,$address,'$phone','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser, $idsp, $image, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idsp,image,name,price,soluong,thanhtien,idbill) values('$iduser','$idsp','$image','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "select *from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($idbill)
{
    $sql = "select *from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}



function loadall_bill($iduser)
{
    $sql = "select *from bill where iduser=" . $iduser;
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_thongke()
{
    $sql = "SELECT danhmuc.id as id, danhmuc.ten_loai as ten_loai, count(sanpham.id) as countsp ,min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.id_dm";
    $sql .= " GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
