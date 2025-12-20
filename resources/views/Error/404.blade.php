@extends('layouts.frontend')

@section('title')
    404 Not Found |The Audit Alliance
@endsection

@section('content')

<main>
      <div
        class="container flex flex-col justify-center items-center stp-30 h-screen"
      >
        <!-- <div class="">
          <img src="/frontend/assets/images/404.png" alt="image" />
        </div> -->
        <h1 class="display-4">Page Not Found</h1>
        <p class="text-lg text-bodyText text-center py-8">
          We’re sorry, the page you requested could not be found please go back
          to the homepage
        </p>
        <a
          href="/"
          class="flex justify-center max-sm:text-sm items-center gap-3 py-2 md:py-3 px-3 md:px-6 rounded-full bg-s2 border border-mainTextColor text-mainTextColor group font-medium"
        >
          Go Home
          <span
            class="group-hover:rotate-[45deg] duration-500 text-base sm:text-xl lg:text-2xl"
          >
            <i class="ph-bold ph-arrow-up-right"></i>
          </span>
        </a>
      </div>
    </main>
@endsection
