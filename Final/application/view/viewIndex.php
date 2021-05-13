<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags ------------------------------------------------------------------------------>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-4.4.1.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/custom.css"> 
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'></link>
    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='js/x3dom.js'></script>
    <!--Gallery Scripts -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="js/gallery_generator.js"></script>
    <!-- Collecting the JSON data-->
    <script src="js/getJsonData.js"></script>
    <!--Re-style Scripts -->
    <script src="js/swap_restyle.js"></script>
    <!--Custom Scripts -->
    <script src="js/custom.js" crossorigin="anonymous"></script>
    <!-- Script to set up cameras and spin -->
    <script src="js/modelInteractions.js"></script>
    <!-- Fancy Box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>        

    <!-- Start of the site  ------------------------------------------------------------------------------>
    <title>Coca Cola 3D Application Lab 1</title>

  </head>
  <body id="bodyColor">

      <!-- Navigation bar ------------------------------------------------------------------------------>
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="logo">
            <a class="navbar-brand" href="#">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
                <h3>Collections</h3>
                <p>Collecting our brands through taste and greatness</p>
            </a>
        </div>
            

        <!-- Nav menu icon -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>      
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-original-title="About 3D Web Applications" title data-content="3D Apps is one of my final year postgraduate modules">About</a>
                </li>

                <li class="nav-item">
                    <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke Energy, Fuze Tea and Costa Coffee">Models</a>
                </li>

                <li class="nav-item">
                    <a id="navReferences" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="References" data-content="Includes a list of references which have been used during this assignment">References</a>
                </li>

                <li class="nav-item">
                    <a id="navDownload" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Download" data-content="Where my 3D models can be downloaded!">Download</a>
                </li>

            </ul>
        </div>
     </nav>

      <!-- Body of site -->
      <div id="home" class="container-fluid main_contents">
        <div class="row">
            <div class="col-sm-12">
                <!-- Embedded Gif Animation -->
                <div class="tenor-gif-embed" data-postid="5556134" data-share-method="host" data-width="100%" data-aspect-ratio="1.7785714285714287">
                    <a href="https://tenor.com/view/coca-cola-party-soccer-futbol-coca-cola-gifs-gif-5556134">Coke Bottles GIF GIF</a> from 
                    <a href="https://tenor.com/search/cocacola-gifs">Cocacola GIFs</a>
                </div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script>

            </div>
        </div>


        <!-- Cards ----------------------------------------------------------->
        <div class="card-columns">

            <!-- Fuze Card -->
            <div class="card text-white bg-dark">
            <a href="./assets/images/gallery_images/FuzeTea3.png" data-fancybox data-caption="My 3D Fuze Tea Render" class="thumbnail">
                <img class="card-img-top" src="./assets/images/site_images/brands-fuzetea-mango-desktop-(1600x700)_2.jpg" alt="Card image cap">
            </a>
              <div class="card-body">
                <div id="title_fuzeCard" class="card-title homeText"></div>
                <div id="description_fuzeCard" class="card-test homeText"></div>
                <a href="https://www.coca-cola.co.uk/brands/fuze-tea" class="btn btn-primary">Find out more...</a>
              </div>
            </div>

            <!-- Eleanor Card -->
            <div class="card text-white bg-secondary p-3">
              <blockquote class="blockquote mb-0 card-body">
                <div id="description_eleanorCard" class="card-test homeText"></div>
                <footer class="blockquote-footer text-white">
                    <small>
                        <cite title="Source Title">Eleanor Roosevelt</cite>
                    </small>
                </footer>
              </blockquote>
            </div>
            
            <!-- Coke Energy Card -->
            <div class="card text-white bg-dark">
                <a href="assets/images/gallery_images/CokeEnergy.png" data-fancybox data-caption="My 3D Coca Cola Energy Render" class="thumbnail">
                    <img class="card-img-top" src="assets/images/site_images/brands-coca-cola-energy-desktop-(1600x700)_2.jpg" alt="Card image cap">
                </a>
                <div class="card-body">
                    <div id="title_cokeCard" class="card-title homeText"></div>
                    <div id="description_cokeCard" class="card-test homeText"></div>
                    <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
                </div>
            </div>

            <!-- Aldous Card -->
            <div class="card bg-primary text-white text-center bg-secondary p-3">
              <blockquote class="blockquote mb-0">
                <div id="description_aldousCard" class="card-test homeText"></div>
                <footer class="blockquote-footer text-white">
                  <small>
                    <cite title="Source Title">Aldous Huxley</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <!-- Costa Coffee Card -->
            <div class="card text-center text-white bg-dark">
                <a href="assets/images/gallery_images/CostaMug.png" data-fancybox data-caption="My 3D Costa Coffee Mug Render" class="thumbnail">
                    <img class="card-img-top" src="assets/images/site_images/brands-costa-coffee-desktop-(1600x700)_2.jpg" alt="Card image cap">
                </a>
                <div class="card-body">
                    <div id="title_costaCard" class="card-title homeText"></div>
                    <div id="description_costaCard" class="card-test homeText"></div>
                    <p class="card-text"><small class="text-muted">Last updated 39 mins ago</small></p>
                </div>
            </div>

            <!-- Cola Coffee Card -->
            <div class="card text-white bg-dark">
                <a href="assets/images/site_images/Coca-cola-coffee.jpg" data-fancybox data-caption="Coca Cola Coffee" class="thumbnail">
                    <img class="card-img" src="assets/images/site_images/Coca-cola-coffee.jpg" alt="Card image">
                </a>    
            </div>

            <!-- Coca Cola Card -->
            <div class="card text-center text-white bg-dark">
                <a href="assets/images/gallery_images/Coke_i1_075.png" data-fancybox data-caption="My 3D Coca Cola Can Render" class="thumbnail">
                    <img class="card-img-top" src="assets/images/site_images/coca-cola-original-brand-page-desktop-1600x700.jpg" alt="Card image cap">
                </a>
                <div class="card-body">
                    <div id="title_cocaColaCard" class="card-title homeText"></div>
                    <div id="description_cocaColaCard" class="card-test homeText"></div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more...</a>
                </div>
            </div>

            <!-- Dr Pepper Card -->
            <div class="card bg-light">
              <div class="card-body">
                <div id="title_pepperCard" class="card-title homeText"></div>
                <div id="description_pepperCard" class="card-test homeText"></div>
                <p class="card-text"><small class="text-muted">Last updated 12 mins ago</small></p>
              </div>
            </div>
            
            <!-- Sprite Card -->
            <div class="card text-white bg-dark">
                <img class="card-img-top" src="assets/images/site_images/sprite-brand-page-desktop-1600x700.jpg" alt="Card image cap">
                <div class="card-body">
                    <div id="title_spriteCard" class="card-title homeText"></div>
                    <div id="description_spriteCard" class="card-test homeText"></div>
                  <a href="https://www.coca-cola.co.uk/brands/sprite" class="btn btn-primary">Find out more...</a>
                </div>
              </div>

          </div>

      </div>
    <!-- End homepage -->

    <!-- About page block element ------------------------------------------------------------------------------>
    <div id="about">

        <div id="aboutDescription" class="row" >
            <div class="col-sm-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <div id="title_about" class="card-title aboutText"></div>
                        <div id="description_about" class="card-description aboutText"></div>
                    </div>
                </div>
            </div>
        </div> 

        <div id="row">
            <div class="col-sm-12">
                <div class="card text-white bg-dark text-center">
                    <div class="card-body">
                        <div id="subTitle_about" class="card-subTitle aboutText"></div>
                        <a href="https://github.com/as2435Uni"><i class="fab fa-github-square fa-2x" style="font-size: 50px; color: white;"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
        
    <!-- End homepage -->
    
    <!-- Models page block element ------------------------------------------------------------------------------>
    <div id="models">
        <!-- Holding 3D model and gallery (2 cards)-->
        <div class="row">
            <!-- 3D model -->
            <div class="col-sm-8">
                <div class="card text-left">

                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                            <a id="navCoke" class="nav-link active" href="#">Coca Cola Energy</a>
                            </li>
                            <li class="nav-item">
                            <a id="navSprite" class="nav-link" href="#">Fuze Tea</a>
                            </li>
                            <li class="nav-item">
                            <a id="navPepper" class="nav-link" href="#">Costa Coffee</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        
                    <!-- Coke X3D model -------------------------------->
                    <div id="coke">
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/X3Dmodels/CokeEnergy/CokeEnergy.x3d" > </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                    </div>

                    <!-- Sprite X3D model -------------------------------->
                    <div id="sprite" style="display:none;">
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d id="model">
                                <scene>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/X3Dmodels/FuzeTea/FuzeTea4.x3d"> </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                    </div>

                    <!-- Pepper X3D model -------------------------------->
                    <div id="pepper" style="display:none;">
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/X3Dmodels/CostaCup/CostaCup1.x3d"> </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 3D Model Interaction Buttons  ------------------------------->
            <div class="col-sm-4">
                    <!-- Column for the camera view controls -->
                <div class="col-sm-10">
                    <div class="card text-left text-white bg-dark">
                        <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <!-- Dropdown nav-tab -->
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                    <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                    <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                    <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                    <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                    <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                                </div>
                            </li>
                             <!-- Dropdown nav-tab -->
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Animations</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" onclick="spin();">RotX</a>
                                    <a class="dropdown-item" href="#" >RotZ</a>
                                    <a class="dropdown-item" href="#">RotY</a>
                                    <a class="dropdown-item" href="#" onclick="stopRotation();">Stop</a>
                                </div>
                            </li>
                        </ul>
                    </div>


                        <!-- Card for the Camera Views -->
                        <div class="card-body">
                        <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                        </div>                            
                        <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                        <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Card for the render type and lighting controls -->
                <div class="col-sm-10">
                    <div class="card text-left text-white bg-dark">
                        <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                            </div>
                            </li>
                            <!-- Dropdown nav-tab -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Default</a>
                                    <a class="dropdown-item" href="#">Onmi On/Off</a>
                                    <a class="dropdown-item" href="#">Target On/Off</a>
                                    <a class="dropdown-item" href="#">Headlight On/Off</a>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <div class="card-body">
                        <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                        </div>
                        <a href="#" class="btn btn-success btn-responsive">Poly</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                        <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                        <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                        <div class="card-text x3dRenderDescription drinksText">
                            <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                        </div>
                        </div>
                    </div>
                </div>




            </div> 
        </div> 
      </div> 
  
      <!-- Image Gallery --------------------------------------------------------->
      <div id="interaction" class="row" >
        <div class="col-sm-12">


            <div class="card text-left text-white bg-secondary">
                <div class="card-header gallery-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Gallery</a>
                    </li>
                </div>
                <div class="card-body">
                    <div class="card-title title_gallery drinksText"></div>
                    <div class="gallery" id="gallery"></div>
                    <div class="card-text description_gallery drinksText"></div>
                </div>
            </div> 
        </div>


      </div> 

      <!-- Infomation Section  ------------------------------------------------------->
      <!-- Coca Cola -->
      <div id="cokeDescription" class="row" >
          <div class="col-sm-12">
              <div class="card text-white bg-dark">
                  <div class="card-body">
                      <div id="title_coke" class="card-title drinksText"></div>
                      <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                      <div id="description_coke" class="card-text drinksText"></div>   
                      <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                  </div>
              </div>
          </div>
      </div> 

      <!-- Sprite -->
      <div id="spriteDescription" class="row" >
          <div class="col-sm-12">
              <div class="card text-white bg-dark">
                  <div class="card-body">
                      <div id="title_sprite" class="card-title drinksText"></div>
                      <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                      <div id="description_sprite" class="card-text drinksText"></div>  
                      <a href="https://www.coca-cola.co.uk/brands/fuze-tea" class="btn btn-primary btn-responsive">Visit Fuze Tea</a>                 
                  </div>
              </div>
          </div>
      </div> 

      <!-- Dr Pepper -->
      <div id="pepperDescription" class="row" >
          <div class="col-sm-12">
              <div class="card text-white bg-dark">
                  <div class="card-body">
                      <div id="title_pepper" class="card-title drinksText"></div>
                      <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                      <div id="description_pepper" class="card-text drinksText"></div>  
                      <a href="https://www.costa.co.uk/" class="btn btn-primary btn-responisve">Visit Costa.</a>                 
                  </div>
              </div>
          </div>
      </div>  

  </div>  


    <!-- End models page -->


    <!-- References page block element ------------------------------------------------------------------------------>
    <div id="references">
        <div id="referencesDescription" class="row" >
            <div class="col-sm-12">
                <div class="card text-white bg-dark text-center">
                    <div class="card-body">
                        <div id="title_references" class="card-title referencesText"></div>
                        <div id="subTitle_references" class="card-subtitle referencesText"></div>
                    </div>
                </div>
            </div>
        </div>   

        <!-- Card to hold all the reference links -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-light">
                    <div class="card-body">
                        <a href="https://blog.hubspot.com/sales/famous-quotes">Hubspot</a>
                        <a href=" https://www.coca-cola.co.uk/brands">Coca Cola Brands</a>
                        <a href="https://jsonlint.com">JsonLint</a>
                        <a href="https://getbootstrap.com/docs/4.3/components/card/">Bootstrap Components</a>
                        <a href="https://fancyapps.com/fancybox/3/https://fancyapps.com/fancybox/3/">Fancy Box</a>
                        <a href="https://getbootstrap.com/docs/4.0/components/carousel/">Bootstrap Casousel</a>
                        <a href="https://www.3dfordesigners.com/cinema-4d-lite-keyboard-shortcuts">Cinema 4D shortcuts</a>
                        <a href="https://www.youtube.com/watch?v=UDG_Je8Aga0&t=0s ">link text</a>
                        <a href="https://www.youtube.com/watch?v=UDG_Je8Aga0&t=0s">link text</a>
                        <a href="https://www.youtube.com/watch?v=YjwtQRsFe1g">link text</a>
                        <a href="https://www.youtube.com/watch?v=CcdbCDeetos">link text</a>
                        <a href="https://www.web3d.org/x3d-export-and-import">X3D exports</a>
                        <a href="https://www.youtube.com/watch?v=qmp7RTALjUg">link text</a>
                        <a href="https://www.x3dom.org/documentation/tutorials/blender-export/#:~:text=Converting%20Blender%20scenes%20into%20x3dom,but%20in%20general%20it%20works">X3DOM tutorial</a>
                        <a href="https://www.x3dom.org/documentation/tutorials/maya-export/">Maya Exports</a>
                        <a href="https://en.wikipedia.org/wiki/Costa_Coffee">Costa Coffee Descriptions</a>
                        <a href="https://en.wikipedia.org/wiki/Fuze_Beverage#:~:text=Fuze%20Beverage%20was%20founded%20by,and%20became%20a%20major%20shareholder.">Fuze Coffee Descriptions</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/images/gallery_images/FuzeTea3.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./assets/images/gallery_images/CokeEnergy.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./assets/images/gallery_images/CostaMug.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


    </div>
    <!-- End homepage -->

    <!-- About page block element ------------------------------------------------------------------------------>
    <div id="download">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-white bg-dark text-center">
                    <div class="card-body">
                        <div id="title_download" class="card-title downloadText"></div>
                        <div id="description_download" class="card-description downloadText"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row to hold the download cards -->
        <div class="row">
            <!-- Coke Energy Model -->
            <div class="col-sm-6 text-center">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Download my Coca Cola Energy Can here:</h5>
                    <a href="./assets/X3Dmodels/CokeEnergy.zip" download="CokeEnergy">
                        <img src="./assets/images/site_images/download-button.png" alt="downloadCokeEnergy" width="15%">
                    </a>
                </div>
              </div>
            </div>

            <!-- Fuze Tea Model -->
            <div class="col-sm-6 text-center">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Download my Fuze Tea Bottle here:</h5>
                    <a href="./assets/X3Dmodels/FuzeTea.zip" download="FuzeTea">
                        <img src="./assets/images/site_images/download-button.png" alt="downloadFuzeTea" width="15%">
                    </a>
                </div>
              </div>
            </div>

            <!-- Costa Coffee Mug Model -->
            <div class="col-sm-6 text-center">
                <div class="card">
                  <div class="card-body">
                    <h5>Download my Costa Coffee Mug here:</h5>
                    <a href="./assets/X3Dmodels/CostaMug.zip" download="CostaCoffeeMug">
                        <img src="./assets/images/site_images/download-button.png" alt="downloadCostaMug" width="15%">
                    </a>
                  </div>
                </div>
            </div>

              <!-- Costa Coffee Cup Model -->
            <div class="col-sm-6 text-center">
                <div class="card">
                  <div class="card-body">
                    <h5>Download my Costa Coffee Cup here:</h5>
                    <a href="./assets/X3Dmodels/CostaCup.zip" download="CostaCoffeeCup">
                        <img src="./assets/images/site_images/download-button.png" alt="downloadCostaCup" width="15%">
                    </a>
                  </div>
                </div>
            </div>


        </div>


    </div>
    <!-- End Download Page -->

    <!-- Footer ------------------------------------------------------------------------------->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">
            <div class="navbar-text float-left copywrite">
                <p><span class="align-baseline">&copy 2021 Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size:20px;color:white;"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x" style="font-size: 20px; color: white;"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x" style="font-size: 20px; color: white;"></i></a>
                <a href="https://github.com/as2435Uni"><i class="fab fa-github-square fa-2x" style="font-size: 20px; color: white;"></i></a>
            </div>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper.min.js"></script>

    <!--<script src="js/bootstrap.js"></script>-->
    <script src="js/bootstrap-4.4.1.js"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <!-- <script src="scripts/js/swap_restyle.js"></script> -->

    <!-- Also, intialises popovers-->
    <script src="js/custom.js"></script>



</body>
</html>