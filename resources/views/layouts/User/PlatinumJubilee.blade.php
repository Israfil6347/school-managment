<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <section>
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
                    <img src="Images/Logo/Logo1.png" alt="">
                </a>
                <nav class="md:ml-auto md:mr-auto ">
                    <h5 class="text-center mr-5 hover:text-gray-900 text-4xl">প্লাটিনাম জুবিলী - ২০২৩</h5>
                    <h4 class="text-center mr-5 hover:text-gray-900">২০ ও ২১ জানুয়ারি -২০২৩ খ্রিঃ</h4>
                    <p class="text-center mr-5 hover:text-gray-900">বটমলী হোম বালিকা উচ্চ বিদ্যালয় তেজগাঁও ঢাকা ১২১৫</p>
                    <h2 class="text-center  text-3xl">রেজিস্ট্রেশন ফরম বিদ্যালয় শিক্ষার্থীর জন্য</h2>
                </nav>
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
                    <img src="Images/Logo/Logo2.png" alt="">
                </a>
            </div>
        </header>


    </section>
    <section class="text-gray-600 body-font ">
        <div class="container px-5 mx-auto ">

            <form action="">
                <div class="flex flex-col gap-4">
                    <div>
                        <div class="flex flex-wrap">
                            <div class="w-1/2">
                                <div class="">
                                    <label for="name" class="leading-7 text-sm text-gray-600">শিক্ষার্থী পূর্ণ নাম -(বাংলায়)</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="">
                                    <label for="email" class="leading-7 text-sm text-gray-600">শিক্ষার্থী পূর্ণ নাম -(English)</label>
                                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-wrap">
                            <div class="w-1/2">
                                <div class="">
                                    <label for="name" class="leading-7 text-sm text-gray-600">অদ্যায়ন কাল</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="">
                                    <label for="email" class="leading-7 text-sm text-gray-600">এস এস সি বর্ষ</label>
                                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="name" class="leading-7 text-sm text-gray-600">ঠিকানা</label>
                        <input type="text" id="name" name="name" class="w-full  bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700   leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div>
                        <label for="name" class="leading-7 text-sm text-gray-600">জাতীয় পরিচয় পএ নং</label>
                        <input type="text" id="name" name="name" class="w-full  bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700   leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div>
                        <div class="flex flex-wrap">
                            <div class="w-1/3">
                                <div class="">
                                    <label for="name" class="leading-7 text-sm text-gray-600">শহর</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="">
                                    <label for="email" class="leading-7 text-sm text-gray-600">পোস্ট কোড</label>
                                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <label for="name" class="leading-7 text-sm text-gray-600">শাটের সাইজ </label><br>
                                <select name="cars" id="cars" class="rounded-md w-full">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" class="w-full  bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div>
                        <div class="flex flex-wrap">
                            <div class="w-1/2">
                                <div class="">
                                    <label for="name" class="leading-7 text-sm text-gray-600">ইমেইল</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700  leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="">
                                    <label for="email" class="leading-7 text-sm text-gray-600">মোবাইল নং</label>
                                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700  leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h6 class="py-2">বর্তমান শিক্ষার্থীর জন্য</h6>
                        <div class="flex flex-wrap ">

                            <div class="w-1/2">
                                <div class="">

                                    <label for="name" class="leading-7 text-sm text-gray-600">শ্রেণী</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-6 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="">
                                    <label for="email" class="leading-7 text-sm text-gray-600">শাখা</label>
                                    <input type="email" id="email" name="email" class="w-full  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-6 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-wrap ">
                            <div class="w-1/3">
                                <div class="">
                                    <label for="name" class="leading-7 text-sm text-gray-600">শিক্ষার্থী</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-6 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="">
                                    <label for="email" class="leading-7 text-sm text-gray-600">চাকুরী</label>
                                    <input type="email" id="email" name="email" class="w-full  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-6 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="">
                                    <label for="email" class="leading-7 text-sm text-gray-600">ব্যবসা</label>
                                    <input type="email" id="email" name="email" class="w-full  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-6 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="float-center text-white bg-primary border-0 py-2 px-6 my-6 focus:outline-none hover:bg-primaryVariant rounded text-lg">Submit</button>
            </form>
        </div>
    </section>
    <footer class="text-gray-600 body-font">
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