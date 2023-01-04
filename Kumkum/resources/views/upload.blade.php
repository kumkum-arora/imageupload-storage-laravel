<!-- upload image page -->
<!DOCTYPE html>
<html>

<head>
    <style>
        .main {
            width: 100%;
            height: 650px;
            text-align: center;
        }

        .main1 {
            width: 400px;
            height: 500px;
            display: inline-block;
            border: none;
            border-radius: 20px;
            margin: auto;
            margin-top: 150px;
        }

        .main1 p {
            text-align: left;
            padding-left: 5px;
            font-weight: bold;
            margin-top: 15px;
        }

        .main h1 {
            font-size: 28px;
            font-weight: bold;
            margin-top: 10px;
        }

        .main p a {
            color: blue;
        }

        .main p a:hover {
            color: darkgray;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add image</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="st1.css">
</head>

<body>
    <div class="main">
        <div class="main1">

            <h1>Create Your Profile Here</h1>
            <form method="post" action="{{ url('add-profile') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <p>Enter Your Name</p>
                <input type="text"
                    class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-mdfocus:placeholder-gray-500focus:bg-white focus:border-gray-600 focus:outline-none"
                    name="name" class="name">
                <p>Profile Pic</p>
                <input type="file"
                    class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                    name="image">

                <p>Add Title</p>
                <input type="text"
                    class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-mdfocus:placeholder-gray-500focus:bg-white focus:border-gray-600 focus:outline-none"
                    name="title" class="title">

                <input type="submit"
                    class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block  hover:text-white hover:bg-black"
                    name="save" value="Register">
            </form>
        </div>
    </div>
</body>

</html>
