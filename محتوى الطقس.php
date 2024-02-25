<?php



include './inc/db.php';
include './inc/form4.php';
$sql_s = 'SELECT * FROM الطقس';
$result = mysqli_query($conn, $sql_s);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الطقس</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="style.css/style2.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
</head>
<body >
  <nav class="navbar navbar-expand-md navbar-light bg-info">
    <div class="container">
    <a class="navbar-brand text-white" href="قائمة التفضيلات.php">
      <img src="img/logo/حصل ! (6).png" width="60" height="40" class="d-inline-block align-top" alt=" logo">
      حصل 
    </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white" href="قائمة التفضيلات.php">الرئيسية <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="سياسه.php" >السياسه</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="رياضة.php" >رياضة</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="صحه.php" >الصحة</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="محتوى التعليم.php" >التعليم</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="محتوى الطقس.php" >الطقس</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="وظايف.php
        " >وظائف</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="اقتصاد.php" >اقتصاد</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="مقالات.php" >مقالات</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="تقنية.php" >تقنية</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link text-white" href="ثقافة.php" >ثقافة</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown"
        role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">الحساب</a>
        <ul class="dropdown-menu bg-info"
        aria-labelledby="navbarDropdown">
      <li> <a href="معلومات الحساب.php" class="dropdown-item text-white"> معلومات الحساب</a>
      </li>
      <li> <a href="تسجيل الدخول.HTML" class="dropdown-item text-white"> تسجيل الخروج</a>
      </li>
    </ul>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">soon</a>
      </li>
    </ul>
  </div>
  </div>
  </nav>

  
    <div class="container h-1000">
        <div class="row d-flex justify-content-center align-items-center h-1000">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-white" style="border-color: rgb(255, 255, 255);">
              <div class="card-body p-md-5" style="background-color: white;">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-7 col-xl-7 order-2 order-lg-1">
                    <ul class="list-group">
                      <div class="list-group">
                    
                      <a href="الطقس 1.php" class="list-group-item list-group-item-action" style="background-color: skyblue">
                        <div class="d-flex w-100 justify-content-between">
                          <!--اكتب رأس قلم الخبر في السطر التالي في مكان (List group item heading)-->
                          <h5 class="mb-1">حالة الطقس في الرياض
                          </h5>
                          <!--اكتب متى تم عرض الخبر-->
                          <small class="text-muted">3 year ago</small>
                        </div>
                                <!--اكتب في السطر التالي نبذه عن الخبر -->
                        <p class="mb-1">
                          يشعر كأنه: 23 °C ندى: 14 °C الرطوبة: 56.9% سرعة الرياح: 0 kph اتجاه الرياح: شمال الضغط الجوي: 1019 mb مدى الرؤيه: 10 km هطول المطر: توقعات الامطار: 0 % الغطاء السحابي: 4.9<br><img src="data:image/jpeg;base64,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" class="rounded" width="350px" height="100px"></p></p>
                        <!--اكتب مصدر الخبر-->
                        <small class="text-muted">العربية</small>
                      </a> 
                      <br>
                      <a href="الطقس2.php" class="list-group-item list-group-item-action" style="background-color: skyblue">
                          <div class="d-flex w-100 justify-content-between">
                            <!--اكتب رأس قلم الخبر في السطر التالي في مكان (List group item heading)-->
                            <h5 class="mb-1">حالة الطقس في المنطقة الشرقية
                            </h5>
                            <!--اكتب متى تم عرض الخبر-->
                            <small class="text-muted">3 year ago</small>
                          </div>
                                  <!--اكتب في السطر التالي نبذه عن الخبر -->
                          <p class="mb-1">تشير التوقعات الواردة من المركز الوطني للأرصاد، إلى هطول أمطار خفيفة إلى متوسطة على المنطقة الشرقية<br><img src="https://www.sra7h.com/wp-content/uploads/2023/01/FnVU6cAWAAI8xof-780x470.jpg" class="rounded" width="350px" height="100px"></p></p>
                          <!--اكتب مصدر الخبر-->
                          <small class="text-muted">العربية</small>
                        </a> 
                        <br>
                        <a href="الطقس3.php" class="list-group-item list-group-item-action" style="background-color: skyblue">
                          <div class="d-flex w-100 justify-content-between">
                            <!--اكتب رأس قلم الخبر في السطر التالي في مكان (List group item heading)-->
                            <h5 class="mb-1"> الطقس</h5>
                            <!--اكتب متى تم عرض الخبر-->
                            <small class="text-muted">2 years ago</small>
                          </div>
                                  <!--اكتب في السطر التالي نبذه عن الخبر -->
                          <p class="mb-1">توقع الباحث في الشؤون المناخية والطقس والمتخصص في العلوم الطبيعية مبارك الدوسري أن تشهد المناطق الوسطى والشمالية والشرقية في المملكة ارتفاعا نسبيا في درجات الحرارة<br><img src="https://cdn4.premiumread.com/?url=https://alyaum.com/uploads/imported_images/media/files/2012/29_520421511.jpg&w=500&q=100&f=jpg" class="rounded" width="350px" height="100px"></p></p>
                          <!--اكتب مصدر الخبر-->
                          <small class="text-muted">العربية</small>
                        </a>
                        <br>
                        <a href="الطقس4.php" class="list-group-item list-group-item-action" style="background-color: skyblue">
                      <div class="d-flex w-100 justify-content-between">
                        <!--اكتب رأس قلم الخبر في السطر التالي في مكان (List group item heading)-->
                        <h5 class="mb-1">جبل اللوز</h5>
                        <!--اكتب متى تم عرض الخبر-->
                        <small class="text-muted">1 year ago</small>
                      </div>
                              <!--اكتب في السطر التالي نبذه عن الخبر -->
                      <p class="mb-1">عادت الثلوج لتلف جبل اللوز الشهير شمال السعودية<br><img src="https://vid.alarabiya.net/images/2023/01/04/cdc7f8fc-0ab5-4c82-8011-c8039c0fb7ad/cdc7f8fc-0ab5-4c82-8011-c8039c0fb7ad_16x9_1200x676.jpeg" class="rounded" width="350px" height="100px"></p></p>
                      <!--اكتب مصدر الخبر-->
                      <small class="text-muted">العربية</small>
                    </a>
                        <br>
                       
                    </li>
                    <br>
            <br>
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div>
      <div class="container h-1000">
        <div class="row d-flex justify-content-center align-items-center h-1000">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-white" style="border-color: rgb(255, 255, 255);">
              <div class="card-body p-md-5" style="background-color: white;">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-7 col-xl-7 order-2 order-lg-1">
                    <ul class="list-group">
                      <div class="list-group" style="background-color: white;">
                        <a href="https://twitter.com/stc_ksa/status/1291329179129131009" class="list-group-item list-group-item-action"  >
                          <div class="d-flex w-100 justify-content-between">
                          </div>
                          <p class="mb-1">          <br>      <img src="https://pbs.twimg.com/media/Eeu5C3FWkAEvrDv.jpg" class="rounded" width="600px" height="400px"></p>
                          <small>اعلان</small>
                        </a>
                        <div<div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 0px; border-color: white ;">
            <div class="card-body p-md-5" style="background-color: rgb(255, 255, 255);">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1"> <class="container center__display">
        <div class="top">
        
                    
                    
                </div>
            </div>
        </div>

        <div class="comments__container center__display">
             <div class="comment__card">
                    <label>  شاركنا تعليقك على خبر قريته </label>
                    </div>
                    <div class="form__info center__display">
                    <form action = "محتوى الطقس.php" method = "POST">
                        <input type="text" name="user" id="user" class="form-control" placeholder="اسمك | لقبك" required>
                        <textarea  name="comment" id="comment" class="form-control" placeholder="اكتب تعليقك هنا" rows="4" cols="50" required></textarea>
                        <input type="submit" name="submit" id="submit" value="ارسل" class="btn btn-info">
                        
                        <div class="comment__bottom">

                

        <div class="comments__container center__display">
             <div class="comment__card">
             </form>
             <?php foreach($users as $user): ?>
<?php echo '<br><br>' . htmlspecialchars($user['user']) . '<br>' . htmlspecialchars($user['comment']);   ?>
<?php endforeach;

?>

      
                            <script src="main.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                          </body>
                      </html>