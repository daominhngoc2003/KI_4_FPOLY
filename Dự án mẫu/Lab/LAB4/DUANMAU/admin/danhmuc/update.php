<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
        <section class="danhmuc">
            <form action="./index.php?act=updatedm" method="post">
                <div class="ip">
                    <label for="">Mã loại</label> <br>
                    <input type="text" name="id" placeholder="auto number" disabled>
                </div>
                <div class="ip">
                    <label for="">Tên loại</label> <br>
                    <input type="text" name="ten_loai" value="<?php if(isset($ten_loai)&&($ten_loai!="")) echo $ten_loai; ?>">
                </div>
                <div class="btn">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="./index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </section>