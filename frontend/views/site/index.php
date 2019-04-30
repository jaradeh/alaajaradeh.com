<?php
/* @var $this yii\web\View */

use backend\models\Cv;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$find_cv = Cv::find()->one();

$dob = date('d M Y', 656460000);
$year_of_birth = date('Y', 655513200);
$this_year = date('Y');
$age = $this_year - $year_of_birth;
$this->title = 'Alaa Jaradeh';

$year_started_developing = "2010";
$years_of_ex = $this_year - $year_started_developing;
?>

<div class="preloader">
    <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- /Loading animation -->

<div id="page" class="page">
    <!-- Header -->
    <header id="site_header" class="header mobile-menu-hide">
        <div class="my-photo">
            <img src="/images/my_photo.png" alt="image">
            <div class="mask"></div>
        </div>

        <div class="site-title-block">
            <h1 class="site-title">Alaa Jaradeh</h1>
            <p class="site-description">Web Developer</p>
        </div>

        <!-- Navigation & Social buttons -->
        <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
                <!-- About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#home" data-animation="58" data-goto="1">Home</a><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
                </li>
                <!-- /About Me Subpage link -->
                <!-- About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#about_me" data-animation="59" data-goto="2">About me</a>
                </li>
                <!-- /About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#resume" data-animation="60" data-goto="3">Resume</a>
                </li>
                <li>
                    <a class="pt-trigger" href="#portfolio" data-animation="61" data-goto="4">Portfolio</a>
                    <!--                </li>
                                    <li>
                                        <a class="pt-trigger" href="#blog" data-animation="58" data-goto="5">Blog</a>
                                    </li>-->
                <li>
                    <a class="pt-trigger" href="#contact" data-animation="59" data-goto="6">Contact</a>
                </li>
            </ul>
            <!-- /Main menu -->

            <!-- Social buttons -->
            <ul class="social-links">
                <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
                <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
            </ul>
            <!-- /Social buttons -->
        </div>
        <!-- Navigation & Social buttons -->
    </header>
    <!-- /Header -->

    <!-- Mobile Header -->
    <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
            <div class="mobile-site-title">Alaa Jaradeh</div>
        </div>

        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- /Mobile Header -->

    <!-- Main Content -->
    <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
            <!-- Subpages -->
            <div class="subpages">

                <!-- Home Subpage -->
                <section class="pt-page pt-page-1 section-with-bg section-paddings-0" style="background-image: url(/images/home_page_bg_2.jpg);" data-id="home">
                    <div class="home-page-block-bg">
                        <div class="mask"></div>
                    </div>
                    <div class="home-page-block">
                        <div class="v-align">
                            <h2>Alaa Jaradeh</h2>
                            <div id="rotate" class="text-rotate">
                                <div>
                                    <p class="home-page-description">Web Developer</p>
                                </div>
                                <div>
                                    <p class="home-page-description">Software-developer</p>
                                </div>
                                <div>
                                    <p class="home-page-description">Frontend-developer</p>
                                </div>
                                <div>
                                    <p class="home-page-description">Backend-developer</p>
                                </div>
                            </div>

                            <div class="block end" style="text-align: center">
                                <ul class="info-list">
                                    <li><span class="title">Age</span><span class="value"><?php echo $age ?></span></li>
                                    <li><span class="title">Date Of Birth</span><span class="value"><?php echo $dob ?></span></li>
                                    <li><span class="title">Address</span><a href="https://www.google.ca/maps/place/Brampton,+ON/@43.7248485,-79.8996271,11z/data=!3m1!4b1!4m5!3m4!1s0x882b15eaa5d05abf:0x352d31667cc38677!8m2!3d43.7315479!4d-79.7624177" target="_blank"><span class="value">Brampton - Ontario CA</span></a></li>
                                    <li><span class="title">e-mail</span><span class="value"><a href="mailto:info@alaajaradeh.com">info@alaajaradeh.com</a></span></li>
                                    <li><span class="title">Phone</span><a href="tel:+1780-707-2731"><span class="value">+1 780 707 2731</span></a></li>
                                    <li><span class="title">Hiring & Freelance</span><span class="value available">Available</span></li>
                                </ul>
                                <br /><br />
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="col-sm-6">
                                            <center><div class="download-cv-block">
                                                    <a class="button home_btn" target="_blank" href="/cv/<?php echo $cv->path ?>">View Online CV</a>
                                                </div></center>
                                        </div>
                                        <div class="col-sm-6">
                                            <center>
                                                <div class="download-cv-block">
                                                    <a class="button home_btn" target="_blank" href="/cv/<?php echo $cv->path ?>" download>Download CV</a>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section class="pt-page pt-page-2" data-id="about_me">
                    <div class="section-title-block">
                        <h2 class="section-title">About Me</h2>
                        <h5 class="section-description">My Skills, Profession and Tools</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 subpage-block">
                            <div class="general-info">
                                <h3>I am Web / Software Developer</h3>
                                <p>
                                    I'am a self-taught OOP PHP developer since 2011 who’s always Seeking for the new challenges. Always looking forward to learn more, committed, ambitious and always willing to take the extra mile. A self-motivated, talented web developer with experience in delivering software projects with extremely high standards. A good team player, friendly social active and quick learner.
                                </p>
                            </div>
                        </div>

                        <!--                        <div class="col-sm-6 col-md-6 subpage-block">
                                                    <div class="block-title">
                                                        <h3>Testimonials</h3>
                                                    </div>
                                                    <div class="testimonials owl-carousel">
                                                         Testimonial 2 
                                                        <div class="testimonial-item">
                                                             Testimonial Content 
                                                            <div class="testimonial-content">
                                                                <div class="testimonial-text">
                                                                    <p>"Proin auctor pulvinar tellus, et venenatis ligula pharetra eu. Duis dictum nisi sed pellentesque euismod."</p>
                                                                </div>
                                                            </div>            
                                                             /Testimonial Content   
                                                             Testimonial Author 
                                                            <div class="testimonial-credits">
                                                                 Picture 
                                                                <div class="testimonial-picture">
                                                                    <img src="/images/testimonials/testimonila_photo_2.png" alt="">
                                                                </div>              
                                                                 /Picture 
                                                                 Testimonial author information 
                                                                <div class="testimonial-author-info">
                                                                    <p class="testimonial-author">Bryan Morris</p>
                                                                    <p class="testimonial-firm">Sun Foods</p>
                                                                </div>
                                                            </div>
                                                             /Testimonial author information                
                                                        </div>
                                                         End of Testimonial 2 
                        
                                                         Testimonial 2 
                                                        <div class="testimonial-item" style="width:100%">
                                                             Testimonial Content 
                                                            <div class="testimonial-content">
                                                                <div class="testimonial-text">
                                                                    <p>"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem."</p>
                                                                </div>
                                                            </div>            
                                                             /Testimonial Content   
                                                             Testimonial Author 
                                                            <div class="testimonial-credits">
                                                                 Picture 
                                                                <div class="testimonial-picture">
                                                                    <img src="/images/testimonials/testimonial_photo_1.png" alt="">
                                                                </div>              
                                                                 /Picture 
                                                                 Testimonial author information 
                                                                <div class="testimonial-author-info">
                                                                    <p class="testimonial-author">John Doe</p>
                                                                    <p class="testimonial-firm">Apple Inc.</p>
                                                                </div>
                                                            </div>
                                                             /Testimonial author information                
                                                        </div>
                                                         End of Testimonial 2 
                                                    </div>
                                                </div>-->
                    </div>

                    <!-- Services block -->
                    <div class="block-title">
                        <h3>Services</h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="service-block"> 
                                <div class="service-info">
                                    <img src="/images/service/web_design.png" alt="Web Development">
                                    <h4>Web Development</h4>
                                    <p>Developing sites from scratch with Php frameworks with the highest standards</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="service-block"> 
                                <div class="service-info">
                                    <img src="/images/service/management.png" alt="Software Development">
                                    <h4>Software Development</h4>
                                    <p>Cloud softwares Php web based , Built from scratch with custom modules</p>
                                </div>
                            </div>
                        </div>

                        <!--                        <div class="col-sm-6 col-md-3 subpage-block">
                                                    <div class="service-block"> 
                                                        <div class="service-info">
                                                            <img src="/images/service/copywrite.png" alt="">
                                                            <h4>Management</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                        </div>
                                                    </div>
                                                </div>-->

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="service-block"> 
                                <div class="service-info">
                                    <img src="/images/service/ecommerce.png" alt="Online Marketing">
                                    <h4>SEO & Online Campaigns</h4>
                                    <p>Search Engine Optimization and online campaigns for better marketing!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End of Services block -->

                    <!-- Clients block -->
                    <!--                    <div class="block-title">
                                            <h3>Clients</h3>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-sm-4 col-md-2 subpage-block">
                                                <div class="client_block">
                                                    <a href="#" target="_blank"><img src="/images/clients/client_1.png" alt="image"></a>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-4 col-md-2 subpage-block">
                                                <div class="client_block">
                                                    <a href="#" target="_blank"><img src="/images/clients/client_2.png" alt="image"></a>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-4 col-md-2 subpage-block">
                                                <div class="client_block">
                                                    <a href="#" target="_blank"><img src="/images/clients/client_3.png" alt="image"></a>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-4 col-md-2 subpage-block">
                                                <div class="client_block">
                                                    <a href="#" target="_blank"><img src="/images/clients/client_4.png" alt="image"></a>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-4 col-md-2 subpage-block">
                                                <div class="client_block">
                                                    <a href="#" target="_blank"><img src="/images/clients/client_5.png" alt="image"></a>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-4 col-md-2 subpage-block">
                                                <div class="client_block">
                                                    <a href="#" target="_blank"><img src="/images/clients/client_6.png" alt="image"></a>
                                                </div>
                                            </div>
                                        </div>-->
                    <!-- End of Clients block -->

                    <!-- Fun facts block -->
                    <!--                    <div class="block-title">
                                            <h3>Fun Facts</h3>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-sm-6 col-md-3 subpage-block">
                                                <div class="fun-fact-block gray-bg"> 
                                                    <i class="pe-7s-icon pe-7s-smile"></i>
                                                    <h4>Happy Clients</h4>
                                                    <span class="fun-value">1,024</span>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-6 col-md-3 subpage-block">
                                                <div class="fun-fact-block"> 
                                                    <i class="pe-7s-icon pe-7s-alarm"></i>
                                                    <h4>Working Hours</h4>
                                                    <span class="fun-value">6,256</span>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-6 col-md-3 subpage-block">
                                                <div class="fun-fact-block gray-bg"> 
                                                    <i class="pe-7s-icon pe-7s-medal"></i>
                                                    <h4>Awards Won</h4>
                                                    <span class="fun-value">21</span>
                                                </div>
                                            </div>
                    
                                            <div class="col-sm-6 col-md-3 subpage-block">
                                                <div class="fun-fact-block"> 
                                                    <i class="pe-7s-icon pe-7s-coffee"></i>
                                                    <h4>Coffee Consumed</h4>
                                                    <span class="fun-value">20,000</span>
                                                </div>
                                            </div>
                                        </div>-->
                    <!-- End of Fun fucts block -->
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section class="pt-page pt-page-3" data-id="resume">
                    <div class="section-title-block">
                        <h2 class="section-title">Resume</h2>
                        <h5 class="section-description"><?php echo $years_of_ex; ?> Years of Experience</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Education</h3>
                            </div>
                            <div class="timeline">
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">2015</h5>
                                    <h4 class="event-name">High Diploma Degree (CIS)</h4>
                                    <span class="event-description">Quds College</span>
                                    <p>Graduated from college with the highest degree that year, and number 10 in Jordan.</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">2015</h5>
                                    <h4 class="event-name">Diploma Computer Information System (CIS)</h4>
                                    <span class="event-description">Quds College</span>
                                    <p>Graduated from college.</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">2008</h5>
                                    <h4 class="event-name">High School</h4>
                                    <span class="event-description">New English School</span>
                                    <p>Graduated from school.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Experience</h3>
                            </div>
                            <div class="timeline">
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">2011 - Current</h5>
                                    <h4 class="event-name">Software / Web Developer</h4>
                                    <span class="event-description">Freelance</span>
                                    <p>I started as a web developer career creating websites and online softwares.It gave me a lot of experience and chances to learn more technologies.</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Apr 2012 - Mar 2015</h5>
                                    <h4 class="event-name">IT Supervisor</h4>
                                    <span class="event-description">Sigma Investments LTD</span>
                                    <p>
                                        The IT department was my responsibility : 
                                        <br />
                                        <span id="resume_sigma_show_more_btn" class="btn-link" style="cursor: pointer;">Show more..</span>
                                    </p>
                                    <p id="resume_sigma_details" style="display: none;">
                                        I was responsible about website development, maintenance,updates and the used technologies.
                                        <br />
                                        Developed many in-house softwares for departments as CRM , HR , Finance and custom.
                                        <br />
                                        Servers ,Clouds and domains purchase, maintenance, control and development.
                                        <br />
                                        SEO and online campaigns
                                        <br />
                                        <span id="resume_sigma_show_less_btn" class="btn-link" style="cursor: pointer;">Show less..</span>
                                    </p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Jan 2011 - Feb 2012</h5>
                                    <h4 class="event-name">Web Developer</h4>
                                    <span class="event-description">SIT MENA</span>
                                    <p>Semantic Intelligent Technologies is a technology house company where we were responsible of development softwares and websites.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Profession Area</h3>
                            </div>
                            <div class="skills-info">
                                <h4>Yii2</h4>                               
                                <div class="skill-container">
                                    <div class="skill-percentage skill-1"></div>
                                </div>
                                
                                <h4>Zend Framework 2</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-3"></div>
                                </div> 

                                <h4>WordPress</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-2"></div>
                                </div>
                                
                                <h4>Drupal</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-3"></div>
                                </div> 
                                
                                <h4>Joomla</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-3"></div>
                                </div> 
                                
                                <h4>E-Commerce Platforms</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-7"></div>
                                </div>
                                
                                <h4>Web Servers | Cloud Servers</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-5"></div>
                                </div>
                                
                            </div>

                            <div class="block-title">
                                <h3>Coding Skills</h3>
                            </div>
                            <div class="skills-info">
                                <h4>PHP | HML | CSS | Javascript</h4>                               
                                <div class="skill-container">
                                    <div class="skill-percentage skill-4"></div>
                                </div>

                                <h4>Code Management</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-6"></div>
                                </div>

                                <h4>Social Media</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-7"></div>
                                </div>

                                <h4>Payments Methods</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="download-cv-block">
                                <a class="button" target="_blank" href="/cv/<?php echo $cv->path ?>">View Online CV</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="download-cv-block">
                                <a class="button" target="_blank" href="/cv/<?php echo $cv->path ?>" download>Download CV</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Resume Subpage -->


                <!-- Portfolio Subpage -->
                <section class="pt-page pt-page-4" data-id="portfolio">
                    <div class="section-title-block">
                        <h2 class="section-title">Portfolio</h2>
                        <h5 class="section-description">My Best Works</h5>
                    </div>

                    <!-- Portfolio Content -->
                    <div class="portfolio-content">

                        <!-- Portfolio filter -->
                        <ul id="portfolio_filters" class="portfolio-filters">
                            <li class="active">
                                <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                            </li>
                            <?php foreach ($categories as $category_data => $category) { ?>
                                <li>
                                    <a class="filter btn btn-sm btn-link" data-group="<?php echo $category->id ?>"><?php echo $category->name ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <!-- End of Portfolio filter -->

                        <!-- Portfolio Grid -->
                        <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                            <?php foreach ($projects as $project_data => $project) { ?>
                                <!-- Portfolio Item 1 -->
                                <figure class="item" data-groups='<?php echo $project->category_id ?>'>
                                    <a class="ajax-page-load" href="project-view?id=<?php echo $project->id ?>&view=ajax_view">
                                        <img src="/images/projects/<?php echo $project->image ?>" alt="" class="img-thumbnail">
                                        <div>
                                            <h5 class="name"><?php echo $project->name ?></h5>
                                            <small>Media</small>
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                    </a>
                                </figure>
                                <!-- /Portfolio Item 1 -->
                            <?php } ?>


                        </div>
                        <!-- /Portfolio Grid -->

                    </div>
                    <!-- /Portfolio Content -->

                </section>
                <!-- /Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section class="pt-page pt-page-5" data-id="blog">
                    <div class="section-title-block">
                        <h2 class="section-title">Blog</h2>
                        <h5 class="section-description">My Diary</h5>
                    </div>
                    <div class="blog-masonry">
                        <!-- Blog Post 1 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_1.jpg" alt="blog-post-1" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">6</span><span class="month">Dec</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Bootstrap is the Most Popular Framework</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_2.jpg" alt="blog-post-2" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">3</span><span class="month">Nov</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">jQuery</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">One Framework, Every Device</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_3.jpg" alt="blog-post-3" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">12</span><span class="month">Oct</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">Sport</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Designed for Everyone, Everywhere</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_4.jpg" alt="blog-post-4" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">18</span><span class="month">Aug</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">CSS</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">An Introduction To PostCSS</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 4 -->

                        <!-- Blog Post 5 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_5.jpg" alt="blog-post-5" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">2</span><span class="month">Jul</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">                        
                                    <ul class="category">
                                        <li><a href="#">CSS3</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Original and Innovative Web Layouts</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 5 -->

                        <!-- Blog Post 6 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_6.jpg" alt="blog-post-6" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">8</span><span class="month">May</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">HTML5</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 6 -->

                        <!-- Blog Post 7 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_7.jpg" alt="blog-post-7" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">7</span><span class="month">Apr</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">Design</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Navigation for Mega-Sites</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 7 -->

                        <!-- Blog Post 8 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_8.jpg" alt="blog-post-8" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">21</span><span class="month">Mar</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">CSS3</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Front-End Challenge Accepted: CSS 3D Cube</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 8 -->
                    </div>
                </section>
                <!-- End Blog Subpage -->

                <!-- Contact Subpage -->
                <section class="pt-page pt-page-6" data-id="contact">
                    <div class="section-title-block">
                        <h2 class="section-title">Contact</h2>
                        <h5 class="section-description">Get in Touch</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Get in Touch</h3>
                            </div>
                            <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-map-marker"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>Ontario, CA</h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-mail"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>info@alaajaradeh.com</h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-call"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>+1 780 707 2731</h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-check"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>Hire / Freelance - Available</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Contact Form</h3>
                            </div>
                            <form id="contact-form" method="post" action="/contact" novalidate="true">

                                <div class="messages"></div>

                                <div class="controls">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-user"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-envelope"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-comment"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <input type="submit" class="button btn-send disabled" value="Send message">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- End Contact Subpage -->

            </div>
        </div>
        <!-- /Page changer wrapper -->
    </div>
    <!-- /Main Content -->
</div>