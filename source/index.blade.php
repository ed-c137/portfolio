@extends('_layouts.master')

@section('body')
<div class="main-wrapper">
    <div class="sidebar bg-green-300 md:fixed md:w-40 md:h-16">
    <div class="top-head relative md:flex md:h-full md:items-center">
        <div id="menu-bt" class="menu-btn inline-block m-3 p-1 rounded-md bg-green-500 shadow md:hidden"><span class="iconify" data-icon="ic:round-menu" data-inline="false"></span></div>
        <div class="user-detail absolute md:relative inline-block transform -translate-x-1/2">
            <div class="user-name">Edrick Oliveira</div>
            <div class="user-position text-gray-600 text-xs ">Web Developer</div>
        </div>
    </div>

    </div>
    <div id="sidebar-bot" class="sidebar-bottom absolute w-40 h-full transition-all bg-blue-300 md:left-0 z-50 md:fixed md:w-40" >
        <ul class="menu-items divide-y-0 divide-gray-600">
            <li class="menu-item">
            <a href="#about" class="flex divide-x-3 items-center p-3 " data-content="about">
                <span class="">
                    <span class="iconify" data-icon="ic:outline-person-pin" data-inline="false"></span>
                </span>
                <span class="ml-3">About</span> 
            </a>
             </li>
            <li class="menu-item">
            <a href="#experience" class="flex divide-x-3 items-center p-3 " data-content="experience">
                <span class=""><span class="iconify" data-icon="ic:round-show-chart" data-inline="false"></span></span>
                </span>
                <span class="ml-3">Experience</span>
            </a>
            </li>
            <li class="menu-item "> 
                <a href="#projects" class="flex divide-x-3 items-center p-3 " data-content="projects">
                <span class=""><span class="iconify" data-icon="ic:baseline-science" data-inline="false"></span></span>
                <span class="ml-3">Projects</span>
                </a>
            </li>
            <li class="menu-item">
            <a href="#technologies" class="flex divide-x-3 items-center p-3 " data-content="technologies">    
            <span class="">
            <span class="iconify" data-icon="bi:tools" data-inline="false"></span></span>
                <span class="ml-3">Technologies</span>
            </a>
            </li>
            <li class="menu-item ">
            <a href="#education" class="flex divide-x-3 items-center p-3 " data-content="education">    
            <span class="">
                <span class="iconify" data-icon="fluent:hat-graduation-16-filled" data-inline="false"></span></span>
                <span class="ml-3">Education</span>
            </a>
            </li>
            <li class="menu-item ">
            <a href="#contact" class="flex divide-x-3 items-center p-3 " data-content="contact">
                <span class=""><span class="iconify" data-icon="ic:round-mail-outline" data-inline="false"></span></span>
                <span class="ml-3">Contact</span>
            </a>
            </li>
            <!-- <li class="menu-item">
            <a href="#blog" class="flex divide-x-3 items-center p-3 " data-content="blog">
                <span class=""><span class="iconify" data-icon="foundation:social-blogger" data-inline="false"></span></span>
                <span class="ml-3">Blog</span>
            </a>
            </li> -->
        </ul>
    </div>
    <div class="body-content bg-gray-200 ">
        <div id="about" class="section h-screen">
            <div class="section-header  top-0 z-50">
                <a href="#about" class=" block section-title p-3 text-2xl text-white bg-gray-800 ">
                    <span class="md:max-w-screen-md md:block md:m-auto text-3xl">
                        About
                        <div class="h-1 w-6 bg-indigo-500 rounded"></div>
                    </span>
                </a>
            </div>
            <div class="section-content p-3 text-sm md:text-lg overflow-hidden relative md:max-w-screen-md md:m-auto md:px-5 flex justify-center flex-col h-full">
                <blockquote class="text-blue-500 border-l-4 border-blue-500 p-3 m-2 text-base md:text-xl">
                    Mission-driven Web developer with a passion for thoughtful UI design and colaboration.
                </blockquote>
              
                <p class="p-3">
                I???ve always sought out opportunities and challenges that excite me. Although my professional path has taken many twists and turns I've never stopped engaging my passion to help others and solve problems.
                </p>
                <p class="p-3">
                I am a mid level web developer, skilled at writing well-designed, testable and efficient code using current best practices in Web development. Fast learner, hard worker and team player who is proficient in an array of scripting languages and multimedia Web tools. My obsession with attention to detail, and love for building things is why I???m excited to make a big impact at a high growth company.
                </p>

                 <span class="pt-6 pb-3 px-3"><strong>Current Foucus: </strong><a class="text-gray-700 font-semibold hover:text-gray-600" href="#">PHP</a> - <a class="text-gray-700 font-semibold hover:text-gray-600" href="#">Wordpress</a> - <a class="text-gray-700 font-semibold hover:text-gray-600" href="#">Laravel</a></span>
                 <!-- <div class="pattern"></div> -->
            </div>
        </div>
        <div id="experience" class="section">
            <div class="section-header  top-0">
                <div class="section-title p-3 text-xl text-white bg-gray-800 ">

                    <span class="md:max-w-screen-md md:block md:m-auto text-3xl">
                        Experience
                        <div class="h-1 w-6 bg-indigo-500 rounded"></div>
                    </span>
                </div>
            </div>
            <div class="section-content p-2 flex flex-col md:flex-row md:max-w-screen-md md:m-auto md:flex-wrap md:space-y-4 py-6">
                
                <div class=" md:w-full p-1">
                    <div class="bg-gray-100 p-6 rounded-sm shadow md:px-24 md:py-10">
                    <!-- <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content"> -->
                    <div class="company-info md:pb-4">
                        <div class="top flex justify-between items-center">
                            <h3 class="text-indigo-500 text-base font-medium title-font">Powerland Pvt Ltd</h3>
                            <span class="time-period bold text-gray-600 text-xs font-medium ">
                                May 2020 - Dec 2020,
                            </span>
                        </div>
                        <div class="bottom text-gray-500 text-xs">
                            Goa, India
                        </div>
                    </div>
                    <!-- <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2> -->
                    <p class="leading-relaxed text-sm">
                        <ul class="list-disc space-y-3">
                            <li>Researched and developed a UI interface for a UV steralizer running on a ESP32 </li>
                            <li>Researched and worked on various alternatives of dashboard Interface for Electric Vehicle. UI developed to run on limited hardware i.e Raspberry Pi and also managed to reduce OS load times</li>
                            <li>Designed and developed the company website running on wordpress and optimized it for faster load times</li>
                        </ul>
                    </p>
                    </div>
                </div>
                <div class="md:w-full p-1">
                    <div class="bg-gray-100 p-6 rounded-sm shadow md:px-24 md:py-10">
                    <!-- <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content"> -->
                    <div class="company-info md:pb-4">
                        <div class="top flex justify-between items-center">
                            <h3 class="text-indigo-500 text-base font-medium title-font">Freshcart Goa</h3>
                            <span class="time-period bold text-gray-600 text-xs font-medium ">
                                June 2018 - March 2019
                            </span>
                        </div>
                        <div class="bottom text-gray-500 text-xs">
                            Goa, India
                        </div>
                    </div>
                    <!-- <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2> -->
                   <p class="leading-relaxed text-sm">
                        <ul class="list-disc space-y-3">
                        <li>Developed the main website, optimized and maintained it using wordpress. Managed the social sites of the company</li>
                            <li>Worked and comanaged a small team for handling fitness mealkit preparation along with delivery, researched cost effective ways to attract new customers.</li>
                           

                        </ul>
                    </p>
                    </div>
                </div>

                <div class="md:w-full p-1 ">
                    <div class="bg-gray-100 p-6 rounded-sm shadow md:px-24 md:py-10">
                    <!-- <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content"> -->
                    <div class="company-info md:pb-4">
                        <div class="top flex justify-between items-center ">
                            <h3 class="text-indigo-500 text-base font-medium title-font">Kodework</h3>
                            <span class="time-period bold text-gray-600 text-xs font-medium ">
                            Jul 2017 - Mar 2018,
                            </span>
                        </div>
                        <div class="bottom text-gray-500 text-xs">
                            Goa, India
                        </div>
                    </div>
                    <!-- <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2> -->
                    <p class="leading-relaxed text-sm">
                        <ul class="list-disc space-y-3">
                            <li>Worked in a small team of three and reported to the project manager and senior developer to develop, maintain and support websites for clients. Also intermediated between the management and tech teams being an experienced developer of the company.</li>
                            <li>Wrote extensible code as a part of the team to develop a PHP web application the technologies used were Wordpress, JavaScript and MySQL.</li>
                            <li>Developed many other small applications and websites for the company as per the requirements via various other technologies like MySQL, jQuery, payment gateway etc.</li>
                        </ul>
                    </p>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div id="projects" class="section">
            <div class="section-header  top-0">
                <div class="section-title p-3 text-xl text-white bg-gray-800 ">
                    <span class="md:max-w-screen-md md:block md:m-auto text-3xl">
                        My Work
                        <div class="h-1 w-6 bg-indigo-500 rounded"></div>
                    </span>
                </div>
            </div>
            <div class="section-content p-3">
               <div class="projects-container flex flex-col space-y-2 md:max-w-screen-lg md:m-auto md:flex-row justify-center md:space-x-10 md:space-y-0 md:my-8">
                   <a href="http://powerlandatv.com" target="default" class="project-card rounded p-1 border border-gray-400 md:w-1/3 hover:shadow-lg transition-all">
                       <div class="image-wrapper">
                           <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{$page->baseUrl}}/assets/images/powerland.png" alt="powerland">
                       </div>
                       <div class="project-content px-4 pb-4">
                            <div class="company text-md pb-3">
                                Powerland
                                
                            </div>
                            <div class="description text-sm">
                                <ul class="tech-used flex space-x-2 text-gray-800">
                                    <li class="bg-green-300 rounded-lg px-1">#wordpress</li>
                                    <li class="bg-green-300 rounded-lg px-1">#sass</li>
                                    <li class="bg-green-300 rounded-lg px-1">#tailwind</li>
                                </ul>
                            </div>
                       </div>
                   </a>
                   <div class="project-card rounded p-1 border border-gray-400 md:w-1/3">
                       <div class="image-wrapper">
                           <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{$page->baseUrl}}assets/images/freshcart.png" alt="dummy">
                       </div>
                       <div class="project-content px-4 pb-4">
                            <div class="company text-md pb-3">
                                FreshcartGoa website
                            </div>
                            <div class="description text-sm">
                            <ul class="tech-used flex  text-gray-800 flex-wrap">
                                    <li class="bg-green-300 rounded-lg px-1">#wordpress</li>
                                    <li class="bg-green-300 rounded-lg px-1">#sass</li>
                                    <li class="bg-green-300 rounded-lg px-1">#tailwind</li>
                                    <li class="bg-green-300 rounded-lg px-1">#sass</li>
                                    <li class="bg-green-300 rounded-lg px-1">#tailwind</li>
                                </ul>
                            </div>
                       </div>
                   </div>
                   <div class="project-card rounded p-1 border border-gray-400 md:w-1/3">
                       <div class="image-wrapper">
                           <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="dummy">
                       </div>
                       <div class="project-content px-4 pb-4">
                            <div class="company text-md pb-3">
                                Powerland
                            </div>
                            <div class="description text-sm">
                            Awarded by students in the Full-Time Web Development track to one instructor as recognition for "outstanding teaching, listening, mentoring.
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
        <div id="technologies" class="section ">
            <div class="section-header  top-0 z-50">
                <div class="section-title p-3 text-xl text-white bg-gray-800 ">
                <span class="md:max-w-screen-md md:block md:m-auto">
                    <span class="md:max-w-screen-md md:block md:m-auto text-3xl">
                            Technologies
                            <div class="h-1 w-6 bg-indigo-500 rounded"></div>
                    </span>
                </span> 
                </div>
            </div>
            <div class="section-content p-3">
                <div class="p md:max-w-screen-md md:m-auto">
                    <div class="title md:py-2 md:ml-20">Currently Using: </div>
                    <div class="techcollection flex flex-wrap ">
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:javascript" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Javascript
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:css-3" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                CSS
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="cib:jquery" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                JQuery
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:angular-icon" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Angular
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="vscode-icons:file-type-ionic" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Ionic
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:sass" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Sass
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:gulp" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Gulp
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:wordpress-icon" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Wordpress
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:laravel" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Laravel
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center php-wrapper md:text-4xl">
                            <span class="iconify" data-icon="logos:php" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                PHP
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="grommet-icons:figma" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                Figma
                            </div>
                        </div>
                        <div class="techcard inline-block p-1">
                            <div class="img-wrapper text-4xl flex justify-center md:text-5xl">
                            <span class="iconify" data-icon="logos:tailwindcss-icon" data-inline="false"></span>
                            </div>
                            <div class="tech-name text-xs">
                                TailwindCss
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="education" class="section h-screen">
            <div class="section-header  top-0">
                <div class="section-title p-3 text-xl text-white bg-gray-800 ">
                    <span class="md:max-w-screen-md md:block md:m-auto text-3xl">
                        Education
                        <div class="h-1 w-6 bg-indigo-500 rounded"></div>
                    </span>
                </div>
            </div>
            <div class="section-content p-3 h-full flex items-center">
                <div class="flex flex-wrap md:max-w-screen-md md:m-auto">
                    <div class=" md:w-1/2 p-3">
                        <div class="border border-gray-300 shadow-md py-10 px-5 rounded-lg space-y-2 bg-white">
                        <!-- <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            
                        </div> -->
                        <div class="line-two flex items-center justify-between md:flex-col md:items-start">
                        <h2 class="text-lg text-red-400 font-medium title-font mb-2">Diploma in Electronics and Commmunication</h2>
                        <div class="text-gray-500 text-xs">2008 - 2011</div>
                        </div>
                        <div class="line-two flex items-center">
                            <div class="text-sm text-gray-900 relative left-6"> Goa Board University</div>
                            <div class="text-gray-600 bg-gray-400 border border-gray-300 text-xs px-1 rounded-lg ml-2">Goa, India</div>
                        </div>
                        </div>
                    </div>
                    <div class=" md:w-1/2 p-3">
                        <div class="border border-gray-300 shadow-md py-10 px-5 rounded-lg space-y-2 bg-white">
                        <div class="line-two flex items-center justify-between md:flex-col md:items-start">
                        <h2 class="text-lg  text-red-400 font-medium title-font mb-2">Bachelor in Information Technology</h2>
                        <div class="text-gray-500  text-xs">2014 - 2017</div>
                        </div>
                        <div class="line-two flex items-center ">
                            <div class="text-sm text-gray-900 relative left-6">Goa Board University</div>
                            
                            <div class="text-gray-600 bg-gray-400 border border-gray-300 text-xs px-1 rounded-lg ml-2">Goa, India</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="section">
            <div class="section-header  top-0 z-50">
                <div class="section-title p-3 text-xl text-white bg-gray-800 ">
                    <span class="md:max-w-screen-md md:block md:m-auto text-3xl">
                        Contact
                        <div class="h-1 w-6 bg-indigo-500 rounded"></div>
                    </span>
                </div>
            </div>
            <div class="section-content p-3">
            <section class="text-gray-600 body-font relative">
  <!-- <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-full md:w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full md:w-1/2 ">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-indigo-500">example@email.com</a>
          <p class="leading-normal my-5">49 Smith St.
            <br>Saint Cloud, MN 56301
          </p>
          <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div> -->
  <div class="container md:max-w-screen-md px-5 py-24 mx-auto flex flex-col items-start space-y-5">
      <p class="flex justify-center items-center">
        <a aria-label="Email Edrick" href="mailto:edrick613@gmail.com" data-position="top" data-tooltip="Email Edrick" class="btn-floating btn-large waves-effect waves-light brown tooltipped "> 
            <svg class="w-10 h-10 bg-green-300 p-2 rounded-full" fill="#626262" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg></a><a aria-label="Email Edrick" href="mailto:edrick613@gmail.com" class="hoverline text-xl hover:underline pl-4">edrick613@gmail.com</a>

      </p>
      <p class="flex justify-center items-center">
        <a aria-label="View Edrick on GitHub" href="https://github.com/ed-c137" target="_blank" data-position="top" data-tooltip="View Edrick on GitHub" class="btn-floating btn-large waves-effect waves-light brown tooltipped">
        <svg class="w-10 h-10 bg-green-300 p-2 rounded-full shadow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15"><g fill="none"><path d="M9.358 2.145a8.209 8.209 0 0 0-3.716 0c-.706-.433-1.245-.632-1.637-.716a2.17 2.17 0 0 0-.51-.053a1.258 1.258 0 0 0-.232.028l-.01.002l-.004.002h-.003l.137.481l-.137-.48a.5.5 0 0 0-.32.276a3.12 3.12 0 0 0-.159 2.101A3.354 3.354 0 0 0 2 5.93c0 1.553.458 2.597 1.239 3.268c.547.47 1.211.72 1.877.863c-.11.305-.138.628-.116.958v.598c-.407.085-.689.058-.89-.008c-.251-.083-.444-.25-.629-.49a4.798 4.798 0 0 1-.27-.402l-.057-.093a9.216 9.216 0 0 0-.224-.354c-.19-.281-.472-.633-.928-.753l-.484-.127l-.254.968l.484.127c.08.02.184.095.355.346c.063.093.122.19.19.302l.068.11c.094.152.202.32.327.484c.253.33.598.663 1.11.832c.35.116.748.144 1.202.074V14.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-3.563c0-.315-.014-.604-.103-.873c.663-.14 1.322-.39 1.866-.86c.78-.676 1.237-1.73 1.237-3.292v-.001a3.354 3.354 0 0 0-.768-2.125a3.12 3.12 0 0 0-.159-2.1a.5.5 0 0 0-.319-.277l-.137.48c.137-.48.136-.48.135-.48l-.002-.001l-.004-.002l-.009-.002a.671.671 0 0 0-.075-.015a1.261 1.261 0 0 0-.158-.013a2.172 2.172 0 0 0-.51.053c-.391.084-.93.283-1.636.716z" fill="#626262"/></g><rect x="0" y="0" width="15" height="15" fill="rgba(0, 0, 0, 0)" /></svg></a><a aria-label="Edrick on Github" href="https://github.com/ed-c137" class="hoverline text-xl hover:underline pl-4" target="_blank">github.com/ed-c137</a>
      </p>
      <p class="flex justify-center items-center">
        <a aria-label="View Edrick on LinkedIn" href="https://www.linkedin.com/in/edrickoliveira/" target="_blank" data-position="top" data-tooltip="View Andrew on LinkedIn" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 bg-green-300 p-2 rounded-full" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><circle cx="4.983" cy="5.009" r="2.188" fill="#626262"/><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118c1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783c-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z" fill="#626262"/></svg></a><a aria-label="Edrick on LinkedIn" href="https://www.linkedin.com/in/edrickoliveira/" class="hoverline text-xl hover:underline pl-4" target="_blank">linkedin.com/in/edrickoliveira/</a>
      </p>
      <p class="flex justify-center items-center">
        <a aria-label="View Edrick's CV" href="#" target="_blank" data-position="top" data-tooltip="View Andrew on LinkedIn" class="btn-floating btn-large waves-effect waves-light brown tooltipped">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 bg-green-300 p-2 rounded-full" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16 2l5 5v14.008a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 21.008V2.992C3 2.444 3.445 2 3.993 2H16zm-4 9.5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5zM7.527 17h8.946a4.5 4.5 0 0 0-8.946 0z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
    </a><a aria-label="Edrick on LinkedIn" href="{{$page->baseUrl}}/assets/EdCV.pdf" class="hoverline text-xl  ml-4 border-gray-300 border py-1 px-16 bg-gray-700 text-white" target="_blank">CV</a>
      </p>
    </div>
