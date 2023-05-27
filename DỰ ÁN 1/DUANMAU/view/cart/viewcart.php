<style>
    table{
        width: 100%;
    }
    
    .th td{
        font-weight: 600;
    }
    .btn_all a input{
        padding: 10px 10px;
        border-radius: 5px;
        border: 2px solid lightslategray;
    }
    .btn-xoa a input{
        padding: 5px 20px;
        border-radius: 5px;
        border: 2px solid lightslategray;
    }
</style>
<section class="row mt mb view-cart">
    <div class="boxtrai mr">
        <div class="row mb ">

            <div class="box-title"> GIỎ HÀNG</div>
            <div class="box-content row cart">
                <table>
                    
                    <?php
                    viewcart(1);

                    ?>
                </table>
            </div>
        </div>
        <div class="row mb bill btn_all">
            <a href="index.php?act=bill"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG"></a>
            <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>

</section>