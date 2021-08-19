<?php

namespace Utility;

class Navbar {
  static function createNavbar(array $links): string {
    $navText = '';
    
    if ($links) {
      foreach ($links as $link => $title) {
        $navText .= "<li><a class='nav-link scrollto' href='#gallery'>Gallery</a></li>";
      }
    }
    return <<<_END
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          {$navText}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    _END;
  }
}