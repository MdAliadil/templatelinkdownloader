<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            box-sizing: border-box;
            background: #f3f6fa;
        }

        @page {
            margin: 0;
            size: A4 landscape;
        }

        body,
        .card-container,
        .template2 {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f3f6fa;
        }

        .template2 {
            width: 90vw;
            height: 80vh;
            margin: auto;
            background: #fff;
            color: #222;
            border-radius: 24px;
            padding: 48px 64px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.18);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .template2 h2 {
            color: #c33764;
            font-size: 2.8rem;
            margin: 0 0 8px 0;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .template2 .title {
            font-size: 1.4rem;
            text-transform: uppercase;
            color: #555;
            margin-bottom: 12px;
            font-weight: 500;
        }

        .template2 .divider {
            border: none;
            border-top: 2px solid #e0e0e0;
            margin: 16px 0;
        }

        .template2 .details {
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        .template2 .left-details {
            font-size: 1.2rem;
            display: flex;
            flex-direction: column;
            gap: 18px;
            flex: 1;
        }

        .template2 .right-icons {
            text-align: right;
            display: flex;
            flex-direction: column;
            gap: 18px;
            font-size: 1.2rem;
            flex: 1;
            align-items: flex-end;
        }

        .template2 .right-icons a {
            color: #c33764;
            text-decoration: none;
            transition: color 0.2s;
        }

        .template2 .right-icons a:hover {
            color: #0077b5;
        }

        .template2 .right-icons i {
            margin-right: 10px;
            font-size: 2rem;
            vertical-align: middle;
        }

        .template2 .social-icons {
            margin-top: 12px;
        }

        .template2 .social-icons a {
            margin-right: 16px;
            font-size: 2.2rem;
            color: #c33764;
            transition: color 0.2s;
        }

        .template2 .social-icons a:hover {
            color: #0077b5;
        }

        .template2 .previewSlogan {
            font-size: 1.4rem;
            font-weight: 600;
            color: #444;
        }

        .template2 .previewAddress,
        .template2 .previewWebsite {
            font-size: 1.2rem;
            color: #555;
            word-break: break-all;
        }

        @media print {

            nav,
            h2.text-center {
                display: none;
            }

            .template2 {
                width: 100vw !important;
                height: 100vh !important;
                padding: 48px 64px !important;
                border-radius: 0 !important;
                box-shadow: none !important;
            }

            body,
            html {
                background: #fff !important;
            }
        }

        @media (max-width: 900px) {
            .template2 {
                width: 98vw;
                height: auto;
                padding: 24px 8px;
            }

            .template2 .details {
                flex-direction: column;
                gap: 24px;
            }

            .template2 .right-icons,
            .template2 .left-details {
                align-items: flex-start;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div id="template2" class="card-container template-preview">
        <div class="template2">
            <div>
                <h2 class="previewName">{{ $data['name'] ?? 'Your Name' }}</h2>
                <div class="title previewCompany">{{ $data['company'] ?? 'Company Profile' }}</div>
                <hr class="divider">
            </div>
            <div class="details">
                <div class="left-details">
                    <div class="previewSlogan">{{ $data['slogan'] ?? 'Your Company Slogan' }}</div>
                    @php
                        $address = $data['address'] ?? '';
                        $encodedAddress = urlencode($address);
                    @endphp
                    <div class="previewAddress">
                        <a href="https://www.google.com/maps/search/?api=1&query={{ $encodedAddress }}" target="_blank"
                            style="color: inherit; text-decoration: none;">
                            📍 {{ $address ?: 'Your Address Here' }}
                        </a>
                    </div>
                    <div class="previewWebsite">
                        @php
                            $website = $data['website'] ?? '';
                            if ($website && !preg_match('/^https?:\/\//', $website)) {
                                $website = 'https://' . $website;
                            }
                        @endphp
                        <a href="{{ $website }}" target="_blank" style="color: inherit; text-decoration: none;">
                            🌐 {{ $data['website'] ?? 'yourwebsite.com' }}
                        </a>
                    </div>
                </div>
                <div class="right-icons">
                    <div class="previewMobile">
                        <a href="tel:{{ $data['mobile'] ?? '' }}" style="color: inherit; text-decoration: none;">
                            <i class="fas fa-phone-alt"></i> {{ $data['mobile'] ?? '+91-XXXXXXXXXX' }}
                        </a>
                    </div>
                    <div class="previewEmail">
                        <a href="mailto:{{ $data['email'] ?? '' }}" style="color: inherit; text-decoration: none;">
                            <i class="fas fa-envelope"></i> {{ $data['email'] ?? 'you@example.com' }}
                        </a>
                    </div>
                    <div class="social-icons">
                        @if (!empty($data['linkedin']))
                            <a href="{{ $data['linkedin'] }}" class="linkLinkedin" title="LinkedIn">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        @endif
                        @if (!empty($data['twitter']))
                            <a href="{{ $data['twitter'] }}" class="linkTwitter" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        @endif
                        @if (!empty($data['instagram']))
                            <a href="{{ $data['instagram'] }}" class="linkInstagram" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                        @if (!empty($data['facebook']))
                            <a href="{{ $data['facebook'] }}" class="linkFacebook" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
