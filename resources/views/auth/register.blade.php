<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Photo | Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="/registeruser" method="post">
                @csrf
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign Up to our Account</h5>
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" class="lowercase border rounded-lg block w-full p-2.5 sm:text-sm" placeholder=" @username" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" class="rounded-lg block w-full p-2.5 sm:text-sm" placeholder=" Email">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" class="rounded-lg block w-full p-2.5 sm:text-sm" placeholder=" Password" required>
                    </div>
                    <div class="col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="rounded-lg block w-full p-2.5 sm:text-sm" placeholder=" Nama Lengkap">
                    </div>
                    <div class="col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" name="alamat" class="rounded-lg block w-full p-2.5 sm:text-sm" placeholder=" Alamat">
                    </div>

                    <button type="submit" value="Login" class=" w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 col-span-2">Sign Up</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300 col-span-2">
                        Already have an account? <a href="{{ route('login') }}" class="text-blue-700 hover:underline dark:text-blue-500">Sign in account</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
