<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
</head>
<body class="bg-slate-950 text-white py-10 px-30">
    <div class="flex justify-between">
        <h1 class="text-2xl font-bold ml-5">Task Tracker</h1>
        <button class="bg-lime-300 hover:bg-lime-700 text-slate-950 font-bold py-2 px-4 cursor-pointer">
            Tambah Tugas
        </button>
    </div>
    <form action="#" method="POST" class="p-5 bg-slate-900">
        <div class="mb-5">
            <label for="tugas" class="block mb-2 text-sm font-medium">Judul Tugas</label>
            <input type="text" id="tugas" name="tugas" class="w-full p-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-lime-300">
        </div>
        <div class="mb-5">
            <label for="deskripsi" class="block mb-2 text-sm font-medium">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full p-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-lime-300"></textarea>
        </div>
        <button type="submit" class="bg-lime-300 hover:bg-lime-700 text-slate-950 font-bold py-2 px-4 cursor-pointer">
            Simpan Tugas
        </button>
        <button type="reset" class=" text-red-500 font-bold py-2 px-4 cursor-pointer">
            Hapus Draft
        </button>
    </form>
    <table class="table-auto w-full mt-5 border-collapse">
        <thead>
            <th class="p-5 text-left w-px">No.</th>
            <th class="p-5 text-left">Tugas</th>
            <th class="p-5 text-left">Waktu Dibuat</th>
            <th class="p-5 text-left">Status</th>
            <th class="pr-2 text-right">Aksi</th>
        </thead>
        <tbody class="bg-slate-900 border-b border-gray-700">
            <tr class="border-t border-gray-700">
                <td class="p-5 text-center w-px">1</td>
                <td class="p-5">Proyek A</td>
                <td class="p-5">22:05 15/05/2026</td>
                <td class="p-5">Belum Selesai</td>
                <td class="pr-2 text-right">
                    <div>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 cursor-pointer">
                            Tutup Deskripsi
                        </button>
                        <button class="mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 cursor-pointer">
                            Tandai Selesai
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 cursor-pointer">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="pl-22 pr-5 pb-5 text-left" colspan="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid deleniti, in, porro possimus veritatis ut deserunt placeat perferendis eligendi fugiat delectus voluptatibus, mollitia quod sequi officiis saepe recusandae a.</td>
            </tr>
            <tr class="border-t border-gray-700">
                <td class="p-5 text-center w-px">2</td>
                <td class="p-5">Proyek B</td>
                <td class="p-5">10:30 16/05/2026</td>
                <td class="p-5">Selesai</td>
                <td class="pr-2 text-right">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 cursor-pointer">
                        Buka Deskripsi
                    </button>
                    <button class="mx-2 bg-gray-500 text-white font-bold py-2 px-4 cursor-pointer" disabled>
                        Tandai Belum
                    </button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 cursor-pointer">
                        Hapus
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>