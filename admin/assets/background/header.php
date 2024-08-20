<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        header {
            background-color: #444;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            margin: 5px 0;
            border-radius: 30px;
        }
        body {
            font-family: Arial, sans-serif;
            width: 1400px;
            margin: 0 auto;
        }
        .menu {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 30px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: block;
        }
        .menu a:hover {
            background-color: #575757;
            border-radius: 30px;
        }
        footer {
            background-color: #333;
            color: white;
            margin-top: 30px;
            text-align: center;
            padding: 20px 0;
            border-radius: 30px ;
        }
        footer a {
            color: #f1f1f1;
            text-decoration: none;
            padding: 0 10px;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        ADMIN
    </header>
    <nav>
        <div class="menu">
            <a href="?act=/">Trang chủ</a>
            <a href="?act=listcategory">Danh mục</a>
            <a href="?act=listproduct">Sản phẩm</a>
            <a href="?act=listclient">Khách hàng</a>
            <a href="?act=listcmt">Bình luận</a>
            <a href="?act=liststatistic">Thống kê</a>
        </div>
    </nav>