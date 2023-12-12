@extends('format')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Music</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add any custom styles here */
        /* Adjustments to fit the layout */
        .music-list {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4">Top Music</h1>

        <!-- Duration Selection -->
        <div class="text-center mt-3">
        <button class="btn btn-primary" onclick="showDaily()">Daily</button>
            <button class="btn btn-primary" onclick="showWeekly()">Weekly</button>
            <button class="btn btn-primary" onclick="showMonthly()">Monthly</button>
            <button class="btn btn-primary" onclick="showYearly()">Yearly</button>
        </div>

        <!-- Music List -->
        <ul id="musicList" class="list-group music-list">
            <!-- Dynamic content will be displayed here -->
        </ul>
    </div>

    <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function showDaily() {
            // Replace this with code to fetch and display weekly top music
            // For example:
            document.getElementById('musicList').innerHTML = `
                <li class="list-group-item">Song Title 1 - Artist 1</li>
                <li class="list-group-item">Song Title 2 - Artist 2</li>
                <li class="list-group-item">Song Title 3 - Artist 3</li>
            `;
        }

        function showWeekly() {
            // Replace this with code to fetch and display weekly top music
            // For example:
            document.getElementById('musicList').innerHTML = `
                <li class="list-group-item">Song Title 1 - Artist 1</li>
                <li class="list-group-item">Song Title 2 - Artist 2</li>
                <li class="list-group-item">Song Title 3 - Artist 3</li>
            `;
        }

        function showMonthly() {
            // Replace this with code to fetch and display monthly top music
            // For example:
            document.getElementById('musicList').innerHTML = `
                <li class="list-group-item">Song Title A - Artist A</li>
                <li class="list-group-item">Song Title B - Artist B</li>
                <li class="list-group-item">Song Title C - Artist C</li>
            `;
        }

        function showYearly() {
            // Replace this with code to fetch and display yearly top music
            // For example:
            document.getElementById('musicList').innerHTML = `
                <li class="list-group-item">Song Title X - Artist X</li>
                <li class="list-group-item">Song Title Y - Artist Y</li>
                <li class="list-group-item">Song Title Z - Artist Z</li>
            `;
        }
    </script>
</body>
</html>
@endsection
