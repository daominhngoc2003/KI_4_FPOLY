
        <section class="binhluan">
            <form action="./index.php?act=listbl" method="post" >
                <div class="title">
                    <h1>DANH SÁCH BÌNH LUẬN</h1>
                </div>
                <table>
                    
                    <tr class="border-b title-table">
                        <td class="a"></td>
                        <td class="b">ID</td>
                        <td class="c">NỘI DUNG</td>
                        <td class="D"> MÃ KHÁCH HÀNG</td>
                        <td class="d">MÃ SẢN PHẨM</td>
                        <td class="e">NGÀY BÌNH LUẬN</td>
                        <td class="g"></td>
                    </tr>
                    <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $suabl = "index.php?act=suabl&id=".$id;
                            $xoabl = "index.php?act=xoabl&id=".$id;
                            
                            echo '<tr class="border-b">
                                            <td class="a1"><input type="checkbox"></td>
                                            <td class="b1">'.$id.'</td>
                                            <td class="c1">'.$noi_dung.'</td>
                                            <td class="D1">'.$ma_kh.'</td>
                                            <td class="d1">'.$ma_sp.'</td>
                                            <td class="e1">'.$ngay_bl.'</td>
                                            <td class="g1">
                                                <a href="'.$suabl.'"><input type="button" name="sua" value="Sửa"></a> 
                                                <a href="'.$xoabl.'"><input type="button" name="delete" value="Xóa"></a>
                                            </td>
                                        </tr>';
                }
                ?>
                    
                    
                </table>
                <div class="btn">
                    <a href=""><input type="submit" value="Chọn tất cả"></a>
                    <a href=""><input type="submit" value="Bỏ chọn tất cả"></a>
                    <a href=""><input type="submit" value="Xóa các mục chọn"></a>
                </div>
            </form>
        </section>