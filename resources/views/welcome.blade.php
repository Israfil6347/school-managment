<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- <div class="container"> -->
    <section class="top-nav relative top-0 h-20 z-10 w-full bg-sky-600">
        <div class="hidden h-9 lg:block px-4 ">
            <div class="container mx-auto flex items-center justify-between">
                <div class=" flex items-center justify-between">
                    <ul class="mt-2 mb-0 ml-1 flex gap-4 pl-0 font-thin text-onPrimary md:font-normal lg:font-normal">
                        <li class="text-white">
                            <i class="fa fa-phone mr-2 inline-block"></i>Mobile Number:01811210478
                        </li>
                        <li class="text-white">
                            <i class="fa fa-envelope mr-2"></i>
                            Email: bottomlybd@yahoo.com
                        </li>
                    </ul>
                </div>
                <div class="pt-4">
                    <select name="cars" id="cars" class="rounded-full">
                        <option value="">সুবর্ণজয়ন্তী কর্ণার </option>
                        <option value="বঙ্গবন্ধু ও বাংলাদেশ"><a href=""> বঙ্গবন্ধু ও বাংলাদেশ</a></option>
                        <option value="ফটো গ্যালারি"><a href="">ফটো গ্যালারি</a></option>
                    </select>
                </div>


            </div>
        </div>
    </section>
    <section class=" ">
        <div class="w-full text-gray-700  dark-mode:text-gray-200 dark-mode:bg-gray-800 py-3 bg-primary">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-2xl px-4 mx-auto md:items-center md:justify-between md:flex-row">
                <div class="flex flex-row items-center justify-between">
                    <a href="#" class="w-20 text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="/Images/Logo/Logo1.png" alt=""></a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Home</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Service</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/platinum_jubilee">Platinum Jubilee</a>
                        <!-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>Dropdown</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                                </div>
                            </div>
                        </div> -->


                        @if (Route::has('login'))
                        @auth
                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/login">Dashboard</a>
                        @else

                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/login">Login</a>
                        @if (Route::has('register'))
                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/register">Register</a>
                        @endif
                        @endauth
                        @endif
                    </nav>
                </div>
                <div class="flex flex-row items-center justify-between hidden lg:block ">
                    <a href="#" class="lg:w-20 text-lg font-semibold text-white tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img class="lg:w-20" src="/Images/Logo/Logo2.png" alt=""></a>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <img src="Images/carousal/homeImage.jpg" alt="">
        </div>
    </section>
    <section class="my-6 p-6">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 py-3">

            <div class="max-w-screen-2xl  mx-auto ">
                <h2 class="my-6 text-4xl text-dark hover:text-surface">Headmistress Message</h2>
                <div class="flex justify-start">
                    <div class="lg:w-1/4 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                        <img alt="feature" class="object-cover object-center h-full w-full" src="Images/head/165A9865.JPG">
                    </div>
                    <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-3/4 lg:pl-12 lg:text-left text-center">
                        <p class="text-justify leading-8">2022 AD: Best wishes and congratulations to everyone.
                            Wishing all the teachers, parents and dear students of Bottomley Home Girls High
                            School a healthy, beautiful and safe life. Education is the main stage of
                            development of life. "æGive me a good mother and I will give you a good nation!
                            æNapoleon Bonarpat- I would like to tell the students in the light of these words of
                            the eminent person, everyone should cherish a dream of being educated. Never
                            hesitate to do whatever it takes to fulfill your dreams. By becoming an enlightened
                            person through education, you can build an enlightened and educated society. APJ
                            Abdul Kalam said, æLife and time are the best teachers in the world. Life teaches us
                            to use time properly and time teaches us to value life.” Students, you all will learn
                            to value time in life, learn to make good use of time to lead life in the right
                            direction. Keep the negative thoughts of life away and learn to grow in positive
                            thinking consciousness.In addition to the basic education of the school, the moral,
                            mental and social values that are taught will develop into a humane person with
                            advanced values. Mahatma Gandhi said, "Education is the effort to develop the
                            body, mind and soul in harmony." It is expected that the students will keep
                            themselves engaged in the development of body-mind-spirit and their creativity.
                            Throughout the ages, many great people have come to earth. They have done a lot
                            of good work in their life for which they live and will remain among people forever.
                            Some of the great sayings given by them are educational sayings, sometimes they
                            motivate us, sometimes they give us courage in bad times and sometimes they help
                            us to know the way to go in life. So you students will be diligent in developing the
                            habit of reading. Wishing everyone well.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-6 p-6">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 py-3">
            <div class="max-w-screen-2xl  mx-auto">
                <div>
                    <h3 class="my-6 text-4xl">About Us:</h3>
                </div>
                <div>
                    <p class="text-justify leading-8">2022 AD: Best wishes and congratulations to everyone.
                        Wishing all the teachers, parents and dear students of Bottomley Home Girls High
                        School a healthy, beautiful and safe life. Education is the main stage of
                        development of life. "æGive me a good mother and I will give you a good nation!
                        æNapoleon Bonarpat- I would like to tell the students in the light of these words of
                        the eminent person, everyone should cherish a dream of being educated. Never
                        hesitate to do whatever it takes to fulfill your dreams. By becoming an enlightened
                        person through education, you can build an enlightened and educated society. APJ
                        Abdul Kalam said, æLife and time are the best teachers in the world. Life teaches us
                        to use time properly and time teaches us to value life.” Students, you all will learn
                        to value time in life, learn to make good use of time to lead life in the right
                        direction. Keep the negative thoughts of life away and learn to grow in positive
                        thinking consciousness.In addition to the basic education of the school, the moral,
                        mental and social values that are taught will develop into a humane person with
                        advanced values. Mahatma Gandhi said, "Education is the effort to develop the
                        body, mind and soul in harmony." It is expected that the students will keep
                        themselves engaged in the development of body-mind-spirit and their creativity.
                        Throughout the ages, many great people have come to earth. They have done a lot
                        of good work in their life for which they live and will remain among people forever.
                        Some of the great sayings given by them are educational sayings, sometimes they
                        motivate us, sometimes they give us courage in bad times and sometimes they help
                        us to know the way to go in life. So you students will be diligent in developing the
                        habit of reading. Wishing everyone well.</p>
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="my-6 p-6">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 py-3">
            <div class="max-w-screen-2xl  mx-auto">
                <div class="">
                    <h2 class="text-4xl my-3">Gallery</h2>
                </div>
                <div class="flex flex-wrap md:-m-2 -m-1">
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="Images/Gallery/165A0084.JPG">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="Images/Gallery/IMG_0214.JPG">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="Images/Gallery/20220820_115001.jpg">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="Images/Gallery/20220929_124710 (1).jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="Images/Gallery/IMG_0220.JPG">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="Images/Gallery/IMG_9980.JPG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.6312624968373!2d90.38380240287351!3d23.76104975495866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a1aacba937%3A0xbe210ec3c883472e!2sBottomley%20Home%20Girl&#39;s%20High%20School!5e0!3m2!1sen!2sbd!4v1667473490440!5m2!1sen!2sbd"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Bottomley Home Girls High School</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-indigo-500 leading-relaxed">bottomlybd@yahoo.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">+8802-8141859</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Phone</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-dark transition-duration: 150ms; bg-surface border-0 py-2 px-6 focus:outline-none hover:bg-primaryVariant hover:text-white rounded text-lg">Button</button>
                <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
            </div>
        </div>
    </section>
    <footer class="text-gray-600 body-font bg-primary">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Bottomley—

            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
</body>

</html>