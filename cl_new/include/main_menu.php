<!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:<?=$data['contact_email']?>"><?=$data['contact_email']?></a>
        <i class="fa fa-phone"></i> <?=$data['contact_phone']?> |
		<i class="fa fa-download"></i> <a href="<?=$links['brochure']?>">Brochure</a>
      </div>
      <div class="social-links float-right">
        <a href="">Academic Calender</a>
		<a href="">Syllabus</a>
		<a href="">Practical Lists</a>
		<a href="">Question Papers</a>
      </div>
	  <!--
	  <div class="social-links float-right">
        <a href="https://www.facebook.com/CSPITIT/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
      </div>
	  -->
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h3><a href="index.php" class="scrollto"><span><h6>Department of</h6><?=$data['name_of_dept']?></span></a></h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about_us">About</a></li> 
          <!--<li class="menu-has-children"><a href="#">Academics</a>
            <ul>
              <li><a href="aca_calender.html">Academic Calender</a></li>
              <li><a href="aca_timetable.html">Time Table</a></li>
              <li class="menu-has-children"><a href="#">Syllabus</a>
                <ul>
                  <li><a href="btech.html">B.Tech.</a></li>
                  <li><a href="mtech.html">M.Tech.</a></li>
                </ul>
              </li>      
              <li><a href="aca_practical.html">Practical List & Lab Manual</a></li>
              <li><a href="aca_papers.html">Question Papers</a></li>
              <li><a href="aca_projectglimpse.html">Project Glimpse</a></li>
            </ul> 
          </li>-->
          

          <li class="menu-has-children"><a href="#team">People</a></li>          
          
          <li class="menu-has-children"><a href="#">Research Labs</a>
            
          </li>

          <li class="menu-has-children"><a href="#">Admission</a></li>
          

                    
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->