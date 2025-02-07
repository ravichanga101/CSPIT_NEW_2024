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
      <a href="/cspit/cse/files/ODD-SEM-BTech-Academic-Calendar-2023-24-(June - Nov).pdf" target="_blank"> Academic Calendar |</a>
      <a href="https://drive.google.com/drive/folders/1lroaFy9M2O45gpe7YOsFbJKc1sMsdH50?usp=drive_link"> Syllabus |</a>
        <a href="https://www.charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/CSE/"> Practical Lists |</a>
             <a href="https://www.charusat.ac.in/Downloads/Question%20Papers/CSPIT/"> Question Papers |</a>
	  
	  <div class="social-links float-right">
        <a href="https://www.facebook.com/profile.php?id=100080061491917" target="_blank" class=""><i class="fa fa-facebook"></i></a>
        <a href="" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/cse_cspit?igsh=cWNpbXdlaDZzb2I3" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
        <a href="" target="_blank" class="twitter"><i class="fa fa-skype"></i></a>
        <a href="https://www.linkedin.com/in/cspit-cse/" target="_blank" class=""><i class="fa fa-linkedin"></i></a>
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
        <h4><a href="index.php" class="scrollto"><span>Department of Computer Science<br/> & Engineering</span></a></h4>
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
          

          <!--<li class="menu-has-children"><a href="index.php#team">People</a></li>          -->
          
          <li class="menu-has-children"><a href="#">Research Labs</a>
            <ul>
              <li><a href="index.php?v=lab_aiml">AI-ML Lab</a></li>
              <li><a href="index.php?v=lab_osl">Open Source Lab</a></li>
              <li><a href="index.php?v=lab_csl">Cyber Security Lab</a></li>
              <li><a href="index.php?v=lab_del">Data Engineering Lab</a></li>
              <li><a href="index.php?v=lab_acl">Advanced Computing Lab</a></li>
              <li><a href="index.php?v=lab_pl">Programming Lab</a></li>
              <li><a href="index.php?v=lab_mwd">Mobile & Web Development Lab</a></li>
              <!--<li><a href="index.php?v=lab_hpc">High Performance and Cloud Computing Lab</a></li>-->
              <!--<li><a href="index.php?v=lab_network">Network Research Lab</a></li>-->
              <!--<li><a href="index.php?v=lab_ins">Information and Network Security Research Lab</a></li>-->
              <!--<li><a href="index.php?v=lab_iot">Internet Of Things and Embedded Software Research Lab</a></li>-->
              <!--<li><a href="index.php?v=lab_ss">System Software and OS Lab</a></li>-->
              <!--<li><a href="index.php?v=lab_bds">Big Data Analytics Research Lab</a></li>-->
            </ul>  
          </li>
          <li> <a href="./files/equipments/cse-equipments.pdf" target="_blank">Lab Equipments</a> </li>
          <!--<li class="menu-has-children"><a href="https://admission.charusat.ac.in/" target="_black">Admission</a></li>-->
          <li class="menu-has-children"><a href="#">Admission</a>
            <ul>
              <!--<li><a href="https://charusat.ac.in/admission/" target="_black">B.Tech (CE)</a></li>-->
              <li><a href="https://admission.charusat.ac.in/" target="_black">B.Tech (CSE)</a></li>
              <!--<li><a href="https://charusat.ac.in/cspit/ce/mtech_ce" target="_black">M.Tech</a></li>-->
            </ul>  
          </li>
          
          <!--Menu added 18.09.2020 by Sagar Patel-->
          <li class="menu-has-children"><a href="#">Student Corner</a>
              <ul>
                <li><a href="https://charusat.ac.in/Downloads/Syllabus/FTE%20CSPIT/CSE/">Syllabus</a></li>
                <li><a href="https://charusat.edu.in:912/FeesPaymentApp/">Fees Payment</a></li>
                <li><a href="https://charusat.edu.in:912/UniExamResult/">University Result</a></li>
                <li><a href="https://drive.google.com/drive/u/0/folders/1rLhys1Xg9HDg9z_QBYujskha4Ip4e7RG">University Papers</a></li>
                <li><a href="https://drive.google.com/drive/folders/155sBeH_wX6WgCtZ8miIq0x_RgjEggSGt?usp=sharing">Download Forms</a></li>
                <li><a href="https://shorturl.at/gqJ56">Server Usage Request Form</a></li>
                <li><a href="https://shorturl.at/goxJ6">Hardware Usage Request Form</a></li>
                
                
                
                <!--<li><a href="https://sites.google.com/charusat.ac.in/cspitce/faculty-projects" target="_black">Faculty Open Projects</a></li>-->
                <!--<li><a href="https://www.charusat.ac.in/cspit/ce/lor" target="_black">LOR</a></li>-->
                <!--<li><a href="https://forms.gle/Tnuxk5XK5Jsp3AqA8" target="_black">Event Participation Request</a></li>-->
                <!--<li><a href="https://forms.gle/bLLZehTrNsd7sU1h7" target="_black">Event Participation Report</a></li>-->
                <!--<li><a href="https://forms.gle/x4RD7dMjw92fDcfE7" target="_black">Online Course Completion</a></li>-->
                <!--<li><a href="https://forms.gle/1Ww2c2Mw6hYyQyUB8" target="_black">Industry Project between Semester</a></li>-->
                <!--<li><a href="https://forms.gle/TUrcjn2ajQW9EFPP6" target="_black">Student Achievements</a></li>-->
            </ul>
          </li>
          <!--Student Corner Menu Ends here-->
          
        </ul>
      </nav><!-- #nav-menu-container -->
     
    </div>
   
  </header><!-- #header -->
  
  
