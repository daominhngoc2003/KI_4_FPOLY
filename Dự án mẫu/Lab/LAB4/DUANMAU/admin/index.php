<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/khachhang.php";
    include "../model/binhluan.php";
    include "./header.php";
    // Controller
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'adddm':
                // Kiểm tra dùng có click vào nút add hay không
                if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
                    $tenloai=$_POST['ten_loai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }
                
                include "./danhmuc/add.php";
                break;
                // list danh mục
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "./danhmuc/list.php";
                break;
                // xóa danh mục
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "./danhmuc/list.php";
                break;
                // sửa danh mục
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql = "select * from danhmuc where id=".$_GET['id'];
                    $dm=pdo_query_one($sql);
                }
                $sql = "select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql);
                include "./danhmuc/update.php";
                break;
                // update danh mục
            case 'updatedm':
                if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                    $tenloai=$_POST['ten_loai'];
                    $id=$_POST['id'];
                    $sql = "UPDATE danhmuc SET ten_loai='".$tenloai."' where id=".$id;
                    pdo_execute($sql);
                    $thongbao="Cập nhật thành công";
                }
                $sql = "select * from danhmuc order by  id desc";
                $listdanhmuc=loadall_danhmuc();
                include "./danhmuc/list.php";
                break;
                // Bảng sản phẩm
            case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm =$_POST['id_dm'];
                    $tensp =$_POST['ten_sp'];
                    $price = $_POST['price'];
                    $mota = $_POST['mo_ta'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                       // echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sanpham($tensp,$price,$image,$mota,$iddm);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "./sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm= $_POST['id_dm'];
                }
                else{
                    $kyw = '';
                    $iddm= 0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "./sanpham/list.php";
                break;
                // Xóa sản phẩm
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sql = "delete from sanpham where id=".$_GET['id'];
                        pdo_query($sql);
                    }
                    $listsanpham=loadall_sanpham("",0);
                    include "./sanpham/list.php";
                    break;
                    // sửa danh mục
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sp=loadone_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham("",0);
                    $listdanhmuc=loadall_danhmuc();
                    include "./sanpham/update.php";
                    break;
                    // update danh mục
                case 'updatesp':
                    if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                        $iddm =$_POST['id_dm'];
                
                        $id =$_POST['id'];
                        $tensp =$_POST['ten_sp'];
                        $price = $_POST['price'];
                        $mota = $_POST['mo_ta'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);

                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        $listsanpham=update_sanpham($id,$tensp,$price,$mota,$image,$iddm);
                        $thongbao="Cập nhật thành công";
                    }
                    $sql = "select * from danhmuc order by  id desc";
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham("",0);
                    include "./sanpham/list.php";
                    break;
                // Khách hàng
            
            
                case 'addkh':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tenkh =$_POST['ten_kh'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $vaitro = $_POST['vai_tro'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                           // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                           // echo "Sorry, there was an error uploading your file.";
                          }
                        insert_khachhang($tenkh,$password,$email,$image,$vaitro);
                        $thongbao="Thêm thành công";
                    }
                    include "./khachhang/add.php";
                    break;
                case 'listkh':
                    $listkhachhang=loadall_khachhang();
                    include "./khachhang/list.php";
                    break;
                case 'xoakh':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sql = "delete from khachhang where id=".$_GET['id'];
                        pdo_query($sql);
                    }
                    $listkhachhang=loadall_khachhang();
                    include "./khachhang/list.php";
                    break;
                case "suakh":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $kh=loadone_khachhang($_GET['id']);
                    }
                    $listkhachhang=loadall_khachhang();
                    include "./khachhang/update.php";
                    break;
                case 'updatekh':
                    if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $tenkh =$_POST['ten_kh'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $vaitro = $_POST['vai_tro'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);

                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        $listkhachhang=update_khachhang($id,$tenkh,$password,$email,$image,$vaitro);
                        $thongbao="Cập nhật thành công";
                    }
                    $sql = "select * from khachhang order by  id desc";
                    
                    $listkhachhang=loadall_khachhang();
                    include "./khachhang/list.php";
                    break;

                    
                // Bình luận
            case 'listbl':
                $listbinhluan=loadall_binhluan($ma_sp);
                include "./binhluan/list.php";
                break;
            case 'chitietbl':
                $listbinhluan=loadall_binhluan($ma_sp);
                include "./binhluan/list.php";
                break;
                // thống kê
            case 'addtk':
                include "./thongke/add.php";
                break;
            case 'bieudo':
                include "./thongke/bieudo.php";
                break;
            default:
                include './content.php';
                break;
        }
    }
    else{
        include "./content.php";
    }
    
    include "./footer.php";
