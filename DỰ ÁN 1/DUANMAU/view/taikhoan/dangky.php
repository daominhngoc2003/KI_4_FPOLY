<section class="row mt mb">
    <div class="boxtrai mr">
        <div class="row mb ">
            <div class="box-title"> ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="box-content">
                <form action="index.php?act=dangky" method="post" class="form-dangky">
                    <div class="ip">
                        <label for="">email</label> <br>
                        <input type="email" name="email">
                    </div>
                    <div class="ip">
                        <label for="">username</label> <br>
                        <input type="text" name="username">
                    </div>
                    <div class="ip">
                        <label for="">password</label> <br>
                        <input type="password" name="password">
                    </div>
                    <input type="submit" value="Đăng ký" name="dangky">
                    <input type="reset" value="Nhập lại">
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