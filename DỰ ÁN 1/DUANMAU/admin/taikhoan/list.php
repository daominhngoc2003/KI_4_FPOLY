
        <section class="list-kh">
            <form action="./index.php?act=listkh" method="post" >
                <div class="title">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
                </div>
                <table>
                    
                    <tr class="border-b title-table">
                        <td class="a"></td>
                        <td class="b">MÃ KH</td>
                        <td class="c">HỌ VÀ TÊN</td>
                        <td class="d">MẬT KHẨU</td>
                        <td class="e">EMAIL</td>
                        <td class="g">ĐỊA CHỈ</td>
                        <td class="h">SỐ ĐIỆN THOẠI</td>
                        <td class="i">VAI TRÒ</td>
                        <td class="k"></td>
                    </tr>
                    <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk = "index.php?act=suatk&id=".$id;
                            $xoatk = "index.php?act=xoatk&id=".$id;
                            $hinhpath= "../uploads/".$image;
                            if(is_file($hinhpath)){
                                $image="<img src='".$hinhpath."' height='80'>";
                            }
                            else {
                                $image = "no photo";
                            }
                            echo '<tr class="border-b">
                                            <td class="a1"><input type="checkbox"></td>
                                            <td class="b1">'.$id.'</td>
                                            <td class="c1">'.$username.'</td>
                                            <td class="d1">'.$password.'</td>
                                            <td class="e1">'.$email.'</td>
                                            <td class="g1">'.$address.'</td>
                                            <td class="h1">'.$phone.'</td>
                                            <td class="i1">'.$role.'</td>
                                            <td class="k1">
                                                <a href="'.$suatk.'"><input type="button" name="sua" value="Sửa"></a> 
                                                <a href="'.$xoatk.'"><input type="button" name="delete" value="Xóa"></a>
                                            </td>
                                        </tr>';
                }
                ?>
                    
                    
                </table>
                <div class="btn">
                    <a href=""><input type="submit" value="Chọn tất cả"></a>
                    <a href=""><input type="submit" value="Bỏ chọn tất cả"></a>
                    <a href=""><input type="submit" value="Xóa các mục chọn"></a>
                    <a href="./index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
                </div>
            </form>
        </section>