<html lang="en-US" class="mdl-js">
<?php
  $paramUtil = new ParamUtil();
  $params = $paramUtil -> GetParamFromUri();
  $titleSearch = isset($params['title']) ? $params['title']: null;
?>
<head>
  <title>Document Solo Wallet API</title>
  <link rel="stylesheet" href="https://demos.themeselection.com/materio-mui-react-nextjs-admin-template/documentation/assets/css/0.styles.0bca5e50.css">
  <link rel="stylesheet" href="../assets/css/layout_admin_doc.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
  <div id="app">
    <div class="theme-container">
      <header class="navbar">
        <div class="sidebar-button"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" viewBox="0 0 448 512" class="icon">
            <path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z">
            </path>
          </svg></div> <a href="<?php echo ROOT_URL . 'developer/index' ?>" class="home-link router-link-active"> <span class="site-name can-hide">SOLO WALLET
            DOCS</span></a>
        <div class="links">
          <nav class="nav-links can-hide">
            <div class="nav-item"><a href="<?php echo ROOT_URL . 'user/index' ?>" class="nav-link ">
                Trang chủ
              </a></div>
            <div class="nav-item"><a href="<?php echo ROOT_URL . 'store/index' ?>" class="nav-link">
                Cửa hàng
              </a></div>
            <!---->
          </nav>
        </div>
      </header>

      <div class="sidebar-mask"></div>
      <aside class="sidebar">
        <ul class="sidebar-links">
          <form method="get">
            <div class="input-group">

              <div class="form-outline">
                <input id="search-box" type="text" class="form-control" style="border-radius:30px; width: 175px;" name="title" />
              </div>
              <button type="submit" class="ml-1 btn btn-primary" style="border-radius:30px">
                <i class="fas fa-search"></i>
              </button>

            </div>
          </form>
          <li>
            <section class="sidebar-group depth-0">
              <p class="sidebar-heading"><span>Development</span>
              </p>
              <ul class="sidebar-links sidebar-group-items">
                <?php foreach ($viewModel['docs'] as $element) : ?>
                  <li><a href="?id=<?php echo $element['id_doc'] ?>&title=<?php echo $titleSearch?>" class="sidebar-link"><?php echo $element['title'] ?></a></li>
                <?php endforeach; ?>
              </ul>
            </section>
          </li>
        </ul>
      </aside>
      <?php require($view) ?>
    </div>

  </div>
  <script>
    $(document).ready(function() {
      const urlParams = new URLSearchParams(window.location.search);
      const contentSearch = urlParams.get('contentSearch');
      if (contentSearch) {
        document.getElementById('search-box').value = contentSearch;
      }

    })
  </script>
</body>

</html>