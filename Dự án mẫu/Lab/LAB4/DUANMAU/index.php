<?php
include "./model/pdo.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "view/header.php";
include "./global.php";

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
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $iddm = $_GET['id'];
                $dssp = loadall_sanpham("",$iddm);

                include "view/sanpham.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
