<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Streamline your bookkeeping and accounting with expert support. Accurate records, tax preparation, and financial insights to help your business grow.">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="{{ url()->current() }}" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="icon" type="image/svg+xml" href="/frontend/my-img/favicon.png" />
    <link rel="stylesheet" href="/frontend/assets/css/swiper.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/odometer.css" />
    <link rel="stylesheet" href="/frontend/assets/css/animate.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/my.css" />

    <title>@yield('title')</title>
  <script defer src="index.js"></script><link href="/frontend/style.css" rel="stylesheet"></head>
  <body>
    <!-- Header Section Start -->
    <header class="">
  <div class="top-0 left-0 right-0 z-50 header headerAbsolute 2">
    <div class="flex justify-between items-center container text-s1 py-6">
      <div class="pb-1 flex justify-start items-center gap-3">
        <button class="lg:hidden text-3xl mobileMenuOpenButton">
          <i class="ph ph-list"></i>
        </button>
        <a href="/">
          <img src="/frontend/my-img/logo.png" alt="accupay logo"  style="width:312px; height:55px;"/>
        </a>
      </div>
      <!-- Desktop Menu Start -->
      <nav class="max-lg:hidden">
        <ul class="flex justify-center items-center gap-3">
          <li class=""><a href="/" class="menu hover:header_menu_shadow duration-700 px-2 py-3 rounded-lg">Home</a></li>
          <li class=""><a href="/#about" class="menu hover:header_menu_shadow duration-700 px-2 py-3 rounded-lg">About Us</a></li>
          <li class=""><a href="/#contact" class="menu hover:header_menu_shadow duration-700 px-2 py-3 rounded-lg">Contact Us</a></li>
          
      </nav>
      <!-- Desktop Menu End -->

      <div
        class="flex justify-end items-center gap-2 sm:gap-6 xl:gap-10 font-medium max-sm:hidden"
      >
        <div class="flex justify-between items-center gap-1">
          <i
            class="ph ph-phone-call bg-s1 rounded-full text-s2 p-2 md:p-3 text-lg lg:text-2xl !leading-none"
          ></i>
          <a href="tel:+123456789" class="max-xl:hidden"> + 1234 567 865 </a>
        </div>
        <a
          href="#0"
          class="flex justify-center max-sm:text-sm items-center gap-3 py-2 md:py-3 px-3 md:px-6 rounded-full bg-s2 border border-mainTextColor text-mainTextColor group font-medium"
        >
          Get Started
          <i
            class="ph-bold ph-arrow-up-right group-hover:rotate-[45deg] duration-500 text-base sm:text-xl lg:text-2xl !leading-[0]"
          ></i>
        </a>
      </div>
    </div>
  </div>

  <!--  Mobile Menu Start -->
  <nav class="">
    <div
      class="fixed top-0 left-0 bg-s1/80 h-full w-full lg:hidden duration-700 z-[998] mobileMenuBg mobileMenuBgClose"
    ></div>

    <div
      class="flex justify-start flex-col items-start gap-8 pb-10 lg:gap-20 fixed lg:hidden top-0 left-0 w-3/4 min-[500px]:w-1/2 h-full bg-s2 overflow-y-auto duration-700 z-[999] mobileMenu mobileMenuClose"
    >
      <div class="flex justify-between items-center w-full p-4 sm:p-8">
        <!-- <a href="/">
          <img src="/frontend/my-img/logo.png" alt="logo" />
        </a> -->
        <i class="ri-close-line !text-3xl cursor-pointer mobileMenuCloseButton">
          <i class="ph ph-x"></i>
        </i>
      </div>

      <ul class="text-lg sm:text-xl flex gap-6 lg:gap-10 items-start flex-col pl-8">
        <li><a href="/" class="menu-hover hover:after:border-p1">Home</a></li>
        <li><a href="/#about" class="menu-hover hover:after:border-p1">About Us</a></li>
        <li><a href="/#contact" class="menu-hover hover:after:border-p1">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <!--  Mobile Menu End -->
</header>

@yield('content')


    <!-- Footer Section Start -->
<footer class="bg-mainTextColor text-white/60">
  <div class="container grid grid-cols-12 py-10 gap-6">

    <!-- 1st Column -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 flex flex-col gap-5">
      <a href="/">
          <img src="/frontend/my-img/footer-logo.png" alt="accupay logo"  style="width:312px; height:55px;"/>
        </a>

      <p>
        Your trusted partner in accounting and payroll solutions. We deliver
        precision, efficiency, and tailored services.
      </p>
    </div>

    <!-- 2nd Column -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4">
      <h4 class="text-white mb-5 pb-2 border-b border-p1 w-fit">Resources</h4>

      <ul class="flex flex-col gap-4">
</br>
        <li><a href="/" class="hover:text-white transition">Home</a></li>
        <li><a href="/#about" class="hover:text-white transition">About Page</a></li>
        <li><a href="/#contact" class="hover:text-white transition">Contact Us</a></li>
      </ul>
    </div>

    <!-- 3rd Column -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4">
      <h4 class="text-white mb-5 pb-2 border-b border-p1 w-fit">Get In Touch</h4>

      <ul class="flex flex-col gap-4">
        </br>
        <li>
          <a href="mailto:info@mail.com" class="flex items-center gap-2 hover:text-white transition">
            <i class="ph ph-envelope-simple-open text-2xl"></i> info@mail.com
          </a>
        </li>

        <li>
          <a href="tel:+1121254124" class="flex items-center gap-2 hover:text-white transition">
            <i class="ph ph-phone-call text-2xl"></i> +112 1254 124
          </a>
        </li>

        <li class="flex items-center gap-2">
          <i class="ph ph-paper-plane-tilt text-2xl"></i>
          255 Sheet, City Name Home Land, NY
        </li>
      </ul>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-white/10 mt-6">
    <div class="container py-5 flex justify-between items-center max-md:flex-col gap-4">
      <p class="text-center">
        Bookkeepings Biz © 2025. All Rights Reserved.
      </p>

      <div class="flex gap-4">
        <a href="/privacy-policy" class="hover:text-white transition">
          Privacy Policy
        </a>
        <span class="opacity-40">|</span>
        <a href="/terms-and-conditions" class="hover:text-white transition">
          Terms & Conditions
        </a>
      </div>
    </div>
  </div>
</footer>



    <!-- Footer Section End -->

    <!-- Scroll To top Button Start -->
    <button
  class="fixed text-white text-xl sm:text-2xl rounded-full bg-p1 hover:bg-s2 border border-p1 hover:border-white right-6 md:right-10 p-2 sm:p-3 z-40 jumping1 duration-700 scrollButton scrollButtonHide !leading-[0]"
  aria-label="bottom to top button"
>
  <span class="block">
    <i class="ph ph-arrow-up"></i>
  </span>
</button>

    <!-- Scroll To top Button End -->

    <!--==================================================================-->

    <!-- ==== js dependencies start ==== -->
    <script src="index.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
    <script src="/frontend/assets/js/plugins/plugins.js"></script>
    <script src="/frontend/assets/js/plugins/plugin-custom.js"></script>
  </body>
</html>
