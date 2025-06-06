<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome | Business Cards</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        /* Template 1 */
        .dash-card1-container {
            display: flex;
            justify-content: space-between;
            max-width: 430px;
            max-height: 300px;
            margin: 30px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            background: #f9f9f9;
        }

        .dash-card1-left {
            background: #092c3e;
            color: gold;
            padding: 40px 30px;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .dash-card1-qr {
            width: 120px;
            height: 120px;
            margin-top: 30px;
        }

        .dash-card1-qr img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dash-card1-right {
            background: #d4af7f;
            color: #092c3e;
            padding: 40px 30px;
            width: 60%;
        }

        .dash-card1-right h4 {
            margin-top: 0;
            font-size: 28px;
        }

        .dash-card1-info {
            margin-top: 20px;
        }

        .dash-card1-info p {
            margin: 6px 0;
        }

        .dash-card1-socials {
            display: flex;
            gap: 8px;
            margin-top: 10px;
        }

        .dash-card1-socials a {
            color: gold;
            text-decoration: none;
        }

        .dash-card1-socials i {
            font-size: 22px;
        }

        /* Template 2 */
        .dash-template2 {
            width: 350px;
            height: 200px;
            background: #ffffff;
            color: #000;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .dash-template2 h2 {
            color: red;
            font-size: 20px;
            margin: 0;
        }

        .dash-template2 .dash-title {
            font-size: 12px;
            text-transform: uppercase;
            color: #555;
        }

        .dash-template2 .dash-divider {
            border: none;
            border-top: 1px solid #ccc;
            margin: 8px 0;
        }

        .dash-template2 .dash-details {
            display: flex;
            justify-content: space-between;
        }

        .dash-template2 .dash-left-details {
            font-size: 12px;
        }

        .dash-template2 .dash-right-icons {
            text-align: right;
        }

        .dash-template2 .dash-right-icons div {
            margin-bottom: 6px;
            font-size: 12px;
        }

        .dash-template2 .dash-right-icons i {
            margin-right: 6px;
            color: #c33764;
        }

        /* Template 3 */
        .dash-template3 {
            flex-wrap: nowrap;
            background: linear-gradient(to right, #9c27b0, #ff5722);
            border-radius: 12px;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            height: 260px;
            display: flex;
            max-width: 430px;
            margin: 30px auto;
            overflow: hidden;
        }

        .dash-template3-left,
        .dash-template3-right {
            padding: 10px;
        }

        .dash-template3-left {
            flex: 1 1 35%;
            background: rgb(196, 192, 192);
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .dash-template3-left img {
            width: 100%;
            height: auto;
            object-fit: cover;
            background: #cf7373;
        }

        .dash-template3-right {
            flex: 1 1 65%;
            position: relative;
            background: transparent;
        }

        .dash-template3-right .dash-company-logo {
            position: absolute;
            top: 10px;
            right: 10px;
            height: 30px;
        }

        .dash-template3-right h2 {
            margin: 25px 0 5px 0;
            font-size: 18px;
        }

        .dash-template3-right p {
            margin: 0;
            font-size: 12px;
            color: rgb(59, 52, 52);
        }

        .dash-template3-socials a {
            color: #850909;
            margin-right: 6px;
            font-size: 14px;
        }

        .dash-template3-info div {
            margin: 3px 0;
            font-size: 12px;
        }

        .dash-template3-info i {
            margin-right: 6px;
        }

        /* Template 4 */
        .dash-template4 {
            width: 220px;
            border-radius: 18px;
            background: radial-gradient(circle at 20% 10%, #6dd5ed 0%, #b24592 60%, #000 100%);
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.18);
            padding: 16px 8px 0 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin: 30px auto;
        }

        .dash-t4-profile-img {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            border: 3px solid #fff;
            object-fit: cover;
            margin-bottom: 10px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12);
        }

        .dash-t4-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 0px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
        }

        .dash-t4-company {
            color: #f3f6fa;
            text-align: center;
            font-size: 1rem;
            margin-bottom: 2px;
            letter-spacing: 0.5px;
        }

        .dash-t4-slogan {
            color: #f3f6fa;
            text-align: center;
            font-size: 1rem;
            margin-bottom: 24px;
        }

        .dash-t4-info-rows>div {
            width: 100%;
            min-width: 0;
            height: 32px;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-size: 1rem;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.18);
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
            cursor: pointer;
            position: relative;
            padding: 0 10px;
            text-decoration: none;
            margin-bottom: 2px;
        }

        .dash-t4-info-rows>div i {
            min-width: 20px;
            text-align: center;
        }

        .dash-t4-info-rows>div:hover {
            background: rgba(255, 255, 255, 0.18);
            color: #6dd5ed;
        }

        .dash-t4-social-row a {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.18);
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
            cursor: pointer;
            position: relative;
            padding: 0;
            text-decoration: none;
        }

        .dash-t4-social-row a.dash-linkInstagram {
            color: #e1306c;
        }

        .dash-t4-social-row a.dash-linkFacebook {
            color: #1877f3;
        }

        .dash-t4-social-row a.dash-linkTwitter {
            color: #1da1f2;
        }

        .dash-t4-social-row a.dash-linkLinkedin {
            color: #0077b5;
        }

        .dash-t4-social-row a:hover {
            background: rgba(255, 255, 255, 0.18);
            color: #6dd5ed;
        }

        .dash-t4-bottom-effect {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 40px;
            background: none;
            pointer-events: none;
        }

        .dash-t4-dots {
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #6dd5ed 1px, transparent 1.5px);
            background-size: 8px 8px;
            opacity: 0.5;
            filter: blur(1px);
        }

        .se-card-container {
            width: 400px;
            height: 300px;
            margin: 0;
            display: flex;
            box-shadow: none;
            border-radius: 0;
            overflow: hidden;
        }

        .se-left {
            background: #092c3e;
            color: gold;
            padding: 40px 30px;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .se-qr-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .se-socials {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .se-socials a {
            color: gold;
            text-decoration: none;
            font-size: 22px;
        }

        .se-right {
            background: #d4af7f;
            color: #092c3e;
            padding: 40px 30px;
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .se-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 20px;
        }

        .se-company {
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .se-info p,
        .se-info a {
            margin: 6px 0;
            color: inherit;
            text-decoration: none;
            font-size: 15px;
            display: block;
        }

        .se-info i {
            margin-right: 8px;
        }

        @media (max-width: 900px) {
            .se-card-container {
                flex-direction: column;
                height: auto;
            }

            .se-left,
            .se-right {
                width: 100%;
                padding: 20px 10px;
            }
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #c33764, #1d2671);
            color: white;
        }

        .navbar {
            background-color: #fff !important;
        }

        h2.text-center {
            font-size: 18px;
            margin-top: 20px;
        }

        .card-wrapper {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        /* Template 1 */
        .business-card {
            width: 350px;
            height: 200px;
            display: flex;
            flex-wrap: nowrap;
            background: linear-gradient(to right, #9c27b0, #ff5722);
            border-radius: 12px;
            overflow: hidden;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .business-card .left,
        .business-card .right {
            padding: 10px;
        }

        .business-card .left {
            flex: 1 1 35%;
            background: #eee;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .business-card .left img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .business-card .role {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: #fff;
            color: #000;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: bold;
        }

        .business-card .right {
            flex: 1 1 65%;
            position: relative;
            background: transparent;
        }

        .business-card .right .company-logo {
            position: absolute;
            top: 10px;
            right: 10px;
            height: 30px;
        }

        .business-card .right h2 {
            margin: 25px 0 5px 0;
            font-size: 18px;
        }

        .business-card .right p {
            margin: 0;
            font-size: 12px;
        }

        .social-icons a {
            color: #fff;
            margin-right: 6px;
            font-size: 14px;
        }

        .info div {
            margin: 3px 0;
            font-size: 12px;
        }

        .info i {
            margin-right: 6px;
        }

        /* Template 2 (based on image) */
        .template2 {
            width: 350px;
            height: 200px;
            background: #ffffff;
            color: #000;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .template2 h2 {
            color: red;
            font-size: 20px;
            margin: 0;
        }

        .template2 .title {
            font-size: 12px;
            text-transform: uppercase;
            color: #555;
        }

        .template2 .divider {
            border: none;
            border-top: 1px solid #ccc;
            margin: 8px 0;
        }

        .template2 .details {
            display: flex;
            justify-content: space-between;
        }

        .template2 .left-details {
            font-size: 12px;
        }

        .template2 .right-icons {
            text-align: right;
        }

        .template2 .right-icons div {
            margin-bottom: 6px;
            font-size: 12px;
        }

        .template2 .right-icons i {
            margin-right: 6px;
            color: #c33764;
        }

        @media print {

            nav,
            h2.text-center {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .card-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .business-card,
            .template2 {
                width: 90%;
                height: auto;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="FinDeck Logo" style="height: 30px;" class="mr-2">
                <span class="font-weight-bold">FinDeck</span>
            </a>
            <div class="ml-auto">
                @if (Route::has('login'))
                    <div class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary mr-2">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <h2 class="text-center">Choose Your Business Card</h2>

    <section class="py-3">
        <div class="container card-wrapper">

            <!-- Template 1 -->
            <div class="business-card">
                <div class="left">
                    <img src="{{ asset('images/logo.png') }}" alt="Img">
                    <div class="role">SOFTWARE DEVELOPER</div>
                </div>
                <div class="right">
                    <img src="{{ asset('images/logo-1.png') }}" class="company-logo" alt="Company Logo">
                    <p>Secureedge.com</p>
                    <h2>User Name</h2>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="info">
                        <div><i class="fas fa-phone-alt"></i> +1 518-431-9613</div>
                        <div><i class="fas fa-envelope"></i> user@example.com</div>
                        <div><i class="fas fa-map-marker-alt"></i> Cyber Heights, Lucknow</div>
                    </div>
                </div>
            </div>

            <!-- Template 2 (new design) -->
            <div class="template2">
                <div>
                    <h2>Aditya Sharma</h2>
                    <div class="title">Frontend Developer</div>
                    <hr class="divider">
                </div>
                <div class="details">
                    <div class="left-details">
                        <div>DesignCo Studio</div>
                        <div>Lucknow, UP</div>
                    </div>
                    <div class="right-icons">
                        <div><i class="fas fa-phone-alt"></i> +91 88877 66655</div>
                        <div><i class="fas fa-envelope"></i> aditya@example.com</div>
                        <div><i class="fab fa-linkedin"></i> /aditya-sharma</div>
                    </div>
                </div>
            </div>

            {{--  template 3 -->  --}}
            <div class="se-card-container">
                <div class="se-left">
                    <img src="{{ asset('images/templates/t1.jpg') }}" alt="QR Code" class="se-qr-img">
                    <div class="se-socials">
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="se-right">
                    <div class="se-company">Secureedge.com</div>
                    <h4 class="se-title">User Name</h4>
                    <div class="se-info">
                        <p><i class="fas fa-phone-alt"></i>+1 518-431-9613</p>
                        <p><i class="fas fa-envelope"></i>user@example.com</p>
                        <a href="https://secureedge.com" target="_blank"><i class="fas fa-globe"></i>secureedge.com</a>
                        <p><i class="fas fa-map-marker-alt"></i>Cyber Heights, Lucknow</p>
                    </div>
                </div>
            </div>

            <!-- Template 4 -->
            <div id="template4" class="dash-template4 template-preview   ">
                <img src="{{ asset('images/default-profile.png') }}" alt="Profile" class="dash-t4-profile-img"
                    style="display:none;">
                <div class="dash-t4-name previewName">Your Name</div>
                <div class="dash-t4-company previewCompany">Profile</div>
                <div class="dash-t4-slogan previewSlogan">Company Slogan</div>
                <div class="dash-t4-info-rows"
                    style="width:100%;display:flex;flex-direction:column;gap:8px;margin-bottom:10px;">
                    <div style="display:flex;align-items:center;">
                        <i class="fa-solid fa-phone"></i>
                        <span class="previewMobile" style="margin-left:8px;">+91-xxxxxxxxxx</span>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="previewEmail" style="margin-left:8px;">you@example.com</span>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <i class="fa-solid fa-location-dot"></i>
                        <span class="previewAddress" style="margin-left:8px;">Your Address Here</span>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <i class="fa-solid fa-globe"></i>
                        <a class="previewWebsite" style="margin-left:8px; color:inherit; text-decoration:none;"
                            target="_blank">yourwebsite.com</a>
                    </div>
                </div>
                <div class="dash-t4-social-row"
                    style="display:flex;gap:10px;justify-content:center;width:100%;margin-bottom:18px;">
                    <a href="#" class="dash-linkLinkedin linkLinkedin" style="display:none;" title="LinkedIn"
                        target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#" class="dash-linkTwitter linkTwitter" style="display:none;" title="Twitter"
                        target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="dash-linkInstagram linkInstagram" style="display:none;"
                        title="Instagram" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="dash-linkFacebook linkFacebook" style="display:none;" title="Facebook"
                        target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
                <div class="dash-t4-bottom-effect">
                    <div class="dash-t4-dots"></div>
                </div>
            </div>

            <!-- Template 1 -->
            <div id="template1" class="dash-card1-container template-preview   ">
                <div class="dash-card1-left">
                    <div class="dash-card1-qr">
                        <img src="{{ asset('images/templates/t1.jpg') }}" alt="QR code" class="previewQR"
                            style="display:none;" />
                    </div>
                    <div class="dash-card1-socials previewSocials">
                        <a href="#" target="_blank" class="linkLinkedin" style="display:none;"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="#" target="_blank" class="linkTwitter" style="display:none;"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank" class="linkInstagram" style="display:none;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank" class="linkFacebook" style="display:none;"><i
                                class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="dash-card1-right">
                    <h4 class="previewName">Your Name</h4>
                    <h5 class="previewCompany">Profile</h5>
                    <hr>
                    <div class="dash-card1-info">
                        <h5 class="previewSlogan"><b></b></h5>
                        <p class="previewMobile">📞 +91-xxxxxxxxxx</p>
                        <p class="previewEmail">📧 you@example.com</p>
                        <a class="previewWebsite" style="color: inherit; text-decoration: none;">🌐
                            yourwebsite.com</a>
                        <p class="previewAddress">📍 Your Address Here</p>
                    </div>
                </div>
            </div>

            <!-- Template 2 -->
            <div id="template2" class="dash-template2 template-preview   ">
                <div>
                    <h2 class="previewName">Your Name</h2>
                    <div class="dash-title previewCompany">Profile</div>
                    <hr class="dash-divider">
                </div>
                <div class="dash-details">
                    <div class="dash-left-details">
                        <div class="previewSlogan">Company Name</div>
                        <div class="previewAddress">📍 Your Address Here</div>
                        <div>
                            <a class="previewWebsite" style="margin-top:20%;">🌐 yourwebsite.com</a>
                        </div>
                    </div>
                    <div class="dash-right-icons">
                        <div class="previewMobile"><i class="fas fa-phone-alt"></i> +91-xxxxxxxxxx</div>
                        <div class="previewEmail"><i class="fas fa-envelope"></i> you@example.com</div>
                        <div>
                            <a href="#" target="_blank" class="linkLinkedin" style="display:none;">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="#" target="_blank" class="linkTwitter" style="display:none;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank" class="linkInstagram" style="display:none;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" target="_blank" class="linkFacebook" style="display:none;">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Template 3 -->
            <div id="template3" class="dash-template3 template-preview   ">
                <div class="dash-template3-left">
                    <h3 class="previewName"><b>Your Name</b></h3>
                    <h5 class="previewCompany"><b>Profile</b></h5>
                    <div class="qr">
                        <img src="#" alt="QR code" class="previewQR" style="display:none;" />
                    </div>
                </div>
                <div class="dash-template3-right">
                    <div class="dash-template3-info">
                        <h4 class="previewSlogan"><b>Company</b></h4>
                        <div class="previewMobile">+91-xxxxxxxxxx</div>
                        <div class="previewEmail">you@example.com</div>
                        <div class="previewAddress">Your Address Here</div>
                    </div>
                    <div class="dash-template3-socials previewSocials">
                        <a href="#" target="_blank" class="linkLinkedin" style="display:none;"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="#" target="_blank" class="linkTwitter" style="display:none;"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank" class="linkInstagram" style="display:none;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank" class="linkFacebook" style="display:none;"><i
                                class="fab fa-facebook"></i></a>
                    </div>
                    <a class="previewWebsite">🌐 yourwebsite.com</a>
                </div>
            </div>


            <!-- Template 5 -->
            <div id="template5" class="dash-template5 template-preview"
                style="margin:0; background-color:black; color:white; font-family:Arial, sans-serif; text-align:center;">
                <!-- Banner Image -->
                <div style="width:100%; height:auto; overflow:hidden; position:relative;margin-top: 8px;">
                    <img src="{{ asset($data['banner'] ?? 'plan_img.jpeg') }}" alt="Banner"
                        style="width:100%; max-width:400px;max-height: 170px; display:block; margin:0 auto;opacity: .5;">
                </div>
                <!-- Profile Image -->
                <div style="margin-top:-50px;position: relative;">
                    <img src="{{ asset($data['profile'] ?? 'profile1.webp') }}" alt="Profile"
                        style="width:100px; height:100px; border-radius:50%; border:4px solid white;">
                </div>
                <!-- Name & Tagline -->
                <h1 style="margin:10px 0 0 0; font-size:28px; letter-spacing:2px;text-transform: uppercase;">
                    {{ $data['name'] ?? 'EVA LITANY' }}</h1>
                <p style="margin:5px 0 20px 0; font-size:14px; color:#ccc;text-transform: uppercase;">
                    {{ $data['tagline'] ?? 'MANICURE PEDICURE & NAILS' }}</p>
                <!-- Icon Links -->
                <div
                    style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px; max-width:500px; margin:0 auto;">
                    <!-- Call Me -->
                    <div style="text-align:center;">
                        <div
                            style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                            <a href="tel:{{ $data['phone'] ?? '+1234567890' }}"
                                style="color:white; font-size:24px; text-decoration:none;"><i
                                    class="fas fa-phone text-2xl"></i></a>
                        </div>
                        <p style="margin-top:10px;font-family: ui-sans-serif;">Call Me</p>
                    </div>
                    <!-- Instagram -->
                    <div style="text-align:center;">
                        <div
                            style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                            <a href="{{ $data['instagram'] ?? '#' }}"
                                style="color:white; font-size:24px; text-decoration:none;"><i
                                    class="fab fa-instagram text-2xl"></i></a>
                        </div>
                        <p style="margin-top:10px;font-family: ui-sans-serif;">Instagram</p>
                    </div>
                    <!-- Facebook -->
                    <div style="text-align:center;">
                        <div
                            style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                            <a href="{{ $data['facebook'] ?? 'https://facebook.com' }}"
                                style="color:white; font-size:24px; text-decoration:none;"><i
                                    class="fab fa-facebook-f text-2xl"></i></a>
                        </div>
                        <p style="margin-top:10px;font-family: ui-sans-serif;">Facebook</p>
                    </div>
                </div>
                <div
                    style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px; max-width:500px; margin:0 auto;">
                    <!-- WhatsApp -->
                    <div style="text-align:center;margin-top: 20px;">
                        <div
                            style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                            <a href="https://wa.me/{{ $data['whatsapp'] ?? '1234567890' }}"
                                style="color:white; font-size:24px; text-decoration:none;"><i
                                    class="fab fa-whatsapp text-2xl"></i></a>
                        </div>
                        <p style="margin-top:10px;font-family: ui-sans-serif;">WhatsApp</p>
                    </div>
                    <!-- Navigate -->
                    <div style="text-align:center;margin-top: 20px;">
                        <div
                            style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                            <a href="{{ $data['map'] ?? 'https://maps.google.com' }}"
                                style="color:white; font-size:24px; text-decoration:none;"><i
                                    class="fa-regular fa-compass"></i></a>
                        </div>
                        <p style="margin-top:10px;font-family: ui-sans-serif;">Navigate</p>
                    </div>
                    <!-- E-Mail -->
                    <div style="text-align:center;margin-top: 20px;">
                        <div
                            style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                            <a href="mailto:{{ $data['email'] ?? 'eva@example.com' }}"
                                style="color:white; font-size:24px; text-decoration:none;"><i
                                    class="fa-solid fa-envelope"></i></a>
                        </div>
                        <p style="margin-top:10px;font-family: ui-sans-serif;">E-Mail</p>
                    </div>
                </div>

            </div>




        </div>
    </section>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
