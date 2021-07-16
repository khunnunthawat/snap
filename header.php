<!---------- Header ---------->  
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand"  href="./index.php"><img src="./img/logo/logo.svg" style="object-position: 50% 50%;" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div style="margin-left: auto; display: flex;">
      <form class="form-inline my-2 my-lg-0">
        <div class="search">
                      
                      <div class="input-group">
                      <i class="material-icons" id="photo_camera" style="font-size: 25px;">photo_camera</i>
                      <input type="text" class="searchTerm" placeholder="ค้นหาช่างภาพ...">
                      <button type="submit" class="searchButton" style="margin-right: 3px; margin-left: 3px;">
                        <i class="material-icons" style="font-size: 32px; margin-right: 3px;">search</i>
                      </button>  
                      </div>                  
        </div>
      </form>
      <ul class="navbar-nav">
        
      <?php
      require_once('./db/db_connect.php');
                
      if(isset($_SESSION['email'])){
      ?>
            <li class="nav-item register dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style=" font-size:30px;">
                <div class="avatar-photo-header" style="width:50px;height:50px;float: left;margin-right: 10px;margin-top: 5px;">
                  <img src="./img/<?php echo $_SESSION['avatar']; ?>">
                </div>
                
                <p style="float: left; padding-top: 12px;"><?php echo $_SESSION['name_surname']; ?></p>
              </a>
              <div class="dropdown-menu">
              <?php
                
                    $sql = "SELECT * FROM Photographers WHERE user_id = '".$_SESSION['id']."'";

                    $result = mysqli_query($connect, $sql);

                    $rowcount=mysqli_num_rows($result);
                    if (isset($_SESSION['admin_id'])) {
                ?>
                <p style="font-size:18px; color:#057ADF; margin-left: 25px;">แอดมิน</p>
                    <a class="dropdown-item" href="./admin_snap.php" style="font-size:20px; color:#282828;">รายการ</a>
                    <a class="dropdown-item" href="./db/logout.php" style="font-size:20px; color:#282828;"><i class="fas fa-sign-out-alt" style="font-size:20px; color:#282828; margin-right: 5px;"></i>logout</a>
                <?php
                    }
                    else if($rowcount == 0){
                ?>
                    <p style="font-size:18px; color:#057ADF; margin-left: 25px;">ลูกค้า</p>
                    <a class="dropdown-item" href="./user_order.php" style="font-size:20px; color:#282828;">รายการจอง</a>
                    <a class="dropdown-item" href="./user_info.php" style="font-size:20px; color:#282828;">ข้อมูลส่วนตัว</a>
                    <a class="dropdown-item" href="./input_photographer.php" style="font-size:20px; color:#282828;">สมัครเป็นช่างภาพ</a>
                    <p></p>
                    <a class="dropdown-item" href="./db/logout.php" style="font-size:20px; color:#282828;"><i class="fas fa-sign-out-alt" style="font-size:20px; color:#282828; margin-right: 5px;"></i>logout</a>
                <?php
                    } else {
                ?>
                    <p style="font-size:18px; color:#057ADF; margin-left: 25px;">ลูกค้า</p>
                    <a class="dropdown-item" href="./snap_user_order.php" style="font-size:20px; color:#282828;">รายการจอง</a>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p style="font-size:18px; color:#057ADF; margin-left: 25px;">ช่างภาพ</p>
                    <a class="dropdown-item" href="./snap_profile.php" style="font-size:20px; color:#282828;">โปรไฟล์</a>
                    <a class="dropdown-item" href="./snap_order.php" style="font-size:20px; color:#282828;">ออร์เดอร์</a>
                    <a class="dropdown-item" href="./snap_my_work.php" style="font-size:20px; color:#282828;">งานของฉัน</a>
                    <a class="dropdown-item" href="./snap_info.php" style="font-size:20px; color:#282828;">ข้อมูลส่วนตัว</a>

                    <p></p>
                    <a class="dropdown-item" href="./db/logout.php" style="font-size:20px; color:#282828;"><i class="fas fa-sign-out-alt" style="font-size:20px; color:#282828; margin-right: 5px;"></i>logout</a>
                <?php
                    }
                ?>
                

              </div>
            </li>
            
          <?php
            } else {
              // ปีกกาเปิดของ else
          ?>

          <li class="nav-item active login"><a class="nav-link" href="./register.php" style=" padding-top: 20px; font-size:30px;">สมัครสมาชิก</a></li>

          <li class="nav-item register">
          
          <a class="nav-link" href="./login.php">
            <i class="material-icons"style="float: left; margin-right: 6px; padding-top: 10px; font-size: 45px;"> account_circle </i>
            <p style="float: left; padding-top: 12px; font-size:30px;">เข้าสู่ระบบ</p>
          </a>
          </li>
            
          <?php
            // ปีกกาปิดของ else
            }
         ?>
      </ul>
    </div>
  </div>
</nav>
<!---------- Header End ---------->  