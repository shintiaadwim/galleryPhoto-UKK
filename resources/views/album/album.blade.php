@extends('layouts.app-layout')

@section('title', 'Album')

@section('content')

    <a href="/add-album"
        class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
        Album</a>

    <br><br>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Date Created</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $album->albumid }}</th>
                        <td class="px-6 py-4">{{ $album->namaalbum }}</td>
                        <td class="px-6 py-4">{{ $album->deskripsi }}</td>
                        <td class="px-6 py-4">{{ $album->created_at->format('D M Y') }}</td>
                        <td class="px-6 py-4">

                            <a href="/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="/" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
