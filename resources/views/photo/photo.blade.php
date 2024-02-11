@extends('layouts.app-layout')

@section('title', 'Photo')

@section('content')

    <a href="/add-photo"
        class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
        Photo</a>

    <br><br>

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
