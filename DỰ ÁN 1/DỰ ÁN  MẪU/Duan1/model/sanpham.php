<?php
    function insert_sanpham($name,$image,$price,$discount,$mota,$date,$iddm){
        $sql = "INSERT INTO sanpham(name,image,price,discount,mota,date,iddm) 
        values('$name','$image','$price','$discount','$mota','$date','$iddm')";
         pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadone_sanpham($id){
        $sql = "SELECT *FROM sanpham where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($iddm,$name, $image, $price, $discount, $mota, $date,$id){
        $sql = "UPDATE sanpham SET iddm= '".$iddm."',  name= '".$name."', image='".$image."',price= '".$price."',discount= ' ".$discount."',mota= '".$mota."',date= '".$date."' where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "select* from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_tendm($iddm){
        if($iddm>0){
            $sql = "SELECT *from danhmuc where id =".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        }
        else{
            return "";
        }
    }
    
?>