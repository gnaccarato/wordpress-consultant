<?php

get_header(); 

while(have_posts()) {
    the_post(); ?>

<div id="header_navbar">
        <header id="header">                
            <div class="header_logo">                        
                <a href="index.php">                        
                    <img src="img/logo.jpg" alt="Name and Logo"/>
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
                <li><a href="index.php">What is EOS?</a></li>
                <li><a href="infinity.php" class="active">What is Infinity Leadership?</a></li>
                <li><a href="#">About</a></li>                                
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="main_leadership">
            <h1>What is the (X)-ceptional Leadership System?</h1>
            <h2>In three words:  Awareness.  Choice.  Results</h2>
            <p>The (X)-ceptical Leadership System has been developed for Organizations looking to grow the Leadership capabilities of their teams.  With our 3 step success system: Awareness, Choice, and Results, your team starts to move forward in a unified direction</p>
            <div class="leadership_columns">
                <div class="leadership_content">
                    <h2>Awareness</h2>
                    <p>Using a unique process, you learn more about yourself and those around you</p>
                </div>
                <div class="leadership_content">
                    <h2>Choice</h2>
                    <p>Breaking old habits and instilling new ones. You realize what may have worked in the past may no longer be serving you any longer</p>
                </div>
                <div class="leadership_content">
                    <h2>(X)-ceptional Results</h2>
                    <p>As a result, with this new way of thinking and new "operating system", you will inevitably start seeing better results</p>
                </div>
            </div>
        </div>
        <div class="main_banner">
            <h2>Get your team TALKING, LISTENING, and LIVING</h2>
        </div>
        <div class="system_modules">
            <div class="module_columns">
                <div class="module">                    
                    <div class="module_num">Module 1</div>
                    <div class="module_desc">Leadership Begins Within</div>                    
                </div>
                <div class="module">                    
                    <div class="module_num">Module 2</div>
                    <div class="module_desc">Time Management &
                        Productivity</div>                    
                </div>
                <div class="module">                    
                    <div class="module_num">Module 3</div>
                    <div class="module_desc">Embracing
                        Diversity & Inclusion</div>                    
                </div>
                <div class="module">                    
                    <div class="module_num">Module 4</div>
                    <div class="module_desc">Communication &
                        Presentation Skills</div>                    
                </div>
                <div class="module">                    
                    <div class="module_num">Module 5</div>
                    <div class="module_desc">Rock Star Client Care</div>                    
                </div>
                <div class="module">                    
                    <div class="module_num">Module 6</div>
                    <div class="module_desc">Resiliency During Change</div>                    
                </div>
                <div class="module">                    
                    <div class="module_num">Module 7</div>
                    <div class="module_desc">Work/Life Blend
                        & Mindfulness</div>                    
                </div>
                <div class="module">                    
                    <div class="module_num">Module 8</div>
                    <div class="module_desc">Purpose & Legacy</div>                    
                </div>                
            </div>
        </div>
        <div class="team_parallax">
            <div class="parallax_content">
                <div class="team_par">
                    <h3>Business Priorities Addressed</h3>
                    <ul>
                        <li>• Profitability</li>
                        <li>• Productivity</li>
                        <li>• Customer Service</li>
                        <li>• Turnover</li>
                    </ul>
                </div>
                <div class="team_par">
                    <h3>System Outcomes</h3>
                    <ul>
                        <li>• Increased communication amongst team members</li>
                        <li>• Higher productivity</li>
                        <li>• Increased accountabilty</li>
                        <li>• Lower turnover</li>
                        <li>• More focus on what's important</li>
                        <li>• Stronger sense of work-life blend</li>
                        <li>• Increased accountabilty</li>
                        <li>• More resilient to change</li>
                        <li>• Greater awareness of client needs</li>
                        <li>• Shift from Manager to Leader</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="past_events">
            <div class="events_content">
                <div class="event_videos">
                        <iframe width="416" height="277" src="https://www.youtube.com/embed/uEWDemVHANM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5>Corporate Workshop - PORTUGAL</h5>
                </div>
                <div class="event_videos">
                    <iframe width="416" height="277" src="https://www.youtube.com/embed/ikCO1nuqwLc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5>Human Resources Development Conference - MIDDLE EAST</h5>
                </div>
            </div>
            <hr>
        </div>
    </div>

<?php }

get_footer();

?>