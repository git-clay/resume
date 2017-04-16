<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clay's Portfolio</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="./css/skins/eden.css" rel="stylesheet">
    <link href="./css/icons/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/animate.min.css">
    
   <!--  <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
    <!-- Custom styles for this template -->

    <link type="text/css" href="./css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">
  </head>

  <body data-spy="scroll" data-target="#topnav">

<nav class="navbar navbar-color navbar-inverse navbar-fixed-top" id="topnav" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand " href="/"><img src="./css/images/logo2.svg" alt="Expose" id='logo'/> </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home">Home</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#timeline">Timeline</a></li>
        <!-- <li><a href="#references">References</a></li> -->
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <!--/.navbar-collapse -->
  </div>
</nav>
<!-- navbar ends -->
<!-- Header -->
<div class="jumbotron" id="home">
  <div class="intro">
    <div class="container">
      <div class="row">
        <h1 class="text-center">Clay's Portfolio</h1>
        <p class="text-center">Full Stack Web Developer</p>
        <br/>
      </div>
      <div class="row triangles hidden-xs">
        <div class="up-triangle animated fadeInUp ">
          <div class="info">
            <i class="icon tn-harddrives"></i><br/>
            CodeWars
          </div>
        </div>
        <div class="down-triangle animated fadeInDown">
          <div class="info">Denver, CO<br/>
            <i class="icon tn-map"></i>
          </div>
        </div>
        <div class="up-triangle animated fadeInUp">
          <div class="info">
            <a href="https://www.linkedin.com/in/claytonsmithdeveloper"><i class="icon tn-linkedin"></i></a><br>
            Linkedin
          </div>
        </div>
        <div class="down-triangle animated fadeInDown">
          <div class="info">(336) 972-5525<br/>
            <i class="icon tn-headphone"></i>
          </div>
        </div>
        <div class="up-triangle animated fadeInUp">
          <div class="info">
            <a href="http://www.github.com/git-clay"><i class="icon tn-github"></i></a><br>
            Github
          </div>
        </div>
        <div class="down-triangle animated fadeInDown ">
          <div class="info">E-Mail<br/>
            <a href="claycodedev@gmail.com"><i class="icon tn-email"></i></a>
          </div>
        </div>
        <div class="up-triangle animated fadeInUp">
          <div class="info">
            <a href="./css/images/Clay-Resume.pdf"><i class="icon tn-tablet"></i></a><br/>
            Resume
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Header -->
<!-- Portfolio / Projects -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center inner-page">
        <h2>Projects</h2>
      </div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="portfolio-block">
            <img src="./css/images/p1.png" alt="Protect" >
          <div class="portfolio-caption text-center animated">
            <h3 class="animated">Pydro</h3>
            <a href="https://github.com/git-clay/Project_1" class="btn btn-social btn-skype btn-sm animated"><i class="tn-github"></i></a>
            <a href="https://git-clay.github.io/Project_1/" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
            <ul class='list-unstyled'>
              <li>HTML</li>
              <li>CSS</li>
              <li>Vanilla Javascript</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="portfolio-block">
           <img src="./css/images/p2-motiv-laptop.png" alt="Protect" >
          <div class="portfolio-caption text-center animated">
            <h3 class="animated">Mo+iv</h3>
            <a href="https://github.com/git-clay/Project-2_Mo-iv" class="btn btn-social btn-skype btn-sm animated"><i class="tn-github"></i></a>
            <a href="https://pure-brook-74304.herokuapp.com/" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
            <ul class='list-unstyled'>
              <li>Nodejs</li>
              <li>MongoDB</li>
              <li>Authorization/Authentication</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="portfolio-block">
          <img src="./css/images/roamrr.png" alt="Protect">
          <div class="portfolio-caption text-center animated">
            <h3 class="animated">Roamrr</h3>
            <a href="https://github.com/git-clay/Project_3/" class="btn btn-social btn-skype btn-sm animated"><i class="tn-github"></i></a>
            <a href="https://protected-hamlet-38916.herokuapp.com/" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
            <ul class='list-unstyled'>
              <li>Angular 1</li>
              <li>Postgres SQL</li>
              <li>Nodejs</li>
              <li>Authorization/Authentication</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="portfolio-block">
          <img src="./css/images/splotch-npm.png" alt="Protect">
          <div class="portfolio-caption text-center animated">
            <h3 class="animated">Splotch (npm package)</h3>
            <a href="https://github.com/git-clay/splotch/" class="btn btn-social btn-skype btn-sm animated"><i class="tn-github"></i></a>
            <a href="https://www.npmjs.com/package/splotch" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
            <ul class='list-unstyled'>
              <li>npm</li>
              <li>scss</li>
              <li>gulp</li>
            </ul>
          </div>
        </div>
      </div>      
     <!--  <div class="col-xs-12 col-sm-6">
        <div class="portfolio-block">
          <img src="./css/images/projects/4.jpg" alt="Protect" >
          <div class="portfolio-caption text-center animated">
            <h3 class="animated">Portfolio Item #4:final</h3>
            <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-github"></i></a>
            <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="portfolio-block">
           <img src="./css/images/projects/4.jpg" alt="Protect" >
          <div class="portfolio-caption text-center animated">
            <h3 class="animated">Portfolio Item #5:pup game</h3>
            <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-github"></i></a>
            <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
          </div>
        </div>
      </div>  -->

    </div>
  </div>
