<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url("./css/app.css") ?>>
    <script defer src="js/alpine.min.js"></script>
    <title>ORDER</title>
</head>

<body>


    <form action="/orders/update" method="POST">
        <input type="hidden" name="id" value="<?= $order['id']; ?>">
        <section class="container mt-20">
            <div class="text-center mb-10">
                <h1 class="text-2xl font-semibold">Call a Mechanic Service</h1>
            </div>
            <div class="flex flex-col md:flex-row flex-wrap w-full">
                <div class="md:w-1/2">
                    <div class="w-full px-4">
                        <div class="mb-12">
                            <label for="" class="mb-3 block text-base font-medium text-black">
                                Nama Pelanggan
                            </label>
                            <input value="<?= $order['customer_name']; ?>" name="customer_name" type="text" placeholder="Default Input" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="w-full px-4">
                        <div class="mb-12">
                            <label for="" class="mb-3 block text-base font-medium text-black">
                                Alamat
                            </label>
                            <textarea name="address" rows="5" placeholder="Default textarea" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"><?= $order['address']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="w-full px-4">
                        <div class="mb-12">
                            <label for="" class="mb-3 block text-base font-medium text-black">
                                Nama Mobil
                            </label>
                            <input value="<?= $order['car_name']; ?>" name="car_name" type="text" placeholder="Default Input" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <div class="mb-12">
                            <label for="" class="mb-3 block text-base font-medium text-black">
                                Detail Kerusakan
                            </label>
                            <textarea name="damage_details" rows="5" placeholder="Default textarea" class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"><?= $order['damage_details']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row flex-wrap w-full justify-between">
                <div class="w-full px-4 lg:w-5/12">
                    <div class="mb-12">
                        <label for="" class="mb-3 block text-base font-medium text-black">
                            Foto Kerusakan Mobil
                        </label>
                        <input value="<?= $order['car_image']; ?>" name="car_image" type="file" class="w-full cursor-pointer rounded-lg border-[1.5px] border-form-stroke font-medium text-body-color placeholder-body-color outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-form-stroke file:bg-[#F5F7FD] file:py-3 file:px-5 file:text-body-color file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12">
                    <div class="mb-12">
                        <label for="" class="mb-3 block text-base font-medium text-black">
                            Type Mobil
                        </label>
                        <div class="relative">
                            <select value="<?= $order['car_type']; ?>" name="car_type" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                <option value="Sedan">Sedan</option>
                                <option value="Suv">Suv</option>
                                <option value="Box">Box</option>
                            </select>
                            <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-5/12">
                <div class="mb-12">
                    <label for="" class="mb-3 block text-base font-medium text-black">
                        Pegawai
                    </label>
                    <div class="relative">
                        <select name="handleby" class="w-full appearance-none rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                            <?php foreach ($pegawai as $order) : ?>
                                <option value="<?= $order['name']; ?>"><?= $order['name']; ?></option>

                            <?php endforeach; ?>


                        </select>
                        <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                        </span>
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