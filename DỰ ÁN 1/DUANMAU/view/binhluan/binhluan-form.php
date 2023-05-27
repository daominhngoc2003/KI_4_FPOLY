<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $ma_sp = $_REQUEST['ma_sp'];
    $dsbl= loadall_binhluan($ma_sp);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/users/3.css">
</head>
<style>
    .binhluan table{
        width: 100%;
    }
    .binhluan table td:nth-child(1){
        width: 50%;
    }
    .binhluan table td:nth-child(2){
        width: 20%;
    }
    .binhluan table td:nth-child(3){
        width: 30%;
    }
</style>

<body>
    <div class="row mb ">
        <div class="box-title">BÌNH LUẬN</div>
        <div class="box-content2 binhluan">
            <table>
                <ul>
                    <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>'.$noi_dung.'</td>';
                        echo '<td>'.$ma_kh.'</td>';
                        echo '<td>'.$ngay_bl.'</td></tr>';
                    }
                    ?>
                </ul>
            </table>
        </div>
        <div class="box-footer box-danhmuc-search">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="ma_sp" value="<?=$ma_sp?>">
                <input type="text" name="noi_dung">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noi_dung = $_POST['noi_dung'];
                $ma_kh=$_SESSION['username']['id'];
                $ma_sp = $_POST['ma_sp'];
                $ngay_bl= date('h:i:s d/m/Y');
                insert_binhluan($noi_dung,$ma_sp,$ma_kh,$ngay_bl);
                header("location: ". $_SERVER['HTTP_REFERER']);
            }
                
        ?>
    </div>
</body>

</html>