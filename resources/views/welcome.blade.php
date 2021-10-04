<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 text-center">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium text-gray-800 uppercase tracking-wider">
                                    Id
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-800 uppercase tracking-wider">
                                    Nazwa
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-800 uppercase tracking-wider">
                                    Liczba fiszek
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-800 uppercase tracking-wider">
                                    Dodawanie fiszek
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-800 uppercase tracking-wider">
                                    Drukowanie fiszek
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-800 uppercase tracking-wider">
                                    Test
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-800 uppercase tracking-wider">
                                    Słowniczek
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                            @foreach($packages as $package)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900"> {{ $package->name }}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $package->fish()->count() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                        <a href="{{ route('add', ['package' => $package->id]) }}"
                                           class="text-green-700 hover:text-green-900"><i class="fas fa-plus"></i></a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                        <a href="{{ route('print', ['id' => $package->id]) }}"
                                           class="text-blue-600 hover:text-blue-900"><i class="fas fa-print"></i></a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                        <a href="{{ route('test', ['lang' => 'ang','id' => $package->id]) }}"
                                           class="text-blue-600 hover:text-blue-900">ENG</a>
                                        /
                                        <a href="{{ route('test', ['lang' => 'pol','id' => $package->id]) }}"
                                           class="text-blue-600 hover:text-blue-900">PL</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                        <a href="{{ route('wordbank', ['id' => $package->id]) }}"
                                           class="text-blue-600 hover:text-blue-900"><i
                                                class="fas fa-book-open"></i></a>
                                    </td>
                                </tr
                            @endforeach
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                                    <form action="{{ Request::url() }}" method="POST">
                                        @csrf
                                        <input type="text" name="name" placeholder="Wpisz nazwę nowej paczki..." autocomplete="off"/>
                                        <button class="text-green-700 hover:text-green-900" type="submit"><i
                                                class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