</section>

<!-- End of Projects / Portfolio -->
<!-- Skills box -->
<section id="skills">
  <div class="container">
    <!-- Example row of columns -->
    <div class="row features ">
      <div class="col-md-12 text-center">
        <h2>About Me</h2>
        <ul class="list-unstyled">
          <li>I thrive when there is a challenging problem to solve </li>
          <li>I am a very curious person - always looking to progress my knowledge and skill set</li>
          <li>At the end of the day: My main goal is to make cool stuff</li>
        </ul>
      </div>
    </div>
    <div id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Skills
            </a>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse in" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-block">
            <div class="row features">
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-angularjs-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>Angular 1 and 2</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <img id="arduino" src="./css/images/arduino.png">
                  <ul id="arduino" class="icon-description list-unstyled">
                    <li>Arduino</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>              
              <div class="col-xs-6 col-sm-4 col-md-2 ">
                <div class="hexicon">
                  <i class="inicon devicon-bootstrap-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>Bootstrap</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>  
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-css3-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>CSS</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-github-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>Git and Github</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>              
               <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon ">
                  <i class="inicon devicon-html5-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>HTML</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <img id='js-shield' src="./css/images/js-sheild.png">
                  <ul id='js-shield-ul' class="icon-description list-unstyled">
                    <li>JavaScript</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-jquery-plain"></i>
                  <ul class="icon-description list-unstyled">
                    <li>jQuery</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>                                      
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-mongodb-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>Mongo</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-nodejs-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>Nodejs</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>

              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-php-plain"></i>
                  <ul class="icon-description list-unstyled">
                    <li>PHP</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <img id="pi" src="./css/images/pi.png">
                  <ul id="pi" class="skill-icon icon-description list-unstyled">
                    <li>Raspberry Pi</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2 col-sm-offset-3">
                <div class="hexicon">
                  <img class="react" src="./css/images/reactIcon.svg">
                  <ul id="react" class="icon-description list-unstyled">
                    <li>React</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>               
              <div class="col-xs-6 col-sm-4  col-md-2">
                <div class="hexicon">
                  <img id="sequel" src="./css/images/sequelize.png">
                  <ul id="sequel" class="icon-description list-unstyled">
                    <li>Sequelize</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-postgresql-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>SQL</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!--    <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Skill Rader Chart
            </a>
          </h5>
        </div>
        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-block">
            <div class="row features">

            </div>
          </div>
        </div>
      </div> -->
  <!--    <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Current Projects
            </a>
          </h5>
        </div>
        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-block">
            <div class="row features">
languages im learning
             <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-angularjs-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>Angular 1 & 2</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
current projects
             <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="hexicon">
                  <i class="inicon devicon-angularjs-plain-wordmark"></i>
                  <ul class="icon-description list-unstyled">
                    <li>Angular 1 & 2</li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
