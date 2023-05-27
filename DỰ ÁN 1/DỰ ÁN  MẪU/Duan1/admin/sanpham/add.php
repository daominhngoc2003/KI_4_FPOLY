<div class="main-header">
    <div class="d-flex">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu'></i>
        </div>
        <div class="main-title">
            Sản phẩm
        </div>
    </div>
    <div class="d-flex align-items-center">

        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search">
                <span class="bx bx-search-alt"></span>
            </div>
        </form>
        <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class='bx bx-search-alt'></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt'></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="btn dropdown-toggle" id="header-lang-img">
                    EN
                    <i class='bx bx-caret-down'></i>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                    <img src="images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                    <img src="images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                    <img src="images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                    <img src="images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                    <img src="images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                </a>
            </div>
        </div>

        <div class="dropdown d-inline-block mt-12">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="images/profile/profile.png" alt="Header Avatar">
                <span class="pulse-css"></span>
                <span class="info d-xl-inline-block  color-span">
                    <span class="d-block fs-20 font-w600">admin</span>
                    <span class="d-block mt-7"><a href="https://themesflat.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aedccfc0cad780dcc7c2cbd7eec9c3cfc7c280cdc1c3">[email&#160;protected]</a></span>
                </span>
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">

                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                    <span>Profile</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                    <span>My Wallet</span></a>
                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                    <span>Lock screen</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="user-login.html"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>
</div>

<!--  Phàn content -->
<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <div class="col-12">
                <div class="box card-box">

                </div>
            </div>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Danh mục</label>
                    <select name="iddm" class="form-select" aria-label="Default select example">
                        <option value="0">Choose</option>
                        <?php foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '
                            <option value="'.$id.'">'.$name.'</option>';
                        } ?>
                    </select>
                </div>
                <!-- tên sản phâ,r -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <!-- Giá -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Đơn giá</label>
                    <input type="text" name="price" class="form-control" id="exampleInputPassword1">
                </div>
                <!-- Giảm giá -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Giảm giá</label>
                    <input type="text" name="discount" class="form-control" id="exampleInputPassword1">
                </div>
                <!-- image -->
                <div class="mb-3 ">
                    <label for="exampleInputPassword1" class="form-label">Hình ảnh</label> 
                    <input type="file" name="image" class="form-control" id="inputGroupFile02">
                </div>
                <!-- ngày nhập hàng -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ngày nhập</label>
                    <input type="date" name="date" class="form-control" id="exampleInputPassword1">
                </div>
                <!-- Mô tả -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                    <textarea class="form-control" name="mota" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <br>
                <!-- Button -->
                <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới"></input>
                <input type="reset" class="btn btn-secondary" value="Nhập lại"></input>
                <a href="./index.php?act=listsp"><input type="button" class="btn btn-success" value="Danh sách"></input></a> <br>
                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao;  ?>
            </form>
            <div class="col-12">
                <div class="box">
                    <div class="box-header">

                    </div>

                </div>
            </div>

        </div>


    </div>
</div>