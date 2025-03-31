<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Header Partial -->
    @include('partials.header')

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Book List</h1>

        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="border-b">
                    <th class="px-4 py-2">ISBN</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $book->isbn }}</td>
                        <td class="px-4 py-2">{{ $book->title }}</td>
                        <td class="px-4 py-2">{{ $book->author }}</td>
                        <td class="px-4 py-2">{{ $book->description }}</td>
                        <td class="px-4 py-2">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer Partial -->
    @include('partials.footer')
</body>
</html>
