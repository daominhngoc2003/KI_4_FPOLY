<?php
session_start();
include "./model/pdo.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/taikhoan.php";
include "view/header.php";
include "./model/cart.php";
include "./global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top();

if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = loadone_sanpham_cungloai($id, $id_dm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $iddm = $_GET['id'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $ten_loai = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                $username     = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                insert_taikhoan($email, $username, $password);
                $thongbao = "Đã đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)) {
                $username  = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username, $password);
                if (is_array($checkuser)) {
                    $_SESSION['username'] = $checkuser;
                    header('location:index.php');
                    // $thongbao = "Bạn đã đăng nhập thành công";
                } else {
                    $thongbao = "Tài khoản không tồn tại Vui lòng kiểm tra hoặc đăng ký";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $username  = $_POST['username'];
                $password = $_POST['password'];
                $email  = $_POST['email'];
                $image = $_FILES['image'];
                $address  = $_POST['address'];
                $phone = $_POST['phone'];

                update_taikhoan($id, $username, $password, $email, $image, $address, $phone);
                $_SESSION['username'] = checkuser($username, $password);
                header('location:index.php?act=edit_taikhoan');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'] > 0)) {
                $email  = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['password'];
                } else {
                    $thongbao = "email không tồn tại";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('location:index.php');
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $ten_sp = $_POST['ten_sp'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $spadd = [$id, $ten_sp, $image, $price, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
                header('location: index.php');
            }
            // include "view/cart/viewcart.php";
            header('location: index.php?act=addtocart');
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billcomfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                $username  = $_POST['username'];
                $email  = $_POST['email'];
                $address  = $_POST['address'];
                $phone  = $_POST['phone'];
                $pttt  = $_POST['pttt'];
                $ngay_dathang = date('h:i:s d/m/Y');
                $tongdonhang = tongdonhang();

                // Tạo bill
                $idbill = insert_bill($iduser, $username, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang);

                // insert into cart :$session['mycart'] $idbill;
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['username']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                // Xóa session cart
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct  = loadall_cart($idbill);
            include "view/cart/billcomfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bill($_SESSION['username']['id']);
            include "view/cart/mybill.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
