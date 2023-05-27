<?php
    require_once "./connection.php";
    $errors =[];
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $image = $_POST['image'];

        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $file = $_FILES['image'];
        $cate_id = $_POST['cate_id'];

        if($price <0){
            $errors['price'] ="Giá không được nhỏ hơn 0";
        }

        if($file['size']>0){
            $image = $file['name'];
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            if($ext != 'png' && $ext != 'jpg'){
                $errors['image'] ="File ảnh k dudnsgd định dạng";
            }
            if($file['size']>2000000){
                $errors['image'] ="File ảnh vượt qus 2 mb";
            }
        }

        if(!$errors){

            $sql = "update products set product_name='$product_name',description='$description',price='$price',image='$image',cate_id='$cate_id' where id =$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            move_uploaded_file($file['tmp_name'], './images/' .$image);
            header("location:show.php");
        }
    }
    // category
    $sql = "select *from category";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $category = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // lấy dữ liệu sửa
    $id = $_GET['id'];
    $sql = "select *from products where id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="post">
        id <input type="hidden" name="id" id="" value="<?= $product['id'] ?>" >
        product_name <input type="text" name="product_name" value="<?= $product['product_name'] ?>">
        <br>

        description <input type="text" name="description" value="<?= $product['description'] ?>">
        <br>

        price <input type="text" name="price" value="<?= $product['price'] ?>">
        <br>

        <img src="./images/<?= $product['image'] ?>" width="120" alt="">
        <input type="hidden" name="image" value="<?= $product['image'] ?>" >
        image <input type="file" name="image">
        <?php if(isset($image)): ?>
            <span>
                <?= $errors['image'] ?>
            </span>
        <?php endif ?>
        <br>

        cate_id 
        <select name="cate_id" id="">
            <?php foreach($category as $cate): ?>
                <option value="<?= $cate['id'] ?>" <?= $cate['id'] == $product['cate_id'] ? 'selected' : '' ?>><?= $cate['category_name'] ?></option>
            <?php endforeach ?>
        </select>
        <br>

        <button type="submit" name="btn">Lưu</button>
        <br>

        
    </form>
</body>
</html>