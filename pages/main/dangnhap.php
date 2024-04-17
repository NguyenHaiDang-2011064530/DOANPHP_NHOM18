<?php

    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo '<p style="color:red">Mật khẩu hoặc email sai, vui lòng nhập lại</p>';
           

        }
    }
?>
<form action="" autocomplete="off" method="POST">
    <table border="1" width="50%" class="table-login" style="text-align: center; border-collapse: collapse;">
        <tr>
            <td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="email" playceholder="email..."></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password" playceholder="Mật khẩu..."></td>
        </tr>
        <tr>
            
            <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
        </tr>
    </table>
    </form>