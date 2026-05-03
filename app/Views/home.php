<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas Tracker</title>
    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <script>
        window.APP_CONFIG = {
            baseUrl: "<?= base_url() ?>"
        };
        window.flashData = {
            created: "<?= session('created') ?>",
            updated: "<?= session('updated') ?>",
            deleted: "<?= session('deleted') ?>"
        };
    </script>
    <script src="<?= base_url('tinymce/tinymce.min.js') ?>" referrerpolicy="origin" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-950 text-white flex flex-row justify-between">
        <!-- <h1 class="text-2xl font-bold ml-5 py-10">Tambah Tugas</h1> -->
    <form action="<?= base_url('create') ?>" method="POST" class="w-1/3 h-screen p-10 flex flex-col sticky top-0">
        <div class="mb-5">
            <label for="tugas" class="block mb-2 text-md font-medium">Tugas</label>
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

            <?php foreach($tugas as $task => $t): ?>
            <tr id="tugas_<?= $task ?>" class="border-t border-gray-700">
                <td id="no_<?= $task ?>" class="p-5 text-center w-px <?= $t['status'] == 0 ? '' : 'bg-cyan-300 text-slate-950' ?>"><?= $task + 1 ?></td>
                <td id="tugas_<?= $task ?>" class="p-5 <?= $t['status'] == 0 ? '' : 'opacity-50' ?>"><?= $t['judul'] ?></td>
                <td id="waktu_<?= $task ?>" class="p-5 <?= $t['status'] == 0 ? '' : 'opacity-50' ?>"><?= $t['waktu_dibuat'] ?></td>
                <td id="status_<?= $task ?>" class="p-5 <?= $t['status'] == 0 ? '' : 'opacity-50' ?>"><?= $t['status'] == 0 ? 'Belum Selesai' : 'Selesai' ?></td>
                <td class="pr-2 text-right">
                    <div>
                        <button onclick="toggleDescription(<?= $task ?>)" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 cursor-pointer">
                            Deskripsi
                        </button>
                        <form action="<?= base_url('update/' . $t['id']) ?>" method="post" class="inline">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="mx-2 <?= $t['status'] == 0 ? 'bg-blue-500 hover:bg-blue-600' : 'bg-gray-500 hover:bg-gray-600' ?> text-white font-bold py-2 px-4 cursor-pointer">
                                <?= $t['status'] == 0 ? 'Tandai selesai' : 'Tandai belum' ?>
                            </button>
                        </form>
                        <form action="<?= base_url('delete/' . $t['id']) ?>" method="post" class="inline">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 cursor-pointer">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr id="deskripsi_<?= $task ?>" class="hidden <?= $t['status'] == 0 ? '' : 'opacity-50' ?>">
                <td class="pl-22 pr-5 pb-5 text-left" colspan="5"><?= $t['deskripsi'] ?></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</body>
</html>