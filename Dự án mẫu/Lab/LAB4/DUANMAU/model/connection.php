<?php
     
    try{
        $conn = new PDO("mysql:host=localhost;dbname=duanmau;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $th){
        echo "Lỗi kết nối" .$th->getMessage();
    }

    // UPDATE
    $ma_loai = 1;
    $ten_loai = "laptop";
    $sql  = "UPDATE loai SET ten_loai=? where ma_loai=?";
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($ten_loai, $ma_loai));
        echo "Cập nhật thành công";
    }
    catch(PDOException $th){
        echo "Lỗi cập nhật";
    }
    finally{
        unset($conn);
    }

    // TRUY VẤN
    // Lấy tất cả các loại hàng đã nhập từ bảng loại
    $sql  = "select *from loai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    foreach($rows as $row){
        echo "<br>".$row['ten_loai']."<br>";
    }

    // TRUY VẤN 1 giá trị
    // Lấy tên loại theo mã loại
    $sql  = "select *from loai where ma_loai=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($maloai));
    $rows = $stmt->fetch();
    echo "Tên loại của mã loại:". $rows['ten_loai'];
    // 
    unset($conn);
?>