</section>
<!-- End of Skills Box -->
<!-- Timeline Section -->
<section class="slider" id="timeline">
  <div class="container">
      <div class="page-header text-center">
        <h1 id="timeline">Experience and Education</h1>
        <div class="inner-page">
          <p class="text-center">I got my degree in exercise physiology and worked in performance research for a couple years. While working on one of our validation studies I found an interest in computer science.  Since then I taught myself code in my free time. A the end of 2016, I decided to officially make the change and started the full stack emersive course at General Assembly.<br/>
          </p>
        </div>
    </div>
    <ul class="timeline">
          <li>
        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" id=""></i></a></div>
        <div class="timeline-panel col-xs-12">
          <div class="timeline-heading">
            <img class="img-responsive" src="./css/images/jaywalk.png" />
          </div>
          <div class="timeline-body">
            <h4 class="text-danger text-center">CURRENT</h4>
            <p>In the process of helping this startup get to a point that their app is marketable and easy for a user to navigate to what they need. My main responsibility is creating a robust back-end api to plug in to multiple applications. The top priority was remaking the database to be easier to navigate as this company grows their userbase. I am also developing a slack app that integrates with their data. I will also be part of remaking the mobile application soon using Ionic.</p>
            <ul>
              <li>Python</li>
              <li>Firebase</li>
              <li>Slackbot</li>
              <li>Ionic</li>
            </ul>
          </div>
        </div>
      </li>
      <li  class="timeline-inverted">
        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" id=""></i></a></div>
        <div class="timeline-panel col-xs-12">
          <div class="timeline-heading">
            <img class="img-responsive" " src="./css/images/railwayLogo.jpg" />
          </div>
          <div class="timeline-body">
            <h4 class="text-danger text-center">CURRENT</h4>
            <p>I am in the process of flipping this crossfit gym's Drupal site and taking it to the next level. Probably the first crossfit website built with Angular 4. The owner stressed that building a mobile friendly website was top priority. This includes user friendly contact forms(no annoying captcha but still anti spam), integrated google maps, and owner admin login to update information.</p>
            <ul>
              <li>Angular 4</li>
              <li>Nodejs</li>
              <li>Firebase (MongoDB)</li>
            </ul>
          </div>
        </div>
      </li>
      <li>
      2017
        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" id=""></i></a></div>
        <div class="timeline-panel col-xs-12">
          <div class="timeline-heading">
            <img class="img-responsive" src="./css/images/ga-logo.png" />
          </div>
          <div class="timeline-body">
            <!-- <h4>General Assembly</h4> -->
            <p>This was a full time, fast paced course focused on the learning process behind web development. We added a plethora of the most current tools to our coding arsenal in only 12 weeks! In addition to the hard skills, General Assembly taught us how to develop as a team and communicate effectivly with project managers and UX/UI designers.</p>
          </div>
        </div>
      </li>
      <li  class="timeline-inverted">
        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" id=""></i></a></div>
        <div class="timeline-panel col-xs-12">
          <div class="timeline-heading">
            <img class="img-responsive" " src="./css/images/trainer.png" />
          </div>
          <div class="timeline-body">
            <!-- <h4>Biofit Blueprint / Youfit</h4> -->
            <p>Personal training allowed me to exercise new entreprenural skills and learn the stuggle of starting a business from scratch.  While offering physical training at Youfit, I started Biofit Blueprint which is purely online training. I have had clients from accross the country.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" id=""></i></a></div>
        <div class="timeline-panel col-xs-12">
          <div class="timeline-heading">
            <img class="img-responsive" src="./css/images/logo-enterprise.png" />
          </div>
          <div class="timeline-body">
          <!-- <h4>Enterprise</h4> -->
            <p>My knowledge of buisiness management and leadership grew exponentially while working for enterprise. Excellent experience in running all aspects of a large business.</p>
          </div>
        </div>
      2016
      </li>
      <li  class="timeline-inverted">
        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" id=""></i></a></div>
        <div class="timeline-panel col-xs-12">
          <div class="timeline-heading">
            <img class="img-responsive" src="./css/images/asu-logo.png" />
          </div>
          <div class="timeline-body">
          <!-- <h4>Appalacian State University</h4> -->
            <p>After a short internsihp I was offered the research technitian position in the human performance lab. I was in charge of the community fitness program as well as recruiting for upcoming studies. I would contribute to research design, data collection, and data analysis throughout each study as well. I was also granted the task of training new interns and employees.</p>
          </div>
        </div>
      </li>
      <li>  
      2014
        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" id=""></i></a></div>
        <div class="timeline-panel col-xs-12">
          <div class="timeline-heading">
            <img class="img-responsive" src="./css/images/uncc.png" />
          </div>
          <div class="timeline-body">
            <!-- <h4>University of North Carolina at Charlotte</h4> -->
            <p>I obtained my Bachelor's of Science in Exercise Physiology. While attending UNCC I worked in the writing center as a tutor. I also volunteered in the biodynamics research lab.</p>
          </div>
        </div>

      </li>
    </ul>
      <div id="portfolio"></div>

  </div>
