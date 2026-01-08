@extends('layouts.frontend')
@section('title') Bookkeeping & Accounting Solutions | Bookkeepings Biz @endsection
@section('content')

    <!-- Header Section End -->

    <!-- Hero Section Start -->
    <section class="bg-repeat stp-30 hero_bg_gradient overflow-hidden">
      <img
        src="/frontend/assets/images/hero_bg_element1.png"
        alt="image"
        class="absolute top-0 left-0 xxxl:left-36 max-lg:w-[300px] max-xxl:w-[500px] max-md:hidden"
      />
      <img
        src="/frontend/assets/images/hero_bg_element2.png"
        alt="image"
        class="absolute top-0 right-0 max-xxl:w-[300px] max-sm:hidden"
      />
      <div
        class="absolute -left-[200px] -bottom-1/2 bg-white blur-[200px] rounded-[1176px] max-w-full lg:w-[1176px] h-[1176px] overflow-hidden"
      ></div>
      <div
        class="xxl:ml-[calc((100%-1296px)/2)] lg:max-xxl:py-10 max-xxl:container relative z-20 max-lg:pt-15 text-s1 grid grid-cols-12"
      >
        <img
          src="/frontend/assets/images/hero_bg_element3.png"
          alt="image"
          class="absolute top-1/3 left-1/3 max-sm:hidden"
        />
        <div
          class="col-span-12 lg:col-span-5 flex flex-col justify-center gap-2"
        >
          <h1
            class="uppercase text-base lg:text-xl font-semibold animate__animated animate__fadeInUp"
          >
            Welcome to Bookkeeping Bizzzzz
</h1>
          <div class="display-2">
           Professional 
          
            <div class="text-s3 inline-flex">Online Bookkeeping</div>
            <br />
           & Accounting Solutions
          </div>
          <p class="max-w-[550px]">
           Bookkeeping Biz delivers accurate, organized, and compliance-ready financial records trusted by businesses of all sizes.
          </p>
          <div class="flex justify-start items-center gap-4 pt-6 lg:pt-8 pb-15">
            <a
              href="tel:+1234567890"
              class="font-medium bg-s2 py-2 lg:py-3 px-4 lg:px-6 rounded-full text-mainTextColor"
            >
             Speak With An Expert
            </a>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-6 lg:col-start-7">
          <img src="/frontend/assets/images/hero_illus.png" alt="image" />
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Company Slider Start -->
    <section
  class="stp-15 sbp-15 container grid grid-cols-12 gap-6 border-b border-strokeColor"
>
  <!-- Left Content -->
  <div class="col-span-12 sm:col-span-6 xl:col-span-4">
    <p
      class="text-xl lg:text-2xl text-bodyText relative after:absolute after:top-[55%] after:right-0 after:w-[50px] after:h-[2px] after:bg-bodyText max-xxl:after:content-none"
    >
      <span class="font-bold text-mainTextColor">
        Industries We Serve
      </span>
      Helping startups and businesses of all sizes succeed financially.
    </p>
  </div>

  <!-- Slider -->
  <div class="col-span-12 sm:col-span-6 xl:col-span-8 pt-4">
    <div class="swiper company-images-carousel sponsors">
      <div class="swiper-wrapper">

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/sm-business.png" alt="Small Business" />
        </div>

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/startup.png" alt="Startup" />
        </div>

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/real-estate.png" alt="Real Estate" />
        </div>

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/pvt.png" alt="Private Company" />
        </div>

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/lodge.png" alt="Hospitality" />
        </div>

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/health.png" alt="Healthcare" />
        </div>

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/e-com.png" alt="E-commerce" />
        </div>

        <div class="swiper-slide flex justify-center items-center">
          <img src="/frontend/my-img/colleges-and-uni.png" alt="Education" />
        </div>

      </div>
    </div>
  </div>
