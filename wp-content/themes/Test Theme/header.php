<!DOCTYPE html>
<head>
    <?php wp_head(); ?>    
</head>
<body>
<div id="header_navbar">
        <header id="header">                
            <div class="header_logo">                        
                <a href="http://localhost/wordpresstest3">                  
                    <img src="<?php echo get_theme_file_uri('/images/logo.jpg'); ?>" alt="Name and Logo"/>
                </a>
            </div>
            <div class="header_social">                    
                <i class="fab fa-facebook"></i>                
                <i class="fab fa-instagram"></i>
            </div>
        </header>
        <div id="navbar_drop">&#9776</div>
        <nav id="navbar">                
            <ul>
                <li><a href="http://localhost/wordpresstest3">What is EOS?</a></li>
                <li><a href="http://localhost/wordpresstest3/infinity/">What is Infinity Leadership?</a></li>
                <li><a href="#">About</a></li>                                
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
</div>    