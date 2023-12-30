<div class="autohide fixed fixed-top bg-white">
  <div class="container-lg">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp" class="" style="max-height: 48px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ms-5">
              <a class="nav-link active fw-bold" aria-current="page" href="#">
                Cloud Hosting <i class="bx bx-chevron-down"></i>
              </a>
            </li>
            <li class="nav-item ms-3 me-1">
              <a class="nav-link active fw-bold" href="#">
                Server <i class="bx bx-chevron-down"></i>
              </a>
            </li>
            <li class="nav-item ms-3 me-1">
              <a class="nav-link active fw-bold" href="#">
                Domain <i class="bx bx-chevron-down"></i>
              </a>
            </li>
            <li class="nav-item ms-3 me-1">
              <a class="nav-link active fw-bold" href="#">
                Email Suite <i class="bx bx-chevron-down"></i>
              </a>
            </li>
            <li class="nav-item ms-3 me-1">
              <a class="nav-link active fw-bold" href="#">
                Service <i class="bx bx-chevron-down"></i>
              </a>
            </li>

            <li class="nav-item ms-3 me-1">
              <a class="nav-link active fw-bold" href="#">
                Internet Access <i class="bx bx-chevron-down"></i>
              </a>
            </li>

            <li class="nav-item ms-3 me-1">
              <a class="nav-link active fw-bold" href="#">
                🎁 Promo
              </a>
            </li>

            <li class="nav-item ms-5 mt-2 mr-3">
              <button class="btn rounded-pill py-1 px-4 fw-bold btn-outline-primary">Login</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
  el_autohide = document.querySelector(".autohide");

  navbar_height = document.querySelector(".navbar").offsetHeight;
  document.body.style.paddingTop = navbar_height + "px";

  if (el_autohide) {
    var last_scroll_top = 0;
    window.addEventListener("scroll", function () {
      let scroll_top = window.scrollY;
      if (scroll_top < last_scroll_top) {
        el_autohide.classList.remove("scrolled-down");
        el_autohide.classList.add("scrolled-up");
      } else {
        el_autohide.classList.remove("scrolled-up");
        el_autohide.classList.add("scrolled-down");
      }
      last_scroll_top = scroll_top;
    });
  }
});
</script>

<!-- <script src="../../../../public/assets/js/custom.js"></script> -->