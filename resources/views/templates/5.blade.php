<!DOCTYPE html>
<html lang="en">

@php
    $imagePath = public_path('images/templates/t1.jpg');
    $base64 = base64_encode(file_get_contents($imagePath));
    $backgroundImage = 'data:image/jpg;base64,' . $base64;

    $icons = [];

    if (!empty($data['mobile'])) {
        $icons[] = ['label' => 'Call Me', 'icon' => '📞', 'url' => 'tel:' . $data['mobile']];
    }
    if (!empty($data['email'])) {
        $icons[] = ['label' => 'E-Mail', 'icon' => '✉️', 'url' => 'mailto:' . $data['email']];
    }
    if (!empty($data['address'])) {
        $icons[] = [
            'label' => 'Address',
            'icon' => '📍',
            'url' => 'https://www.google.com/maps/search/?api=1&query=' . urlencode($data['address']),
        ];
    }
    if (!empty($data['website'])) {
        $website = $data['website'];
        if (!preg_match('/^https?:\/\//', $website)) {
            $website = 'https://' . $website;
        }
        $icons[] = ['label' => 'Website', 'icon' => '🌐', 'url' => $website];
    }

    // Add Instagram twice if present
    if (!empty($data['instagram'])) {
        $icons[] = ['label' => 'Instagram', 'icon' => '📸', 'url' => $data['instagram']];
        $icons[] = ['label' => 'Instagram', 'icon' => '📸', 'url' => $data['instagram']];
    }

    if (!empty($data['facebook'])) {
        $icons[] = ['label' => 'Facebook', 'icon' => '👍', 'url' => $data['facebook']];
    }
    if (!empty($data['twitter'])) {
        $icons[] = ['label' => 'Twitter', 'icon' => '🐦', 'url' => $data['twitter']];
    }
    if (!empty($data['linkedin'])) {
        $icons[] = ['label' => 'LinkedIn', 'icon' => '💼', 'url' => $data['linkedin']];
    }
    if (!empty($data['telegram'])) {
        $icons[] = ['label' => 'Telegram', 'icon' => '✈️', 'url' => $data['telegram']];
    }
    if (!empty($data['whatsapp'])) {
        $icons[] = ['label' => 'WhatsApp', 'icon' => '💬', 'url' => 'https://wa.me/' . $data['whatsapp']];
    }
@endphp

<head>
    <meta charset="UTF-8">
    <title>{{ $data['name'] ?? 'Business Card' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            background-color: white;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 400px;
            height: 829px;
            margin: 0 auto;
            padding: 0 15px;
            background-color: black;

        }

        .banner {
            width: (100% +30px);
            height: 170px;
            background: url('{{ $backgroundImage }}') center top/cover no-repeat;
            opacity: 0.5;
            pointer-events: none;
            margin: 0 -15px;
            padding: 0;
            border-radius: inherit;
            display: block;

        }

        .profile-img-container {
            margin-top: -50px;
            position: relative;
        }

        .profile-img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 4px solid white;
        }

        h3 {
            margin: 10px 0 0 0;
            font-size: 22px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .company {
            margin: 5px 0 20px 0;
            font-size: 14px;
            color: #ccc;
            text-transform: uppercase;
        }

        .slogan {
            margin: 0 0 20px 0;
            font-size: 14px;
            color: #e41a78;
            text-transform: uppercase;
            font-weight: bold;
        }

        .icon-section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            max-width: 400px;
            margin: 0 auto 16px;
        }

        .icon-box {
            text-align: center;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border: 1px solid white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 24px;
            margin-top: 24px;
        }

        .icon-label {
            margin-top: 10px;
            font-size: 12px;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="banner"></div>

        <!-- Profile Image -->
        <div class="profile-img-container">
            @if (!empty($data['qr_image']))
                @if(Str::startsWith($data['qr_image'], 'data:image/'))
                    <img src="{{ $data['qr_image'] }}" class="profile-img" alt="Profile">
                @else
                    <img src="{{ asset('storage/' . $data['qr_image']) }}" class="profile-img" alt="Profile">
                @endif
            @else
                <div style="width:100px; height:100px;"></div>
            @endif
        </div>
        <br>
        <!-- Name & Tagline -->
        <h3>{{ $data['name'] ?? 'Your Name' }}</h3>
        <p class="company">{{ $data['company'] ?? 'Company Profile' }}</p>
        <p class="slogan">{{ $data['slogan'] ?? 'Your Company Slogan' }}</p>

        <!-- Icon Section -->
        <div class="icon-section">
            @foreach ($icons as $icon)
                <div class="icon-box">
                    <div class="icon-circle">
                        <a href="{{ $icon['url'] }}" target="_blank">{{ $icon['icon'] }}</a>
                    </div>
                    <p class="icon-label">{{ $icon['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