</section>
<!-- End of Timeline -->

<!-- Testimonials -->

<section>
<!--  <section class="gray" id="references">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Talent I've Worked With</h3>
      </div>
    </div>
  </div>
</section> -->
<div class="carousel-reviews broun-block">
  <div class="container">


     <br>
    <!--     <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                        <img src=""/>
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we really don't need another one of these."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                        <img src=""/>
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>What a funny and entertaining film! I did not know what to expect, this is the fourth film in this vehicle's universe with the two Cars movies and then the first Planes movie. I was wondering if maybe Disney pushed it a little bit. However, Planes: Fire and Rescue is an entertaining film that is a fantastic sequel in this magical franchise. </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img src=""/>
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img13.png">
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we really don't need another one of these."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img14.png">
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>What a funny and entertaining film! I did not know what to expect, this is the fourth film in this vehicle's universe with the two Cars movies and then the first Planes movie. I was wondering if maybe Disney pushed it a little bit. However, Planes: Fire and Rescue is an entertaining film that is a fantastic sequel in this magical franchise. </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img15.png">
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img13.png">
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we really don't need another one of these."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img14.png">
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>What a funny and entertaining film! I did not know what to expect, this is the fourth film in this vehicle's universe with the two Cars movies and then the first Planes movie. I was wondering if maybe Disney pushed it a little bit. However, Planes: Fire and Rescue is an entertaining film that is a fantastic sequel in this magical franchise. </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img15.png">
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>                    
                </div>
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div> -->
<!-- End testimonials -->

  


<!-- contact me -->
  <div class="row whiteText" >
      <div class="row" id="contact">
      <div class="col-md-12">
      <br>
        <h3 class="text-center">Contact Me</h3>
      </div>
    </div><br>
  <?php include('contactForm.php') ?>
        <div class="col-md-6">
        <form class="form-horizontal" role="form" method="post" action="index.php#contact">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>  
            </div>
          </div>
        </form> 
      </div>

 
      <div class="col-xs-offset-2 col-xs-8 col-md-6 col-md-offset-0">
        <h4 class="pull-top">Get in <strong>touch</strong></h4>
        <p>You made it to the bottom! Not that I'm suprised... Shoot me an E-mail and we can chat about how I can help your team.</p>
        <hr>
        <h4>My <strong>Coding Cave</strong></h4>
        <ul class="unstyled">
          <li><i class="icon-phone"></i> <strong>Phone:</strong> (336) 972-5525</li>
          <li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:claycodedev@gmail.com">claycodedev@gmail.com</a>
          </li>
        </ul>
      </div>
    </div>
  </div>



  </div>
</div>
</section>
<!-- End Contact Form -->
<footer id="footer">
  <div class="row">
    <a  href="/"><img class="center-block logo" src="./css/images/logo2.svg" alt="Expose" id='logo-footer'/> </a>
    <nav id="footer-menu" class="pull-right">
      <ul>
        <li><a href="#">FAQ's</a></li>
        <li><a href="/snake">Game Page</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='jquery.sinusoid.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
  $(function () {
      var tw,ta;
      if($(window).width()>960){
          tw = $('.triangles').width()/7+32;
          ta = tw/2+22;
      $('.down-triangle')
          .css('border-top',tw+'px solid rgba(0,0,0,0.8)')
          .css('border-left',ta+'px solid transparent')
          .css('border-right',ta+'px solid transparent');
      $('.up-triangle')
          .css('border-bottom',tw+'px solid rgba(0,0,0,0.8)')
          .css('border-left',ta+'px solid transparent')
          .css('border-right',ta+'px solid transparent');
      } 

      $('#wd-wrapper').sinusoid({
          minImgW: 80,
          maxImgW: 130,
          minImgAngle: -20,
          maxImgAngle: 20,
          leftFactor: 60,
          sinusoidFunction: {
              A: 70,
              T: 1700,
              P: 0
          }
      });

  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92638625-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>