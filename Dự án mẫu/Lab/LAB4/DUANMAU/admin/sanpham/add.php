<section class="sanpham">
            <div class="title">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <form action="./index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div>
                        <label for="">Danh mục</label> <br>
                        <select name="id_dm" class="select" id="">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$ten_loai.'</option>';
                                }
                            ?>
                            
                        </select>
                    </div>
                    <div>
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="ten_sp">
                    </div>
                    <div>
                        <label for="">Đơn giá</label>
                        <input type="text" name="price">
                    </div>
                    <div>
                        <label for="">Giảm giá</label>
                        <input type="text" name="giamgia">
                    </div>
                    <div>
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <label for="">Loại hàng</label>  <br>
                        <select name="" class="select" id="">
                            <option value="">Select</option>
                            <option value="">Giày mcq</option>
                            <option value="">Quần shorts</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Ngày nhập</label>
                        <input type="date" name="image">
                    </div>
                    <div class="mota" aria-colspan="2">
                        <label for="">Mô tả</label> <br>
                        <textarea name="mo_ta" id="" cols="161" rows="10"></textarea>
                    </div>
                </div>
                <div class="btn">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="./index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
            </form>
        </section>