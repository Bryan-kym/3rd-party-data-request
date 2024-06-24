<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /*.hidden {*/
        /*    display: none;*/
        /*}*/
        /*.half{*/
        /*    width:50%*/
        /*}*/
        /*.full{*/
        /*    width:100%*/
        /*}*/

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: start;
            background-color: #dc3737;
            padding: 1rem;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
        }
        .navbar a:hover {
            background-color: #000000;
            color: #ffffff;
        }
        .content {
            padding: 2rem;
        }
        .home-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 2rem;
        }
        .home-buttons button {
            padding: 1rem 2rem;
            font-size: 1rem;
        }
        .mx-10{
            margin-left: 15%;
            margin-right: 15%;
        }
        .bg-custom{
            background-color: #efefea;
        }
        .headsss{
            text-align: center;
        }
        .content {
            text-align: center;
            padding: 20px;
        }

        .home-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 50%;
        }

        .card h2 {
            font-size: 18px;
            color: #333;
        }

        .card:hover {
            transform: scale(1.05);
        }
        .rounded-div {
            border-radius: 15px;
        }
    </style>
</head>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