</section>


    <!-- Company Slider End -->

    <!-- Solutions Section Start -->
    <section class="stp-30 sbp-30 relative" id="about">
      <img
        src="/frontend/assets/images/circleIcon.png"
        alt="circle icon"
        class="absolute top-10 left-0 max-xxl:hidden xxl:-left-72 xxxl:-left-40"
      />
      <img
        src="/frontend/assets/images/sliceIcon.png"
        alt="slice icon"
        class="absolute right-0 sm:right-2 lg:right-10 top-10 xl:top-32 max-md:h-[80px]"
      />
      <div class="container z-10 relative">
        <div class="grid grid-cols-12 stp-15 max-lg:gap-6">
          <div class="col-span-12 lg:col-span-6">
            <div
              class="flex justify-center items-center overflow-hidden self-stretch"
            >
              <img
                src="/frontend/assets/images/solution_illustrations.png"
                alt="image"
                class="hover:scale-110 duration-500 w-full"
              />
            </div>
          </div>
          <div
            class="col-span-12 lg:col-start-8 lg:col-span-5 flex justify-center items-start flex-col"
          >
            <h2 class="heading-1 pb-5">Your Trusted Bookkeeping & Accounting Partner</h2>
            <p class="text-bodyText">
             At Bookkeeping Biz, we provide precise, transparent, and compliance-ready bookkeeping and accounting solutions tailored to your business needs. Our goal is to keep your financial records clean, updated, and audit-ready at all times.
            </p>
            <div class="grid grid-cols-2 gap-4 lg:gap-6 py-6 lg:py-10 w-full">
              <!-- Accurate Bookkeeping -->
              <div class="group col-span-2 sm:col-span-1 flex justify-start items-center gap-5">
                <i class="ph-fill ph-notebook rounded-full border border-strokeColor bg-softBg w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] text-4xl text-s1 group-hover:text-mainTextColor group-hover:bg-s2 group-hover:border-mainTextColor duration-500 !leading-[0] flex justify-center items-center"></i>
                <p class="text-lg font-medium group-hover:text-s1 duration-500">Accurate Bookkeeping</p>
              </div>

              <!-- Financial Statement -->
              <div class="group col-span-2 sm:col-span-1 flex justify-start items-center gap-5">
                <i class="ph-fill ph-chart-line-up rounded-full border border-strokeColor bg-softBg w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] text-4xl text-s1 group-hover:text-mainTextColor group-hover:bg-s2 group-hover:border-mainTextColor duration-500 !leading-[0] flex justify-center items-center"></i>
                <p class="text-lg font-medium group-hover:text-s1 duration-500">Financial Statement</p>
              </div>

              <!-- Affordable Accounting -->
              <div class="group col-span-2 sm:col-span-1 flex justify-start items-center gap-5">
                <i class="ph-fill ph-currency-dollar rounded-full border border-strokeColor bg-softBg w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] text-4xl text-s1 group-hover:text-mainTextColor group-hover:bg-s2 group-hover:border-mainTextColor duration-500 !leading-[0] flex justify-center items-center"></i>
                <p class="text-lg font-medium group-hover:text-s1 duration-500">Affordable Accounting</p>
              </div>

              <!-- Business Growth Support -->
              <!-- Business Growth Support -->
            <div class="group col-span-2 sm:col-span-1 flex justify-start items-center gap-5">
              <i class="ph-fill ph-arrow-up-right rounded-full border border-strokeColor bg-softBg w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] text-4xl text-s1 group-hover:text-mainTextColor group-hover:bg-s2 group-hover:border-mainTextColor duration-500 !leading-[0] flex justify-center items-center"></i>
              <p class="text-lg font-medium group-hover:text-s1 duration-500">Business Growth Support</p>
            </div>

            </div>
            <div class="flex justify-start items-start">
              <a
                href="#0"
                class="flex justify-center max-sm:text-sm items-center gap-3 py-2 md:py-3 px-3 md:px-6 rounded-full bg-s2 border border-mainTextColor text-mainTextColor group font-medium"
              >
                Contact Us
                <span
                  class="group-hover:rotate-[45deg] duration-500 text-base sm:text-xl lg:text-2xl !leading-[0]"
                >
                  <i class="ph-bold ph-arrow-up-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Solutions Section End -->


  <section class="bg-softBg1 stp-30 sbp-30 overflow-hidden">
  <div class="container">

    <!-- Section Header -->
    <div class="flex justify-between items-end gap-6 max-lg:flex-col max-lg:items-start">
        <div class="max-w-[600px] flex justify-center items-start flex-col">
          <p class="bg-p1 py-3 px-5 rounded-full text-white">Our Services</p>
          <h2 class="display-4 pt-4">What We Offer</h2>
        </div>
        <p class="text-bodyText max-w-[500px]">
        At Bookkeeping Biz, we provide complete financial solutions designed to keep your books accurate, your compliance on track, and your business running smoothly. Our services are simple, reliable, and tailored to your business needs.
        </p>
      </div>
    <!-- Services Grid -->
    <div class="grid grid-cols-12 gap-6 stp-15">

      <!-- Card -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="bg-white h-full p-6 xl:py-10 xl:px-12 flex flex-col items-center text-center
                 border border-transparent group hover:border-mainTextColor
                 duration-500 hover:bg-s2 wow animate__animated animate__fadeInUp">

          <h4 class="heading-4 mb-4">Bookkeeping</h4>

          <p class="text-mainTextColor/70 leading-relaxed max-w-[300px]">
            At Bookkeeping Biz, we offer clean, organized, and up-to-date
            bookkeeping for businesses of every size. From reconciliation to
            financial reporting, we keep your books accurate and audit-ready.
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="bg-white h-full p-6 xl:py-10 xl:px-12 flex flex-col items-center text-center
                 border border-transparent group hover:border-mainTextColor
                 duration-500 hover:bg-s2 wow animate__animated animate__fadeInUp">


          <h4 class="heading-4 mb-4">Payroll</h4>

          <p class="text-mainTextColor/70 leading-relaxed max-w-[300px]">
            Bookkeeping Biz delivers efficient, timely, and compliant payroll services. We handle salary calculations, deductions, payslips, and regulatory filings—so you can focus on managing your team with confidence.
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="bg-white h-full p-6 xl:py-10 xl:px-12 flex flex-col items-center text-center
                 border border-transparent group hover:border-mainTextColor
                 duration-500 hover:bg-s2 wow animate__animated animate__fadeInUp">


          <h4 class="heading-4 mb-4">Tax & Accounting</h4>

          <p class="text-mainTextColor/70 leading-relaxed max-w-[300px]">
           Bookkeeping Biz is your dependable partner for tax preparation, filing, and accounting support. We help you maintain compliance, reduce risks, and optimize your finances with expert guidance.
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="bg-white h-full p-6 xl:py-10 xl:px-12 flex flex-col items-center text-center
                 border border-transparent group hover:border-mainTextColor
                 duration-500 hover:bg-s2 wow animate__animated animate__fadeInUp">

          <h4 class="heading-4 mb-4">CFO Advisory</h4>

          <p class="text-mainTextColor/70 leading-relaxed max-w-[300px]">
           Our CFO Advisory Services give you access to strategic financial insights from seasoned professionals. From forecasting to budgeting, we help you make confident, growth-focused decisions.
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="bg-white h-full p-6 xl:py-10 xl:px-12 flex flex-col items-center text-center
                 border border-transparent group hover:border-mainTextColor
                 duration-500 hover:bg-s2 wow animate__animated animate__fadeInUp">

          <h4 class="heading-4 mb-4">Incorporation</h4>

          <p class="text-mainTextColor/70 leading-relaxed max-w-[300px]">
           With extensive industry experience, Bookkeeping Biz offers smooth and hassle-free business incorporation support. We guide you through documentation, compliance, and setup to help you get started the right way.
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="bg-white h-full p-6 xl:py-10 xl:px-12 flex flex-col items-center text-center
                 border border-transparent group hover:border-mainTextColor
                 duration-500 hover:bg-s2 wow animate__animated animate__fadeInUp">

          <h4 class="heading-4 mb-4">Sales Tax Consulting</h4>

          <p class="text-mainTextColor/70 leading-relaxed max-w-[300px]">
           At Bookkeeping Biz, our qualified tax specialists provide reliable sales tax consulting, filing assistance, and compliance management—ensuring your business stays penalty-free and always up to date.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>



    <!-- Why Accupay Section End -->

    <!-- Experience Accupay Section Start -->
    <div class="bg-p1 pt-15 overflow-hidden">
      <div
        class="max-xxl:container xxl:ml-[calc((100%-1296px)/2)] flex justify-between text-white sm:max-xxl:gap-6 max-lg:flex-col"
      >
        <div
          class="flex flex-col justify-center items-start w-full lg:max-xxl:w-1/2 xxl:max-w-[550px] max-xxl:pb-8 max-xxl:overflow-hidden"
        >

          <h2
            class="display-4 pb-6 pt-4 wow animate__animated animate__fadeInDown"
          >
            We’ve got everything you need?
          </h2>

          <p class="pb-8 wow animate__animated animate__fadeInUp">
            We save you from all that boring paperwork! From global hiring, to
            instant payments, and taxes, we’ve got your back.
          </p>

          <a
            href="#0"
            class="flex justify-center max-sm:text-sm items-center gap-3 py-2 md:py-3 px-3 md:px-6 rounded-full bg-s2 border border-mainTextColor text-mainTextColor group font-medium"
          >
            Contact Us
            <span
              class="group-hover:rotate-[45deg] duration-500 text-base sm:text-xl lg:text-2xl"
            >
              <i class="ph-bold ph-arrow-up-right"></i>
            </span>
          </a>
        </div>
        <div
          class="w-full lg:max-xxl:w-1/2 self-stretch flex justify-center max-xxl:items-center lg:pt-10 wow animate__animated animate__fadeInUp"
        >
          <img
            src="/frontend/assets/images/contact_illus.png"
            alt="image"
            class="object-cover"
          />
        </div>
      </div>
    </div>
    <!-- Experience Accupay Section End -->

    <!-- Testimonial Section Start -->
  

    <!-- Testimonial Section End -->

    <!-- Pricing Section Start -->
  <section class="bg-softBg1 stp-30 sbp-30 overflow-hidden">
  <div class="container">

    <!-- Heading -->
    <div class="flex justify-center items-center">
      <div class="text-center flex flex-col items-center max-w-[700px]">
        <p class="bg-p1 py-2 sm:py-3 px-5 rounded-full text-white wow animate__animated animate__fadeInUp">
          Pricing
        </p>

        <h2 class="display-4 pt-4 pb-4 lg:pb-6 wow animate__animated animate__fadeInDown">
          Flexible Accounting Packages
        </h2>

        <p class="text-bodyText wow animate__animated animate__fadeInUp">
          At Bookkeepings Biz, we believe in providing clear and flexible pricing
          options tailored to your business needs.
        </p>
      </div>
    </div>

    <!-- Pricing Grid -->
    <div class="grid grid-cols-12 gap-6 stp-15">

      <!-- Personal Plan -->
      <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 sm:p-10 border border-strokeColor bg-white hover:bg-s2 duration-700 group wow animate__animated animate__fadeInUp">
        <h3 class="heading-3 pt-5 pb-4">Personal Plan</h3>
        <p class="text-bodyText pb-8">
          Start a business on solid foundations, the fundamentals you'd want to have.
        </p>

        <p class="pb-6">
          <span class="display-4">$29</span>
          <span class="text-bodyText"> / monthly</span>
        </p>

        <ul class="text-bodyText flex flex-col gap-5 pb-8">
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Basic bookkeeping setup</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Tax filing guidance</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Monthly reports</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Business registration help</li>
        </ul>
