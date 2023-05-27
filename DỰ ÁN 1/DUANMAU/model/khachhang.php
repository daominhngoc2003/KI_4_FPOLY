<?php
    function insert_khachhang($tenkh,$password,$email,$image,$vaitro){
        $sql = "INSERT INTO khachhang(ten_kh,password,email,image,vai_tro) values('$tenkh','$password','$email','$image','$vaitro')";
        pdo_execute($sql);
    }
    function delete_khachhang($id){
        $sql = "DELETE * from khachhang where id =".$id;
        pdo_execute($sql);
    }
    function loadall_khachhang(){
        $sql = "select * from khachhang order by id desc";
        $listkhachhang = pdo_query($sql);
        return $listkhachhang;
    }
    function loadone_khachhang($id){
        $sql = "select * from khachhang where id=".$id;
        $kh=pdo_query_one($sql);
        return $kh;
    }
    function update_khachhang($id,$tenkh,$password,$email,$image,$vaitro){
        if($image!="")
        $sql = "UPDATE khachhang SET  ten_kh='".$tenkh."' , password='".$password."' , email='".$email."', image='".$image."', vai_tro='".$vaitro."'  where id=".$id;
        else
        $sql = "UPDATE khachhang SET  ten_kh='".$tenkh."',password='".$password."' , email='".$email."' ,vai_tro='".$vaitro."' where id=".$id;
        pdo_execute($sql);
    }
?>