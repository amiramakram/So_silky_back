<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sosilky</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&family=IBM+Plex+Sans+Arabic:wght@500&family=Marhey:wght@400;500&family=Roboto:wght@500&display=swap" rel="stylesheet">


<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>
      <style>
        /* ------------ GOOGLE FONTS ------------ */



        
body{
 
font-family: 'Marhey';
    
}
.swiper{
  width: 100%;
}

.swiper-wrapper{
  width: 100%;
  height: 35em;
  display: flex;
  align-items: center;
}

.card{
  width: 20em;
  height: 90%;
  background-color: #fff;
  border-radius: 2em;
  box-shadow: 0 0 2em rgba(0, 0, 0, .2);
  padding: 2em 1em;

  display: flex;
  align-items: center;
  flex-direction: column;

  margin: 0 2em;
}

.swiper-slide:not(.swiper-slide-active){
  filter: blur(1px);
}

.card__image{
  width: 100%;
  height: 100%;
  
 
 
  margin-bottom: 2em;
}

.card__image img{
  width: 100%;
  height: 100%;
 
  /* object-fit: cover; */
}

.card__content{
  display: flex;
  align-items: center;
  flex-direction: column;
}

.card__title{
  font-size: 1.5rem;
  font-weight: 500;
  position: relative;
  top: .2em;
}

.card__name{
  color: var(--color);
}

.card__text{
  text-align: center;
  font-size: 1.1rem;
  margin: 1em 0;
}

.card__btn{
  background-color: var(--color);
  color: #fff;
  font-size: 1rem;
  text-transform: uppercase;
  font-weight: 600;
  border: none;
  padding: .5em;
  border-radius: .5em;
  margin-top: .5em;
  cursor: pointer;
}



.imgService{
    width: 100%;
    height: 300px;
}

.serviceContent{
    position: absolute;
    bottom: 100;
    margin-left:80px;
    width: 150px;
    height: 50px;
    border-radius: 10px 10px 0px 0px;
    background-color: rgba(255, 255, 255, 0.826);
    font-size: 12px;
   text-align: center;
}
.title{
    color: #EDC6B5;
    font-size: 30px;
    font-weight: 700;
}
.price{
    margin-top: -13px;
    font-weight: 500;
    font-size: 20px;
}









