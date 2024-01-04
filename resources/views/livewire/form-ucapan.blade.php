<div class="bg-white max-w-lg p-8 mx-auto rounded-lg mb-4">
    @if (session('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert">
        {{ session('success') }}
    </div>
    @endif
    <form wire:submit='save' method="POST">
        <div class="mb-4">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">
                Nama Lengkap</label>
            <input wire:model='nama' type="text" id="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Masukkan nama" required>
        </div>
        <div class="mb-4">
            <label for="kehadiran" class="block mb-2 text-sm font-medium text-gray-900 ">Kedatangan</label>
            <select wire:model='kehadiran' id="kehadiran"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Pilih</option>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <option value="Belum Pasti">Belum Pasti</option>
            </select>
        </div>
        <div class="mb-4">

            <label for="ucapan" class="block mb-2 text-sm font-medium text-gray-900 ">Ucapan /
                Doa</label>
            <textarea wire:model='ucapan' id="ucapan" rows="5"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Tulis ucapan atau doa..."></textarea>

        </div>

        <button type="submit"
            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
    </form>
</div>