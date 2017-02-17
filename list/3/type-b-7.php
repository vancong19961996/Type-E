<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-b-7.less', 'css/type-b-7.css');
        ?>
        <link href="css/type-b-7.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-b-7">
            <div id="user1" class="container">
                <div class="row">

                    <div class="moduletable col-lg-12 ">

                        <h4 class="moduletitle m_title">LATEST COLLECTIONS</h4>
                        <div class="tbk__symbol ">
                            <span class="tbk__icon fs-28 light-gray2 glyphicon glyphicon-option-horizontal"></span>
                        </div>
                        <div class="modulecontent">

                            <div class="row offer-banners"> 
                                <div class="col-lg-4">
                                    <p><a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/banner-set1-1.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a></p>
                                </div>
                                <div class="col-lg-5">
                                    <p><a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/banner-set1-2.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a></p>
                                </div>
                                <div class="col-lg-3">
                                    <p><a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/banner-set2-32.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a> 
                                        <a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/banner-set2-41.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end modulecontent-->
                    </div><!-- end module -->


                </div>
            </div>
        </div> 





        <script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    </body>

</html>