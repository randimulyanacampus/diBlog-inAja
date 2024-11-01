<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- remixicon link cdn -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
  <!-- link fonts material google -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <title>{{ $title_website }} | RandzCode</title>
</head>

<body>


  @include('partials.navbar')

  <div class="container">
    @yield('content')
  </div>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-top">
        <div>
          <h6 class="footer-title">Microsoft Store</h6>
          <ul class="footer-list">
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">About</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Careers</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Affiliates</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Sitemap</a>
            </li>
          </ul>
        </div>
        <div>
          <h6 class="footer-title">Microsoft Store</h6>
          <ul class="footer-list">
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">About</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Careers</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Affiliates</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Sitemap</a>
            </li>
          </ul>
        </div>
        <div>
          <h6 class="footer-title">Microsoft Store</h6>
          <ul class="footer-list">
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">About</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Careers</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Affiliates</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Sitemap</a>
            </li>
          </ul>
        </div>
        <div>
          <h6 class="footer-title">Microsoft Store</h6>
          <ul class="footer-list">
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">About</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Careers</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Affiliates</a>
            </li>
            <li class="footer-list-item">
              <a href="#" class="footer-list-link">Sitemap</a>
            </li>
          </ul>
        </div>
      </div>

      <hr class="footer-divider">

      <div class="footer-bottom">
        <span class="copyright">&copy; 2024 RandzCode. All right reselved.</span>
        <ul class="footer-list">
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">
              <i class="ri-facebook-circle-line"></i>
            </a>
          </li>
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">
              <i class="ri-instagram-line"></i>
            </a>
          </li>
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">
              <i class="ri-twitter-line"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </footer>

  <script src="js/script.js"></script>

</body>

</html>