</br>
        <a href="#0" class="py-4 w-full bg-s1 text-white rounded-full flex justify-center items-center gap-2 hover:bg-mainTextColor">
          Get Started <i class="ph ph-arrow-right"></i>
        </a>
      </div>

      <!-- CFO Advisory -->
      <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 sm:p-10 border border-strokeColor bg-white hover:bg-s2 duration-700 group relative wow animate__animated animate__fadeInUp">
        <div
            class="absolute top-9 py-1 right-4 uppercase text-[13px] text-white bg-s1 rotate-90 px-4 flex justify-center items-center">
            <p class="pr-2">popular</p>
            <span class="rotate-90 text-7xl !leading-none absolute right-0 pb-16 group-hover:text-s2 duration-700">
              <i class="ph-fill ph-caret-down"></i>
            </span>
          </div>

        <h3 class="heading-3 pt-5 pb-4">CFO Advisory</h3>
        <p class="text-bodyText pb-8">
          Additional Solutions Available. Get complete CFO advisory with Starter plan.
        </p>

        <p class="pb-6">
          <span class="display-4">$399</span>
          <span class="text-bodyText"> / monthly</span>
        </p>

        <ul class="text-bodyText flex flex-col gap-5 pb-8">
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>CFO consultations</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Risk management</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>KPI dashboard setup</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Financial reports</li>
        </ul>

        <a href="#0" class="py-4 w-full bg-s1 text-white rounded-full flex justify-center items-center gap-2 hover:bg-mainTextColor">
          Get Started <i class="ph ph-arrow-right"></i>
        </a>
      </div>

      <!-- Growth -->
      <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 sm:p-10 border border-strokeColor bg-white hover:bg-s2 duration-700 group wow animate__animated animate__fadeInUp">
        <h3 class="heading-3 pt-5 pb-4">Growth</h3>
        <p class="text-bodyText pb-8">
          Like many other companies, we constantly push for new development.
        </p>

        <p class="pb-6">
          <span class="display-4">$149</span>
          <span class="text-bodyText"> / monthly</span>
        </p>

        <ul class="text-bodyText flex flex-col gap-5 pb-8">
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Advanced bookkeeping</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Financial planning</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Tax optimization</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Performance tracking</li>
        </ul>
      </br>
        <a href="#0" class="py-4 w-full bg-s1 text-white rounded-full flex justify-center items-center gap-2 hover:bg-mainTextColor">
          Get Started <i class="ph ph-arrow-right"></i>
        </a>
      </div>

      <!-- Expansion (CENTERED) -->
      <div class="col-span-12 md:col-span-6 lg:col-span-4 lg:col-start-3 p-6 sm:p-10 border border-strokeColor bg-white hover:bg-s2 duration-700 group wow animate__animated animate__fadeInUp">
        <h3 class="heading-3 pt-5 pb-4">Expansion</h3>
        <p class="text-bodyText pb-8">
          Business is flourishing? Manage your finances better than ever.
        </p>

        <p class="pb-6">
          <span class="display-4">$229</span>
          <span class="text-bodyText"> / monthly</span>
        </p>

        <ul class="text-bodyText flex flex-col gap-5 pb-8">
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Forecasting & analysis</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Payroll management</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Automation setup</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Quarterly reviews</li>
        </ul>

        <a href="#0" class="py-4 w-full bg-s1 text-white rounded-full flex justify-center items-center gap-2 hover:bg-mainTextColor">
          Get Started <i class="ph ph-arrow-right"></i>
        </a>
      </div>

      <!-- Customized -->
      <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 sm:p-10 border border-strokeColor bg-white hover:bg-s2 duration-700 group wow animate__animated animate__fadeInUp">
        <h3 class="heading-3 pt-5 pb-4">Customized</h3>
        <p class="text-bodyText pb-8">
          Customize your finances as you want and save a lot of money quickly.
        </p>
 </br>
      </br>
      </br>
        <ul class="text-bodyText flex flex-col gap-5 pb-8">
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Tailored solutions</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Flexible pricing</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>Personalized tax help</li>
          <li class="flex gap-3 items-center"><i class="ph-fill ph-check-circle text-p1 text-2xl"></i>On-demand reports</li>
        </ul>
     
        <a href="#0" class="py-4 w-full bg-s1 text-white rounded-full flex justify-center items-center gap-2 hover:bg-mainTextColor">
          Get Started <i class="ph ph-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>

    <!-- Pricing Section End -->



