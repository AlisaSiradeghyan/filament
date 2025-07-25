<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Characteristics</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">
<header class="bg-white shadow sticky top-0 z-10">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800">Product Data Viewer</h1>
        <a href="/admin" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Admin Login
        </a>
    </div>
</header>

<main class="max-w-5xl mx-auto py-10 px-4">
    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Characteristics by Category</h2>

    @forelse ($categories as $category)
        <section class="bg-white shadow-sm rounded-lg p-6 mb-8 border border-gray-200">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4 border-b pb-2">{{ $category->name }}</h3>
            <ul class="divide-y divide-gray-100">
                @forelse ($category->characteristics as $characteristic)
                    <li class="py-4 hover:bg-gray-50 px-2 rounded transition">
                        <div class="text-base font-medium text-gray-900">
                            {{ $characteristic->name }}
                        </div>
                        <div class="text-sm text-gray-600">
                            <span class="font-semibold">Type:</span> {{ $characteristic->meta_data['type'] ?? '-' }}
                        </div>
                        <div class="text-sm text-gray-600">
                            <span class="font-semibold">Description:</span> {{ $characteristic->meta_data['description'] ?? '-' }}
                        </div>
                    </li>
                @empty
                    <li class="text-sm text-gray-500 italic py-4">No characteristics found.</li>
                @endforelse
            </ul>
        </section>
    @empty
        <p class="text-center text-gray-500">No categories available.</p>
    @endforelse
</main>
</body>
</html>
