@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Search Mining</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/app.css" rel="stylesheet" />


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
                <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container px-4 px-lg-5">
                        <a class="navbar-brand" href="#page-top"><img src="assets/img/unnamed.png" alt="" srcset="" style="width: 20%"></a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                                <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                                @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="text-md" style="padding : 2rem 1.5rem;color:rgba(255, 255, 255, 0.5);">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-6 text-md" style="padding : 2rem 1.5rem;color:rgba(255, 255, 255, 0.5);">Register</a>
                                @endif
                            @endauth
                            </ul>
                        </div>
                    </div>
                </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h3 class="mx-auto my-0 text-uppercase text-nowrap text-white bg-dark">Search the Mineral Resources Data System</h3>
                <h2 class="text-black-50 mx-auto mt-2 mb-5 text-bolde"> <strong> Economic geology, Geospatial datasets, Map interfaces, Mineral resources, Web map services
                    Mineral deposit areas, Mine sites </strong></h2>
                <a class="btn btn-primary" href="#about">Get Started</a>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="about-section text-center  bg-light text-dark " id="about">
  
    <div class="container  ">
       
        <div class="row">
            
       
          
        <div class="col-lg-4 ">
            <img class="img-fluid" src="assets/img/mine.png" alt="..."  style="width:30%"/></div>
            
        <div class="col-lg-4">
            <img class="img-fluid" src="assets/img/ining.png" alt="..." style="width:30%"/></div>
            
        <div class="col-lg-4">
            <img class="img-fluid" src="assets/img/c.png" alt="..." style="width:30%" /></div>
            
            
        <div class="col-lg-12">
            
            <div class=" text-center h-100 project">
                <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-left ">
                        <h4 class="text-white"></h4>
                        <p class="mb-0 text-black-50">
                           <strong>The Mineral Resources Program supports data collection and research on a wide variety of non-fuel mineral resources that are important to the Nation’s economic and national security.  The Program’s science portfolio encompasses a broad spectrum of mineral resource science allowing for a comprehensive understanding of the complete life cycle of non-fuel mineral resources and materials.</strong> </p>
                        <hr class="d-none d-lg-block mb-0 ms-0" />
                        <p class="mb-0 text-black-50">
                         <strong>  The Mineral Resources Program (MRP) delivers unbiased science and information to increase understanding of mineral resource potential, production, and consumption, and how mineral resources interact with the environment. The Mineral Resources Program is the Federal Government's sole source for this mineral resource science and information.</strong> 
                        <hr class="d-none d-lg-block mb-0 ms-0" />
                    </div>
                    
                    
                </div>
                
                
            </div>
        </div>
        
    </div>
    </div>
</section>
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    
    <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
   
     
        <!-- Project One Row-->
        <div class=" p-3 mb-2 bg-dark text-white row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/ss.jpg" alt="..." style="width: 100%" /></div>
            <div class="col-lg-6">
                <div class="p-3 mb-2 bg-dark text-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white text-uppercase p-3 mb-2 bg-dark text-white">Economic geology, Geospatial datasets</h4>
                            <p class="mb-0  text-uppercase text-xl-left p-3 mb-2 bg-dark text-white">collection of reports describing metallic and nonmetallic mineral resources throughout the world. Included are deposit name, location, commodity, deposit description, geologic characteristics, production, reserves, resources, and references. It subsumes the original MRDS and MAS/MILS. MRDS is large, complex, and somewhat problematic. This service provides a subset of the database comprised of those data fields deemed most useful and which most frequently contain some information.</p>
                            <hr class="d-none d-lg-block mb-0 ms-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/men.jpg" alt="..." style="width: 100%" /></div>
            <div class="col-lg-6 order-lg-first">
                <div class=" bg-dark text-white  text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white text-uppercase"> Map interfaces, Mineral resources, Web map services</h4>
                            <p class="mb-0  text-uppercase">Resource descriptions here include an indication of the overall quantity and diversity of information they contain. Many records in this database are simple reports of commodity at some location, but some records provide substantial detail of the geological setting and industrial exploitation of the resource. To help users find these more thorough records.</p>
                            <hr class="d-none d-lg-block mb-0 me-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signup-->

<section class="signup-section" id="signup">
   

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
           

                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
      
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-dark">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">4923 Market Street, Data System</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">+111111111111</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center ">
            <a class="mx-2 bg-black" href="#!"><i class="fab fa-youtube text-warning"></i></a>
            <a class="mx-2 bg-black" href="#!"><i class="fab fa-linkedin text-warning"></i></a>


            <a class="mx-2 bg-black" href="#!"><i class="fab fa-twitter text-warning"></i></a>
            <a class="mx-2 bg-black" href="#!"><i class="fab fa-facebook-f text-warning"></i></a>
            <a class="mx-2 bg-black" href="#!"><i class="fab fa-github text-warning"></i></a>
          

        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; 2021 AFRICA ENGINEERING PARTNERS - All Rights Reserved. </div></footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            
    </body>
</html>