<section class="stp-30 sbp-30 relative sponsors">
    <div class="overflow-hidden">
      <img src="/frontend/assets/images/sliceIcon.png" alt="image" class="absolute top-0 right-2 -rotate-90 max-md:h-[80px]" />
    </div>
    <div class="container">
      <div class="flex justify-between items-end gap-6 max-lg:flex-col max-lg:items-start">
        <div class="max-w-[600px] flex justify-center items-start flex-col">
          <p class="bg-p1 py-3 px-5 rounded-full text-white">Testimonial</p>
          <h2 class="display-4 pt-4">Real Stories Of Success</h2>
        </div>
        <p class="text-bodyText max-w-[500px]">
          Startups thrive with AccuPay. Their flexible payroll solutions have been instrumental in our journey, providing the support
        </p>
      </div>
    </div>
    <div class="pt-6">
      <div class="swiper testimonial-carousel2">
        <div class="swiper-wrapper !flex !justify-center !items-center">
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
                BookkeepingsBiz streamlined our accounting and payroll operations, saving us time and ensuring complete compliance. Their team is responsive, accurate, and dependable.
              </p>
              <div class="flex gap-3 pt-3">
                
                <div class="">
                  <p class="text-lg font-medium">Isabelle McKinney</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
              “I was struggling to keep my books updated and accurate. After hiring this team, everything is organized and I finally feel in control of my finances.”
              </p>
              <div class="flex gap-3 pt-3">
                
                <div class="">
                  <p class="text-lg font-medium">Liam D.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
               “This service simplified my bookkeeping completely. They were prompt, professional, and helped me save time every month.”
              </p>
              <div class="flex gap-3 pt-3">
                
                <div class="">
                  <p class="text-lg font-medium">Sophia T.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
                “Before working with them, tax season was a nightmare. Now I’m confident my records are correct and always ready.”
              </p>
              <div class="flex gap-3 pt-3">
                
                <div class="">
                  <p class="text-lg font-medium">Noah P.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
               “Their team helped me understand my finances clearly. It’s been a total game‑changer for my small business.”
              </p>
              <div class="flex gap-3 pt-3">
               
                <div class="">
                  <p class="text-lg font-medium">Ora Wong</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
                “I no longer dread bookkeeping tasks. Their support and accuracy have made running my business much easier.”
              </p>
              <div class="flex gap-3 pt-3">
                
                <div class="">
                  <p class="text-lg font-medium">Olivia R.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
               “From day one they were responsive and reliable. They organized my accounts and improved my financial clarity.”
              </p>
              <div class="flex gap-3 pt-3">
               
                <div class="">
                  <p class="text-lg font-medium">Mason K.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="border border-strokeColor p-12 flex flex-col justify-center items-center hover:bg-s2 hover:border-mainTextColor duration-700">
              <p class="text-bodyText text-center">
               “Professional, efficient, and caring — they manage my books better than I ever could. Highly recommend their services.”
              </p>
              <div class="flex gap-3 pt-3">
                
                <div class="">
                  <p class="text-lg font-medium">Elijah S.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- Got Questions Section End -->

    <!-- CTA Section Start -->
    <section
  class="relative after:absolute after:bg-mainTextColor after:bottom-0 after:right-0 after:left-0 after:h-1/2 overflow-hidden"
id="contact">
  <div
    class="container bg-p1 py-12 sm:py-20 px-4 sm:px-10 md:px-20 lg:px-40 relative z-10 wow animate__animated animate__fadeInUp"
  >
    <img
      src="/frontend/assets/images/sliceIcon.png"
      alt="image"
      class="absolute -top-4 sm:-top-6 lg:top-0 right-0 h-[60px] sm:h-[80px] lg:h-[120px] -rotate-90"
    />
    <p class="display-3 text-center text-white !leading-[130%]">
    Let’s Talk About Your Finances
    </p>
    <form onSubmit="{handleSubmit}" class="pt-6 sm:pt-10 relative">
      <div class="flex justify-center items-center gap-3 max-[500px]:flex-col">
        <a href="tel:+919999999999">
  <button
    class="border border-mainTextColor bg-s2 py-3 sm:py-4 px-4 md:px-8 font-medium"
    type="button"
  >
    Speak With An Expert
  </button>
</a>

      </div>
    </form>
  </div>
</section>

    <!-- CTA Section End -->

    <script>
  new Swiper(".company-images-carousel", {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    slidesPerView: 2,

    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      640: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 5,
      },
    },
  });
</script>
@endsection