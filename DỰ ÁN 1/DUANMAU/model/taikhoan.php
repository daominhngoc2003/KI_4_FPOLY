<?php
    function insert_taikhoan($email,$username,$password){
        $sql = "INSERT INTO taikhoan(email,username,password) values('$email','$username','$password')";
        pdo_execute($sql);
    }
    function checkuser($username,$password){
        $sql = "select * from taikhoan where username='".$username."'  AND password='".$password."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql = "select * from taikhoan where email='".$email."' ";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$username,$password,$email,$image,$address,$phone){
        $sql = "UPDATE taikhoan SET  username='".$username."', password='".$password."', email='".$email."' ,image='".$image."', address='".$address."' ,phone='".$phone."' where id=".$id;
        pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
?>