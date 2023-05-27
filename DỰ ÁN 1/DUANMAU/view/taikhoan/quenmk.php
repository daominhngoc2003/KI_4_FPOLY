<section class="row mt mb">
    <div class="boxtrai mr">
        <div class="row mb ">
            <div class="box-title"> QUÊN MẬT KHẨU</div>
            <div class="box-content">
                <form action="index.php?act=quenmk" method="post" class="form-dangky">
                    <div class="ip">
                        <label for="">email</label> <br>
                        <input type="email" name="email">
                    </div>
                    <input type="submit" value="Gửi" name="guiemail">
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