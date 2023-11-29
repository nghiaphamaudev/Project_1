
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../View/js/admin.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../View/css/table_categories.css">
    <link rel="stylesheet" href="../View/css/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>


</head>
<body>
<div class='dashboard'>
    <div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"><i class="fa-sharp fa-solid fa-utensils" style="color: #ffffff;"></i></a><a href="#" class="brand-logo"><i class="fa-sharp fa-solid fa-utensils" style="color: #ffffff;"></i> <span>BTN FastFood</span></a></header>
        <nav class="dashboard-nav-list">
        <a href="../../../Dự_án_1/Controller/index-home.php" class="dashboard-nav-item"><i class="fas fa-home"></i>Home </a>
        <a href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <div class='dashboard-nav-dropdown'><a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-photo-video"></i> Danh Mục </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="../../../Dự_án_1/Controller/index-admin.php?request=categories" class="dashboard-nav-dropdown-item">Danh sách</a>
                        <a href="../../../Dự_án_1/Controller/index-admin.php?request=create" class="dashboard-nav-dropdown-item">Tạo mới</a> 
                </div>
            </div>
            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-users"></i> Người Dùng </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="#" class="dashboard-nav-dropdown-item">Cập Nhật</a>
                    <a href="#" class="dashboard-nav-dropdown-item">Phân Quyền</a>
                </div>
            </div>
            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-brands fa-product-hunt"></i> Sản Phẩm </a>
                <div class='dashboard-nav-dropdown-menu'><a 
                        href="../../../Dự_án_1/Controller/index-admin.php?request=product" class="dashboard-nav-dropdown-item">Danh sách</a><a
                        href="../../../Dự_án_1/Controller/index-admin.php?request=create-product" class="dashboard-nav-dropdown-item">Thêm sản phẩm</a><a
                        href="../../../Dự_án_1/Controller/index-admin.php?request=topping" class="dashboard-nav-dropdown-item"> Topping</a>
                </div>
            </div>
            <a href="#" class="dashboard-nav-item"><i class="fa-solid fa-receipt"></i> Đơn Hàng </a><a
                    href="../../../Dự_án_1/Controller/index-admin.php?request=statistic" class="dashboard-nav-item"><i class="fa-solid fa-chart-line"></i> Thông Kê </a>
          <div class="nav-item-divider"></div>
          <a
                    href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>

    