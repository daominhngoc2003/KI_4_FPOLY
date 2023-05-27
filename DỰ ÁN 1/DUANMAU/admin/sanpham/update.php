<?php
    if (is_array($sp)) {
        extract($sp);
    }

    $hinhpath = "../uploads/" . $image;
    if (is_file($hinhpath)) {
        $image = "<img src='" . $hinhpath . "' height='80'>";
    } else {
        $image = "no photo";
    }
?>
<section class="sanpham">
    <div class="title">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <form action="./index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <select name="id_dm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($id_dm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $ten_loai . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="">Tên sản phẩm</label>
                <input type="text" name="ten_sp" value="<?= $ten_sp ?>">
            </div>
            <div>
                <label for="">Đơn giá</label>
                <input type="text" name="price" value="<?= $price ?>">
            </div>
            <div>
                <label for="">Hình ảnh</label>
                <input type="file" name="image">
                <?= $image ?>
            </div>
            <div class="mota" aria-colspan="2">
                <label for="">Mô tả</label> <br>
                <textarea name="mo_ta" id="" cols="161" rows="10"><?= $mo_ta ?></textarea>
            </div>
        </div>
        <div class="btn">
            <input type="hidden" name="id" value="<?= $sp['id'] ?>" style="width: 500px;">
            <input type="submit" name="capnhat" value="CẬP NHẬT">
            <input type="reset" value="NHẬP LẠI">
            <a href="./index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</section>