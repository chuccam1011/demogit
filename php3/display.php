<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thong tin dang ky</title>
</head>

<body>
    <h2>Thogn tin danwg nhap</h2><br>
    ten dang nhap <input type="text" value="<?php echo $_POST['username']; ?>"  name="username" placeholder="nhap ten"><br>
    passs <input type="password"  value="<?php echo $_POST['pass']; ?>"  name="pass" placeholder="pass"><br>
   
    <h2>Thong tin ca nhan</h2><br>
    Ho <input type="text"  value="<?php echo $_POST['ho']; ?>"  name="ho" placeholder="ho"><br>
    Ten <input type="text"  value="<?php echo $_POST['ten']; ?>"  name="ten" placeholder="nhap ten"><br>
    ngay sinh <input type="date"  value="<?php echo $_POST['ngaysinh']; ?>"  name="ngay" id=""><br>
    Email <input type="email"  value="<?php echo $_POST['email']; ?>"  name="email" id=""><br>
    Thu nhap <input type="number"  value="<?php echo $_POST['thunhap']; ?>"  namme="thunhap"><br>

    gio tinh <span>
        Nam <input type="checkbox"  name="gioitinh" id="">
        Nu <input type="checkbox" name="giotinh" id="">
    </span><br>
    Dia Chi <textarea name="diachi"  id="" cols="30" rows="10"><?php echo $_POST['diachi']; ?></textarea><br>
    dien thoai <input type="number"  value="<?php echo $_POST['dienthoai']; ?>" name="dienthoai" id=""><br>
</body>

</html>