<?php
    function insert_binhluan($noi_dung,$ma_kh,$ma_sp,$ngay_bl)
    {
        $sql = "insert into binhluan(noi_dung,ma_kh,ma_sp,ngay_bl) values($noi_dung,$ma_kh,$ma_sp,$ngay_bl)";
        pdo_execute($sql);
    }
    function loadall_binhluan($ma_sp){
        $sql = "select * from binhluan where 1";
        if($ma_sp>0) $sql.=" AND masp='".$ma_sp."'";
        $sql.=" order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
?>