<?php



include './inc/db.php';
include './inc/form3.php';
$sql_s = 'SELECT * FROM صحه';
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
    <title>السياسة</title>
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
                      <a href="محتوى صحه3.php" class="list-group-item list-group-item-action"  style="background-color: skyblue">
                        <div class="d-flex w-100 justify-content-between">
                          <!--اكتب رأس قلم الخبر في السطر التالي في مكان (List group item heading)-->
                          <h5 class="mb-1">“الصحة”: تحدد مدة القيلولة المسموح بها وتوقيتها المناسب
                          </h5>
                          <!--اكتب متى تم عرض الخبر-->
                          <small class="text-muted">6 days ago</small>
                        </div>
                                <!--اكتب في السطر التالي نبذه عن الخبر -->
                        <p class="mb-1">حددت وزارة الصحة، مدة القيلولة المسموح بها وتوقيتها المناسب بعد موعد الاستيقاظ اليومي ...<br><img src="https://www.alweeam.com.sa/wp-content/uploads/2022/01/23444.jpg" class="rounded" width="350px" height="100px"></p></p>
                        <!--اكتب مصدر الخبر-->
                        <small class="text-muted">العربيه.</small>
                      </a>
                      <br>
                      <a href="محتوى صحه.php" class="list-group-item list-group-item-action" style="background-color: skyblue">
                        <div class="d-flex w-100 justify-content-between">
                          <!--اكتب رأس قلم الخبر في السطر التالي في مكان (List group item heading)-->
                          <h5 class="mb-1">منظمة الصحة العالمية تؤكد أن المناعة الجماعية ضد فيروس كورونا لن تتحقق في 2021
                          </h5>
                          <!--اكتب متى تم عرض الخبر-->
                          <small class="text-muted">3 days ago</small>
                        </div>
                                <!--اكتب في السطر التالي نبذه عن الخبر -->
                        <p class="mb-1">قالت المسؤولة العلمية في منظمة الصحة العالمية سمية سواميناثان من جنيف إنه "لن نبلغ (...) المناعة الجماعية في 2021". <br> <img src="https://s.france24.com/media/display/ce0decf8-f354-11ea-864a-005056bf87d6/w:1280/p:1x1/20af629acc766ed3645f716c783e1dbfb29a367a.jpg" class="rounded" width="350px" height="100px"></p></p>
                        <!--اكتب مصدر الخبر-->
                        <small class="text-muted">نبض.</small>
                      </a>
                       <br>
                       <a href="محتوى صحه2.php" class="list-group-item list-group-item-action" style="background-color: skyblue">
                        <div class="d-flex w-100 justify-content-between">
                          <!--اكتب رأس قلم الخبر في السطر التالي في مكان (List group item heading)-->
                          <h5 class="mb-1">دليل توعوي من وزارة الصحة السعودية يتضمن خدمات الرعاية الصحية المنزلية 1442
                          </h5>
                          <!--اكتب متى تم عرض الخبر-->
                          <small class="text-muted">1 week ago</small>
                        </div>
                                <!--اكتب في السطر التالي نبذه عن الخبر -->
                        <p class="mb-1">أعلنت وزارة الصحة بالمملكة العربية السعودي عن دليل توعوي يتضمن خدمات الرعاية الصحية المنزلية 1442 والتي بلغ عددها 13 خدمة منزلية، وذلك لمن يحتاج رعابة صحية منزلية

                   <br> <img src="https://tse2.mm.bing.net/th?id=OIP.AFRnocxNQAQqveAbg0qJRAHaEK&pid=Api&P=0&h=220" class="rounded" width="350px" height="100px"></p></p>
                        <!--اكتب مصدر الخبر-->
                        <small class="text-muted">SkyNews</small>
                      </a>
                       <br> 
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container h-1000">
      <div class="row d-flex justify-content-center align-items-center h-1000">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-white" style="border-color: rgb(255, 255, 255);">
            <div class="card-body p-md-5" style="background-color: white;">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7 col-xl-7 order-2 order-lg-1">
                  <ul class="list-group">
                    <div class="list-group" style="background-color: white;">
                      <a href="https://www.stc.com.sa/content/stcgroupwebsite/sa/ar/investors.php" class="list-group-item list-group-item-action"  >
                        <div class="d-flex w-100 justify-content-between">
                        </div>
                        <p class="mb-1">          <br>      <img src="https://www.stc.com.sa/content/dam/groupsites/ar/globalimages/investors-mobile-ar.jpeg" class="rounded" width="450px" height="400px"></p>
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
                    <form action = "صحه.php" method = "POST">
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