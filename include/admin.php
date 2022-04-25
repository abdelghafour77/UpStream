  <!--========== HEADER ==========-->
  <header class="header">
      <div class="header__container">
          <!-- <img src="../img/photo/" class="header__img" /> -->

          <a href="../index" class="header__logo">UpStream</a>

          <div class="header__toggle">
              <i class="bx bx-align-right " id="header-toggle"></i>
          </div>
      </div>
  </header>

  <!--========== NAV ==========-->
  <div class="nav" id="navbar">
      <nav class="nav__container">
          <div>
              <a href="../index" class="nav__link nav__logo">
                  <!-- <i class='bx bxs-disc nav__icon'></i> -->
                  <i class='bx bx-camera-movie nav__icon'></i>
                  <!-- <img src="../img/mini-logo.png" class="nav__icon" alt="UpStream" width="20" height="20" /> -->
                  <span class="nav__logo-name">UpStream</span>
              </a>
              <div class="nav__list">
                  <div class="nav__items">
                      <!-- <h3 class="nav__subtitle">Profile</h3> -->
                      <a href="../index" class="nav__link ">
                          <i class="bx bx-home nav__icon"></i>
                          <span class="nav__name">Home</span>
                      </a>
                  </div>

                  <div class="nav__items">

                      <div class="nav__dropdown">
                          <a href="#" class="nav__link">
                              <i class='bx bxs-movie-play nav__icon'></i>
                              <span class="nav__name">Movie</span>
                              <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
                          </a>

                          <div class="nav__dropdown-collapse">
                              <div class="nav__dropdown-content">
                                  <a href="../movie/create" class="nav__dropdown-item">Add</a>
                                  <a href="../movie/update" class="nav__dropdown-item">Update</a>
                                  <a href="../movie/delete" class="nav__dropdown-item">Delete</a>
                              </div>
                          </div>
                      </div>
                      <div class="nav__dropdown">
                          <a href="#" class="nav__link">
                              <i class='bx bxs-user nav__icon'></i>
                              <span class="nav__name">Actor</span>
                              <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
                          </a>

                          <div class="nav__dropdown-collapse">
                              <div class="nav__dropdown-content">
                                  <a href="../actor/create" class="nav__dropdown-item">Add</a>
                                  <a href="../actor/update" class="nav__dropdown-item">Update</a>
                                  <a href="../actor/delete" class="nav__dropdown-item">Delete</a>
                              </div>
                          </div>
                      </div>

                      <div class="nav__dropdown">
                          <a href="#" class="nav__link">
                              <i class='bx bxs-category nav__icon'></i>
                              <span class="nav__name">Category</span>
                              <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
                          </a>

                          <div class="nav__dropdown-collapse">
                              <div class="nav__dropdown-content">
                                  <a href="../category/create" class="nav__dropdown-item">Add</a>
                                  <a href="../category/update" class="nav__dropdown-item">Update</a>
                                  <a href="../category/delete" class="nav__dropdown-item">Delete</a>
                              </div>
                          </div>
                      </div>
                      <?php if ($_SESSION['super'] == 1) { ?>

                          <div class="nav__dropdown">
                              <a href="../user/list_users" class="nav__link">
                                  <i class='bx bx-list-ul nav__icon'></i>
                                  <span class="nav__name">List of Users</span>
                              </a>
                          </div>
                      <?php } ?>
                  </div>
              </div>
          </div>

          <a href="../user/logout" class="nav__link nav__logout">
              <i class="bx bx-log-out nav__icon"></i>
              <span class="nav__name">Log out</span>
          </a>
      </nav>
  </div>