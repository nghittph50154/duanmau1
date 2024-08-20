<?php
    require_once 'models/pdo.php';
    require_once 'models/cateModel.php';
    class cateController{
        public $cateModel;
        function __construct()
        {
            $this->cateModel = new cateModel();
        }
        function listcategory(){
            
            $allCategory = $this->cateModel->allCate();
            require_once PATH_VIEW . "category/listcategory.php";

        }
        function addcategory(){
            if(isset($_POST['btn_insert'])){

                $id = $_POST['id'];
                $cate = $_POST['cate']; 

                if($this->cateModel->addCategory($id,$cate)){
                    header("location:?act=listCategory");
                }
                else{
                    echo "<script>alert('Lỗi')</script>";
                }

            }
        }

    }

?>