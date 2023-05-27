<section class="khachhang">
            <form action="../index.php?act=addkh">
                <div class="row">
                    <div>
                        <label for="">Mã khách hàng</label>
                        <input type="text" placeholder="auto number">
                    </div>
                    <div>
                        <label for="">Họ và tên</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Mật khẩu</label>
                        <input type="text" >
                    </div>
                    <div>
                        <label for="">xác nhận mật khẩu</label>
                        <input type="text" >
                    </div>
                    <div>
                        <label for="">Hình ảnh</label>
                        <input type="file">
                    </div>
                    <div>
                        <label for="">địa chỉ Email</label>
                        <input type="text">
                    </div>
                    
                    <div class="radio">
                        <label for="">Kích hoạt</label> 
                        <div class="con-radio">
                            <div><input type="radio" name="radio" checked></div> <p> Chưa kích hoạt </p>
                            <div><input type="radio" name="radio" checked></div> <p>Kích hoạt</p>
                        </div>
                    </div>
                    <div class="radio1">
                        <label for="">vai trò</label> 
                        <div class="con-radio">
                            <div><input type="radio" name="radio1" checked></div> <p> Khách hàng </p>
                            <div><input type="radio" name="radio1" checked></div> <p>Nhân viên</p>
                        </div>
                    </div>
                    <div class="btn">
                        <a href="add.php">THÊM MỚI</a>
                        <a href="">NHẬP LẠI</a>
                        <a href="list.php">DANH SÁCH</a>
                    </div>
                </div>
            </form>
        </section>