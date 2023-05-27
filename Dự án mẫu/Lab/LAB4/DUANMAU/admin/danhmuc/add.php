
        <section class="danhmuc">
            <div class="title">
                <h1>THÊM MỚI DANH MỤC</h1>
            </div>
            <form action="./index.php?act=adddm" method="post">
                <div class="ip">
                    <label for="">Mã loại</label> <br>
                    <input type="text" name="id" placeholder="auto number" disabled>
                </div>
                <div class="ip">
                    <label for="">Tên loại</label> <br>
                    <input type="text" name="ten_loai">
                </div>
                <div class="btn">
                    <input  type="submit" name="themmoi" value="THÊM MỚI">
                    <input  type="reset" value="NHẬP LẠI">
                    <a href="./index.php?act=listdm"><input  type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </section>