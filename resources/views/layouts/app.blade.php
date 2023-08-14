<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SoSilky') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&family=Cairo&family=Caveat&family=IBM+Plex+Sans+Arabic:wght@500&family=Noto+Sans+Arabic:wght@400;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>

<link 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
  rel="stylesheet" 
/> 
<!-- Google Fonts --> 
<link 
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" 
  rel="stylesheet" 
/> 
<!-- MDB --> 
<link 
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" 
  rel="stylesheet" 
/>
    
     <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <style>
        @import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
 
/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
} */
:root {
  --background-color1: #fafaff;
  --background-color2: #ffffff;
  --background-color3: #ededed;
  --background-color4: #0C80D5;
  --primary-color: #0C80D5;
  --secondary-color: #0C80D5;
  --Border-color: #0C80D5;
  --one-use-color: #0C80D5;
  --two-use-color: #0C80D5;
}
body {
  background-color: var(--background-color1);
  max-width: 100%;
  overflow-x: hidden;
}
 
header {
  height: 70px;
  width: 100vw;
  padding: 0 30px;
  background-color: var(--background-color1);
  position: fixed;
  z-index: 100;
  box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
  display: flex;
  justify-content: space-between;
  align-items: center;
}
 
.logo {
  font-size: 27px;
  font-weight: 600;
  color: rgb(47, 141, 70);
}
 
.icn {
  height: 30px;
}
.menuicn {
  cursor: pointer;
}
 
.searchbar,
.message,
.logosec {
  display: flex;
  align-items: center;
  justify-content: center;
}
 
.searchbar2 {
  display: none;
}
 
.logosec {
  gap: 60px;
}
 
.searchbar input {
  width: 250px;
  height: 42px;
  border-radius: 50px 0 0 50px;
  background-color: var(--background-color3);
  padding: 0 20px;
  font-size: 15px;
  outline: none;
  border: none;
}
.searchbtn {
  width: 50px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 0px 50px 50px 0px;
  background-color: var(--secondary-color);
  cursor: pointer;
}
 
.message {
  gap: 40px;
  position: relative;
  cursor: pointer;
}
.circle {
  height: 7px;
  width: 7px;
  position: absolute;
  background-color: #fa7bb4;
  border-radius: 50%;
  left: 19px;
  top: 8px;
}
.dp {
  height: 40px;
  width: 40px;
  background-color: #626262;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.main-container {
  display: flex;
  width: 100vw;
  position: relative;
  top: 70px;
  z-index: 1;
}
.dpicn {
  height: 42px;
}
 
.main {
  height: calc(100vh - 70px);
  width: 100%;
  overflow-y: scroll;
  overflow-x: hidden;
  padding: 40px 30px 30px 30px;
}
 
.main::-webkit-scrollbar-thumb {
  background-image:
        linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
  width: 5px;
}
.main::-webkit-scrollbar-track {
  background-color: #9e9e9eb2;
}
 
.box-container {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-wrap: wrap;
  gap: 50px;
}
.nav {
  min-height: 91vh;
  width: 250px;
  background-color: var(--background-color2);
  position: absolute;
  top: 0px;
  left: 00;
  box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
  padding: 30px 0 20px 10px;
}
.navcontainer {
  height: calc(100vh - 70px);
  width: 250px;
  position: relative;
  overflow-y: scroll;
  overflow-x: hidden;
  transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
  display: none;
}
.navclose {
  width: 80px;
}
.nav-option {
  width: 250px;
  height: 60px;
  display: flex;
  align-items: center;
  padding: 0 30px 0 20px;
  gap: 20px;
  transition: all 0.1s ease-in-out;
}
.nav-option:hover {
  border-left: 5px solid #a2a2a2;
  background-color: #dadada;
  cursor: pointer;
}
.nav-img {
  height: 30px;
}
 
.nav-upper-options {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
}
 
.option1 {
  border-left: 5px solid #010058af;
  background-color: var(--Border-color);
  color: white;
  cursor: pointer;
}
.option1:hover {
  border-left: 5px solid #010058af;
  background-color: var(--Border-color);
}
.box {
  height: 130px;
  width: 230px;
  border-radius: 20px;
  box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}
.box:hover {
  transform: scale(1.08);
}
 
.box:nth-child(1) {
  background-color: var(--one-use-color);
}
.box:nth-child(2) {
  background-color: var(--two-use-color);
}
.box:nth-child(3) {
  background-color: var(--one-use-color);
}
.box:nth-child(4) {
  background-color: var(--two-use-color);
}
 
.box img {
  height: 50px;
}
.box .text {
  color: white;
}
.topic {
  font-size: 13px;
  font-weight: 400;
  letter-spacing: 1px;
}
 
.topic-heading {
  font-size: 30px;
  letter-spacing: 3px;
}
 
