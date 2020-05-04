<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css" />
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex items-center flex-col md:flex-row">
                <li>
                    <a href="{{ route('movies.index') }}" class="flex items-center">
                        <div>
                            <img src="https://img.icons8.com/color/48/000000/disney-movies-.png" />
                        </div>

                        <div id="logo-text">Movie App</div>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input
                        type="text"
                        name=""
                        id=""
                        class="bg-gray-800 rounded-full w-64 px-4 py-1 outline-none pl-8 focus:outline-none focus:shadow-outline"
                        placeholder="Search ..."
                    >
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8" />
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
