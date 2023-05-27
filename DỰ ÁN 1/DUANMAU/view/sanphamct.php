<section class="row mt mb">
    <div class="boxtrai mr">
        <div class="row mb ">
            <?php
            extract($onesp);
            ?>
            <div class="box-title"> <?= $ten_sp?></div>
            <div class="box-content">
                <?php

                $image = $img_path . $image;
                echo '<div class=" mb spct"><img src="' . $image . '" width="300"></div> <br>';
                echo $ten_sp;
                echo $mo_ta;
                ?>
            </div>
        </div> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluan-form.php", {
                        ma_sp: <?=$id ?>
                });
            });
        </script>
        <div class="row mb" id="binhluan">
            
        </div>
        <div class="row mb ">
            <div class="box-title"> HÀNG CÙNG LOẠI</div>
            <div class="box-content">
                <?php
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $linksp = "index.php?act=sanphamct&&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $ten_sp . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</section>