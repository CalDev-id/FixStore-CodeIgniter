<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <script defer src="js/alpine.min.js"></script>
    <title>Document</title>
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
                                    <a href="/pesan" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        Features
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                        <a href="javascript:void(0)" class="py-3 px-7 text-base font-medium text-dark hover:text-primary">
                            Login
                        </a>
                        <a href="javascript:void(0)" class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>