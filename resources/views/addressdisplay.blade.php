<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    </head>
    <body>
        <div class="columns is-centered">
            <div class="column is-half">
                <h2 class="subtitle">Addresses</h2>
                @if (count($addresses))
                    @foreach($addresses as $address)
                    <div class="card">
                        <a href="{{ url('/delete/' . $loop->index) }}">Delete</a>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4"> {{ $address->name }}</p>
                                    <p class="subtitle is-6">{{ $address->phone_number }}</p>
                                </div>
                            </div>
                            <div class="content">{{ $address->first_Line }}<br>{{ $address->town_city }}<br>{{ $address->postcode }}</div>
                        </div>
                    </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </body>
</html>
