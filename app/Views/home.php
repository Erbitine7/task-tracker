<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <script>
        window.APP_CONFIG = {
            baseUrl: "<?= base_url() ?>"
        };
    </script>
    <script src="<?= base_url('tinymce/tinymce.min.js') ?>" referrerpolicy="origin" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-950 text-white flex flex-row justify-between">
        <!-- <h1 class="text-2xl font-bold ml-5 py-10">Tambah Tugas</h1> -->
    <form action="#" method="POST" class="w-1/3 h-screen p-10 flex flex-col sticky top-0">
        <div class="mb-5">
            <label for="tugas" class="block mb-2 text-md font-medium">Judul Tugas</label>
            <input type="text" id="tugas" name="tugas" onchange="saveDraft()" class="w-full p-2 border bg-gray-800 border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-lime-300">
        </div>
        <div class="mb-5 grow flex flex-col">
            <label for="deskripsi" class="block mb-2 text-md font-medium">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" onchange="saveDraft()"></textarea>
        </div>
        <div class="flex justify-end gap-5">
            <button type="reset" onclick="removeDraft()" class=" text-red-500 font-bold py-2 px-4 cursor-pointer">
                Hapus Draft
            </button>
            <button type="submit" class="bg-lime-300 hover:bg-lime-700 text-slate-950 font-bold py-2 px-4 cursor-pointer">
                Simpan Tugas
            </button>
        </div>
    </form>
    <table class="table-auto w-2/3 mt-5 border-collapse mr-10 h-min">
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
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</body>
</html>