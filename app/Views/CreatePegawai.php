

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <script defer src="js/alpine.min.js"></script>
    <title>ORDER</title>
</head>

<body>
    <header x-data="
        {
          navbarOpen: false
        }
      " class="flex w-full items-center bg-white">
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
                                    <a href="/pesan" class="flex py-2 text-base font-semibold text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="/faq" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
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

    <form action="/createPegawai" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <section class="container mt-10">
            <div class="text-center mb-10">
                <h1 class="text-2xl font-semibold">TAMBAH PEGAWAI</h1>
            </div>
            <div class="flex flex-col md:flex-row flex-wrap w-full">
                <div class="md:w-1/2">
                    <div class="w-full px-4">
                        <div class="mb-12">
                            <label for="" class="mb-3 block text-base font-medium text-black">
                                Name
                            </label>
                            <input name="name" type="text" placeholder="Default Input" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="w-full px-4">
                        <div class="mb-12">
                            <label for="" class="mb-3 block text-base font-medium text-black">
                                Address
                            </label>
                            <input name="address" type="text" placeholder="Default Input" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                    <div class="w-full px-4">
                        <div class="mb-12">
                            <label for="" class="mb-3 block text-base font-medium text-black">
                                Age
                            </label>
                            <input name="age" type="text" placeholder="Default Input" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                        </div>
                    </div>
                </div>




            <div>
                <button class="w-24 float-right py-3 px-5 rounded-lg bg-slate-800 text-white font-medium text-base transition hover:bg-primary-hover active:bg-primary-active disabled:cursor-default disabled:bg-[#F5F7FD]" type="submit" value="Simpan">
                    Submit
                </button>
            </div>

        </section>

    </form>

    <!-- batass -->

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
</body>

</html>