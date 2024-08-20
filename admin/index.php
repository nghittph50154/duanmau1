<?php

// * require trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect_db.php';

// * require trong Controller & Model
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);


// ! Điều Hướng
include_once 'assets/background/header.php';
$act = $_GET['act'] ?? '/';

match($act){    

    '/'             => (new homeController)         -> home(),

    'listcategory'  => (new cateController)         -> listcategory(),
    'addCategory'   => (new cateController)         -> addCategory(),
    

    'listproduct'   => (new productController)      -> listproduct(),


    'listclient'    => (new clientController)       -> listclient(),


    'listcmt'       => (new cmtController)          -> listcmt(),


    'liststatistic' => (new statisticController)    -> liststatistic(),
    
    

};
include_once 'assets/background/footer.php';



require_once './commons/disconnect_db.php';



