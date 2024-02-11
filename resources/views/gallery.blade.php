@extends('layouts.app-layout')

@section('title', 'Gallery')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Photo</th>
                <th scope="col" class="px-6 py-3">Uploader</th>
                <th scope="col" class="px-6 py-3">Like</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        {{-- <tbody>
            <?php
            include "koneksi.php";
            $sql = mysqli_query($conn, "select * from foto,user where foto.userid=user.userid");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4"><?= $data['fotoid'] ?></td>
                    <td class="px-6 py-4"><?= $data['judulfoto'] ?></td>
                    <td class="px-6 py-4"><?= $data['deskripsifoto'] ?></td>
                    <td class="px-6 py-4">
                        <img src="gambar/<?= $data['lokasifile'] ?>" width="200px">
                    </td>
                    <td class="px-6 py-4"><?= $data['namalengkap'] ?></td>
                    <td class="px-6 py-4">
                        <?php
                        $fotoid = $data['fotoid'];
                        $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="like.php?fotoid=<?= $data['fotoid'] ?>" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Like</a>
                        <a href="komentar.php?fotoid=<?= $data['fotoid'] ?>" class="font-medium text-green-600 dark:text-blue-500 hover:underline">Comment</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody> --}}
    </table>
</div>

@endsection
