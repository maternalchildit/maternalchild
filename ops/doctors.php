<?php
if ($database_connection) {
  $doctors = $db->select('staff_details', null, "office='doctor' AND delete_status=0");
  if ($doctors) {
    foreach ($doctors as $doctor) {
      $doctor['name'] = join(' ', $db->select('staff', 'lastname, firstname, middlename', "id=$doctor[staffid]")[0]);
      echo <<<_END
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="{$doctor['profilepic']}" class="img-fluid" alt="">
            <div class="social">
              <a href="{$doctor['twitter']}" target="_blank"><i class="bi bi-twitter"></i></a>
              <a href="{$doctor['facebook']}" target="_blank"><i class="bi bi-facebook" title="Facebook"></i></a>
              <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
              <a href="{$doctor['linkedin']}" target="_blank"><i class="bi bi-linkedin" title="LinkedIn"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>{$doctor['name']}</h4>
            <span>{$doctor['expertise']}</span>
          </div>
        </div>
      </div>
      _END;
    }
  }
}
