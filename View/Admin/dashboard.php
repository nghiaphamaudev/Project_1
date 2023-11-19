<div class='dashboard-app'>
        <header class='dashboard-toolbar '>
            <a href="#!" class="menu-toggle">
            <i class="fas fa-bars"></i></a>
                
            <!-- <div class="account">
                <img src="../../View/images/client1.jpg" height="20px" alt="">
                <h5>Phạm Văn Nghĩa</h5>

            </div> -->
        </header>
        <div class='dashboard-content'>
            <div class='container'>
            <div class='card'>
            <?php 
                          if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                  ?>
                    <div class='card-header'>
                        <h1>Xin chào,<?=$full_name?></h1>
                    </div>
                    <div class='card-body'>
                        <p>Tài khoản của bạn: Quản trị</p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>