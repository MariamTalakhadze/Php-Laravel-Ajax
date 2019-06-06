<html>
    <head>
        <meta charset="utf-8">
        <title> Find A Job</title>
        <link rel="icon" href="images/logo.png" type="images/logo png">
        <link rel="stylesheet" href={{"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"}}>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{"css/style.css"}}>
      </head>
    <body>
        <div class="container-fluid no-padding">
            <div class="row">
            <div class="col-12">
                <!-- header -->
                <div class="row">
                    <div class="col">
                        <!-- main header-->
                        <div class="row image-responsive image mt-2 px-0 ">
                            <div class="col">
                                <!-- navigation -->
                                <div class="row d-flex justify-content-around">
                                    <!-- logo -->
                                    <div class=" col-sm-1 col-md-4 mt-5 image-responsive">
                                        <a href="index.html"><img src="images/logo.png" alt="logo"  class="logo image-responsive img-fluid"></a>
                                    </div>
                                    <!-- navbar -->
                                    <div class="col-md-8 col-sm-12 mt-5">
                                        <div class="row">
                                                <nav class="navbar navbar-expand-lg navbar-light">
                                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                            <span class="navbar-toggler-icon"></span>
                                                        </button>
                                                            <div class="collapse navbar-collapse justify-content-xl-end col-11 d-flex justify-content-around" id="navbarTogglerDemo01">
                                                            <ul class="navbar-nav row d-flex justify-content-around mt-2 mt-lg-0 ">
                                                                <li class=" col-md-3 col-sm-12 nav-item h5">
                                                                <a class=" nav-link d-flex " href="{{url('')}}"  ><p class="headertxt">Find A Job</p></a>
                                                                </li>
                                                                <li class=" col-md-3 col-sm-12 nav-item h5 ">
                                                                <a class="nav-link d-flex " href="{{url('post')}}"  ><p class="headertxt">Post A Job</p></a>
                                                                </li>
                                                                <li class="col-md-3 col-sm-12 nav-item h5">
                                                                <a class="nav-link d-flex " href="{{url('about')}}"  ><p class="headertxt">About Us</p></a>
                                                                </li>
                                                                {{-- <li class="col-md-3  col-sm-12 nav-item h5">
                                                                <a class="nav-link d-flex " href="{{url('contact')}}"  ><p class="headertxt"> Contact Us</p></a>
                                                                </li> --}}
                                                            </ul>
                                                            </div>
                                                        
                                                </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- text -->
                                <div class="row d-flex justify-content-center">
                                    <div class="col-8">
                                        <div class="h1 text-center" >
                                                <p class="headertxt">@yield('title')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            @yield('content')
                <!-- footer -->
                <div class="row d-flex justify-content-center mt-4 bg-info ">
                    <div class="col-11 ">
                        <div class="row d-flex justify-content-around">
                            <!-- ceo -->
                            <div class="col-3 mt-4">
                              <div class="row d-flex">
                                  <div class="col">
                                        <div class="row mt-2 d-flex justify-content-center  align-self-start">
                                                <span> <b class="text-white">Find A Job</b></span>
                                        </div>
                                         <div class="row mt-4 d-flex justify-content-around align-self-center">
                                                <div class="col-6">
                                                    <div class="row d-flex justify-content-around">
                                                         <div class="col-3"><a href="https://www.twiter.com"><img src="images/twitter.png" alt="twitter" class="logoes text-white"></a></div>
                                                         <div class="col-3"><a href="https://www.facebook.com"><img src="images/facebook.png" alt="facebook" class="logoes"></a></div>
                                                         <div class="col-3"><a href="https://www.instagram.com"><img src="images/instagram.png" alt="instagram" class="logoes"></a></div>
                                                    </div>
                                                </div>
                                        </div>
                                        <span class="row mt-4 d-flex justify-content-center text-center ml-1 text-white"> &copy<a href="#" style="color: black" class="text-white"> Copyright &nbsp </a> M.T</span>
                                            
                                  </div>
                              </div>
                            </div>
                            <!-- Share your Oppinion-->
                            <div class="col-6">
                                <div class="row d-flex justify-content-around mt-4">
                                    <span><b class="font-weight-bold text-white">Share your Oppinion</b></span>
                                </div>
                                <div class="row d-flex justify-content-around mt-2 text-white">
                                    <span> We Are Glad To Take into Consideration Every Your Piece Of Advice </span>
                                </div>
                                <div class="row mt-2 d-flex justify-content-around">
                                    <form action="#" style="width:80%" class="d-flex justify-content-around align-center">
                                        <div class="col  form-group">                                            
                                            <textarea rows="2" class="sendnews form-control row  mx-auto d-flex justify-content-around align-center mt-2 input-lg text-info" placeholder="Your oppinion Here" aria-label="With textarea"></textarea>
                                            <div class="row d-flex justify-content-around mt-2 ">
                                                   <button type="submit" class="sendnewsbtn btn btn-white mb-2 mr-4 text-info font-weight-bold" > Submit </button>
                                            </div>    
                                         </div>
                                    </form>                                   
                                </div>
                            </div>                        
                            <!-- categories -->
                            <div class="col-3 mt-4 text-white">
                                {{-- <p class="d-flex mt-4 justify-content-around text-white"><b>Category</b></p>
                                <ul class="row d-flex justify-content-around  list-group list-group-flush ">
                                    <li class="mx-auto"><a href="#" class="text-white mx-auto text-center">verse 1</a></li>
                                    <li class="mx-auto"><a href="#" class="text-white mx-auto text-center">verse 1</a></li>
                                    <li class="mx-auto"><a href="#" class="text-white mx-auto text-center">verse 1</a></li>
                                    <li class="mx-auto"><a href="#" class="text-white mx-auto text-center">verse 1</a></li>
                                </ul> --}}
                                <p>საქართველო, თბილისი, 0160, მერაბ ალექსიძის ქ. 10 </p>
                                <p> ტელ.: (+995 32) 220 65 20  </p>
                                <p>ფაქსი: (+995 32) 220 65 19 </p>
                                <p>info@gau.ge </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>