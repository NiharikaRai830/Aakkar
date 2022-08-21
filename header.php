</head>
<style>
    .s-soft{ 
 position: fixed;
 top: 100px ;
 left: 10;
 z-index: 1000; transition:all linear 0.2s ;
}
.s-soft a:first-child{ border-radius: 0 5px 0 0;
}
.s-soft a:last-child{ 
  border-radius: 0 0 5px 0;
}
.s-item { 
  display:block; 
  width: 50px;
  height: 60px;
  color: white;
  font-size: 20px;
  line-height: 60px;
  text-align:center;
  transition:all linear 0.2s ;}
.s-item:hover { 
  width:110px;
  border-radius:0px 20px 20px 0px; 
  color:#fff; 
}
#so-open { 
  position: fixed;
  top: 100px ;
  left: -90px;
  border-radius:0 30px 30px 0;
transition:all linear 0.2s ;
}
.facebook {background-color:  #3b5999;}
.twitter {background-color: #3AAFD6;}
.whatsapp {background-color: #25D366;}
.pinterest{background-color: #BD081C;}
.linkedin{background-color: #0e76a8 ;}
.instagram{background-color:  rgb(221,42,123);}
.so-collapse{left: -60px; }

</style>
<body class="homepage-1 int_white_bg">

    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header">
            <!-- Header -->
            <div id="header" class="bottom">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo" class="col-lg-2 logo-white">
                            <a href="index.php"><img src="images/logo.png" data-sticky-logo="images/logo.png" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="bed.php">Bed</a></li>
                                <li><a href="wardrobe.php">Wardrobe</a></li>
                                <li><a href="dressing.php">Dressing</a></li>
                                <li><a href="dining.php">Dining</a></li>
                                <li><a href="#">other</a>
                                    <ul>
                                        <li><a href="sofa.php">Sofa</a></li>
                                        <li><a href="office-table.php">Office Table</a></li>
                                        <li><a href="center-table.php">Center Table</a></li>
                                        <li><a href="multiple-unit.php">Multiple Unit</a></li>
                                        <li><a href="other-products.php">Other Products</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </header>
        <div class="s-soft">
            <a href="https://www.facebook.com/theaakkar/" target="_blank" class="s-item facebook">
            <span class="fa fa-facebook"></span>
            </a>
            <a href="#" target="_blank" class="s-item twitter">
            <span class="fa fa-twitter"></span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=918797297806&app=facebook&entry_point=page_cta"  target="_blank" class="s-item whatsapp">
            <span class="fa fa-whatsapp"></span>
            </a>
            <a href="https://www.linkedin.com/company/aakkar" target="_blank" class="s-item linkedin">
            <span class="fa fa-linkedin"></span>
            </a>
            <a href="https://www.instagram.com/the_aakkar/?utm_medium=copy_link" target="_blank" class="s-item instagram">
            <span class="fa fa-instagram"></span>
            </a>
        </div>    