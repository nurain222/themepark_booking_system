@extends('custlayout2')

@section('content')
<!-- CSS -->
<style lang="scss">
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap');

    * {
    box-sizing: border-box;
    }

        .page-contain {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        font-family: 'Open Sans', sans-serif;
        }

        /* Header/Logo Title */
        .header {
        padding: 20px;
        color: white;
        font-size: 50px;
        text-align: center;
        }

        .data-card 
        {
            display: flex;
            flex-direction: column;
            max-width: 20.75em;
            min-height: 20.75em;
            overflow: hidden;
            border-radius: .5em;
            text-decoration: none;
            background: white;
            margin: 1em;
            padding: 2.75em 2.5em;
            box-shadow: 0 35px 50px -30px rgba(0, 0, 0, 0.2);
            transition: transform .45s ease, background .45s ease;
        
            h3 {
                color: #2E3C40;
                font-size: 3.5em;
                font-weight: 600;
                line-height: 1;
                padding-bottom: .5em;
                margin: 0 0 0.142857143em;
                border-bottom: 2px solid #753BBD;
                transition: color .45s ease, border .45s ease;
            }

            h4 {
                color: #627084;
                text-transform: uppercase;
                font-size: 1.125em;
                font-weight: 700;
                line-height: 1;
                letter-spacing: 0.1em;
                margin: 0 0 1.777777778em;
                transition: color .45s ease;
            }

            p {
                opacity: 0;
                color: #FFFFFF;
                font-weight: 600;
                line-height: 1.8;
                margin: 0 0 1.25em;
                transform: translateY(-1em);
                transition: opacity .45s ease, transform .5s ease;
            }
        }

    @keyframes point {
    0% {
    transform: translateX(0);
    }
    100% {
        transform: translateX(.125em);
    }
    }
    </style>
    <title>Skyworld | Catalogue</title>
    <div class="background">
        <div class="header">
            <br><b>Theme Parks</b>
        </div>
        <section class="page-contain">
            @foreach ($data as $d)
            <div class="data-card">
                <h3><b>RM {{$d->park_price}} </b>  <sub>per ticket</sub> </h3>
                <h4 style="color: #4e73df "> <b> {{$d->park_name}} </b> </h4> 
                <p>{{$d->park_details}}</p>
            </div>
            @endforeach
        </section>
    </div>
@endsection
