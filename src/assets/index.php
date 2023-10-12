<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind & daisy UI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- google font -->

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom design -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            'primary-color': '#1D4ED8',
            'primary-color': '#4338CA',

          }
        }
      }
    }
  </script>
  <title>TuskHut</title>
</head>
<!-- #EC4899  #DB2777 p -->

<body class="m-0 p-0">
  <header>
    <nav class="bg-white fixed top-0 z-30 w-full border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="index.php" class="flex items-center text-3xl font-bold whitespace-nowrap">
          <img src="" class="mr-3 h-6 sm:h-9" alt="" />
          <span class=" self-center text-[#4338CA] dark:text-[#4338CA]">Task</span>Hut
        </a>
        <div class="flex items-center md:order-2">
          <button type="button" data-dropdown-toggle="language-dropdown-menu"
            class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-5 h-5 mr-2 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
              <path fill="#b22234" d="M0 0h7410v3900H0z" />
              <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300" />
              <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
              <g fill="#fff">
                <g id="d">
                  <g id="c">
                    <g id="e">
                      <g id="b">
                        <path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                        <use xlink:href="#a" y="420" />
                        <use xlink:href="#a" y="840" />
                        <use xlink:href="#a" y="1260" />
                      </g>
                      <use xlink:href="#a" y="1680" />
                    </g>
                    <use xlink:href="#b" x="247" y="210" />
                  </g>
                  <use xlink:href="#c" x="494" />
                </g>
                <use xlink:href="#d" x="988" />
                <use xlink:href="#c" x="1976" />
                <use xlink:href="#e" x="2470" />
              </g>
            </svg>
            English (US)
          </button>
          <!-- Dropdown -->
          <div
            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
            id="language-dropdown-menu">
            <ul class="py-2 font-medium" role="none">
              <li>
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  role="menuitem">
                  <div class="inline-flex items-center">
                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                      id="flag-icon-css-us" viewBox="0 0 512 512">
                      <g fill-rule="evenodd">
                        <g stroke-width="1pt">
                          <path fill="#bd3d44"
                            d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                            transform="scale(3.9385)" />
                          <path fill="#fff"
                            d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                            transform="scale(3.9385)" />
                        </g>
                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                        <path fill="#fff"
                          d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                          transform="scale(3.9385)" />
                      </g>
                    </svg>
                    English (US)
                  </div>
                </a>
              </li>
              <li>
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  role="menuitem">
                  <div class="inline-flex items-center">
                    <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      id="flag-icon-css-de" viewBox="0 0 512 512">
                      <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                      <path d="M0 0h512v170.7H0z" />
                      <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                    </svg>
                    Deutsch
                  </div>
                </a>
              </li>
              <li>
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  role="menuitem">
                  <div class="inline-flex items-center">
                    <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      id="flag-icon-css-it" viewBox="0 0 512 512">
                      <g fill-rule="evenodd" stroke-width="1pt">
                        <path fill="#fff" d="M0 0h512v512H0z" />
                        <path fill="#009246" d="M0 0h170.7v512H0z" />
                        <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                      </g>
                    </svg>
                    Italiano
                  </div>
                </a>
              </li>
              <li>
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  role="menuitem">
                  <div class="inline-flex items-center">
                    <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                      <defs>
                        <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                      </defs>
                      <path fill="#de2910" d="M0 0h512v512H0z" />
                      <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a" />
                      <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                      <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
                      <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                      <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                    </svg>
                    中文 (繁體)
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <button data-collapse-toggle="navbar-language" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-language" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
        </div>
        <div class="flex items-center lg:order-2">
          <a href="login.php"
            class="text-gray-800 dark:text-white hover:bg-gray-50 ring-2 ring-[#4338CA] focus:ring-4 focus:ring-[#6366F1] font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log
            in</a>
          <a href="signUp.php"
            class="text-white bg-[#4338CA] hover:bg-primary-800 focus:ring-4 focus:ring-[#6366F1] font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-2 dark:focus:ring-primary-800">Get
            started</a>
          <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="#"
                class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
            </li>
            <li>
              <a href="contact.php"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

        <!-- banner section -->
        <section>
          <div class="hero min-h-screen" style="background-image: url('./images/cover_3.jpg');">
            <div class="hero-overlay bg-opacity-50"></div>
            <div class="flex flex-col lg:flex-row-reverse hero-content text-center text-neutral-content">
              <div>
                <img class="mt-10" src="./images/banner_updated 12.png" alt="">
              </div>
              <div class=" text-white text-center lg:text-left">
                <h1 class="mb-5 text-3xl lg:text-6xl font-bold">Find great work</h1>
                <p class="mb-5 text-xs lg:text-lg">Meet clients you’re excited to work with and take
                  your career or business to new heights.</p>
    
                  <div class="flex justify-center gap-2 mt-10">
                    <div class="form-control w-36 lg:w-96">
                      <input type="text" placeholder="Search" class="input input-bordered text-black w-36 md:w-auto" />
                    </div>
                    <div >
                      <button class="btn btn-primary text-white text-xs font-bold">Get started</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>

  </header>

  <main class="container mx-auto">



    <!-- banner section -->
    <!-- <section class="">
      <div class="flex flex-col lg:flex-row justify-center items-center">
        <div>
          <h1 class="flex justify-start mb-5 text-5xl font-bold text-left">Find great work</h1>
          <p class="mb-5">Meet clients you’re excited to work with and take
              your career or business to new heights.</p>
          ////<button class=" btn btn-primary">Get Started</button>/////
          <a href="signUp.php"
            class="text-white bg-[#4338CA] hover:bg-primary-800 focus:ring-4 focus:ring-[#6366F1] font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-2 dark:focus:ring-primary-800">Get
            started</a>
        </div>
        <div>
          <img class="mt-16" src="./images/banner 10.jpeg" alt="">
        </div>
      </div>
    </section> -->

     <!-- Its easy to get work -->
    <section class="my-24">
      <div>
        <h1 class="text-center font-bold text-xl lg:text-4xl mb-7">It's Easy to Get Work Done on <span class="text-[#4338CA]">Task</span>Hut</h1>
      </div>

      <div class="flex flex-col lg:flex-row">
        <!-- card 1 -->
        <div class="card w-96 bg-base-100 ">
          <figure class="px-10 pt-10">
            <img src="./icons/post 1.png" alt="Shoes" class="" />
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title font-bold">Post a Job</h2>
            <p>Create your free job posting and start receiving Quotes within hours.</p>

          </div>
        </div>

        <!-- card 2 -->
        <div class="card w-96 bg-base-100 ">
          <figure class="px-10 pt-10">
            <img src="./icons/hire 1.png" alt="Shoes" class="" />
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title font-bold">Hire Freelancers</h2>
            <p>Compare the Quotes you receive and hire the best freelance professionals for the job.</p>

          </div>
        </div>

        <!-- card 3 -->
        <div class="card w-96 bg-base-100 ">
          <figure class="px-10 pt-10">
            <img src="./icons/work 1.png" alt="Shoes" class="" />
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title font-bold">Get Work Done</h2>
            <p>Decide on how and when payments will be made and use WorkRooms to collaborate, communicate and track
              work.</p>

          </div>
        </div>

        <!-- card 4 -->
        <div class="card w-96 bg-base-100 ">
          <figure class="px-10 pt-10">
            <img src="./icons/payment 1.png" alt="Shoes" class="" />
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title font-bold">Pay safely</h2>
            <p>Choose from multiple payment methods with SafePay payment protection.</p>

          </div>
        </div>

      </div>
    </section>

      <!-- why choose us -->
    <section class="my-24 bg-[#1D4ED8] text-white py-20 px-14">
      <h1 class="text-center font-semibold text-2xl lg:text-5xl mb-14 ">Why Choose Us</h1>
      <div class="flex flex-col lg:flex-row justify-around items-center gap-12">
        <div>
          <img class="rounded-xl" src="./images/why_choose_1.jpg" alt="">
        </div>
  
        <div>
          <div>
            <div class="flex items-center gap-5">
              <div class="w-16"><img src="./icons/credibility.png" alt=""></div>
              <div>
                <h1 class="text-xl font-medium">Credibility</h1> <hr class="w-14 my-2">
                <p class="mb-5">We verify Freelancers, publish their feedback scores and All-Time Transaction Data to help you identify
                  time-tested professionals across the globe.</p>
              </div>
            </div>
            <div class="flex items-center gap-5">
              <div class="w-14"><img src="./icons/security.png" alt=""></div>
              <div>
                <h1 class="text-xl font-medium">Security</h1> <hr class="w-14 my-2">
                <p class="mb-5">We offer SafePay payment protection and your choice of preferred payment method for financial peace of
                  mind.</p>
              </div>
            </div>
            <div class="flex items-center gap-6">
              <div class="w-14"><img src="./icons/support.png" alt=""></div>
              <div>
                <h1 class="text-xl font-medium">Support</h1> <hr class="w-14 my-2">
                <p class="mb-5">Our dedicated support team works 24/7 to resolve all of your queries over the phone or email, no matter
                  where you are located.</p>
              </div>
            </div>
            <div class="flex items-center gap-4">
              <div class="w-14"><img src="./icons/value.png" alt=""></div>
              <div>
                <h1 class="text-xl font-medium">Value</h1> <hr class="w-14 my-2">
                <p>We provide multiple Payment terms and flexible Agreements to enable you to work the way you want.</p>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </section>

     <!-- top freelancers -->
    <section class="my-24 ">
      <h1 class="text-center font-bold text-xl lg:text-4xl mt-32 mb-16">Find Top Talent </h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-7">
        <!-- card 1 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class=""><i class="fa-regular fa-file-code fa-2x"></i></div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Web development & design</a></h2>
          </div>
        </div>
        <!-- card 2 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class="mb-2"><i class="fa-regular fa-code fa-2xl"></i></div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Programming & Software</a></h2>
          </div>
        </div>
        <!-- card 3 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class="mb-2"><i class="fa-brands fa-android fa-2xl"></i> </div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Apps & Mobile</a></h2>
          </div>
        </div>
        <!-- card 4 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class="mb-2"><i class="fa-solid fa-database fa-2xl"></i></div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Database design & Administration</a></h2>
          </div>
        </div>
        <!-- card 5 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class="mb-2"><i class="fa-regular fa-swatchbook fa-2xl"></i></div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Design & Creative</a></h2>
          </div>
        </div>
        <!-- card 6 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class="mb-2"><i class="fa-solid fa-network-wired fa-2xl"></i></div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Networking & Hardware</a></h2>
          </div>
        </div>
        <!-- card 7 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class="mb-2"><i class="fa-solid fa-hotel fa-2xl"></i></div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Engineering & Architecture</a></h2>
          </div>
        </div>
        <!-- card 8 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <figure class="px-10 pt-10">
            <div class="mb-2"><i class="fa-solid fa-magnifying-glass-chart fa-2xl"></i></div>
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title"><a href="#">Degital Marketing</a></h2>
          </div>
        </div>
        <!-- card 9 -->
        <div class="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
          <!-- <figure class="px-10 pt-10">
            
          </figure> -->
          <div class="card-body items-center text-center">
            <h2 class="card-title mt-8"><a href="#">Others</a></h2>
          </div>
        </div>



      </div>
    </section>

    <!-- review section -->
    <section class="my-24">
      <h1 class="text-center font-bold text-2xl lg:text-4xl mb-16">What client say</h1>

      <div class="carousel w-full">
        <!-- curousel 1 -->
        <div id="slide1" class="carousel-item relative w-full">
          <div>
            <div class="mx-24">
              <p>At SOLACE Engineers, we provide engineering solutions and other services on various freelancing
                platforms. Among them all, TaskHut is the best and our first choice to invite clients outside of
                freelancing platforms. Great customer support, low fee, easy to understand interface and solid payment
                protection with the SafePay system make working a delight on TaskHut! TaskHut really helped our business
                flourish…</p>
            </div>
            <div class="flex flex-row justify-center items-center mt-5">
              <div>
                <img class="w-1/2" src="./images/member1.png" alt="">
              </div>
              <div>
                <h2 class="text-xl font-semibold">
                  Solace Engineers Inc.</h2>
                <h4>Engineering Firm</h4>
              </div>
            </div>
          </div>

          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide4" class="btn btn-circle">❮</a>
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div>
        <!-- curousel 2 -->
        <div id="slide2" class="carousel-item relative w-full">
          <div>
            <div class="mx-24">
              <p>TaskHut.com is my favorite freelance platform. I love the functionality, the support and the strong
                workflow element, particularly the SafePay feature which makes the transfer of funds so easy. I love the
                integration with PayPal and the ability to amend agreements, with all steps communicated to and actioned
                by both sides. Of all the freelance platforms I have used, TaskHut is by far my favorite.</p>
            </div>
            <div class="flex flex-row justify-center items-center mt-5">
              <div>
                <img class="w-1/2" src="./images/member2.png" alt="">
              </div>
              <div>
                <h2 class="text-xl font-semibold">
                  Isabel Austin</h2>
                <h4>Writer, Editor, Proofreader</h4>
              </div>
            </div>
          </div>

          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a>
            <a href="#slide3" class="btn btn-circle">❯</a>
          </div>
        </div>
        <!-- curousel 3 -->
        <div id="slide3" class="carousel-item relative w-full">
          <div>
            <div class="mx-24">
              <p>In our company, we do ongoing research with our target audience. This includes 30-45 minute phone
                interviews. It was difficult to conduct the interview, really listen, and ask good follow up questions
                while
                trying to capture it all in thorough hand-written notes. One of our writers suggested using TaskHut to
                find
                someone to transcribe these interviews...The person I hired is the one I’ve stuck with for nearly two
                years
                now – she is fast, accurate, and affordable. I’d never have found her on my own, given that I live in
                Utah
                and she lives in South Africa. I could never have arranged such an effective solution to my on-going
                need
                for transcripts without TaskHut. It’s been a life-saver.</p>
            </div>
            <div class="flex flex-row justify-center items-center mt-5">
              <div>
                <img class="w-1/2" src="./images/member3.png" alt="">
              </div>
              <div>
                <h2 class="text-xl font-semibold">David Hussy</h2>
                <h4>IT solutions firm</h4>
              </div>
            </div>
          </div>

          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a>
            <a href="#slide4" class="btn btn-circle">❯</a>
          </div>
        </div>
        <!-- curousel 4 -->
        <div id="slide4" class="carousel-item relative w-full">
          <div>
            <div class="mx-24">
              <p>TaskHut is not only a marketplace but a place to do business. We meet new clients and more often than
                not
                establish long-term business relationships, all through TaskHut. The flexibility in how projects can be
                structured and the many payment options available allows us to work with clients in a way they feel most
                comfortable. We have been with TaskHut for over 10 years and hope to be here much longer.</p>
            </div>
            <div class="flex flex-row justify-center items-center mt-5">
              <div>
                <img class="w-1/2" src="./images/member4.png" alt="">
              </div>
              <div>
                <h2 class="text-xl font-semibold">DScopic Software</h2>
                <h4>IT solutions firm</h4>
              </div>
            </div>
          </div>

          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3" class="btn btn-circle">❮</a>
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div>


      </div>
    </section>
  </main>


   <!-- footer section -->
  <footer class="p-4 mt-12 bg-gray-800 sm:p-6 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="_home_page" class="flex items-center text-white text-2xl font-semibold whitespace-nowrap">
            <img src="" class="mr-3 h-8" alt="" />
            <span class="self-center text-[#4338CA] dark:text-[#4338CA]">Task</span>Hut
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-5">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Navigation</h2>
            <ul class="text-gray-400 dark:text-gray-400">
              <li class="mb-4">
                <a href="#" class="hover:underline">Home</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Post a Job</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Find a Freelancer</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Find a Job</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Enterprise Solutions</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Agency Solutions</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Company Info</h2>
            <ul class="text-gray-400 dark:text-gray-400">
              <li class="mb-4">
                <a href="" class="hover:underline">About TaskHut</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">How TaskHut Works</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Why TaskHut</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Awards</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Our Team</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
            <ul class="text-gray-400 dark:text-gray-400">
              <li class="mb-4">
                <a href="contact.php" class="hover:underline">Contact Us</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Blog</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">APIs</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">FAQs</a>
              </li>
              <li class="mb-4">
                <a href="" class="hover:underline">Help</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
            <ul class="text-gray-400 dark:text-gray-400">
              <li class="mb-4">
                <a href="https://github.com" class="hover:underline ">Github</a>
              </li>
              <li>
                <a href="https://discord.gg" class="hover:underline">Discord</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-400 dark:text-gray-400">
              <li class="mb-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-400 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="index.php"
            class="hover:underline">TaskHut™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-[#4338CA] dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-[#4338CA] dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-[#4338CA] dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-[#4338CA] dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-[#4338CA] dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>