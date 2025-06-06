<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>1.blade</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        .card-container {
            width: 100vw;
            height: 100vh;
            margin: 0;
            display: flex;
            box-shadow: none;
            border-radius: 0;
            overflow: hidden;
        }


        .left {
            background: #092c3e;
            color: gold;
            padding: 40px 30px;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .qr img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

        .right {
            background: #d4af7f;
            color: #092c3e;
            padding: 40px 30px;
            width: 60%;
        }

        .right h4 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 20px;

        }

        .right h5 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .info p {
            margin: 6px 0;
        }

        .socials {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            gap: 8px;

        }

        .socials a {
            margin: 5px;
            color: gold;
            text-decoration: none;
        }

        .socials i {
            font-size: 22px;
        }

        #name {
            font-size: clamp(14px, 2.5vw, 20px);
        }
    </style>
</head>

<body>
    <div class="card-container">
        <div class="left">
            <div class="qr">
                @if (!empty($data['qr_image']))
                    @if(Str::startsWith($data['qr_image'], 'data:image/'))
                        <img src="{{ $data['qr_image'] }}" alt="QR Code">
                    @else
                        <img src="{{ asset('storage/' . $data['qr_image']) }}" alt="QR Code">
                    @endif
                @endif
            </div>

            <div class="socials">
                @if (!empty($data['linkedin']))
                    <a href="{{ $data['linkedin'] }}"><i class="fab fa-linkedin"></i></a>
                @endif
                @if (!empty($data['twitter']))
                    <a href="{{ $data['twitter'] }}"><i class="fab fa-twitter"></i></a>
                @endif
                @if (!empty($data['instagram']))
                    <a href="{{ $data['instagram'] }}"><i class="fab fa-instagram"></i></a>
                @endif
                @if (!empty($data['facebook']))
                    <a href="{{ $data['facebook'] }}"><i class="fab fa-facebook"></i></a>
                @endif
            </div>
        </div>

        <div class="right">
            <h4 id="name">{{ $data['name'] ?? 'Your Name' }}</h4>
            <h5>{{ $data['company'] ?? 'Company Profile' }}</h5>
            <hr>
            <div class="info">
                <h5>{{ $data['slogan'] ?? 'Your Company Slogan' }}</h5>
                <hr>
                <a href="tel:{{ $data['mobile'] ?? '' }}" style="color: inherit; text-decoration: none;">
                    📞 {{ $data['mobile'] ?? '+91-XXXXXXXXXX' }}
                </a><br>
                <a href="mailto:{{ $data['email'] ?? '' }}" style="color: inherit; text-decoration: none;">
                    📧 {{ $data['email'] ?? 'you@example.com' }}
                </a><br>

                @php
                    $website = $data['website'] ?? '';
                    if ($website && !preg_match('/^https?:\/\//', $website)) {
                        $website = 'https://' . $website;
                    }
                @endphp

                <a href="{{ $website }}" target="_blank" style="color: inherit; text-decoration: none;">
                    🌐 {{ $data['website'] ?? 'yourwebsite.com' }}
                </a>
                <br>
                @php
                    $address = $data['address'] ?? '';
                    $encodedAddress = urlencode($address);
                @endphp

                <a href="https://www.google.com/maps/search/?api=1&query={{ $encodedAddress }}" target="_blank"
                    style="color: inherit; text-decoration: none;">
                    📍 {{ $address ?: 'Your Address Here' }}
                </a>
            </div>
        </div>
    </div>

    @php use Illuminate\Support\Str; @endphp
</body>

</html>
