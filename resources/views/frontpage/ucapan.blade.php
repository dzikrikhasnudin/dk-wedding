<section id="ucapan" class="min-h-screen py-6">
    <h2 class="font-cursive text-center  text-4xl my-4">Guest Book</h2>

    <div class="bg-white max-w-lg p-8 mx-auto rounded-lg mb-4">
        <form class="">
            <div class="mb-4">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Nama Lengkap</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Masukkan nama" required>
            </div>
            <div class="mb-4">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Kedatangan</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Pilih</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                    <option value="Belum Pasti">Belum Pasti</option>
                </select>
            </div>
            <div class="mb-4">

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Ucapan /
                    Doa</label>
                <textarea id="message" rows="5"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Tulis ucapan atau doa..."></textarea>

            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
        </form>
    </div>

    <div class="bg-white max-w-lg p-8 mx-auto rounded-lg h-[500px] overflow-y-scroll">

        <ol class="relative border-s border-gray-200 dark:border-gray-700">
            <li class="mb-6 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
                    <i class="fa-solid fa-user text-xs text-blue-950"></i>
                </span>
                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">John Doe
                    <span
                        class="bg-green-100 text-teal-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Hadir</span>
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">on
                    January 13th, 2022</time>
                <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages
                    including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing
                    pages.</p>

            </li>
            <li class="mb-6 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
                    <i class="fa-solid fa-user text-xs text-blue-950"></i>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Albert Einstein <span
                        class="bg-amber-100 text-amber-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Belum
                        Pasti</span>
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">on
                    December 7th, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are
                    first designed in Figma and we keep a parity between the two versions even as we update the project.
                </p>
            </li>
            <li class="mb-6 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
                    <i class="fa-solid fa-user text-xs text-blue-950"></i>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Isaac Newton <span
                        class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Tidak
                        Hadir</span></h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">on
                    December 2nd, 2021</time>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web
                    components and interactive elements built on top of Tailwind CSS.</p>
            </li>
            <li class="mb-6 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
                    <i class="fa-solid fa-user text-xs text-blue-950"></i>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Albert Einstein <span
                        class="bg-amber-100 text-amber-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Belum
                        Pasti</span>
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">on
                    December 7th, 2021</time>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">All of the pages and components are
                    first designed in Figma and we keep a parity between the two versions even as we update the project.
                </p>
            </li>
            <li class="mb-6 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
                    <i class="fa-solid fa-user text-xs text-blue-950"></i>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Albert Einstein <span
                        class="bg-amber-100 text-amber-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Belum
                        Pasti</span>
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">on
                    December 7th, 2021</time>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">All of the pages and components are
                    first designed in Figma and we keep a parity between the two versions even as we update the project.
                </p>
            </li>
            <li class="mb-6 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
                    <i class="fa-solid fa-user text-xs text-blue-950"></i>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Albert Einstein <span
                        class="bg-amber-100 text-amber-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Belum
                        Pasti</span>
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">on
                    December 7th, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are
                    first designed in Figma and we keep a parity between the two versions even as we update the project.
                </p>
            </li>
            <li class="mb-6 ms-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
                    <i class="fa-solid fa-user text-xs text-blue-950"></i>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Albert Einstein <span
                        class="bg-amber-100 text-amber-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">Belum
                        Pasti</span>
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">on
                    December 7th, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are
                    first designed in Figma and we keep a parity between the two versions even as we update the project.
                </p>
            </li>
        </ol>


    </div>

</section>