.report-container {
  min-height: 300px;
  max-width: 1200px;
  margin: 70px auto 0px auto;
  background-color: #ffffff;
  border-radius: 30px;
  box-shadow: 3px 3px 10px rgb(188, 188, 188);
  padding: 0px 20px 20px 20px;
}
.report-header {
  height: 80px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 20px 10px 20px;
  border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}
 
.recent-Articles {
  font-size: 30px;
  font-weight: 600;
  color: #5500cb;
}
 
.view {
  height: 35px;
  width: 90px;
  border-radius: 8px;
  background-color: #5500cb;
  color: white;
  font-size: 15px;
  border: none;
  cursor: pointer;
}
 
.report-body {
  max-width: 1160px;
  overflow-x: auto;
  padding: 20px;
}
.report-topic-heading,
.item1 {
  width: 1120px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.t-op {
  font-size: 18px;
  letter-spacing: 0px;
}
 
.items {
  width: 1120px;
  margin-top: 15px;
}
 
.item1 {
  margin-top: 20px;
}
.t-op-nextlvl {
  font-size: 14px;
  letter-spacing: 0px;
  font-weight: 600;
}
 
.label-tag {
  width: 100px;
  text-align: center;
  background-color: rgb(0, 177, 0);
  color: white;
  border-radius: 4px;
}
/* Responsive CSS Here */
@media screen and (max-width: 950px) {
  .nav-img {
    height: 25px;
  }
  .nav-option {
    gap: 30px;
  }
  .nav-option h3 {
    font-size: 15px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 800px;
  }
}
 
@media screen and (max-width: 850px) {
  .nav-img {
    height: 30px;
  }
  .nav-option {
    gap: 30px;
  }
  .nav-option h3 {
    font-size: 20px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 700px;
  }
  .navcontainer {
    width: 100vw;
    position: absolute;
    transition: all 0.6s ease-in-out;
    top: 0;
    left: -100vw;
  }
  .nav {
    width: 100%;
    position: absolute;
  }
  .navclose {
    left: 00px;
  }
  .searchbar {
    display: none;
  }
  .main {
    padding: 40px 30px 30px 30px;
  }
  .searchbar2 {
    width: 100%;
    display: flex;
    margin: 0 0 40px 0;
    justify-content: center;
  }
  .searchbar2 input {
    width: 250px;
    height: 42px;
    border-radius: 50px 0 0 50px;
    background-color: var(--background-color3);
    padding: 0 20px;
    font-size: 15px;
    border: 2px solid var(--secondary-color);
  }
}
 
@media screen and (max-width: 490px) {
  .message {
    display: none;
  }
  .logosec {
    width: 100%;
    justify-content: space-between;
  }
  .logo {
    font-size: 20px;
  }
  .menuicn {
    height: 25px;
  }
  .nav-img {
    height: 25px;
  }
  .nav-option {
    gap: 25px;
  }
  .nav-option h3 {
    font-size: 12px;
  }
  .nav-upper-options {
    gap: 15px;
  }
  .recent-Articles {
    font-size: 20px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 550px;
  }
}
 
@media screen and (max-width: 400px) {
  .recent-Articles {
    font-size: 17px;
  }
  .view {
    width: 60px;
    font-size: 10px;
    height: 27px;
  }
  .report-header {
    height: 60px;
    padding: 10px 10px 5px 10px;
  }
  .searchbtn img {
    height: 20px;
  }
}
 
@media screen and (max-width: 320px) {
  .recent-Articles {
    font-size: 12px;
  }
  .view {
    width: 50px;
    font-size: 8px;
    height: 27px;
  }
  .report-header {
    height: 60px;
    padding: 10px 5px 5px 5px;
  }
  .t-op {
    font-size: 12px;
  }
  .t-op-nextlvl {
    font-size: 10px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 300px;
  }
  .report-body {
    padding: 10px;
  }
  .label-tag {
    width: 70px;
  }
  .searchbtn {
    width: 40px;
  }
  .searchbar2 input {
    width: 180px;
  }
}

     </style>
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="container-fluid">
        <div class="row">
        <div class="col-2 row sideNave p-0 m-0">
            <div class="image mt-3">
                <img src="{{asset('images/2-removebg-preview 3.png')}}" alt="logo" class="logoImage">
            </div>
            <div class="links p-0">
                <div class="link p-0 mb-3">
                <a href="{{route('dashboard.index')}}" class="nav-link"> <span class="material-symbols-outlined" style="font-size:35px;">dashboard</span><span class="WordSide">لوحة التحكم</span></a>
                </div>
                <div class="link p-0 mb-3">
                <a href="{{route('client.index')}}" class="nav-link"><span class="material-symbols-outlined" style="font-size:35px;">design_services</span><span class="WordSide">العملاء</span></a>
                </div>
            </div>
            <div>
            </div>
            <div>
                
            </div>
        </div>
        <div class="col-10 p-0 m-0">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
               
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="col-12"dir="ltr" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{asset('images/statics/user.jpg')}}" alt="user" class="userImage">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
        </div>
        </div>
        </div>
    </div>


    
</body>
</html>
