<!DOCTYPE html>
<html lang="en">
@php
    use Illuminate\Support\Str;
    $imagePath = public_path('images/templates/t1.jpg');
    $base64 = base64_encode(file_get_contents($imagePath));
    $backgroundImage = 'data:image/jpg;base64,' . $base64;
@endphp

<head>
    <meta charset="UTF-8">
    <title>Template 4 Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background: #222;
            box-sizing: border-box;
            overflow: hidden;
        }

        @page {
            margin: 0;
            size: A4 portrait;
        }

        body,
        .card-container,
        #template4 {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        #template4 {
            width: 100vw;
            height: 100vh;
            padding: 48px 32px 32px 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin: auto;
            background: radial-gradient(circle at 20% 10%, #6dd5ed 0%, #b24592 60%, #000 100%);
        }

        /* Top-half background image */
        #template4 .profile-bg-half {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 17%;
            /* Adjust as needed */
            background: url('{{ asset('images/templates/t1.jpg') }}') center top/cover no-repeat;
            z-index: 1;
            pointer-events: none;
        }

        /* Make all content above the background image */
        #template4>*:not(.profile-bg-half) {
            position: relative;
            z-index: 2;
        }

        .profile-img {
            margin-top: 40px;
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-img img {
            width: 210px;
            height: 210px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
            background: #fff;
        }

        #template4 .name {
            font-size: 2.6rem;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 8px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
        }

        #template4 .title {
            color: #f3f6fa;
            text-align: center;
            font-size: 1.6rem;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        #template4 .company {
            color: #f3f6fa;
            text-align: center;
            font-size: 1.4rem;
            margin-bottom: 32px;
        }

        #template4 .icon-grid {
            display: grid;
            grid-template-columns: repeat(3, 80px);
            gap: 40px;
            justify-content: center;
            margin: 0 auto 48px auto;
        }

        #template4 .icon-btn {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.18);
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
            cursor: pointer;
            position: relative;
            text-decoration: none;
        }

        #template4 .icon-btn:hover {
            background: rgba(255, 255, 255, 0.18);
            color: #6dd5ed;
        }

        #template4 .icon-email {
            color: #6dd5ed;
        }

        #template4 .icon-instagram {
            color: #e1306c;
        }

        #template4 .icon-facebook {
            color: #1877f3;
        }

        #template4 .icon-twitter {
            color: #1da1f2;
        }

        #template4 .icon-linkedin {
            color: #0077b5;
        }

        #template4 .icon-telegram {
            color: #229ed9;
        }

        #template4 .icon-address {
            color: #f59e42;
        }

        #template4 .icon-website {
            color: #4f8cff;
        }

        #template4 .bottom-effect {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 12%;
            background: none;
            pointer-events: none;
        }

        #template4 .dots {
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #6dd5ed 1.5px, transparent 2px);
            background-size: 12px 12px;
            opacity: 0.5;
            filter: blur(1.5px);
        }

        @media (max-width: 900px) {
            #template4 {
                width: 98vw;
                height: auto;
                padding: 24px 8px;
            }

            #template4 .icon-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>

<body>
    <div class="card-container">
        <div id="template4">


            <div class="profile-bg-half" style="background: url('{{ $backgroundImage }}') center top/cover no-repeat;">
            </div>
            <div class="profile-img">
                @if (!empty($data['qr_image']))
                    @if(Str::startsWith($data['qr_image'], 'data:image/'))
                        <img src="{{ $data['qr_image'] }}" alt="Profile Image" style="width: 210px; height: 210px; border-radius: 20%; object-fit: cover; border: 4px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.18);">
                    @else
                        <img src="{{ asset('storage/' . $data['qr_image']) }}" alt="Profile Image" style="width: 210px; height: 210px; border-radius: 20%; object-fit: cover; border: 4px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.18);">
                    @endif
                @endif

            </div>
            <br><br><br>
            <div class="name">{{ $data['name'] ?? 'Your Name' }}</div>
            <div class="title"> {{ $data['company'] ?? 'Company Profile' }}</div>
            <div class="company" style="color:rgb(228, 26, 120);"><b>{{ $data['slogan'] ?? 'Your Company Slogan' }}</b>
            </div>
            <br><br>
            <div class="icon-grid">
                <a href="tel:{{ $data['mobile'] ?? '' }}" class="icon-btn" title="Call">
                    <i class="fa-solid fa-phone"></i>
                </a>
                <a href="mailto:{{ $data['email'] ?? '' }}" class="icon-btn icon-email" title="Email">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                @php
                    $address = $data['address'] ?? '';
                    $encodedAddress = urlencode($address);
                @endphp
                <a href="https://www.google.com/maps/search/?api=1&query={{ $encodedAddress }}"
                    class="icon-btn icon-address" title="Address" target="_blank">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                @php
                    $website = $data['website'] ?? '';
                    if ($website && !preg_match('/^https?:\/\//', $website)) {
                        $website = 'https://' . $website;
                    }
                @endphp
                <a href="{{ $website ?: '#' }}" class="icon-btn icon-website" title="Website" target="_blank">
                    <i class="fa-solid fa-globe"></i>
                </a>
                @if (!empty($data['instagram']))
                    <a href="{{ $data['instagram'] }}" class="icon-btn icon-instagram" title="Instagram"
                        target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                @endif
                @if (!empty($data['facebook']))
                    <a href="{{ $data['facebook'] }}" class="icon-btn icon-facebook" title="Facebook" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                @endif
                @if (!empty($data['twitter']))
                    <a href="{{ $data['twitter'] }}" class="icon-btn icon-twitter" title="Twitter" target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                @endif
                @if (!empty($data['linkedin']))
                    <a href="{{ $data['linkedin'] }}" class="icon-btn icon-linkedin" title="LinkedIn" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                @endif
                @if (!empty($data['twitter']))
                    <a href="{{ $data['twitter'] }}" class="icon-btn icon-telegram" title="Telegram" target="_blank">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                @endif
            </div>
            <div class="bottom-effect">
                <div class="dots"></div>
            </div>
        </div>
    </div>
</body>

</html>


















