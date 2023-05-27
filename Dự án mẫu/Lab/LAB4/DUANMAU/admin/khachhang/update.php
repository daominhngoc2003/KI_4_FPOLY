<?php
    if(is_array($kh)){
        extract($kh);
    }
    $hinhpath= "../uploads/".$image;
                            if(is_file($hinhpath)){
                                $image="<img src='".$hinhpath."' height='80'>";
                            }
                            else {
                                $image = "no photo";
                            }
?>
<section class="khachhang">
    <div class="title">
         <h1>THÊM KHÁCH HÀNG</h1>
    </div>
            <form action="./index.php?act=updatekh" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!-- <div>
                        <label for="">Mã khách hàng</label>
                        <input type="text" name="ma_kh" value="<?=$id?>" placeholder="auto number" disabled>
                    </div> -->
                    <div>
                        <label for="">Họ và tên</label>
                        <input type="text" name="ten_kh" value="<?=$ten_kh?>">
                    </div>
                    <div>
                        <label for="">Mật khẩu</label>
                        <input type="password" name="password" value="<?=$password?>">
                    </div>
                    <div>
                        <label for="">xác nhận mật khẩu</label>
                        <input type="text" name="repassword" >
                    </div>
                    <div>
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image" >
                        <?=$image?>
                    </div>
                    <div>
                        <label for="">địa chỉ Email</label>
                        <input type="text" name="email" value="<?=$email?>">
                    </div>
                    
                    <div class="radio">
                        <label for="">Kích hoạt</label> 
                        <div class="con-radio">
                            <div><input type="radio" name="kich_hoat" checked></div> <p> Chưa kích hoạt </p>
                            <div><input type="radio" name="kich_hoat" checked></div> <p>Kích hoạt</p>
                        </div>
                    </div>
                    <div class="radio1">
                        <label for="">vai trò</label> 
                        <div class="con-radio">
                            <div><input type="radio" name="vai_tro" checked></div> <p> Khách hàng </p>
                            <div><input type="radio" name="vai_tro" checked></div> <p>Nhân viên</p>
                        </div>
                    </div>
                   
                </div>
                <div class="btn">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="./index.php?act=listkh"><input type="button" value="DANH SÁCH"></a>
                    </div> 
                <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
            </form>
        </section>