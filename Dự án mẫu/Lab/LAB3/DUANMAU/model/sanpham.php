<?php
    function insert_sanpham($tensp,$price,$image,$mota,$iddm){
        $sql = "INSERT INTO sanpham(ten_sp,price,image,mo_ta,id_dm) values('$tensp','$price','$image','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE * from sanpham where id =".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham($kyw,$iddm){
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
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($id,$iddm,$tensp,$price,$mota,$image){
        if($image!="")
        $sql = "UPDATE sanpham SET  id_dm='".$iddm."'  ten_sp='".$tensp."' price='".$price."' mo_ta='".$mota."' image='".$image."' where id=".$id;
        else
        $sql = "UPDATE sanpham SET  id_dm='".$iddm."' ten_sp='".$tensp."' price='".$price."' mo_ta='".$mota."' where id=".$id;
        pdo_execute($sql);
    }
?>