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
        <a href="https://www.facebook.com/cspitec" target="_blank" class=""><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/CspitEc" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/ec_cspit_charusat/" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
        <a href="live:.cid.47a464178ad442e4" target="_blank" class="twitter"><i class="fa fa-skype"></i></a>
        <a href="https://in.linkedin.com/school/department-of-ec-engineering-charusat-university/" target="_blank" class=""><i class="fa fa-linkedin"></i></a>
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
        <h3><a href="index.php" class="scrollto"><span><h6>V.T.Patel Department of</h6><?=$data['name_of_dept']?></span></a></h3>
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
          <!--<li class="menu-has-children"><a href="index.php?view=home#team">People</a></li>-->
          <li class="menu-has-children"><a href="#">Research Labs</a>
             <ul>
			  <li><a href="index.php?view=lab_MASC"> Microwave  and Satellite</a></li>
			  <li><a href="index.php?view=lab_AP">  Application Package I & II</a></li>
			  <li><a href="index.php?view=lab_PL">PROJECT LAB I & II</a></li>
			  <li><a href="index.php?view=lab_PGL">POST GRADUATE LAB</a></li>
			  <!--<li><a href="index.php?view=lab_CS">CONTROL SYSTEM </a></li>-->
			  <li><a href="index.php?view=lab_NA"> Network Analysis </a></li>
              <li><a href="index.php?view=lab_EDC">Electronic Circuit Design </a></li>
              <li><a href="index.php?view=lab_PE">Power Electronics</a></li>                  
              <li><a href="index.php?view=lab_COS">Communication Systems</a></li>
            </ul>
          </li>
          <!--<li class="menu-has-children"><a href="https://cspitec.com/home" target="_blank">Department</a></li>-->
          <li><a href="./files/ec_equipments.pdf" target="_blank">Lab Equipments</a></li>
          <li class="menu-has-children"><a href="https://charusat.ac.in/admission/" target="_blank">Admission</a></li>
          <li class="menu-has-children"><a href="#">Student Corner</a>

            <ul style="display: none;">
              
              <li><a href="https://www.charusat.ac.in/Downloads/Academic%20Calenders/CSPIT/">Academic Calendar</a></li>
              <li><a href="https://drive.google.com/drive/folders/10T2O40JtsVkJKebmZ5px0msGly78VR-K?usp=drive_link">Syllabus</a></li>
              <!--<li><a href="https://www.charusat.ac.in/Downloads/Practical%20List%20and%20Lab%20Manual/CSPIT/EC/">Practical Lists</a></li>-->
              <li><a href="https://www.charusat.ac.in/Downloads/Question-Papers/CSPIT/">Question Papers</a></li>
              
               <li><a href="https://charusat.edu.in:912/eGovernance/home.aspx" target="_blank">e-Governance Link</a></li>
               <li><a href="https://charusat.edu.in:912/UniExamResult/" target="_blank">Exam Result</a></li>
              
              
            </ul>
            
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->