</section>


    </div><!-- section end -->

    <!-- <div id="blog" class="section">
            <div class="section-header  top-0 z-50">
                <div class="section-title p-3 text-xl text-white bg-gray-800">
                    <span class="md:max-w-screen-md md:block md:m-auto">
                        Blog
                        <div class="h-1 w-6 bg-indigo-500 rounded"></div>
                    </span>
                </div>
            </div>
            <div class="section-content p-3 md:max-w-screen-lg md:m-auto">
        <section class="text-gray-600 body-font">
        <div class="container px-2 py-8 mx-auto">
            <div class="flex flex-wrap -m-4">

            @foreach ($posts as $post)

            <div class="p-2 lg:w-1/3">
                <div class="h-full bg-gray-100 bg-opacity-75 px-6 pt-10 pb-10 rounded-lg overflow-hidden text-left relative">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1 ">BLOG</h2>
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
                <p class="leading-relaxed mb-3">{{ $post->description }}</p>
                <a href="{{ $post->getPath() }}" class="text-indigo-500 inline-flex items-center">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                
                </div>
            </div>
            @endforeach

           
            
            <p>Total of {{ $posts->count() }} posts</p>

        

            </div>
        </div>
        </section>
        </div>
    </div> -->

    </div>
</div>
    <!-- <div class="footer">

    </div> -->

</div>
@endsection

