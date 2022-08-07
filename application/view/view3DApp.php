<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
   
    <title>Test View</title>
   
 <style>

    <?php include 'css/bootstrap.css';?>
    <?php include 'css/x3dom.css';?>
    <?php include 'css/jquery.fancybox.min.css';?>
     <?php include 'css/all.css';?>
     <?php include  'css/osald.css';?>
    <?php include 'css/custom.css';?>
</style>


</head>


<body id="body" onload="init()">
    <nav id="header" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container-fluid"> 
            <!-- Brand -->
            <div class="logo">
                    <a class="navbar-brand" href="#">
                        <h1>1</h1>
                        <h1>oke</h1>
                        <h2>Cola</h2>
                        <h3>Journey</h3>
                        <p>Refreshing the world, one story at a time</p>
                    </a>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
            </button>
            
               <!-- link Menu Icon button to the links class navbar-collapse selector] -->
               <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="Click me, you can know more ...">About</a>
                  </li>
                
                    <!-- Dropdown -->
                  <li class="nav-item">
                    <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                </li>
              </ul>
          </div>
    </nav>

    <!-- This is the main contents of the SPA -->
    <div class="container-fluid">
        <!-- This is the home page contents -->
        <div class="main_contents" id="home">
            <div class="row">
                <div class="col-sm-12">
                    <div id="main_3d_image">
                    <div id="main_text" class="col-xs-12 col-sm-4">
              <h2>Coca Cola Great Britain</h2>
              <h3>Founded by Dr John S Pemberton</h3>
             <p>The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.</p>
            </div> 
                    </div>
                </div>
            </div>
            
            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <a href="/assets/images/renderImage/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/coca_cola.jpg" alt="Coca Cola">
                        </a>
                        <div class="card-body" style="background-color: darkred" >
                        <h3>Coca Cola</h3>
              <p> It was 1886,in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs' Pharmacy put it on sale for five cents (about 3p) a glass.</p>
              <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>          
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-4">
                    <div class="card">
                        <a href="/assets/images/renderImage/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/sprite.jpg" alt="Sprite">
                        </a>
                        <div class="card-body" style="background-color: #1c7430">
                        <h3 class="card-title">Sprite</h3>
              <p class="card-text"></p>First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries.
              Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p>
              <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <a href="/assets/images/renderImage/drpepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/dr_pepper.jpg" alt="Dr Pepper">
                        </a>
                        <div class="card-body" style="background-color: brown">
                        <h3 class="card-title">Dr Pepper</h3>
              <p class="card-text"></p>Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on.
              It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.</p>
              <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                    </div>
                </div>
            </div>
        </div> <!-- End home page contents-->

        <div id="about" style="display:none;">
         <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                    <a href="https://investors.coca-colacompany.com/about">
                        <img class="img-thumbnail" src="assets/images/cokeabout.jpg" alt="About">
                    </a>
                  </div>
            </div>
         </div>
            <div class="row">
             <div class="col-sm-4">
                 <div class="card" id="year">
                     <h1 class="card-title">135+</h1>
                     <p class="card-text">years of refreshing</p>
                 </div>
                 <div class="card" id="country">
                     <h1 class="card-title">200+</h1>
                     <p class="card-text">countries and territories offer our products</p>
                 </div>
                 <div class="card" id="world">
                     <h1 class="card-title">200</h1>
                     <p class="card-text">brands worldwide</p>
                 </div>
                <div class="col-sm-2">
                    <div class="card"></div>
                </div>
             </div>
                <div class="col-sm-8" style="border: 2px">
                    <div class ='card' style="border: 2px">
                        <canvas id="earth" style="border: 2px"></canvas>
                    </div>
                </div>


            </div>
          </div>  
        </div>


                 <!-- This is the content for X3D models and 3D Image Gallery -->
                 <div id="models" class="main_contents" style="display: none">
                  <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
                  <div class="row">
                     <!-- 3D image gallery -->
 <div class="col-sm-4" id="gallery-body">
  <div class="card text-left">
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
  </div> <!-- End gallery card -->
  </div> <!-- End gallery column -->
                    <!-- X3D Model -->
                    <div class="col-sm-8" id="x3dModel">
                      <div class="card text-left" >
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <!-- X3D Models -->
                    <div>
                      <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                      <div id="x3dModelTitle_sprite" class="card-title drinksText" style="display:none;"></div>
                      <div id="x3dModelTitle_pepper" class="card-title drinksText" style="display:none;"></div>

                      <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                      <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                      <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                      
                      <!-- Place the X3D code here -->
                              <div class="model3D">
                                <x3d id="wire">
                                  <scene>
                                      <Switch whichChoice="0" id='SceneSwitch'>
                                          <transform>
                                              <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke3.x3d" > </inline>
                                          </transform>
                                          <transform>
                                              <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/bottle.x3d"> </inline>
                                          </transform>
                                          <transform>
                                              <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/cup.x3d"> </inline>
                                          </transform>
                                      </Switch>
                                  </scene>
                                </x3d>
                              </div> 
                              <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                              <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                              <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                          </div>
                        </div>
                        <!-- Row to hold the interaction panels -->
        <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left" id="camera">
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
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h4>Camera Views</h4>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h4>Animation Options</h4>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spinx();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spiny();">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive"onclick="spinz();">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left" id="render">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>

                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h4>Render and Lighting Options</h4>
                          </div>
                            <!-- Dropdown nav-tab -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                    <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                    <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                    <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                                </div>
                            </li>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>

        <!-- Row to hold one card to hold the coke descriptive text, etc.-->
        <div id="cokeDescription" class="row" style="display:none;" >
            <div class="col-sm-12" style="margin: 15px">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End coke description contents -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
        <div id="spriteDescription" class="row" style="display:none;">
            <div class="col-sm-12" style="margin: 15px">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End sprite description contents -->

        <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
        <div id="pepperDescription" class="row" style="display:none;">
            <div class="col-sm-12" style="margin: 15px">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End pepper description contents -->
    </div> <!-- End 3D App SPA Contents -->
        </div> <!-- End row for the interaction panels -->
                      </div>
                    </div>       
            </div> <!-- End row for X3D Model and Gallery -->
        </div> 




    <nav id="footer" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2019 Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a> | <a id="placeholder">name</a> </span></p>
            </div>
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
            </div>
        </div>
    </nav> 

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <p>sussex Email: hc474@sussex.ac.uk</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
    </div>


 <!-- JavaScript Files-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type='text/javascript' src="js/jquery-3.6.0.js"></script>
    <script type='text/javascript' src="js/popper.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <!-- Note, updated to Bootstrap 4.3.1 <script src="js/bootstrap.js"></script> -->
    <script type='text/javascript' src="js/fontawesome.js"></script>
    <!-- Fontawsome<script src="fonts/js/all.js"></script> -->
    <script type='text/javascript' src="js/all.js"></script>
    <script type="text/javascript" src="js/flickrService.js"></script>
    <script type='text/javascript' src="js/bootstrap.js"></script>
    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script type='text/javascript' src="js/custom.js"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script type='text/javascript' src="js/swap_restyle.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='js/-x3dom.js'></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script type="text/javascript" src="js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
    <script type='text/javascript' src="js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script type='text/javascript' src="js/modelInteractions.js"></script>
 
    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script type='text/javascript' src="js/jquery.fancybox.js"></script>
    <script type="text/javascript"  src="js/three.js"></script>
    <script type="text/javascript" src="js/OrbitControls.js"></script>
    <script type="text/javascript" src="js/earth.js"></script>

  

</body>
</html>