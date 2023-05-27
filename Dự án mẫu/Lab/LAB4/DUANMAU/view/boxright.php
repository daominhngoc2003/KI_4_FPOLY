            <div class="row mb ">
                    <div class="box-title">
                        TÀI KHOẢN
                    </div>
                    <div class="box-content">
                        <form action="">
                            <div class="border">
                                <label for="">Tên đăng nhập</label> <br>
                                <input type="text" placeholder="Name">
                            </div> <br>
        
                            <div class="border">
                                <label for="">Mật khẩu</label> <br>
                                <input type="password" placeholder="Password">
                            </div> <br>
        
                            <div id="checkbox">
                                <input type="checkbox" class="checkbox">
                                <label for="">Ghi nhớ tài khoản?</label>
                            </div> <br>
        
                            <a href=""><input type="submit" value="Đăng nhập"></a> <br>
        
                            <ul>
                                <li><a href="">Quên mật khẩu</a></li>
                                <li><a href="">Đăng ký thành viên</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="row mb ">
                    <div class="box-title">DANH MỤC</div>
                    <div class="box-content2">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm = "index.php?act=sanpham&id=".$id;
                                    echo '<li><a href="'.$linkdm.'">'.$ten_loai.'</a></li>';
                                }
                            ?>
                            <!-- <li><a href="#">Đồ nam</a></li>
                            <li><a href="#">Đồ nữ</a></li>
                            <li><a href="#">Đồ trẻ em</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Túi sách</a></li>
                            <li><a href="#">Giày</a></li> -->
                        </ul>
                    </div>
                    <div class="box-footer box-danhmuc-search">
                        <form action="">
                            <input type="text" placeholder="Từ khóa tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row ">
                    <div class="box-title">TOP 10 YÊU THÍCH</div>
                    <div class="box-content">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $hinh = $img_path.$image;
                                echo '<div class="top-sp">
                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""><a href="'.$linksp.'"></a>
                                <a href="'.$linksp.'">'.$ten_sp.'</a>
                            </div>';
                            }
                        ?>
                        <!-- <div class="top-sp">
                            <img src="./images/anhgiay/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg" alt="">
                            <a href="">Giày mcq</a>
                        </div>
                        <div class="top-sp">
                            <img src="./images/anhgiay/giay-nu-hinh-hoa-cuc-cao-co-bang-vai-dang-phong-cach-han-quoc.png" alt="">
                            <a href="">Giày van</a>
                        </div>
                        <div class="top-sp">
                            <img src="./images/anhnam/image1xxl-1-3e2ac7ae-9be1-42c3-a715-bb170691b9aa.webp" alt="">
                            <a href="">Quần short vàng</a>
                        </div>
                        <div class="top-sp">
                            <img src="./images/anhnu/aonu10.webp" alt="">
                            <a href="">Áo nữ mau vàng ba lỗ có cổ</a>
                        </div>
                        <div class="top-sp">
                            <img src="./images/anhnu/aonu17.webp" alt="">
                            <a href="">Áo hồng cho nữ</a>
                        </div>
                        <div class="top-sp">
                            <img src="./images/anhnam/quan3.webp" alt="">
                            <a href="">Quần âu</a> -->
                        </div>
                    </div>
                </div>