.login-box {
  position: absolute;
  top: 425%;
  left: 50%;
  width: 800px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input ,select {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box option {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: #6F6C6B  ;
 
}
.login-box .user-box label {
  position: absolute;
  top:0;
  right: 0;

  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  
  color: #EDC6B5;
  font-size: 12px;
}

.login-box form button {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #EDC6B5;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px;
  border:none;
  border-radius:20px;
  background-color:#EDC6B5;
  color:#712504;
}

.login-box button:hover {
  background: #EDC6B5;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #EDC6B5,
              0 0 25px #EDC6B5,
              0 0 50px #EDC6B5,
              0 0 100px #EDC6B5;
}

.login-box button span {
  position:Btnbsolute;
  display: block;
}

.login-box button span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #451500);
 animation: button-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box button span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #451500);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box button span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #451500);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box button span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #451500);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}


.float{
	position:fixed;
    font-size:20px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
  bottom:40px;
	right:120px;
    width:200px;
	height:60px;
    background-color:#EDC6B5;
	color:#FFF;
    padding-right: 7px;
    border-radius:30px;
}
.floatIcon{
    position:fixed;
    width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#EDC6B5;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}

@media screen and (max-width: 1000px) {
    .serviceContent{
   
    margin-left:100px;
    margin-bottom:50px;
    
}

.login-box {
    width: 500px;
  top: 500%;
 
}
.float{
  width:200px
}
}


      </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-white fixed-top" dir="rtl">
    <div class="container-fluid" style="font-family: 'Marhey',  'Roboto', sans-serif;">
      <a class="navbar-brand col-3" href="#"><img width="130px" src="./images/2-removebg-preview 3.png"/></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  fs-4" aria-current="page" href="#carouselExampleCaptions">الصفحة الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4" href="#Whysilky">لماذا سو سيلكي <span style="color: #EDC6B5;">؟!</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4" aria-disabled="true"  href="#special">بماذا نتميز <span style="color: #EDC6B5;">؟!</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4" href="#statics">احصائيات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4" aria-disabled="true" href="#reviews">أراء العملاء</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  


      <!-- head -->

       
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                 
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active ">
                    <img src="./images/paner.PNG" style="height: 600px;" class="d-block w-100 " alt="...">
                    <div class="carousel-caption  d-md-block">
                      <img src="./images/2-removebg-preview 3.png" class="w-50"/>
                      <p style="text-align: center;color: rgb(125, 125, 125); margin-bottom: 100px;"> هي علامة تجارية متخصصة في غطاء الوسادات الحرير. تُعتبر هذه العلامة التجارية من بين العلامات 
                        التجارية الرائدة التي تقدم منتجات فاخرة وعالية الجودة مصنوعة من الحرير النقي 100%.
                         تهدف SOSILKY إلى توفير تجربة نوم مميزة وراحة استثنائية للعملاء، حيث يُعتبر الحرير مادة فاخرة
                         ولطيفة على البشرة وتُعزز من تجربة النوم بشكل عام.</p>
                    </div>
                  </div>
                  
                </div>
                
              </div>
        

        <!-- why sosilky -->

       
                
                    <!-- Link Swiper's CSS -->
                   
                    <!-- CSS -->
                    
                    
<section id="Whysilky">
               <div style="text-align: center;font-size: 2.8rem;margin-top: 30px;">لماذا سو سيلكي <span style="color: #EDC6B5;">!؟</span></div>
                  <div class="swiper mySwiper">
                
                    <div class="swiper-wrapper">
                
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/hair.jpg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">يحافظ علي الشعر</div>
                      </div>
                
                    
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/bacterial.jpg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">مضاد للبكتريا</div>
                      </div>
                     
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/Wrinkles.jfif" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">يقي من تجاعيد الوجه
                        </div>
                    </div>
                      
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/butterfly.jpg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">حرير طبيعي %100</div>
                    </div>
                      </div>
                     
                    
                    </div>
                  
                  
                  
                  
</section>


<section style="background-color:#EDC6B5;color:white;font-size:1.5rem">
    <div class="container p-4 " >
        <div class="row">
        <div class="col-md-6 col-12">
            <div class="d-flex justify-content-center align-items-center mt-3 " style="background-color:#712504;border-radius:30px;box-shadow:white 2px 2px 2px 2px">شامل الشحن والضريبة</div>
        </div>
        <div class="col-md-6 col-12">
            <div class="d-flex justify-content-center">السعر</div>
            <div class="row">
               
                <div class="col-6 d-flex justify-content-center">190AED</div>
                <div class="col-6 d-flex justify-content-center"><del>
                220AED
                </del></div>
            </div>
        </div>
        </div>
    </div>
</section>


                <!-- posts section -->
               <div class="container mt-5">
                <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel" >
                  <div class="carousel-inner">
                    <div class="carousel-item active ">
                      <div class="row d-flex justify-content-center align-items-center">
                      <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                      <img src="./images/71fI951qU3L.jpg" class="d-block w-75 " alt="..."  style="height: 360px;">
                    </div>
                      <div class="col-md-5 col-12">
                       
                        <p style="font-size: 2.7rem;font-weight: bold;color: rgb(84, 84, 84);text-align: center;">%حرير طبيعي 100</p>
                      </div>
                    </div>
                    </div>
                    <div class="carousel-item ">
                      <div class="row d-flex justify-content-center align-items-center">
                      <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                      <img src="./images/81ceGnbkABL.jpg" class="d-block  w-75 " alt="..."  style="height: 360px;">
                    </div>
                    <div class="col-md-5 col-12">
                       
                        <p style="font-size: 2.7rem;font-weight: bold;color:  rgb(84, 84, 84);text-align: center;">نعومه فائقة وعالية الجودة</p>
                      </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row d-flex justify-content-center align-items-center">
                      <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                      <img src="./images/s-l1200.jpg" class="d-block  w-75 " alt="..."  style="height: 360px;">
                    </div>
                    <div class="col-md-5 col-12">
                        <p style="font-size: 2.7rem;font-weight: bold;color:  rgb(84, 84, 84);text-align: center;">ملمس ناعم وبارد</p>
                      </div>
                    </div>
                    </div>
                  </div>
                 
                </div>
              </div>



      <section id="colors">
               <div style="text-align: center;font-size: 2.8rem;margin-top: 50px;">الوان منتجنا</div>
                  <div class="swiper mySwiper">
                
                    <div class="swiper-wrapper">
                
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/img1.jpeg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">الازرق</div>
                      </div>
                
                    
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/img2.jpeg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">اخضر</div>
                      </div>
                     
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/img3.jpeg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">زهري
                        </div>
                    </div>
                      
                      <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/img4.jpeg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">بيج</div>
                    </div>
                    <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/img5.jpeg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">اسود</div>
                    </div>
                    <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/img6.jpeg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">نبيتي</div>
                    </div>
                    <div class="card swiper-slide" style="box-shadow: none;border: none;">
                        <div class="card__image">
                          <img src="./images/img7.jpeg" alt="card image">
                        </div>
                        <div style="text-align: center;font-size:2rem;color: #EDC6B5;">رمادي</div>
                    </div>
                      </div>
                     
                    
                    </div>
                  
                  
                  
                  
</section>

<!-- products -->



<!-- order -->

<section style="margin-top: 100px; background-color:#EDE1DC;height:1130px" dir="rtl">
    <div class="container">
        <div class="row">
        <div style="text-align: center;font-size: 2.8rem;margin-top: 30px;">اطلبي الان </div>

        <div class="login-box">
  
  <form action="{{route('client.store')}}" method="POST" >
    @csrf
    @method('post')

    <div class="user-box " >
      <input type="text"  name="name" 
    value="{{old('name')}}" required="" >
      <label >الاسم</label>
    </div>
    @error('name')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
    <div class="user-box">
      <input type="email"  name="email" 
    value="{{old('email')}}" required="">
      <label >الايميل</label>
    </div>
    @error('email')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
    <div class="user-box">
      <input type="number"  name="phone_number" 
    value="{{old('phone_number')}}" required="">
      <label >رقم الجوال</label>
    </div>
    @error('phone_number')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
    <div class="user-box">
   
    <select name="emirate" 
    id="dog-names"> 
        <option  value="{{old('emirate')}}">الامارة</option> 
        <option  value="{{old('emirate')}}">دبي</option> 
        <option  value="{{old('emirate')}}">ابوظبي</option> 
        <option  value="{{old('emirate')}}">عجمان</option> 
        <option  value="{{old('emirate')}}">العين</option> 
        <option  value="{{old('emirate')}}">راس الخيمة</option> 
        <option value="{{old('emirate')}}">ام القوين</option> 
        <option  value="{{old('emirate')}}">الفجيرة</option> 
        <option  value="{{old('emirate')}}">الشارقة</option> 
        <option  value="{{old('emirate')}}">اخري</option> 
       
    </select>
    </div>
    @error('emirate')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
    <div class="user-box">
      <input type="text"  name="zone" 
    value="{{old('zone')}}" required="">
      <label >اسم المنطقة</label>
    </div>
    @error('zone')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
<div class="row" dir="ltr">
  <div class="user-box" >
      <input type="text" name="color_White" 
    value="{{ old('color_White') }}" >
      <label >(ادخل الكمية المطلوبة) ابيض</label>
      @error('color_White')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

    </div>

    <div class="user-box">
      <input type="text" name="color_black" 
    value="{{ old('color_black') }}" >
      <label >(ادخل الكمية المطلوبة) اسود</label>
      @error('color_black')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

    </div>
    <div class="user-box">
      <input type="text" name="color_gray" 
    value="{{ old('color_gray') }}" >
      <label >(ادخل الكمية المطلوبة) رمادي</label>
      @error('color_gray')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

    </div>
    <div class="user-box">
      <input type="text" name="color_pink" 
    value="{{ old('color_pink') }}" >
      <label >(ادخل الكمية المطلوبة) زهري</label>
      @error('color_pink')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

    </div>
    <div class="user-box">
      <input type="text" name="color_beige" 
    value="{{ old('color_beige') }}" >
      <label >(ادخل الكمية المطلوبة) بيج</label>
      @error('color_beige')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

    </div>
    </div>
    

    <button type="submit" class="Btn" href="#">
      
    اطلبي
    </button>
  </form>
</div>
        </div>
    </div>

    <div class="row float pt-3  d-flex justify-content-center">
                  تواصلي علئ واتس اب <a href="https://api.whatsapp.com/send?phone=966593536157"  target="_blank">
                    <div class="floatIcon">
     <i class="fab fa-whatsapp my-float"></i>
    </div>
</a>
</div>
</section>


<div class="container mt-5" id="special" >
   <div class="row">
    <div class="d-flex justify-content-center">
      <p style="font-size: 2rem; font-weight: bold;color: #EDC6B5;margin-top:100px">بماذا نتميز !؟<img src="./images/download (2).png" alt="" width="50px"></p>
    </div>
      <div class="d-flex justify-content-center row">
       <div class="col-md-4 col-12" >
    <div class="d-flex justify-content-center">
      <img src="./images/cash-payment.png" alt="" width="100vw">
    </div>
  <p style="color: #EDC6B5; font-size: 1.7rem; text-align: center;">الدفع عند الاستلام</p>
  
</div>
<div class="col-md-4 col-12">
  <div class="d-flex justify-content-center" >
    <img src="./images/download (1).png" alt="" width="100vw">
   </div>
   <p style="color: #EDC6B5; font-size: 1.7rem; text-align: center;">توصيل سريع ومجاني</p>
  
</div>
<div class="col-md-4 col-12"> 
  <div class="d-flex justify-content-center">
    <img src="./images/5465858.png" alt="" width="100vw">
  </div>
  <p style="color: #EDC6B5; font-size: 1.7rem; text-align: center;">امكانية الاسترجاع والاستبدال</p>
</div>
</div>


  </div>
</div>

<div class="container mt-5">
  <div class="row">
 
  <div class="row d-flex justify-content-center align-items-center" id="statics">
    <div class="col-md-5 col-12"> 
      <div class="d-flex flex-column align-items-center">
        <img src="./images/33308.png" alt="" width="100vw">
        <p style="font-size: 1.7rem; text-align: center;">عدد العملاء</p>
      </div>
      <p style="font-size: 1.7rem; text-align: center;">+100K</p>
    </div>
    <div class="col-md-5 col-12"> 
     <a href="#reviews" class="text-black">
          <div class="d-flex flex-column align-items-center">
        <img src="./images/feedback-icon-review-165788304.webp" alt="" width="100vw">
        <p style="font-size: 1.7rem; text-align: center;">اراء العملاء</p>
      </div>
     
       </a>
    </div>
   
  </div>

  </div>
</div>

<!-- Reviews -->

  <div id="carouselBasicExample" class="carousel  carousel-fade" data-mdb-ride="carousel" style="background-color: #edc6b5a0;">
    

    <div class="carousel-inner" id="reviews">
      <p class="mt-5" style="color: rgb(79, 79, 79); font-size: 1.7rem;text-align: center;">اراء عملائنا</p>
      <div class="carousel-item active d-flex justify-content-center">
        <div  class="row d-flex justify-content-center " dir="rtl">
        <div class="col-md-2 col-10">
       <img src="./images/user.jfif" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      

       
        <div class="  d-md-block">
         <p class="text-dark">روعه روعه روعه وتغليف ايضا رائع</p>
        </div>
        </div>
        <div class="col-md-2 col-10">
          <img src="./images/user2.jfif" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      
           <div class="  d-md-block">
            <p class="text-dark">هذه هي المرة الرابعة التي أشتري فيها</p>
           </div>
           </div>

           <div class="col-md-2 col-10">
            <img src="./images/images (7).jfif" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
       
            
             <div class="  d-md-block">
              <p class="text-dark">رائعة خذيتها بسعر التخفيض وطلعت نفس وصف مواصفات وتعليقات المشترين والتغليف ممتاز وناعمة وباردة والشحن سريع</p>
             </div>
             </div>

             <div  class="row d-flex justify-content-center " dir="rtl">
              <div class="col-md-2 col-10">
                <img src="./images/user3.webp" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
                
                
                 <div class="  d-md-block">
                  <p class="text-dark">جميل جدا وناعم وخامه روعه انصح فيه واكيد برجع اطلب الوان ثانيه ❤️❤️❤️.</p>
                 </div>
                 </div>
                 <div class="col-md-2 col-10">
                  <img src="./images/preview16.jpg" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      
                  
                   <div class="  d-md-block">
                    <p class="text-dark">كان هذا طلبي الثاني ، منتج جميل ،  وشعري اتحسسسن</p>
                   </div>
                   </div>
                   <div class="col-md-2 col-10">
                    <img src="./images/user4.png" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
                    
                    
                     <div class="  d-md-block">
                      <p class="text-dark">حلوة مره ومريحه في النوم اخذت ٣ اللوان وشكرا</p>
                     </div>
                     </div>
             </div>

          </div>
      </div>

      <div class="carousel-item  d-flex justify-content-center">
        <div  class="row d-flex justify-content-center " dir="rtl">
        <div class="col-md-2 col-10">
       <img src="./images/user5.webp" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      

       
        <div class="  d-md-block">
         <p class="text-dark">رهييييب ووصلني بسرعه ونظافه واهتمام ب ادق التفاصيل♥️♥️♥️♥️ 🇸🇦🇸🇦🇸🇦
        </p>
        </div>
        </div>
        <div class="col-md-2 col-10">
          <img src="./images/user6.jpg" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      
           <div class="  d-md-block">
            <p class="text-dark">جودتها ممتازه وناعمه، انتبهو لتعليمات الغسيل واشترو ٢ افضل للتبديل بينهم</p>
           </div>
           </div>

           <div class="col-md-2 col-10">
            <img src="./images/user7.webp" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
     
            
             <div class="  d-md-block">
              <p class="text-dark">مريحة جدا وتساعد على النوم وباردة</p>
             </div>
             </div>

             <div  class="row d-flex justify-content-center " dir="rtl">
              <div class="col-md-2 col-10">
                <img src="./images/user8.png" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
                
                
                 <div class="  d-md-block">
                  <p class="text-dark">سويت اختبار الحرير عليها وطلع صدق حرير
                  </p>
                 </div>
                 </div>
                 <div class="col-md-2 col-10">
                  <img src="./images/user9.png" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
       
                  
                   <div class="  d-md-block">
                    <p class="text-dark">اشتريت لعيلتنا كلهم من ذا المتجر جدا ممتاز توصيلهم خلال يومين</p>
                   </div>
                   </div>
                   <div class="col-md-2 col-10">
                    <img src="./images/user11.jpg" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
                    د
                    
                     <div class="  d-md-block">
                      <p class="text-dark">الوانهم حلوة ومالقيتها بأي متجر قبل</p>
                     </div>
                     </div>
             </div>

          </div>
      </div>

      <div class="carousel-item  d-flex justify-content-center">
        <div  class="row d-flex justify-content-center " dir="rtl">
        <div class="col-md-2 col-10">
       <img src="./images/user12.png" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
       

       
        <div class="  d-md-block">
         <p class="text-dark">كنت متخوفة اطلب ويطلع ستان بس الحمد الله جدا الخامة رائعة وطلع حرير
        </p>
        </div>
        </div>
        <div class="col-md-2 col-10">
          <img src="./images/user13.webp" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      
          
           <div class="  d-md-block">
            <p class="text-dark">تعاملهم جميل وسريع</p>
           </div>
           </div>

           <div class="col-md-2 col-10">
            <img src="./images/user14.jfif" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      
            
             <div class=" d-md-block">
              <p class="text-dark">حسيت بفرق الصراحة غير عن المخدة القطن</p>
             </div>
             </div>

             <div  class="row d-flex justify-content-center " dir="rtl">
              <div class="col-md-2 col-10  ">
                <img src="./images/user15.jfif" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
                
                
                 <div class="  d-md-block">
                  <p class="text-dark">كان هذا طلبي الثاني ، منتج جميل ،  وشعري اتحسسسن
                  </p>
                 </div>
                 </div>
                 <div class="col-md-2 col-10">
                  <img src="./images/user16.jfif" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
      
                  
                   <div class="  d-md-block">
                    <p class="text-dark">جميل جدا وناعم وخامه روعه انصح فيه واكيد برجع اطلب الوان ثانيه ❤️❤️❤️</p>
                   </div>
                   </div>
                   <div class="col-md-2 col-10">
                    <img src="./images/user17.jfif" alt="" style="border-radius: 50%;width: 70px;height: 70px;" >
                    
                     <div class="  d-md-block">
                      <p class="text-dark">رهييييب ووصلني بسرعه ونظافه واهتمام ب ادق التفاصيل♥️♥️♥️♥️!</p>
                     </div>
                     </div>



             </div>

          </div>
      </div>
    

    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>



  <!-- footer -->
  <footer class="bg-black text-center text-white ">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <a href="mailto:www.crm@sosilky.online"> <i class="fa-solid fa-envelope fa-lg" style="color: #ffffff;"></i></a>
                <a href="https://api.whatsapp.com/send?phone=966593536157"><i class="fa-brands fa-whatsapp fa-lg" style="color: #ffffff;"></i></a>
                <i class="fa-solid fa-location-dot fa-lg" style="color: #ffffff;"></i>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <p class="pt-2">بفضل التركيز على الجودة والاهتمام بأدق التفاصيل، 
                  تتمتع SOSILKY بشعبية كبيرة بين محبي الراحة
                   والفخامة، وتُعتبر خيارًا مثاليًا لمن يتطلعون إلى
                   تحسين جودة نومهم والاستمتاع بتجربة نوم لا تُنسى.</p>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
             <img src="./images/2.png" alt="" width="300px">
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #000;">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">sosilky.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  </div>
</div>


                <!-- Swiper JS --> 
                  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
                
                  <!-- Initialize Swiper -->
                  <script>
                    var swiper = new Swiper(".mySwiper", {
                      effect: "coverflow",
                      grabCursor: true,
                      centeredSlides: true,
                      slidesPerView: "auto",
                      coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 600,
                        modifier: 1,
                        slideShadows: false,
                      },
                      pagination: {
                        el: ".swiper-pagination",
                      },
                      autoplay: {
                        delay: 3000, // Set the delay between each slide transition (in milliseconds)
                        disableOnInteraction: false, // Allow autoplay to continue even when the user interacts with the slider
                      },
                    });
                  </script>
                
               
            </div>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
  ></script>   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
</body>
</html>