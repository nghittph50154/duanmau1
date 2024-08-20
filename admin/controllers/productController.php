<?php
    require_once 'models/pdo.php';
    require_once 'models/productModel.php';
    class productController{
        public $productModel;
        function __construct()
        {
            $this->productModel = new productModel();
        }
        function listproduct(){
            
            $allPproduct = $this->productModel->allProduct();
            require_once PATH_VIEW . "product/listproduct.php";

        }
        function addProduct()
        {
            require_once PATH_VIEW . 'product/add.php';
            if (isset($_POST['btn_insert'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $detail = $_POST['detail'];
                $cate = $_POST['cate'];
    
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, '../assets/images/' . $img);
                if ($this->productModel->insertProduct($name, $img, $price, $detail, $cate)) {
                    header("location:?act=listProduct");
                } else {
                    echo "<script>alert('Lỗi')</script>";
                }
            }
        }

    }

?>