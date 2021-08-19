<?php
if ($database_connection) {
  $testimonials = $db->select('testimonials', null, "delete_status = '0'");
  if ($testimonials) {
    foreach ($testimonials as $testimonial) {
      echo <<<_END
      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {$testimonial['testimonial']}
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="{$testimonial['profilepic']}" class="testimonial-img" alt="">
          <h3>{$testimonial['name']}</h3>
          <h4>{$testimonial['description']}</h4>
        </div>
      </div>

_END;
    }
  }
}
?>
