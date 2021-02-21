<template>
  <div>
    <header>
      <!-- Header Start -->
      <div class="header-area">
        <div class="main-header ">
          <div class="header-top black-bg d-none d-md-block">
            <div class="container">
              <div class="col-xl-12">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="header-info-left">
                    <ul>
                      <li><img src="/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                      <li><img src="/img/icon/header_icon1.png" alt="">Tuesday, 18th June, 2019</li>
                    </ul>
                  </div>
                  <div class="header-info-right">
                    <ul class="header-social">
                      <li><a href="#"><i class="fab fa-twitter" /></a></li>
                      <li><a href="#"><i class="fab fa-instagram" /></a></li>
                      <li> <a href="#"><i class="fab fa-pinterest-p" /></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-mid d-none d-md-block">
            <div class="container">
              <div class="row d-flex align-items-center">
                <!-- Logo -->
                <div class="col-xl-3 col-lg-3 col-md-3">
                  <div class="logo">
                    <router-link :to="{ name: 'welcome' }">
                      <img src="https://via.placeholder.com/185x62?text=LOGO" alt="">
                    </router-link>
                  </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                  <div class="header-banner f-right ">
                    <img src="https://via.placeholder.com/750x100?text=Banner+publicitario" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-bottom header-sticky">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                  <!-- sticky -->
                  <div class="sticky-logo">
                    <router-link :to="{ name: 'welcome' }">
                      <img src="https://via.placeholder.com/185x62?text=LOGO" alt="">
                    </router-link>
                  </div>
                  <!-- Main-menu -->
                  <div class="main-menu d-none d-md-block">
                    <Navbar />
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4">
                  <div class="header-right-btn f-right d-none d-lg-block">
                    <i class="fas fa-search special-tag" />
                    <div class="search-box">
                      <form action="#">
                        <input type="text" placeholder="Search">
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                  <div class="mobile_menu d-block d-md-none" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
    </header>

    <main>
      <child />
    </main>

    <footer>
      <!-- Footer Start-->
      <div class="footer-area footer-padding fix">
        <div class="container">
          <div class="row d-flex justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
              <div class="single-footer-caption">
                <div class="single-footer-caption">
                  <!-- logo -->
                  <div class="footer-logo">
                    <a href="index.html"><img src="https://via.placeholder.com/235x79?text=LOGO" alt=""></a>
                  </div>
                  <div class="footer-tittle">
                    <div class="footer-pera">
                      <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                    </div>
                  </div>
                  <!-- social -->
                  <div class="footer-social">
                    <a href="#"><i class="fab fa-twitter" /></a>
                    <a href="#"><i class="fab fa-instagram" /></a>
                    <a href="#"><i class="fab fa-pinterest-p" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
              <div class="single-footer-caption mt-60">
                <div class="footer-tittle">
                  <h4>Newsletter</h4>
                  <p>Heaven fruitful doesn't over les idays appear creeping</p>
                  <!-- Form -->
                  <div class="footer-form">
                    <div id="mc_embed_signup">
                      <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="subscribe_form relative mail_part"
                      >
                        <input id="newsletter-form-email" type="email" name="email" placeholder="Email Address"
                               class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                               onblur="this.placeholder = ' Email Address '"
                        >
                        <div class="form-icon">
                          <button id="newsletter-submit" type="submit" name="submit"
                                  class="email_icon newsletter-submit button-contactForm"
                          >
                            <img src="/img/logo/form-iocn.png" alt="">
                          </button>
                        </div>
                        <div class="mt-10 info" />
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
              <div class="single-footer-caption mb-50 mt-60">
                <div class="footer-tittle">
                  <h4>Instagram Feed</h4>
                </div>
                <div class="instagram-gellay">
                  <ul class="insta-feed">
                    <li><a href="#"><img src="https://picsum.photos/seed/picsum/80" alt=""></a></li>
                    <li><a href="#"><img src="https://picsum.photos/seed/picsum/80" alt=""></a></li>
                    <li><a href="#"><img src="https://picsum.photos/seed/picsum/80" alt=""></a></li>
                    <li><a href="#"><img src="https://picsum.photos/seed/picsum/80" alt=""></a></li>
                    <li><a href="#"><img src="https://picsum.photos/seed/picsum/80" alt=""></a></li>
                    <li><a href="#"><img src="https://picsum.photos/seed/picsum/80" alt=""></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom aera -->
      <div class="footer-bottom-area">
        <div class="container">
          <div class="footer-border">
            <div class="row d-flex align-items-center justify-content-between">
              <div class="col-lg-6">
                <div class="footer-copy-right">
                  <p>
                    Copyright &copy; {{ new Date().getFullYear() }} All rights reserved
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="footer-menu f-right">
                  <ul>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End-->
    </footer>
  </div>
</template>

<script>
import Navbar from '~/components/main/Navbar'

export default {
  name: 'FrontLayout',
  components: {
    Navbar
  }
}
</script>

<style lang="scss">

</style>
