<!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i><a href="mailto:<?=$data['contact_email']?>"><?=$data['contact_email']?></a>
        <i class="fa fa-phone"></i> <a href="tel:<?=$data['contact_phone']?>"><?=$data['contact_phone']?></a> &nbsp;&nbsp;| &nbsp; 
      </div>
      <a href="<?=$links['brochure']?>"> <i class="fa fa-download"></i> Brochure |</a>
      <a href="https://www.charusat.ac.in/Downloads/Academic%20Calenders/CSPIT/"> Academic Calendar |</a>
      <a href="https://drive.google.com/drive/folders/1vwctetjp51RjdM1urZA0nlHDkmJmMDm4?usp=drive_link"> Syllabus |</a>
              <a href="https://www.charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/ME/"> Practical Lists |</a>
             <a href="https://www.charusat.ac.in/Downloads/Question-Papers/CSPIT/"> Question Papers |</a>
          <div class="social-links float-right">
        <a href="https://www.facebook.com/mechanical.charusat" target="_blank" class=""><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/MCharusat" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/mechanical_charusat/" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
        <a href="charusat@changa" target="_blank" class="twitter"><i class="fa fa-skype"></i></a>
        <a href="https://www.linkedin.com/in/hod-mechanical-cspit-charusat-8663611ab/" target="_blank" class=""><i class="fa fa-linkedin"></i></a>
        <!--<a href="http://117.239.83.200:8110/CHARUSAT_Virtual_Tour/CSPIT/" class="" style="color:red;">360 View <i class=" fa fa-video-camera" ></i></a> -->
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
  <style>
      .nav-menu a {
            
            padding: 6px 6px;
            /* text-decoration: none;
            display: inline-block;
            color: #555;
            font-family: "Raleway", sans-serif;
            font-weight: 700; */lo
            font-size: 13px;
            outline: none;
    }
  </style>
  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        <h3><a href="index.php" class="scrollto"><span><h6>CHAMOS Matrusanstha Department of</h6><?=$data['name_of_dept']?></span></a></h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
     
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php?view=home#about_us">About</a></li> 
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
          

          <!-- <li class="menu-has-children"><a href="index.php?view=home#team">People</a></li> -->          
          
          <li class="menu-has-children"><a href="#">Research Labs</a>
		  
            <ul>
		        <li><a href="index.php?v=lab_gc"> Grants & Consultancy</a></li>
		        <li><a href="index.php?v=lab_material"> Materials Processing Lab</a></li>
			    <li><a href="index.php?v=lab_surface"> Surface Engineering Lab</a></li>
			    <li><a href="index.php?v=lab_cast">Casting Simulation & E-Foundry Cell</a></li>
		        <li><a href="index.php?v=lab_manf"> Manufacturing Technology Lab</a></li>
			    <li><a href="index.php?v=lab_material_testing"> Material Testing & Characterisation Lab</a></li>
			    <li><a href="index.php?v=lab_fluid"> Fluid Mechanics and Heat Transfer Lab</a></li>
			    
            </ul>
            
            </li>
            <!--
            <li class="menu-has-children"><a href="https://charusat.ac.in/admission/" target="_blank">Admission</a></li>
            -->
             
             <!--
             <li class="menu-has-children"><a href="#">Student Corner</a>

            <ul style="display: none;">
              
              <li><a href="https://www.charusat.ac.in/Downloads/Academic%20Calenders/CSPIT/">Academic Calendar</a></li>
              <li><a href="https://www.charusat.ac.in/Downloads/Syllabus/CSPIT/CL/">Syllabus</a></li>
              <li><a href="https://www.charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/CL/">Practical Lists</a></li>
              <li><a href="https://www.charusat.ac.in/Downloads/Question%20Papers/CSPIT/">Question Papers</a></li>
              
              
            </ul>
             </li> -->
          
            <li><a href="index.php?view=home#festo">FESTO</a></li>
            <li><a href="index.php?view=home#testing">Testing Facilities</a></li>
            <li><a href="index.php?v=events">Events</a></li>
            <li><a href="index.php?v=events">Student Corner</a>
            
                <ul>
    		      <!--<li><li><a href="https://docs.google.com/spreadsheets/d/17tJpIoEYveCJp_VyoPoh7xMbKNt2uXXNoQJPGSTl4CU/edit?ts=5f0021c9#gid=1078938446" target="_blank">Students Achievement</a></li></li>-->
    			  <!-- <li><a href="http://136.233.130.148:8081/lor_me/" target="_blank"> LOR Request </a></li> -->
    			  <li><a href="https://charusat.ac.in/Downloads/Mechanical_Engineering/Forms/"> Download Forms </a></li>
    			</ul>
            
            </li>
            <!--<li><a href="#">Feedback</a>
                <ul>
    		      <li><a href="../../Downloads/NAAC_CSPIT_ME/Stakeholder Analysis report/" target="_blank"> Stakeholder Analysis Report </a></li>
    			  <li><a href="../../Downloads/NAAC_CSPIT_ME/Action%20taken%20report%20of%20the%20University/" target="_blank"> Action Taken Report </a></li>
    			</ul>
            </li>-->
        </ul>

        <br><br><br>

      </nav><!-- #nav-menu-container -->
     
    </div>
   
  </header><!-- #header -->
 <!-- <marquee behavior="" direction="" id="news_links" style="font-size:14px; margin-top:4px;" ><a href="" style="color:red;">Register for workshop......</a></marquee>-->
  