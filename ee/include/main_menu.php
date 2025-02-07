<!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:<?=$data['contact_email']?>"><?=$data['contact_email']?></a>
        <i class="fa fa-phone"></i> <?=$data['contact_phone']?> |
		<i class="fa fa-download"></i> <a href="<?=$links['brochure']?>" target="_blank"> Brochure</a>
      </div>
      <!--<a href="https://www.charusat.ac.in/Downloads/Academic%20Calenders/CSPIT/"> Academic Calendar |</a>
      <a href="https://www.charusat.ac.in/Downloads/Syllabus/CSPIT/CL/"> Syllabus |</a>
              <a href="https://www.charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/CL/"> Practical Lists |</a>
             <a href="https://www.charusat.ac.in/Downloads/Question%20Papers/CSPIT/"> Question Papers |</a>-->
      <div class="social-links float-right">
        <a href="https://www.facebook.com/Department-of-Electrical-Engineering-Charusat-1670981313196386/" target="_blank" class=""><i class="fa fa-facebook"></i></a>
        <a href="Electrical_charusat" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="electrical_charusat" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
        <a href="electrical charusat" target="_blank" class="twitter"><i class="fa fa-skype"></i></a>
        <a href="https://www.linkedin.com/in/cspit-electrical-6771921ab/" target="_blank" class=""><i class="fa fa-linkedin"></i></a>
        <!--<a href="http://117.239.83.200:8110/CHARUSAT_Virtual_Tour/CSPIT/" class="" style="color:red;">360 View <i class=" fa fa-video-camera" ></i></a>-->
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
        <h3><a href="index.php" class="scrollto"><span><h6>M & V Patel Department of</h6><?=$data['name_of_dept']?></span></a></h3>
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
          

          <!--<li class="menu-has-children"><a href="index.php?view=home#team">People</a></li>          -->
          
          <li class="menu-has-children"><a href="#">Research Labs</a>
            <ul>
              <li><a href="index.php?view=lab_advance">Advance Power System & Electrical Machine Lab</a></li>
              <li><a href="index.php?view=lab_Cable_Testing">Cable and Wire Testing Lab</a></li>
              <li><a href="index.php?view=lab_web">Programmable Logic Controller</a></li>
              <li><a href="index.php?view=lab_security">Instrumentation</a></li>
              <li><a href="index.php?view=lab_networking">High Voltage Engineering</a></li>
              <li><a href="index.php?view=lab_database">Project and Research  </a></li>
              <li><a href="index.php?view=lab_os">Basics of Electrical Engineering</a></li>
              <li><a href="index.php?view=lab_pm">Power Electronic and Drives / Network Analysis</a></li>
              <li><a href="index.php?view=lab_automation">Microcontroller & DSP</a></li> 
			  <li><a href="index.php?view=lab_eleme"> Electrical Measurement </a></li>
			  <li><a href="index.php?view=lab_ug"> UG Computer Lab </a></li>
			  <li><a href="index.php?view=lab_pg"> PG Computer Lab </a></li>
			  <li><a href="index.php?view=lab_psp"> Power System Protection   </a></li>
			  <li><a href="index.php?view=lab_em1"> Electrical Machine – Lab I   </a></li>
			  <li><a href="index.php?view=lab_em2"> Electrical Machine – Lab II   </a></li>
		
		   </ul>
          </li>
          <li><a href="./files/ee_equipments.pdf" target="_blank">Lab Equipments</a></li>
          <li class="menu-has-children"><a href="https://admission.charusat.ac.in/">Admission</a></li>
          <li class="menu-has-children"><a href="#">Students' Corner</a>

            <ul style="display: none;">
              
              <li><a href="https://www.charusat.ac.in/Downloads/Academic%20Calenders/CSPIT/">Academic Calendar</a></li>
              <li><a href="https://www.charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/EE/">Practical Lists</a></li>
              <li><a href="https://www.charusat.ac.in/Downloads/Question%20Papers/CSPIT/">Question Papers</a></li>
              <li><a href="https://drive.google.com/drive/folders/1rWusiZfZEX6kunxNSZDRFpPKNnkU_dHn?usp=drive_link">Syllabus</a></li> 
              <li><a href="https://techclubee.wixsite.com/home">TECH-CLUB</a></li>
            </ul>
            
          </li>
          

                    
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->