<main id="main">
<section id="about_us" class="wow fadeInUp">
      <div class="container">
          <div class="section-header">
            <h2></h2><h2 style="padding-top: 20px">About Us</h2>
          </div>
          <h5>The Department of <?=$data['name_of_dept']?> (Estd. <?=$data['dept_esta']?>) offers <?=$data['dept_b_tech_seats']?> seats in B. Tech. (CSE).</h5>
	   
  <div class="row">
    <div class="col-sm text-center">
      <section id="services" class="wow fadeInUp">
  <div class="container">
        <div class="services-content container">
      <div class="row">
          <div class="col-lg-4 content">
          <h2><center><b><?=$data['total_publications']?></b></center></h2>
          <p><h3><center>Publications</center></h3></p>

          </div>

          <div class="col-lg-4 content">
          <h2><center><b><?=$data['student_teacher_ratio']?></b></center></h2>
          <p><h3><center>Student Teacher Ratio</center></h3></p>
          </div>

          <div class="col-lg-4 content">
          <h2><center><b><?=$data['total_number_of_student']?></b></center></h2>
          <p><h3><center>Number of Students</center></h3></p>

          </div>
        </div>
    </div>
</main>
<section id="services">

    <div class="services-content container">
      <div class="row">
          <div class="col-lg-4 content">
          <h2><center><b><?=$data['total_workshops_org']?></b></center></h2>
          <p><h3><center>Event Organized</center></h3></p>

          </div>

          <div class="col-lg-4 content">
          <h2><center><b><?=$data['total_projects_and_grants']?></b></center></h2>
          <p><h3><center>Grant Received</center></h3></p>
          </div>

          <div class="col-lg-4 content">
          <h2><center><b><?=$data['placement_percent']?></b></center></h2>
          <p><h3><center>Placement - <?=$data['placement_year']?></center></h3></p>
          </div>
        </div>
    </div>
</section>