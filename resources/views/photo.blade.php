@extends('layouts.app-layout')

@section('title', 'Photo')

@section('content')

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <form action="" method="" class="mt-2" enctype="multipart/form-data">
        <div class="max-w-sm  mb-2">
            <div class="mb-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" name="judulfoto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <input type="text" name="deskripsifoto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi file</label>
                <input type="file" name="lokasifile" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
            </div>
            {{-- <div class="mb-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Album</label>
                <select name="albumid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <?php
                    include "koneksi.php";
                    $userid = $_SESSION['userid'];
                    $sql = mysqli_query($conn, "select * from album where userid='$userid'");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <option value="<?= $data['albumid'] ?>"><?= $data['namaalbum'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div> --}}
            <button type="submit" value="Tambah" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">Add Photo</button>
        </div>
    </form>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Upload Date</th>
                <th scope="col" class="px-6 py-3">File Location</th>
                <th scope="col" class="px-6 py-3">Album</th>
                <th scope="col" class="px-6 py-3">Like</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        {{-- <tbody>
            <?php
            include "koneksi.php";
            $userid = $_SESSION['userid'];
            $sql = mysqli_query($conn, "select * from foto,album where foto.userid='$userid' and foto.albumid=album.albumid");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4"><?= $data['fotoid'] ?></td>
                    <td class="px-6 py-4"><?= $data['judulfoto'] ?></td>
                    <td class="px-6 py-4"><?= $data['deskripsifoto'] ?></td>
                    <td class="px-6 py-4"><?= $data['tanggalunggah'] ?></td>
                    <td class="px-6 py-4">
                        <img src="gambar/<?= $data['lokasifile'] ?>" width="200px">
                    </td>
                    <td class="px-6 py-4"><?= $data['namaalbum'] ?></td>
                    <td class="px-6 py-4">
                        <?php
                        $fotoid = $data['fotoid'];
                        $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="edit_foto.php?fotoid=<?= $data['fotoid'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="hapus_foto.php?fotoid=<?= $data['fotoid'] ?>" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody> --}}
    </table>
</div>

@endsection
