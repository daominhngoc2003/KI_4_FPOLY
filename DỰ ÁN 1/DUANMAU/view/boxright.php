            <div class="row mb ">
                <div class="box-title">
                    TÀI KHOẢN
                </div>
                <div class="box-content">
                    <?php
                    if (isset($_SESSION['username'])) {
                        extract($_SESSION['username']);
                    ?>
                        <div class="border">
                            <label for="">Tên đăng nhập</label> <br>
                            <?= $username ?>
                        </div> <br>

                        <ul>
                            <li><a href="index.php?act=viewcart">Đơn hàng của tôi</a></li>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                            <?php if ($role == 1) { ?>
                                <li><a href="admin/index.php">Đăng nhập admin</a></li>
                            <?php }  ?>
                            <li><a href="index.php?act=thoat">Thoát</a></li>
                        </ul>
                    <?php

                    } else {
                    ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="border">
                                <label for="">Tên đăng nhập</label> <br>
                                <input type="text" name="username" placeholder="Name">
                            </div> <br>

                            <div class="border">
                                <label for="">Mật khẩu</label> <br>
                                <input type="password" name="password" placeholder="Password">
                            </div> <br>

                            <div id="checkbox">
                                <input type="checkbox" class="checkbox">
                                <label for="">Ghi nhớ tài khoản?</label>
                            </div> <br>

                            <a href=""><input type="submit" value="Đăng nhập" name="dangnhap"></a> <br>

                            <ul>
                                <li><a href="">Quên mật khẩu</a></li>
                                <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                            </ul>
                        <?php } ?>
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
                            $linkdm = "index.php?act=sanpham&id=" . $id;
                            echo '<li><a href="' . $linkdm . '">' . $ten_loai . '</a></li>';
                        }
                        ?>

                    </ul>
                </div>
                <div class="box-footer box-danhmuc-search">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                        <input type="submit" name="timkiem" value="Tìm kiếm">
                    </form>
                </div>
            </div>
            <div class="row ">
                <div class="box-title">TOP 10 YÊU THÍCH</div>
                <div class="box-content">
                    <?php
                    foreach ($dstop10 as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $hinh = $img_path . $image;
                        echo '<div class="top-sp">
                                <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""><a href="' . $linksp . '"></a>
                                <a href="' . $linksp . '">' . $ten_sp . '</a>
                            </div>';
                    }
                    ?>
                </div>
            </div>
            </div>