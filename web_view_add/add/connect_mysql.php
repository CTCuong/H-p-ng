<?php
$ht = $_POST['hoten'];
$cmnd = $_POST['cmnd'];
$mbds = $_POST['mabds'];
$tinh = $_POST['tinh'];
$huyen = $_POST['huyen'];
$xa = $_POST['xa'];
$sonha = $_POST['sonha'];
$ngay = $_POST['ngay'];
$stc = $_POST['sotiencoc'];
$stcl = $_POST['sotienconlai'];
$tt = $_POST['trangthai'];

require_once 'ketnoi.php';

// SQL Server connection
$serverName = "DESKTOP-GMB6284";
$database = "QUANLYBDS_DONTLAZY";
$uid = ""; // Change this to your SQL Server username
$pass = ""; // Change this to your SQL Server password

$connection = [
  "Database" => $database,
  "Uid" => $uid,
  "PWD" => $pass
];

$conn_sqlsrv = sqlsrv_connect($serverName, $connection);

if (!$conn_sqlsrv) {
  die(print_r(sqlsrv_errors(), true));
}

if(isset($_POST['trigger_button'])) {
    // Assuming you want to execute an INSERT operation to trigger the trigger
    $sql = "INSERT INTO Full_Contract (Customer_Name, Year_Of_Birth, SSN, Customer_Address, Mobile, Property_ID, Date_Of_Contract, Price, Deposit, Remain, Status) 
            VALUES('Trần Tiến haha', 1998, '301198999', '11 Lê Văn Sỹ, Quận 1, TP.HCM', '0123456789', 2, '2023-11-24', 2222222, 22222222, 12121221, 'True')";

    if (sqlsrv_query($conn_sqlsrv, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . sqlsrv_errors();
    }
}

$themsql = "INSERT INTO thembds
(hoten, cmnd, mabds, tinh, huyen, xa, sonha, ngay, sotiencoc, sotienconlai, trangthai) VALUES ('$ht', '$cmnd', '$mbds', '$tinh', '$huyen', '$xa', '$sonha', '$ngay', '$stc', '$stcl', '$tt')";
$hoso_sql = "SELECT * FROM thembds ORDER BY mahd, hoten, cmnd, mabds, tinh, huyen, xa, sonha, ngay, sotiencoc, sotienconlai, trangthai";
$result = mysqli_query($mysqli_conn, $hoso_sql);
mysqli_query($mysqli_conn, $themsql); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/page_1/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-3.2.1.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/recording.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script src="resources/scripts/axure/math.js"></script>
    <script src="resources/scripts/axure/jquery.nicescroll.min.js"></script>
    <script src="data/document.js"></script>
    <script src="files/page_1/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
    <title>liet ke</title>
</head>
<body>
        <div id="base" class="">
      <div id="u2" class="ax_default box_1">
        <div id="u2_div" class=""></div>
        <div id="u2_text" class="text ">
          <p></p>
        </div>
      </div>

      <div id="u3" class="ax_default image">
        <img style="width: 110px; height: auto;" id="u3_img" class="img " src="images/page_1/u3.png"/>
        <div id="u3_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <div id="u4" class="ax_default paragraph">
        <div id="u4_div" class=""></div>
        <div id="u4_text" class="text ">
          <p><span>Tài Khoản</span></p>
        </div>
      </div>

      
      <div id="u5" class="ax_default icon">
        <img id="u5_img" class="img " src="images/page_1/u5.svg"/>
        <div id="u5_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      
      <div id="u6" class="ax_default heading_1">
        <div id="u6_text" class="text ">
          <p><span class='size'>Hợp đồng người mua/bán</span></p>
        </div>
      </div>
     
      <div id="u7" class="ax_default icon">
        <img id="u7_img" class="img " src="images/page_1/u7.svg"/>
        <div id="u7_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      
      <div id="u8" class="ax_default icon">
        <img id="u8_img" class="img " src="images/page_1/u8.svg"/>
        <div id="u8_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <div id="u9" class="ax_default box_1">
        <div id="u9_div" class=""></div>
        <div id="u9_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <div id="u10" class="ax_default box_1">
        <img id="u10_img" class="img " src="images/page_1/u10.svg"/>
        <div id="u10_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <div id="u11" class="ax_default ellipse">
        <img id="u11_img" class="img " src="images/page_1/u5.svg"/>
        <div id="u11_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <div id="u12" class="ax_default label">
        <div id="u12_div" class=""></div>
        <div id="u12_text" class="text ">
          <p><span>Admin</span></p>
        </div>
      </div>

      <div id="u13" class="ax_default icon">
        <img id="u13_img" class="img " src="images/page_1/u13.svg"/>
        <div id="u13_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      
      <div id="u14" class="ax_default icon">
        <img id="u14_img" class="img " src="images/page_1/u14.svg"/>
        <div id="u14_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      
      <div id="u15" class="ax_default icon">
        <img id="u15_img" class="img " src="images/page_1/u15.svg"/>
        <div id="u15_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      
      <div id="u16" class="ax_default icon">
        <img id="u16_img" class="img " src="images/page_1/u16.svg"/>
        <div id="u16_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <div id="u17" class="ax_default box_1">
        <div id="u17_div" class=""></div>
        <div id="u17_text" class="text ">
          <p><span>&nbsp;&nbsp; &nbsp;&nbsp; Người mua </span></p><p><span><br></span></p><p><span>&nbsp;&nbsp; &nbsp;&nbsp; Người bán</span></p>
        </div>
      </div>

      <div id="u18" class="ax_default label">
        <div id="u18_div" class=""></div>
        <div id="u18_text" class="text ">
          <p><a href="xem.php">Trang chủ</a></p>
        </div>
      </div>

      <div id="u19" class="ax_default label">
        <div id="u19_div" class=""></div>
        <div id="u19_text" class="text ">
          <p><span>Thông tin</span></p>
        </div>
      </div>

      <div id="u20" class="ax_default label">
        <div id="u20_div" class=""></div>
        <div id="u20_text" class="text ">
          <p><span>Lịch sử xóa</span></p>
        </div>
      </div>

      <div id="u21" class="ax_default label">
        <div id="u21_div" class=""></div>
        <div id="u21_text" class="text ">
          <p><span>Quản lý</span></p>
        </div>
      </div>

      <div id="u22" class="ax_default label">
        <div id="u22_div" class=""></div>
        <div id="u22_text" class="text ">
          <p><span>Chức vụ</span></p>
        </div>
      </div>
    </div>
    <div class="container">
      <table class='bang'>
      <thead>
        <tr>
          <th>Mã hợp đồng bất động sản</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $tsql = "select * from Full_Contract";
      $stmt = sqlsrv_query($conn_sqlsrv, $tsql);
      while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
      ?>
      <tr>
        <td><?php echo $obj['Full_Contract_Code'].'</br>';?></td>
      </tr>
      <?php
      }
      sqlsrv_free_stmt($stmt);
      sqlsrv_close($conn_sqlsrv);
      ?>
    </div>
    <table class="bang1">
        <thead>
        <tr>
            <th>Họ tên khách hàng</th>
            <th>CMND</th>
            <th>Mã bất động sản</th>
            <th>Tỉnh</th>
            <th>Huyện</th>
            <th>Xã</th>
            <th>Số nhà</th>
            <th>Ngày</th>
            <th>Số tiền đã cọc</th>
            <th>Số tiền còn lại</th>
            <th>Trạng thái</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'ketnoi.php';
        $hoso_sql = "SELECT * FROM thembds ORDER BY hoten, cmnd, mabds, tinh, huyen, xa, sonha, ngay, sotiencoc, sotienconlai, trangthai";
        $result = mysqli_query($mysqli_conn, $hoso_sql);
        while ($r = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $r['hoten'];?></td>
            <td><?php echo $r['cmnd'];?></td>
            <td><?php echo $r['mabds'];?></td>
            <td><?php echo $r['tinh'];?></td>
            <td><?php echo $r['huyen'];?></td>
            <td><?php echo $r['xa'];?></td>
            <td><?php echo $r['sonha'];?></td>
            <td><?php echo $r['ngay'];?></td>
            <td><?php echo $r['sotiencoc'];?></td>
            <td><?php echo $r['sotienconlai'];?></td>
            <td><?php echo $r['trangthai'];?></td>
        </tr>
        <?php    
        }
        ?>
        </tbody>
    </table>
    </div>
    <div>
        <a href="themhd.php" class="btn btn-success">Thêm hợp đồng</a>
    </div>
    <div id="u00" class="ax_default box_1" style="text-align: center; position: relative; top: 240px; left: 90px";>
        <div id="u00_text" class="text ">
          <span style="font-size: 25px; font-weight: 500; width: 100%; text-align: center;">@Copyright by Don't Lazy</span>
        </div>
    </div>
</body>
</html>