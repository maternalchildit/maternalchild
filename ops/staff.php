<?php
if ($database_connection) {
  $staff = $db->select('staff_details', null, "delete_status=0");
  if ($staff) {
    foreach ($staff as $person) {
      $person['name'] = join(' ', $db->select('staff', 'lastname, firstname, middlename', "id=$person[staffid]")[0]);
      echo <<<_END
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch rounded rounded-lg border p-0 mx-2" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="member-img">
            <img src="{$person['profilepic']}" class="img-fluid" alt="">
      _END;

      echo <<<_END
        <div class="social py-3 ps-1">
          <a href="{$person['twitter']}" target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="{$person['facebook']}" target="_blank"><i class="bi bi-facebook" title="Facebook"></i></a>
          <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
          <a href="{$person['linkedin']}" target="_blank"><i class="bi bi-linkedin" title="LinkedIn"></i></a>
        </div>
      </div>
          <div class="member-info p-1">
            <h4>{$person['name']}</h4>
            <span>{$person['expertise']}</span>
          </div>
        </div>
      </div>
      _END;
    }
  }
}
