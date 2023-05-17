<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <script defer src="js/alpine.min.js"></script>
    <title>FAQ</title>
</head>

<body>
    <header x-data="
        {
          navbarOpen: false
        }
      " class="flex w-full items-center bg-white z-50">
        <div class="container mx-auto">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="/" class="block w-full py-5">
                        <img src="images/logo.jpg" alt="logo" class="w-16" />
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        </button>
                        <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                            <ul class="blcok lg:flex">
                                <li>
                                    <a href="/" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="/pesan" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="/faq" class="flex py-2 text-base font-semibold text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        FAQ
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                        <a href="javascript:void(0)" class="py-3 px-7 text-base font-medium text-dark hover:text-primary">
                            Login
                        </a>
                        <a href="javascript:void(0)" class="rounded-lg bg-slate-800 py-3 px-7 text-base font-medium text-white hover:bg-opacity-90">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section x-data="
        {
          openFaq1: false, 
          openFaq2: false, 
          openFaq3: false, 
          openFaq4: false, 
          openFaq5: false, 
          openFaq6: false
        }
      " class="overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            FAQ
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
                            Any Questions? Look Here
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq2 = !openFaq2">
                            <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                    <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    What is a workshop?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                A workshop is a place that provides repair, maintenance and maintenance services for vehicles such as cars, motorcycles and bicycles. Workshops are usually equipped with special tools and equipment to do this work.
                            </p>
                        </div>
                    </div>
                    <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq1 = !openFaq1">
                            <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                    <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    How long the Mechanic come?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                It takes 1-2 hours depend of the distance .
                            </p>
                        </div>
                    </div>

                    <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq3 = !openFaq3">
                            <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                    <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    What types of services are usually available at repair shops?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Services that are usually available at the workshop include engine repair, replacement of damaged components, checking and replacing tires, checking and replacing vehicle electricity, and periodic maintenance services such as changing oil, filters and brake pads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq4 = !openFaq4">
                            <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                    <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    Do I have to take my vehicle to a mechanic?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Not always. You can take your vehicle to a repair shop if you want or we will come to your place
                            </p>
                        </div>
                    </div>
                    <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq5 = !openFaq5">
                            <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                    <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    How much do I have to pay for vehicle repairs at the garage?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                The cost of repairing a vehicle at a garage may vary depending on the type of repair needed, the make and type of vehicle, and the location of the workshop. Before bringing your vehicle to a repair shop, be sure to ask for an estimated cost first so you can estimate the costs to be incurred.
                            </p>
                        </div>
                    </div>
                    <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq6 = !openFaq6">
                            <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                    <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    Do I have to do periodic maintenance at the workshop?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq6" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Yes, carrying out periodic maintenance at the repair shop is very important to keep your vehicle in good working order and avoid more serious damage in the future. Some important periodic maintenance includes changing oil, filters, brake linings, and checking the vehicle's electrical and suspension systems.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5" d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z" fill="url(#paint0_linear)" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
</body>

</html>