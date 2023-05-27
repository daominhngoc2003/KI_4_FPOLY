<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "./header.php";
// Controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // BẢNG DANH MỤC
            // add  danh mục
        case 'adddm':
            // Kiểm tra xem người dùng có click vào nút Thêm mới hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                insert_danhmuc($name);
                $thongbao = "Thêm thành công";
            }
            include "./danhmuc/add.php";
            break;
            // List danh mục
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
            //  Xóa danh mục
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
            // Sửa dm
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "SELECT * from danhmuc where id=".$_GET['id'];
                $dm = pdo_query_one($sql);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/update.php";
            break;
            // Cập nhật danh mục
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $sql = "UPDATE danhmuc SET name = '".$name."' where id =".$_POST['id'];
                pdo_execute($sql);
                $thongbao ="Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;
            // add sản phẩm
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $discount = $_POST['discount'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $date = $_POST['date'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($name, $image, $price, $discount, $mota, $date, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./sanpham/add.php";
            break;
            // danh sách sản phẩm
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw = $_POST['kyw'];
                $iddm= $_POST['iddm'];
            }
            else{
                $kyw = '';
                $iddm= 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham=loadall_sanpham($kyw,$iddm);
            include "./sanpham/list.php";
            break;
            // Xóa sản phẩm
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id']>0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham=loadall_sanpham("",0);
            include "./sanpham/list.php";
            break;
            // Sửa sản phẩm
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id']>0)) {
                $sp=loadone_sanpham($_GET['id']);
            }
            $listsdanhmuc = loadall_danhmuc();
            $listsanpham=loadall_sanpham("",0);
            include "./sanpham/update.php";
            break;
            // Update sản phẩm
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $discount = $_POST['discount'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $date = $_POST['date'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $listsanpham = update_sanpham($iddm,$name, $image, $price, $discount, $mota, $date,$id);
                $thongbao= "Cập nhật thành công";
            }
            $listsanpham = loadall_sanpham();
            $listsanpham=loadall_sanpham("",0);
            include "./sanpham/list.php";
            break;
    }
} else {
    include "./content.php";
}
include "./footer.php";
