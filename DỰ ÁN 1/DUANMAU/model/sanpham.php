<?php
    function insert_sanpham($tensp,$price,$image,$mota,$iddm){
        $sql = "INSERT INTO sanpham(ten_sp,price,image,mo_ta,id_dm) values('$tensp','$price','$image','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE from sanpham where id =".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_top(){
        $sql = "SELECT* from sanpham where 1 order by so_luot_xem desc limit 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql = "select* from sanpham where 1 order by id desc limit 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "select* from sanpham where 1";
        if($kyw!=""){
            $sql.=" and ten_sp like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and id_dm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql = "select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $ten_loai;
        }
        else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function loadone_sanpham_cungloai($id,$id_dm){
        $sql = "select * from sanpham where id_dm=".$id_dm." AND id <>".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$tensp,$price,$mota,$image,$iddm){
        if($image!="")
        $sql = "UPDATE sanpham SET  id_dm='".$iddm."' , ten_sp='".$tensp."', price='".$price."', mo_ta='".$mota."' ,image='".$image."' where id=".$id;
        else
        $sql = "UPDATE sanpham SET  id_dm='".$iddm."', ten_sp='".$tensp."', price='".$price."' ,mo_ta='".$mota."' where id=".$id;
        pdo_execute($sql);
    }
?>