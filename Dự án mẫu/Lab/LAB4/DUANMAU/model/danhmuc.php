<?php
    function insert_danhmuc($tenloai){
        $sql = "insert into danhmuc(ten_loai) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$tenloai){
        $sql = "UPDATE danhmuc SET ten_loai='".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }
?>