<!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:<?=$data['contact_email']?>"><?=$data['contact_email']?></a>
        <i class="fa fa-phone"></i> <?=$data['contact_phone']?> |
		<i class="fa fa-download"></i> <a href="<?=$links['brochure']?>" target="_blank"> Brochure|</a>
      </div>
      <!--
      <div class="social-links float-right">
		<a href="/cspit/ce/files/2019_20FirstUnitTest Marks_2_4_6_CE.pdf" target="_blank">Result (Internal)</a>
        <a href="/cspit/ce/files/AcademicCalander_HolidayList 2019-20.pdf" target="_blank">Academic Calendar</a>
		<a href="https://www.charusat.ac.in/Downloads/Syllabus/CSPIT/CE/" target="_blank">Syllabus</a>
		<a href="https://charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/CE" target="_blank">Practical Lists</a>
		<a href="https://www.charusat.ac.in/Downloads/Question-Papers/CSPIT/" target="_blank">Question Papers</a>
      </div>-->
      <!-- <a href="/cspit/ce/files/AcademicCalander_HolidayList 2019-20.pdf" target="_blank"> Academic Calendar </a> -->
      <!--<a href="https://www.charusat.ac.in/Downloads/Syllabus/FTE%20CSPIT/CE/"> Syllabus |</a>
        <a href="https://www.charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/CE/"> Practical Lists |</a>
             <a href="https://www.charusat.ac.in/Downloads/Question%20Papers/CSPIT/"> Question Papers |</a> -->
	  
	  <div class="social-links float-right">
        <a href="https://www.facebook.com/ce.cspit.charusat/" target="_blank" class=""><i class="fa fa-facebook"></i></a>
       <!-- <a href="" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a> -->
        <a href="https://www.instagram.com/ce_cspit_charusat/" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
        <!--<a href="" target="_blank" class="twitter"><i class="fa fa-skype"></i></a> -->
        <a href="https://in.linkedin.com/in/ce-cspit-charusat" target="_blank" class=""><i class="fa fa-linkedin"></i></a>
        <!--<a href="http://117.239.83.200:8110/CHARUSAT_Virtual_Tour/CSPIT/" target="_Blank" class="" style="color:red;">360 View <i class=" fa fa-video-camera" ></i></a>-->
      </div>
    </div>
  </section>

    <!--==========================
    Header
  ============================-->
  <header id="header">
  
    <div class="container">
    
      <div id="logo" class="pull-left">
        <h4><a href="index.php" class="scrollto"><span><h6>U & P U. Patel</h6>Department of Computer Engineering</span></a></h4>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
     
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children"><a href="index.php#about_us">About</a>
                    <ul>
                        <li><a href="index.php#vision">Vision</a></li>
                        <li><a href="index.php#mission">Mission</a></li>
                        <li><a data-toggle="modal" data-target="#peos">Program Education Objectives (PEOs)</a></li>
                        <li><a data-toggle="modal" data-target="#pos">Program Outcomes (POs)</a></li>
						<li><a data-toggle="modal" data-target="#psos">Program Specific Outcomes (PSOs)</a></li>
                    </ul>
                </li>
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
          

          <!-- <li class="menu-has-children"><a href="index.php#team">People</a></li>  -->         
          
          <li class="menu-has-children"><a href="#">Research Labs</a>
            <ul>
              <li><a href="index.php?v=lab_sd">Software Development Lab</a></li>
              <li><a href="index.php?v=lab_hpc">High Performance and Cloud Computing Lab</a></li>
              <li><a href="index.php?v=lab_network">Machine Learning Lab</a></li>
              <li><a href="index.php?v=lab_ins">Information and Network Security Research Lab</a></li>
              <li><a href="index.php?v=lab_iot">Internet Of Things and Embedded Software Research Lab</a></li>
              <li><a href="index.php?v=lab_ss">System Software and OS Lab</a></li>
              <li><a href="index.php?v=lab_bds">Big Data Analytics Research Lab</a></li>
              <li><a href="index.php?v=lab_mac">Mobile Application Development Lab</a></li>
            </ul>  
          </li>

          <!--<li class="menu-has-children"><a href="https://charusat.ac.in/admission/" target="_blank">Admission</a></li>-->
          <li class="menu-has-children"><a href="#">Admission</a>
            <ul>
              <li><a href="https://charusat.ac.in/admission/" target="_blank">B.Tech (CE)</a></li>
             <!-- <li><a href="https://charusat.ac.in/admission/" target="_blank">B.Tech (CSE)</a></li>-->
              <li><a href="mtech_ce" target="_blank">M.Tech (CE)</a></li>
              <li><a href="Phd_CE" target="_blank">Ph.D</a></li>
            </ul>  
          </li>
          
          <!--Menu added 18.09.2020 by Sagar Patel-->
          <li class="menu-has-children"><a href="#">Student Corner</a>
              <ul>
              <a href="https://drive.google.com/drive/folders/1m03qje4s6RNb-fncGnE6aRr2bK7lH7Kk?usp=drive_link">Syllabus</a>
              
                <!--<li><a href="index.php?v=s_feedback">Structured feedback-Review of Syllabus</a></li>-->
                <li><a href="https://sites.google.com/charusat.ac.in/cspitce/home?authuser=0" target="_blank">Academic Information</a></li>
                <li><a href="http://136.233.130.148:8082/lor_ce/" target="_blank">LOR</a></li>
                <!--<li><a href="https://forms.gle/Tnuxk5XK5Jsp3AqA8" target="_blank">Event Participation Request</a></li>
                <li><a href="https://forms.gle/bLLZehTrNsd7sU1h7" target="_blank">Event Participation Report</a></li>
                <li><a href="https://forms.gle/x4RD7dMjw92fDcfE7" target="_blank">Online Course Completion</a></li>
                <li><a href="https://forms.gle/1Ww2c2Mw6hYyQyUB8" target="_blank">Industry Project between Semester</a></li>
                <li><a href="https://forms.gle/TUrcjn2ajQW9EFPP6" target="_blank">Student Achievements</a></li>-->
            </ul>
          </li>
          <!--Student Corner Menu Ends here-->
          
        </ul>
      </nav><!-- #nav-menu-container -->
     
    </div>
   
  </header><!-- #header -->
  
  