


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/Admin Selection</title>
    <style>
        /* Your existing styles */
        body {
            font-family: Arial, sans-serif;
            background: #b1b1b6;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('{{ asset('css/image2.jpeg') }}'); /* Replace with your image URL */
            background-size: cover; /* Ensures the image covers the entire background */
            background-position: center; /* Centers the background image */
        }

        .container {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f0eeee;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* New styles for logo and site name */
        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            /* Adjust width and height as needed */
            width: 150px;
            height: auto;
        }

        .site-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
        }

        button:focus {
            outline: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <!-- Replace 'logo.png' with your actual logo file path -->
        <img src="{{ asset('css/image3.png') }}" alt="Logo">
    </div>
    <h2>Login As: </h2>
    <form action="#" method="POST">
        <a href="{{ route('admin.login') }}">
            <button type="button">Organizer</button>
        </a>
        <a href="{{ route('user.login') }}">
            <button type="button">User</button>
        </a>
    </form>
</div>

</body>
</html>
