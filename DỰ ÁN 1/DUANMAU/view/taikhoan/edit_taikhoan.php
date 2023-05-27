<section class="row mt mb">
    <div class="boxtrai mr">
        <div class="row mb ">
            <div class="box-title"> CẬP NHẬT THÀNH VIÊN</div>
            <div class="box-content">
                <?php
                    if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                        extract($_SESSION['username']);
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post" class="form-dangky">
                    <div class="ip">
                        <label for="">username</label> <br>
                        <input type="text" name="username" value="<?= $username ?>">
                    </div>
                    <div class="ip">
                        <label for="">password</label> <br>
                        <input type="password" name="password" value="<?= $password ?>">
                    </div>
                    <div class="ip">
                        <label for="">email</label> <br>
                        <input type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="ip">
                        <label for="">image</label> <br>
                        <input type="file" name="image" value="<?= $image ?>">
                    </div>
                    <div class="ip">
                        <label for="">Địa chỉ</label> <br>
                        <input type="text" name="address" value="<?= $address ?>">
                    </div>
                    <div class="ip">
                        <label for="">phone</label> <br>
                        <input type="text" name="phone" value="<?= $phone ?>">
                    </div>
                    <div>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao)!=""){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</section>