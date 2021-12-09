<?php include("conn.php")?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الموقع الشخصي</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <style>
         .navbar-expand-lg{
             background-color:#2F4F4F;
         }
         .navbar-light .navbar-brand{
             color:#00BFFF;
         }
         .navbar-light.navbar-nav .navbar-link{
             color:#808080;
         }
         .form-control{
             margin-left:10px;
         }
         body{
             background-color:#DCDCDC;
         }
         .col-lg-4 {
            background-color:#ffffff;
            margin-top:20px;
            float:right;
            width:auto;
            height:350px;
         }
         .col-lg-4  img{
             width:40%;
             height:auto;
             
         }
         .thumbnil{
             width:80%;
             margin:10px;
             background-color:#ffffff;
             height:400px;
             border-radius:2px;
         }
         .footer{
             width:100%;
             height: 300px;
             background-color:#2F4F4F;
             
         }
         label{
             color:#ffffff;
             float:right;
         }
         .black{
           color:#000000;
         }
         .input{
           float:left;
         }
    </style> 
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"dir="rtl">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">متجر لبيع العسل</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">الرائسية</a>
              </li>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  انواع العسل
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">عسل النحل</a></li>
                  <li><a class="dropdown-item" href="#">عسل الاسود</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">جميع انواع العسل</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="اكتب اسم العسل" aria-label="Searsh">
              <button class="btn btn-outline-success" type="submit">البحث</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container">
          <div class="row">
          <div class="col-lg 12 col-md 12">
             <form dir="rtl" actino=""method="post"enctype="multipart/form-date"> 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"class="black">اسم المنتج</label>
                <input type="text"nane="filename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"class="black">السعر</label>
                <input type="text"name="fileprice" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"class="black">الوصف</label>
                <textarea  class="form-control"name="filedescrb" id="exampleInputPassword1"> </textarea>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"class="black">الصورة</label>
															<input type="file"name="uploaad" class="form-control" id="exampleInputEmail1">
              </div>
              <input type="submit"value="اضف"name="add" class="btn btn-primary">تسجيل دخول</input>
              <?php
              
               ?>
             </form>
          </div>
      </div>
      </div>     
      <footer class="footer">
        <div class="col-lg-6 col-sm-6 ">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>لن نشارك المنتجات مع احد
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">كلمة مرور</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">تسجيل دخول</button>
              </form>
        </div>
        <div class="col-lg-6 col-sm-6 ">

        </div>
      </footer>
</body>
</html>