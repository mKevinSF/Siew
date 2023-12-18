@extends('format')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Music</title>
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
        <h1 class="text-center mt-4">Current Top 3 Musics</h1>
        <!-- Music List -->
        <ul id="musicList" class="list-group music-list">
            <!-- Dynamic content will be displayed here -->
            @foreach($topThreeMusicIds as $index => $musicId)
                @php
                    $music = \App\Models\Musics::find($musicId);
                @endphp
                @if($music)
                    <li class="list-group-item">
                        <h4><img src="{{ $music->imageURL }}" alt="..." style="width:10%;height:10%;margin-right:2%;">{{ $index + 1 }}. {{ $music->music_name }} by {{$music->creators->creator_name}} | dengan rating {{ $topThreeRatings[$index] }}.0 / 5.0</h4>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
