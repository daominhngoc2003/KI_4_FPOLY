<?php
    function insert_binhluan($noi_dung,$ma_sp,$ma_kh,$ngay_bl)
    {
        $sql = "insert into binhluan(noi_dung,ma_sp,ma_kh,ngay_bl) values('$noi_dung',$ma_sp,$ma_kh,'$ngay_bl')";
        pdo_execute($sql);
    }
    function loadall_binhluan($ma_sp){
        $sql = "select * from binhluan where 1";
        if ($ma_sp>0) {
            $sql.=" AND ma_sp = '".$ma_sp."'";
        }else
        $sql.=" order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function delete_binhluan($id){
        $sql = "delete from binhluan where id=".$id;
        pdo_execute($sql);
    }
