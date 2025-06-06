<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>3.blade</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            box-sizing: border-box;
            background: #f3f6fa;
        }

        @page {
            margin: 0;
            size: A4 landscape;
        }

        body,
        .card-container {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .card-container {
            display: flex;
            box-shadow: none;
            border-radius: 0;
            overflow: hidden;
            background: linear-gradient(to right, #9c27b0, #ff5722);
        }

        .left {
            background: #fff;
            padding: 40px 30px;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #000;
        }

        .qr img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 40px;
            background: #cf7373;
        }

        .socials {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 24px;
        }

        .socials a {
            color: #000 !important;
            text-decoration: none;
            font-size: 2.2rem;
            transition: color 0.2s;
        }

        .socials a:hover {
            color: #444 !important;
        }

        .right {
            background: linear-gradient(to bottom, #9c27b0, #ff5722);
            color: #000;
            padding: 48px 64px;
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-left: 4px solid #9c27b0;
        }

        .right h3,
        .right h5 {
            color: #000;
        }

        .right h3 {
            margin: 0 0 8px 0;
            font-size: 2.4rem;
            font-weight: 700;
        }

        .right h5 {
            margin: 0 0 16px 0;
            font-size: 1.4rem;
            font-weight: 500;
        }

        .info {
            margin-top: 16px;
            font-size: 1.3rem;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .info a {
            color: #000 !important;
            text-decoration: none;
            font-size: 1.2rem;
            margin-bottom: 4px;
            transition: color 0.2s;
            word-break: break-all;
        }

        .info a:hover {
            color: #444 !important;
        }

        .info .icon {
            margin-right: 10px;
            font-size: 1.3rem;
            vertical-align: middle;
            color: #000 !important;
        }

        .info i {
            color: #000 !important;
        }

        .socials i {
            color: #000 !important;
        }

        @media print {

            .card-container,
            html,
            body {
                width: 100vw !important;
                height: 100vh !important;
                min-width: 0 !important;
                min-height: 0 !important;
                padding: 0 !important;
                margin: 0 !important;
                border-radius: 0 !important;
                box-shadow: none !important;
                background: linear-gradient(to right, #9c27b0, #ff5722) !important;
            }

            .left {
                background: #b4b0b0 !important;
                color: #000 !important;
            }

            .right,
            .left {

                color: #000 !important;
            }

            .info a,
            .info .icon,
            .info i,
            .socials a,
            .socials i,
            .right h3,
            .right h5 {
                color: #000 !important;
            }
        }

        @media print {

            body,
            html,
            .card-container {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
        }

        @media (max-width: 900px) {
            .card-container {
                flex-direction: column;
            }

            .left,
            .right {
                width: 100%;
                padding: 24px 8px;
            }
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
            <h3>{{ $data['name'] ?? 'Your Name' }}</h3>
            <h5>{{ $data['company'] ?? 'Company Profile' }}</h5>
            <hr>
            <div class="info">
                <div>
                    <span class="icon"><i class="fas fa-bullhorn"></i></span>
                    {{ $data['slogan'] ?? 'Your Company Slogan' }}
                </div>
                <a href="tel:{{ $data['mobile'] ?? '' }}">
                    <span class="icon"><i class="fas fa-phone-alt"></i></span>
                    {{ $data['mobile'] ?? '+91-XXXXXXXXXX' }}
                </a>
                <a href="mailto:{{ $data['email'] ?? '' }}">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    {{ $data['email'] ?? 'you@example.com' }}
                </a>
                @php
                    $website = $data['website'] ?? '';
                    if ($website && !preg_match('/^https?:\/\//', $website)) {
                        $website = 'https://' . $website;
                    }
                @endphp
                <a href="{{ $website }}" target="_blank">
                    <span class="icon"><i class="fas fa-globe"></i></span>
                    {{ $data['website'] ?? 'yourwebsite.com' }}
                </a>
                @php
                    $address = $data['address'] ?? '';
                    $encodedAddress = urlencode($address);
                @endphp
                <a href="https://www.google.com/maps/search/?api=1&query={{ $encodedAddress }}" target="_blank">
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    {{ $address ?: 'Your Address Here' }}
                </a>
            </div>
        </div>
    </div>
</body>

</html>
