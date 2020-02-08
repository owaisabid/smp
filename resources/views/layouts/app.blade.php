<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'SMP') }}</title> -->
    
   
    <!-- all newww -->
   

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('java/custom.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
        <link rel="stylesheet" type="text/css " href="{{asset('css/w3.css')}}">
        <link rel="stylesheet" type="text/css " href="{{asset('css/style.css')}}">
          
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Custom Theme Style -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
@if(!Auth::guest())
<div  class="body_bg">
<div class="d-flex flex-row-reverse  nav_div ">

<div class="p-2">
   <li class="nav-item dropdown ">
         <a id="navbarDropdown" class="dropdown-toggle default"  role="button" data-toggle="dropdown" >
         
         {{ Auth::user()->name }} <span class="caret"></span> 
        
        </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
</div>
@endif
@if(!Auth::guest())
<div  class="w3-sidebar w3-bar-block  w3-card nav_col " id="sidebar"  >

  <div class="toggle-btn default" onclick="toggleSidebar()" >
    <span></span>
    <span></span>
    <span></span>
  </div>

  
<div id="p2" class="dis_none fonts">
  <a href="home" class="maar2 "> <img class="logo1"src="slider/logo.png" alt="logo"></a>
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  >
      <a href="home"><i class="fas fa-chart-line  fa-lg fa-color" ><h6 class="logo_mar sp font-size">Dashboard</h6></i></a>
    </button>
 
  </div>
  @if(Auth::check())
    @if(Auth::user()->is_admin==1)
        <div class="dropdown dropright">
          <button class=" maar  btn_width "  data-toggle="dropdown">
            <i class="fa fa-home  fa-lg fa-color1" ></i><h6 class="logo_mar font-size">Branch</h6>
          </button>
      
          <ul class="dropdown-menu ">
            <li><a href="addbranch"><i class="fa fa-plus-square fa-sm margin_rgt " > <span class="font-color">Add Branch</span></i></a></li>
            <li><a href="viewbranch"><i class="fa fa-eye margin_rgt fonts fa-sm">  <span class="font-color"> View Branch</span></i></a></li>
            
          </ul>
        </div>
    @endif  
  @endif     

  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fa fa-tasks fa-lg fa-color2" ></i><h6 class="logo_mar font-size">Batch</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addBatch"><i class="fa fa-plus-square fa-sm " > <span class="font-color"> Add Batch</span></i></a></li>
      <li><a href="viewbatch"><i class="fa fa-eye fa-sm "> <span class="font-color"> View Batch<span></i></a></li>
      
    </ul>
  </div>
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fas fa-stroopwafel  fa-lg fa-color3" ></i><h6 class="logo_mar font-size">Feed</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addfeed"><i class="fa fa-plus-square fa-sm margin_rgt" > <span class="font-color"> Add Feed</span></i></a></li>
      <li><a href="viewfeed"><i class="fa fa-eye fa-sm margin_rgt"> <span class="font-color"> View Feed</span></i></a></li>
      
    </ul>
  </div>
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fa fa-th fa-lg fa-color2" ></i><h6 class="logo_mar font-size">Stock</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addStock"><i class="fa fa-plus-square fa-sm" > <span class="font-color"> Add Stock</span></i></a></li>
      <li><a href="viewstock"><i class="fa fa-eye fa-sm"> <span class="font-color"> View Stock</span></i></a></li>
      
    </ul>
  </div>  
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fa fa-users  fa-lg fa-color4" ></i><h6 class="logo_mar font-size">Employee</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addEmployee"><i class="fa fa-plus-square fa-sm margin_rgt" >  <span class="font-color">Add Employee</span></i></a></li>
      <li><a href="viewemployee"><i class="fa fa-eye fa-sm margin_rgt">  <span class="font-color">View Employee</span></i></a></li>
      
    </ul>
  </div>
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fa fa-medkit  fa-lg fa-color5" ></i><h6 class="logo_mar font-size">Vaccination</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addVaccination"><i class="fa fa-plus-square fa-sm margin_rgt" > <span class="font-color"> Add Vaccination</span></i></a></li>
      <li><a href="viewvaccination"><i class="fa fa-eye fa-sm margin_rgt "> <span class="font-color"> View Vaccination</span></i></a></li>
    
    </ul>
  </div>  
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fa fa-credit-card  fa-lg fa-color6" ></i><h6 class="logo_mar font-size ">Expenditure</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addExpenditure"><i class="fa fa-plus-square fa-sm margin_rgt" > <span class="font-color"> Add Expenditure</span></i></a></li>
      <li><a href="viewexpenditure"><i class="fa fa-eye fa-sm margin_rgt"> <span class="font-color"> View Expenditure</span></i></a></li>
    
    </ul>
  </div> 
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fa fa-truck  fa-lg fa-color7" ></i><h6 class="logo_mar font-size">Sale</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addSale"><i class="fa fa-plus-square fa-sm margin_rgt" > <span class="font-color"> Add Sale</span></i></a></li>
      <li><a href="viewsale"><i class="fa fa-eye fa-sm margin_rgt"> <span class="font-color"> View Sale</span></i></a></li>
    
    </ul>
  </div>  
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fas  fa-cart-plus  fa-lg fa-color8" ></i><h6 class="logo_mar font-size">Purchase</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addPurchase"><i class="fa fa-plus-square fa-sm margin_rgt" > <span class="font-color"> Add Purchase</span> </i></a></li>
      <li><a href="viewpurchase"><i class="fa fa-eye fa-sm margin_rgt">  <span class="font-color">View Purchase</span></i></a></li>
      
    </ul>
  </div>  
  <div class="dropdown dropright">
    <button class=" maar  btn_width "  data-toggle="dropdown">
      <i class="fa fa-heartbeat  fa-lg fa-color9" ></i><h6 class="logo_mar font-size">Mortality</h6> </button>
  
    <ul class="dropdown-menu ">
      <li><a href="addMortality"><i class="fa fa-plus-square fa-sm margin_rgt" > <span class="font-color"> Add Mortality</span></i></a></li>
      <li><a href="viewmortality"><i class="fa fa-eye fa-sm margin_rgt"> <span class="font-color"> View Mortality</span></i></a></li>
    
    </ul>
  </div>  

</div>
<!-- sidebar menu -->
<div id="p1" class="fonts">
<div class="sidebar_logo"><a href="home" ><img class="logo "src="slider/logo.png" alt="logo">Smart Poultry Manager</a></div>
<div  class="dropdown    default ">
  <div class="siderbar_btn "  >
    <a href="home"><i  class="fas fa-chart-line fa fa-ml ml-4 button_box fa-color" ><span class="font-color"> Dashboard</span></i></a>
    
  </div>
 
</div>
@if(Auth::check())
    @if(Auth::user()->is_admin==1)
        <div  class="dropdown   dropright  default ">
          <div class="siderbar_btn "  data-toggle="dropdown">
            <i  class="fa fa-home  fa-ml ml-4 button_box fa-color1" > <span class="font-color">Branch<span></i>
            <span class=""><i   class="new fa fa-angle-down ml-5 " ></i></span>
          </div>
        
          <ul class=" dropdown-menu dropdown-menu-sidebar show_ul ">
            <li><a href="addbranch"><i class="fa fa-plus-square fa-sm margin_rgt" > <span class="font-color"> Add Branch</span></i></a></li>
            <li><a href="viewbranch"><i class="fa fa-eye  fonts fa-sm margin_rgt"> <span class="font-color">  View Branch</span></i></a></li>
            
          </ul>
        </div>
    @endif  
  @endif     

<div class="dropdown dropright default ">
  <div class="  siderbar_btn  "  data-toggle="dropdown">
    <i class="fa fa-tasks fa-ml ml-4 button_box fa-color2" ><span class="font-color"> Batch </span></i>
    <span><i   class=" fa fa-angle-down ml-5 " ></i></span> 
  </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar ">
    <li><a href="addBatch"><i class="fa fa-plus-square fa-sm" > <span class="font-color"> Add Batch</span></i></a></li>
    <li><a href="viewbatch"><i class="fa fa-eye fa-sm"> <span class="font-color"> View Batch</span></i></a></li>
    
  </ul>
</div>

<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-stroopwafel fa-ml ml-4 button_box fa-color3" > <span class="font-color">Feed</span></i> 
    <span><i   class=" fa fa-angle-down ml-5 " ></i></span> 
    </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addfeed"><i class="fa fa-plus-square fa-sm" > <span class="font-color">  Add Feed</span></i></a></li>
    <li><a href="viewfeed"><i class="fa fa-eye fa-sm">  <span class="font-color">View Feed</span></i></a></li>
    
  </ul>
</div>
<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-th fa-ml ml-4 button_box fa-color2" > <span class="font-color">Stock</span></i> 
    <span><i   class=" fa fa-angle-down ml-5 " ></i></span> 
    </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addStock"><i class="fa fa-plus-square fa-sm" > <span class="font-color">  Add Stock</span></i></a></li>
    <li><a href="viewstock"><i class="fa fa-eye fa-sm">  <span class="font-color">View Stock</span></i></a></li>
    
  </ul>
</div>
<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-users fa-ml ml-4 button_box fa-color4" ><span class="font-color"> Employee</span></i>
    <span><i   class=" fa fa-angle-down ml-5 " ></i> </span>
  </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addEmployee"><i class="fa fa-plus-square fa-sm" > <span class="font-color"> Add Employee</span></i></a></li>
    <li><a href="viewemployee"><i class="fa fa-eye fa-sm"> <span class="font-color"> View Employee</span></i></a></li>
    
  </ul>
</div>
<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-medkit fa-ml ml-4 button_box fa-color5" > <span class="font-color">Vaccination</span></i> 
    <span><i class=" fa fa-angle-down ml-5 " >
      </i></span> </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addVaccination"><i class="fa fa-plus-square fa-sm" > <span class="font-color"> Add Vaccination</span></i></a></li>
    <li><a href="viewvaccination"><i class="fa fa-eye fa-sm"> <span class="font-color"> View Vaccination</span></i></a></li>
    
  </ul>
</div>
<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-credit-card fa-ml ml-4 button_box fa-color6" > <span class="font-color">Expenditure</span></i> 
    <span><i   class=" fa fa-angle-down ml-5 " ></i></span> 
    </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addExpenditure"><i class="fa fa-plus-square fa-sm" > <span class="font-color">  Add Expenditue</span></i></a></li>
    <li><a href="viewexpenditure"><i class="fa fa-eye fa-sm">  <span class="font-color">View Expenditue</span></i></a></li>
    
  </ul>
</div>
<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-truck fa-ml ml-4 button_box  fa-color7" ><span class="font-color"> Sale</span></i>
    <span> <i   class=" fa fa-angle-down ml-5 " ></i></span> 
    </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addSale"><i class="fa fa-plus-square fa-sm" > <span class="font-color"> Add Sale</span></i></a></li>
    <li><a href="viewsale"><i class="fa fa-eye fa-sm"> <span class="font-color"> View Sale</span></i></a></li>
    
  </ul>
</div>
<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-cart-plus fa-ml ml-4 button_box fa-color8" ><span class="font-color"> Purchase</span></i> 
    <span><i   class=" fa fa-angle-down ml-5 " ></i></span> </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addPurchase"><i class="fa fa-plus-square fa-sm" > <span class="font-color"> Add Purchase</span></i></a></li>
    <li><a href="viewpurchase"><i class="fa fa-eye fa-sm"> <span class="font-color"> View Purchase</span></i></a></li>
    
  </ul>
</div>
<div class="dropdown dropright default">
  <div class="  siderbar_btn "  data-toggle="dropdown">
    <i class="fa fa-heartbeat fa-ml ml-4 button_box fa-color9" > <span class="font-color">Mortality</span></i> 
    <span><i   class=" fa fa-angle-down ml-5 " ></i></span> </div>
 
  <ul class="dropdown-menu dropdown-menu-sidebar">
    <li><a href="addMortality"><i class="fa fa-plus-square fa-sm" >  <span class="font-color">Add Mortality</span></i></a></li>
    <li><a href="viewmortality"><i class="fa fa-eye fa-sm"> <span class="font-color"> View Mortality</span></i></a></li>
    
  </ul>
</div>


</div>
</div>
</div>

<body id="app">
  <div id="page_left" >
  @endif
    @yield('content')
        
    
   </div>
</body>

</html>
