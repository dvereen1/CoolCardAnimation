<?php include_once('headNoNav.php');?> 
        <title>Cool Card Animation</title>
        <link href = "cardAnimation.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href = "/CSS/allProjectsModal.css">
    </head>
    <body>
        <?php include_once("Classes/projectInfoModal.php");
            createProjectModal("Cool Card Animation", $projectModalArr);
        ?>
        <header>
            <nav>
                <a class = "logo" href  ="/#portfolio-">DJV</a>
                <div class="menu-btn">
                    <i class = "fas fa-bars"></i>
                </div>
                <div class="menu-cls-btn menu-hide">
                    <i class = "fas fa-times"></i>
                </div>
                <ul class = "menu menu-hide">
                    <li class="menu-item">
                        <a class = "code-btn" href = "https://github.com/dvereen1/CoolCardAnimation">View Code</a>
                    </li>
                    <li class="menu-item">
                        <a href = "/#portfolio-">Portfolio</a>
                    </li>
                </ul>
            </nav>
        </header>           
       <main class = "card-container">
            <div class ="title">
                <h1>
                    Cool Card Animation
                </h1>
                <h2>
                    Courtesy of CSS
                </h2>
            </div>
            <div class = cards>
                <div class = "card">
                    <div class = "layer1">
                        <div class="card-img">
                            <img src = "imgs/pexels-micah-boerma-1008739.jpg" alt ="Road into the Woods">
                        </div>
                        <div class ="card-text">
                            <p><b>Photo by:&nbsp&nbsp </b>Micah Boerma</p>
                            <p><i class="far fa-eye"></i>&nbsp 1.46M views</p>
                        </div>
                    </div>
                    <div class = "layer2">
                        <div class = "layer2-stats">
                            <p>11.1m<br> total views</p>
                            <div>
                                <p>37<br> followers</p>
                                <p>19<br> pictures</p>
                            </div>
                        </div>
                        <div class = "pexelBtn">
                            <a href = "https://www.pexels.com/@micah-boerma-327482">Pexel Profile</a>
                        </div>
                        <div class ="layer2-socials">
                            <div class="social">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Canberra ACT, Australia</p>
                                <div class = "social-popup">
                                    <i class="fas fa-map-marker-alt">&nbsp Canberra ACT, Australia</i>
                                </div>
                            </div>
                            <!--<div class ="social-row">-->
                                <div class = "social">
                                    <a href = "https://www.instagram.com/micah___b/">
                                        <i class="fab fa-instagram"></i>
                                        <p>micah___b</p>
                                        <div class = "social-popup">
                                            <i class="fab fa-instagram">&nbsp micah___b</i>
                                        </div>
                                    </a> 
                                </div>
                                <div class ="social">
                                    <a href = "https://www.micahboerma.com">
                                        <i class="fas fa-link"></i>
                                        <p>micahboerma.com</p>
                                        <div class = "social-popup">
                                            <i class="fas fa-link">&nbsp micahboerma.com</i>
                                        </div>
                                    </a>
                                </div>
                            <!--</div>-->
                        </div>
                    </div>
                    <div class = "layer2-bg">
                    </div>  
                </div>
                <div class = "card">
                    <div class = "layer1">
                        <div class="card-img">
                            <img src = "imgs/pexels-yaroslav-shuraev-1834399.jpg" alt ="Woodlands from bird's eye view">
                        </div>
                        <div class ="card-text">
                            <p>
                                <b>Photo by:&nbsp&nbsp </b>
                                Yaroslav Shuraev
                            </p>
                            <p>
                                <i class="far fa-eye"></i>&nbsp 6.19M views
                            </p>
                        </div>
                    </div>
                    <div class = "layer2">
                        <div class = "layer2-stats">
                            <p>108m<br>total views</p>
                            <div>
                                <p>3.65k<br> followers</p>
                                <p>2.07k<br> pictures</p>
                            </div>
                        </div>
                        <div class = "pexelBtn">
                            <a href = "https://www.pexels.com/@yaroslav-shuraev">Pexel Profile</a>
                        </div>
                        <div class ="layer2-socials">
                            <div class="social">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Terberda, Russia</p>
                                <div class="social-popup">
                                    <i class="fas fa-map-marker-alt">&nbsp Terberda, Russia</i>
                                </div>
                            </div>
                        <!-- <div class="social-row"> -->
                                <div class = "social">
                                    <a href = "https://www.instagram.com/yaroslav_shuraev/">
                                        <i class="fab fa-instagram"></i>
                                        <p>yaroslav_shuraev</p>
                                        <div class="social-popup">
                                            <i class = "fab fa-instagram">&nbsp yaroslav_shuraev</i>
                                        
                                        </div>
                                    </a>
                                </div>
                                <div class ="social">
                                    <a href = "https://www.yaroslavshuraev.com">
                                        <i class="fas fa-link"></i>
                                        <p>yaroslavshuraev.com</p>
                                        <div class = "social-popup">
                                            <i class = "fas fa-link">&nbsp yaroslavshuraev.com</i>
                                        
                                        </div>
                                    </a>
                                </div>
                            <!--</div>-->
                        </div>
                    </div>
                    <div class = "layer2-bg">

                    </div>
                </div>
            </div>
       </main>
       <script src ="/JS/allProjectsModal.js"></script>
       <script src = "cardAnimation.js" type = "text/javascript"></script> 
    </body>
</html>