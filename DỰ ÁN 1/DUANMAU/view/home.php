<style>
    .form_cart:hover .btn_cart{
        transform: scaleY(-50px);
    }
</style>
<section class="row mt mb">
    <div class="box-title">TRANG CHỦ</div>
    <div class="boxtrai mr">
        <div class="banner">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/slideshow/slideshow1.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/slideshow/slideshow2.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/slideshow/slideshow3.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>
        <div class=" mb grid-cols-3">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh =  $img_path . $image;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="box-sanpham ' . $mr . '">
                           <div class="box-img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                           <p>$' . $price . '</p>
                           <a href="' . $linksp . '">' . $ten_sp . '</a>
                           <div class="row btnaddtocart">
                                <form action="index.php?act=addtocart" method="post" class="form_cart">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <input type="hidden" name="ten_sp" value="'.$ten_sp.'">
                                    <input type="hidden" name="image" value="'.$image.'">
                                    <input type="hidden" name="price" value="'.$price.'">
                                    <div class"btn_cart"><input type="submit" name="addtocart" value="Thêm vào giỏ hàng"></div>
                                </form>
                            </div>
                       </div>';
                $i += 1;
            }
            ?>
           
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</section>