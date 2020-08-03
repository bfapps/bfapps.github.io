<!DOCTYPE html>
<html lang='fa' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>ثبت نهایی</title>
    <style media='screen'>
      * {
        box-sizing: border-box;
      }
      body {
        padding: 0.5rem; margin: 0;
        height: 100vh;
        font-family: 'Times New Roman', Times, serif;
      }
      .table {
        background-color: #f6f6f6;
        display: grid;
        grid-template-columns: 15% 85%;
        grid-auto-rows: auto;
        direction: rtl;
      }
      .table div {
        border: #f3f3f3 solid 1px;
        border-collapse: collapse;
        font-size: small;
        padding: 0.5rem;
      }
      .table div:nth-child(even) {
        background-color: #eff;
      }
      .table div:nth-child(2), .table div:nth-child(1){
        background-color: white;
        text-align: center;
      }
      @media only screen and (max-width : 414px) {
        .table div {
          font-size : small;
        }
        .table {
          grid-template-columns: 20% 80%;
        }
      }
    </style>
  </head>
  <body>
    <div class='table'>
      <div>مشخصات</div>
      <div>توضیحات</div>
      <div>نام</div>
      <div><?php echo $_POST['fname'] ?></div>
      <div>نام خانوادگی</div>
      <div><?php echo $_POST['lname'] ?></div>
      <div>تلفن همراه</div>
      <div><?php echo $_POST['mn'] ?></div>
      <div>تلفن منزل</div>
      <div><?php echo $_POST['tn'] ?></div>
      <div>استان</div>
      <div><?php echo $_POST['statename'] ?></div>
      <div>شهرستان</div>
      <div><?php echo $_POST['cityname'] ?></div>
      <div>آدرس دقیق</div>
      <div><?php echo $_POST['address'] ?></div>
      <div>کد کالا</div>
      <div><?php echo $_POST['pc'] ?></div>
      <div>نام کالا</div>
      <div><?php echo $_POST['pname'] ?></div>
      <div>تعداد سفارش</div>
      <div><?php echo $_POST['prange'] ?></div>
      <div>قیمت تمام شده</div>
      <div><?php echo $_POST['price'] ?></div>
    </div>
    <?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mn = $_POST['mn'];
$tn = $_POST['tn'];
$state = $_POST['statename'];
$city = $_POST['cityname'];
$address = $_POST['address'];
$pc = $_POST['pc'];
$pname = $_POST['pname'];
$prange = $_POST['prange'];
$price = $_POST['price'];
$myfile = fopen("$fname $lname $mn .html", "w") or die("Unable to open file!");
$txt = "<!DOCTYPE html>
<html lang='fa' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>ثبت نهایی</title>
    <style media='screen'>
      * {
        box-sizing: border-box;
      }
      body {
        padding: 0.5rem; margin: 0;
        height: 100vh;
        font-family: 'Times New Roman', Times, serif;
      }
      .table {
        background-color: #f6f6f6;
        display: grid;
        grid-template-columns: 15% 85%;
        grid-auto-rows: auto;
        direction: rtl;
      }
      .table div {
        border: #f3f3f3 solid 1px;
        border-collapse: collapse;
        font-size: small;
        padding: 0.5rem;
      }
      .table div:nth-child(even) {
        background-color: #eff;
      }
      .table div:nth-child(2), .table div:nth-child(1){
        background-color: white;
        text-align: center;
      }
      @media only screen and (max-width : 414px) {
        .table div {
          font-size : small;
        }
        .table {
          grid-template-columns: 20% 80%;
        }
      }
    </style>
  </head>
  <body>
    <div class='table'>
      <div>مشخصات</div>
      <div>توضیحات</div>
      <div>نام</div>
      <div> $fname </div>
      <div>نام خانوادگی</div>
      <div> $lname </div>
      <div>تلفن همراه</div>
      <div> $mn </div>
      <div>تلفن منزل</div>
      <div> $tn </div>
      <div>استان</div>
      <div> $state </div>
      <div>شهرستان</div>
      <div> $city </div>
      <div>آدرس دقیق</div>
      <div> $address </div>
      <div>کد کالا</div>
      <div> $pc </div>
      <div>نام کالا</div>
      <div> $pname </div>
      <div>تعداد سفارش</div>
      <div> $prange </div>
      <div>قیمت تمام شده</div>
      <div> $price </div>
    </div>
    </body>
  </html>
    ";
fwrite($myfile, $txt);
fclose($myfile);
?>
  </body>
</html>
