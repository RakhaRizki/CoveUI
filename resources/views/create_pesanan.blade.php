    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased dark:bg-gray-900 dark:text-white">

        <div class="flex justify-center items-center min-h-screen pt-10 px-4 md:px-0">
            <!-- Added px-4 for padding on small screens -->

            <div
                class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 flex flex-col items-center w-full md:w-full lg:max-w-7xl">
                <!-- Adjusted max-width for large screens -->

                <!-- Heading -->
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Tambah Customer</h2>

                <form class="w-full">

                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Pembeli</label>
                        <input type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div>

                    <div class="mb-5">
                        <label for="order-name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pesanan</label>
                        <input type="text" id="order-name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div>

                    <div class="mb-5">
                        <label for="payment-method"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode
                            Pembayaran</label>
                        <select name="" id=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option value="Transfer">Transfer</option>
                            <option value="COD">COD</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div>

                    <div class="mb-5">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Pengiriman</label>
                        <select name="" id=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option value="JNE">JNE</option>
                            <option value="POS">POS</option>
                        </select>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="mt-5 text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </div>

                </form>

            </div>

        </div>

    </body>

    </html>
