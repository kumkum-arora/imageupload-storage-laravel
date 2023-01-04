<!-- upload image page -->
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: rgb(236, 236, 236);
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add image</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="st1.css">
</head>

<body>
    <!-- component -->
    <div tabindex="0" class="focus:outline-none">
        <!-- Remove py-8 -->

        <div class="mx-auto container py-8 ">
            <div class="flex flex-wrap items-center lg:justify-between justify-center">
                @foreach ($data as $row)
                    <!-- Card 1 -->
                    <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8 mt-8">
                        <div>
                            <img alt="person capturing an image" src="storage/{{ $row->image }}" tabindex="0"
                                class="focus:outline-none w-full h-60" />
                        </div>
                        <div class="bg-white">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">
                                        {{ $row->name }}</h2>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"></p>
                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">
                                    {{ $row->title }}</p>

                                <div class="flex items-center justify-between py-4">

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Card 1 Ends -->

</body>

</html>
