@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        #template4 {
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
        }

        #t4ProfileImg {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            border: 3px solid #fff;
            object-fit: cover;
            margin-bottom: 10px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12);
        }

        #t4Name {
            font-size: 1.2rem;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 0px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
        }

        #t4Company {
            color: #f3f6fa;
            text-align: center;
            font-size: 1rem;
            margin-bottom: 2px;
            letter-spacing: 0.5px;
        }

        #t4Slogan {
            color: #f3f6fa;
            text-align: center;
            font-size: 1rem;
            margin-bottom: 24px;
        }

        #t4InfoRows>div {
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

        #t4InfoRows>div i {
            min-width: 20px;
            text-align: center;
        }

        #t4InfoRows>div:hover {
            background: rgba(255, 255, 255, 0.18);
            color: #6dd5ed;
        }

        #t4SocialRow a {
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

        #t4SocialRow a.linkInstagram {
            color: #e1306c;
        }

        #t4SocialRow a.linkFacebook {
            color: #1877f3;
        }

        #t4SocialRow a.linkTwitter {
            color: #1da1f2;
        }

        #t4SocialRow a.linkLinkedin {
            color: #0077b5;
        }

        #t4SocialRow a:hover {
            background: rgba(255, 255, 255, 0.18);
            color: #6dd5ed;
        }

        #t4BottomEffect {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 40px;
            background: none;
            pointer-events: none;
        }

        #t4Dots {
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #6dd5ed 1px, transparent 1.5px);
            background-size: 8px 8px;
            opacity: 0.5;
            filter: blur(1px);
        }

        @media (max-width: 400px) {
            #template4 {
                width: 98vw;
                padding: 18px 2vw 0 2vw;
            }
        }





        #template3 {
            flex-wrap: nowrap;
            background: linear-gradient(to right, #9c27b0, #ff5722);
            border-radius: 12px;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);

            height: 260px;
        }

        #template3 .left,
        #template3 .right {
            padding: 10px;
        }

        #template3 .left {
            flex: 1 1 35%;
            background: rgb(196, 192, 192);
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-top: 0%;
        }

        #template3 .left img {
            width: 100%;
            height: auto;
            object-fit: cover;
            background: #cf7373;
        }

        #template3 .right {
            flex: 1 1 65%;
            position: relative;
            background: transparent;
        }

        #template3 .right .company-logo {
            position: absolute;
            top: 10px;
            right: 10px;
            height: 30px;
        }

        #template3 .right h2 {
            margin: 25px 0 5px 0;
            font-size: 18px;
        }

        #template3 .right p {
            margin: 0;
            font-size: 12px;
            color: rgb(59, 52, 52);
        }

        #template3 .right p {
            font-size: 16px;
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

        .card-container {
            display: flex;
            justify-content: space-between;
            max-width: 430px;
            max-height: 300px;
            margin: 30px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
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
        }

        .left h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .qr {
            width: 120px;
            height: 120px;
            margin-top: 30px;
        }

        .right {
            background: #d4af7f;
            color: #092c3e;
            padding: 40px 30px;
            width: 60%;
        }

        .right h1 {
            margin-top: 0;
            font-size: 28px;
        }

        .info {
            margin-top: 20px;
        }

        .info p {
            margin: 6px 0;
        }

        .previewSocials img {
            width: 24px;
            height: 24px;
        }

        .previewSocials a {
            margin: 5px;
            color: gold;
            text-decoration: none;
        }

        #template3 .previewSocials a {
            color: #850909;
        }

        .previewSocials i {
            font-size: 22px;
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
@endpush

@section('content')
    <div class="container-fluid p-0">
        <div id="templateCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($templateImages as $index => $img)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset($img) }}" class="d-block w-100 border border-dark" alt="Template Image"
                            style="max-height: 350px; object-fit: contain;">
                    </div>
                @endforeach
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#templateCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#templateCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <hr>
        <div class="row">
            <!-- Form -->
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header bg-dark mt-2 mx-3">
                        <h3 style="color:white;">Fill Information</h3>
                    </div>
                    <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                        <form id="profileForm" method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="action_type" id="action_type" value="pdf">
                            <input type="text" name="slogan" id="slogan" placeholder="Company slogan"
                                class="form-control mb-2">
                            <input type="text" name="name" id="name" placeholder="Full Name"
                                class="form-control mb-2">
                            <input type="text" name="company" id="companyp" placeholder="Company Profile"
                                class="form-control mb-2">
                            <input type="text" name="email" id="email" placeholder="Email"
                                class="form-control mb-2">
                            <input type="text" name="mobile" id="mobile" placeholder="Mobile Number"
                                class="form-control mb-2">
                            <input type="text" name="address" id="address" placeholder="Address"
                                class="form-control mb-2">
                            <input type="file" name="qr_image" id="qr_image" accept="image/*" class="form-control mb-2">
                            <input type="text" name="website" id="websiteInput" placeholder="Website"
                                class="form-control mb-2">
                            <input type="text" name="linkedin" placeholder="LinkedIn URL" class="form-control mb-2">
                            <input type="text" name="twitter" placeholder="Twitter URL" class="form-control mb-2">
                            <input type="text" name="instagram" placeholder="Instagram URL" class="form-control mb-2">
                            <input type="text" name="facebook" placeholder="Facebook URL" class="form-control mb-2">
                            <input type="hidden" name="selected_template" id="selected_template" value="1">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary" onclick="setFormAction('pdf')">Download as
                                    PDF</button>
                                <button type="button" class="btn btn-success" id="getLinkBtn">Get Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Preview -->
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header bg-dark mt-2 mx-3">
                        <h3 style="color:white;">Preview</h3>
                    </div>
                    <div class="card-body">
                        <!-- Template Selector -->
                        <b> <p>Select Your Desired Template,</p></b>
                        <div class="mb-3 d-flex gap-3">
                            
    <div>
        <label for="tabletTemplateSelector" class="form-label"><b> For Tablet</b></label>
        <select id="tabletTemplateSelector" class="form-control w-100">
            <option value="1">Template 1</option>
            <option value="2">Template 2</option>
            <option value="3">Template 3</option>
        </select>
    </div>
    <div>
        <label for="mobileTemplateSelector" class="form-label"><b>For Mobile</b></label>
        <select id="mobileTemplateSelector" class="form-control w-100">
            <option value="4">Template 1</option>
            <option value="5">Template 2</option>
        </select>
    </div>
</div>
                        {{--  <div class="mb-3">
                            <label for="templateSelector" class="form-label">Select Template</label>
                            <select id="templateSelector" class="form-control w-50">
                                <option value="1">Template 1</option>
                                <option value="2">Template 2 </option>
                                <option value="3">Template 3 </option>
                                <option value="4">Template 4 </option>
                                <option value="5">Template 5 </option>
                            </select>
                        </div>  --}}
                        <!-- Template 1: Default -->
                        <div id="template1" class="card-container template-preview  d-none" style="background-color: #f9f9f9;">
                            <div class="left">
                                <div class="qr">
                                    <img src="{{ asset('storage/qrcodes/' . $user->qr_code_filename) }}" alt="QR code"
                                        class="previewQR"
                                        style="display:none; width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                                <div></div>
                                <div class="d-flex gap-2 mt-2 previewSocials">
                                    <a href="#" target="_blank" class="linkLinkedin" style="display:none;"><i
                                            class="fa-brands fa-linkedin fa-lg"></i></a>
                                    <a href="#" target="_blank" class="linkTwitter" style="display:none;"><i
                                            class="fab fa-twitter fa-lg"></i></a>
                                    <a href="#" target="_blank" class="linkInstagram" style="display:none;"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                    <a href="#" target="_blank" class="linkFacebook" style="display:none;"><i
                                            class="fab fa-facebook fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="right">
                                <h4 class="previewName" style="font-size: clamp(14px, 2.5vw, 20px);">Your Name</h4>
                                <h5 class="previewCompany">Profile</h5>
                                <hr>
                                <div class="info">
                                    <h5 class="previewSlogan"><b></b></h5>
                                    <p class="previewMobile">📞 +91-xxxxxxxxxx</p>
                                    <p class="previewEmail">📧 you@example.com</p>
                                    <a class="previewWebsite" style="color: inherit; text-decoration: none; ">🌐
                                        yourwebsite.com</a>
                                    <p class="previewAddress">📍 Your Address Here</p>
                                </div>
                            </div>
                        </div>
                        <!-- Template 2:  -->
                        <div id="template2" class="card-container template-preview d-none template2">
                            <div>
                                <h2 class="previewName" style="font-size: clamp(14px, 2.5vw, 20px);">Your Name</h2>
                                <div class="title previewCompany">Profile</div>
                                <hr class="divider">
                            </div>
                            <div class="details">
                                <div class="left-details">
                                    <div class="previewSlogan">Company Name</div>
                                    <div class="previewAddress">📍 Your Address Here</div>
                                    <div>
                                        <a class="previewWebsite" style="margin-top:20%;">🌐 yourwebsite.com</a>
                                    </div>
                                </div>
                                <div class="right-icons">
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
                        <!-- Template 3:-->
                        <div id="template3" class="card-container template-preview d-none"
                            style="background: linear-gradient(to right, #9c27b0, #ff5722);">
                            <div class="left">
                                <h3 class="previewName"
                                    style="font-size: clamp(4px, 2.5vw, 18px); margin-top:16%; color:#bb1b1b; white-space: nowrap;">
                                    <b>Your Name</b>
                                </h3>
                                <h5 class="previewCompany" style=" color:#bb1b1b;"><b>Profile</b></h5>
                                <div class="qr">
                                    <img src="#" alt="QR code" class="previewQR"
                                        style="display:none; width: 100%; height: 100%; margin-top:-15%;  object-fit: cover;" />
                                </div>
                                <div></div>
                            </div>
                            <div class="right">
                                <div class="info">
                                    <h4 class="previewSlogan"><b>Company</b></h4>
                                    <p class="previewMobile"> +91-xxxxxxxxxx</p>
                                    <p class="previewEmail">you@example.com</p>
                                    <p class="previewAddress"> Your Address Here</p>
                                </div>
                                <div class="d-flex gap-2 mt-2 previewSocials">
                                    <a href="#" target="_blank" class="linkLinkedin" style="display:none;"><i
                                            class="fa-brands fa-linkedin fa-lg"></i></a>
                                    <a href="#" target="_blank" class="linkTwitter" style="display:none;"><i
                                            class="fab fa-twitter fa-lg"></i></a>
                                    <a href="#" target="_blank" class="linkInstagram" style="display:none;"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                    <a href="#" target="_blank" class="linkFacebook" style="display:none;"><i
                                            class="fab fa-facebook fa-lg"></i></a>
                                </div>
                                <a class="previewWebsite">🌐 yourwebsite.com</a>
                            </div>
                        </div>
                        <!-- Template 4: -->

                        {{--  <div id="template4" class="card-container template-preview d-none">
                            <img src="{{ $data['profile_image'] ?? asset('images/default-profile.png') }}" alt="Profile"
                                id="t4ProfileImg" style="display:none;">
                            <div id="t4Name" class="previewName">Your Name</div>
                            <div id="t4Company" class="previewCompany">Profile</div>
                            <div id="t4Slogan" class="previewSlogan">Company Slogan</div>

                            <div id="t4InfoRows"
                                style="width:100%;display:flex;flex-direction:column;gap:8px;margin-bottom:10px;">
                                <div id="t4Mobile" style="display:flex;align-items:center;">
                                    <i class="fa-solid fa-phone"></i>
                                    <span id="t4MobileText" class="previewMobile"
                                        style="margin-left:8px;">+91-xxxxxxxxxx</span>
                                </div>
                                <div id="t4Email" style="display:flex;align-items:center;">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span id="t4EmailText" class="previewEmail"
                                        style="margin-left:8px;">you@example.com</span>
                                </div>
                                <div id="t4Address" style="display:flex;align-items:center;">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span id="t4AddressText" class="previewAddress" style="margin-left:8px;">Your Address
                                        Here</span>
                                </div>
                                <div id="t4Website" style="display:flex;align-items:center;">
                                    <i class="fa-solid fa-globe"></i>
                                    <a id="t4WebsiteLink" class="previewWebsite"
                                        style="margin-left:8px; color:inherit; text-decoration:none;"
                                        target="_blank">yourwebsite.com</a>
                                </div>
                            </div>
                            <!-- Social icons row: only icons, no text, no overlap -->
                            <div id="t4SocialRow"
                                style="display:flex;gap:10px;justify-content:center;width:100%;margin-bottom:18px;">
                                <a href="#" id="t4Linkedin" class="linkLinkedin" style="display:none;"
                                    title="LinkedIn" target="_blank">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="#" id="t4Twitter" class="linkTwitter" style="display:none;"
                                    title="Twitter" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#" id="t4Instagram" class="linkInstagram" style="display:none;"
                                    title="Instagram" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" id="t4Facebook" class="linkFacebook" style="display:none;"
                                    title="Facebook" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </div>
                            <div id="t4BottomEffect">
                                <div id="t4Dots"></div>
                            </div>
                        </div>  --}}

                        <div id="template4" class="template-preview card-container d-none"
                            style="background: radial-gradient(circle at 20% 10%, #6dd5ed 0%, #b24592 60%, #000 100%); width:260px; min-height:420px; padding:32px 16px 24px 16px; display:flex; flex-direction:column; align-items:center; position:relative; overflow:hidden; border-radius:18px; box-shadow:0 4px 16px rgba(44,62,80,0.18); margin:auto;">
                            <!-- Top-half background image -->
                            <div
                                style="position:absolute; left:0; top:0; width:100%; height:17%; background: url('{{ asset('images/templates/t1.jpg') }}') center top/cover no-repeat; z-index:1; pointer-events:none;">
                            </div>
                            <!-- Profile Image -->
                            <div
                                style="margin-top:40px; margin-bottom:18px; display:flex; justify-content:center; align-items:center; z-index:2;">
                                <img src="#" alt="Profile Image" class="previewQR"
                                    style="width:90px; height:90px; border-radius:50%; object-fit:cover; border:4px solid #fff; box-shadow:0 2px 8px rgba(0,0,0,0.18); background:#fff; display:none;">
                            </div>
                            <div class="previewName"
                                style="font-size:1.4rem; font-weight:700; color:#fff; text-align:center; margin-bottom:4px; text-shadow:0 2px 8px rgba(0,0,0,0.18); z-index:2;">
                                Your Name</div>
                            <div class="previewCompany"
                                style="color:#f3f6fa; text-align:center; font-size:1rem; margin-bottom:4px; letter-spacing:0.5px; z-index:2;">
                                Company Profile</div>
                            <div class="previewSlogan"
                                style="color:rgb(228,26,120); text-align:center; font-size:0.95rem; margin-bottom:18px; z-index:2;">
                                <b>Your Company Slogan</b></div>
                            <div
                                style="display:grid; grid-template-columns:repeat(3,1fr); gap:12px; justify-content:center; margin:0 auto 18px auto; z-index:2;">
                                <a href="#" class="previewMobile" title="Call"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:flex; align-items:center; justify-content:center; font-size:1.5rem; color:#fff; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none; display:none;"><i
                                        class="fa-solid fa-phone"></i></a>
                                <a href="#" class="previewEmail" title="Email"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:flex; align-items:center; justify-content:center; font-size:1.5rem; color:#6dd5ed; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none; display:none;"><i
                                        class="fa-solid fa-envelope"></i></a>
                                <a href="#" class="previewAddress" title="Address" target="_blank"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:none; align-items:center; justify-content:center; font-size:1.5rem; color:#f59e42; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none;"><i
                                        class="fa-solid fa-location-dot"></i></a>
                                <a href="#" class="previewWebsite" title="Website" target="_blank"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:none; align-items:center; justify-content:center; font-size:1.5rem; color:#4f8cff; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none;"><i
                                        class="fa-solid fa-globe"></i></a>
                                <a href="#" class="linkInstagram" title="Instagram" target="_blank"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:none; align-items:center; justify-content:center; font-size:1.5rem; color:#e1306c; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none;"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="linkFacebook" title="Facebook" target="_blank"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:none; align-items:center; justify-content:center; font-size:1.5rem; color:#1877f3; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none;"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="linkTwitter" title="Twitter" target="_blank"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:none; align-items:center; justify-content:center; font-size:1.5rem; color:#1da1f2; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none;"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="linkLinkedin" title="LinkedIn" target="_blank"
                                    style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,0.08); display:none; align-items:center; justify-content:center; font-size:1.5rem; color:#0077b5; border:2px solid rgba(255,255,255,0.18); box-shadow:0 2px 8px rgba(0,0,0,0.10); cursor:pointer; text-decoration:none;"><i
                                        class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <div
                                style="position:absolute; left:0; right:0; bottom:0; height:28px; background:none; pointer-events:none; z-index:2;">
                                <div
                                    style="width:100%; height:100%; background:radial-gradient(circle, #6dd5ed 1.5px, transparent 2px); background-size:12px 12px; opacity:0.5; filter:blur(1.5px);">
                                </div>
                            </div>
                        </div>

                        <!-- Template 5: -->
                        {{--  <div id="template5" class="card-container template-preview "style="width:100%; height:auto; overflow:hidden; position:relative;">
                            <div style="width:20px; height:60px; overflow:hidden; position:relative;margin-top: 8px;">
                                <img src="{{ asset($data['banner'] ?? 'images/bg-03.jpg') }}" alt="Banner"
                                    style="width:100%; max-width:400px;max-height: 170px; display:block; margin:0 auto;opacity: .5;">
                            </div>
                            <!-- Profile Image -->
                            <div style="margin-top:-50px;position: relative;">
                                <img src="{{ !empty($data['qr_image']) ? $data['qr_image'] : asset('images/logo.png') }}"
                                    alt="Profile"
                                    style="width:100px; height:100px; border-radius:50%; border:4px solid white;">
                            </div>
                            <!-- Name & Tagline -->
                            <h1 style="margin:10px 0 0 0; font-size:28px; letter-spacing:2px;text-transform: uppercase;">
                                {{ $data['name'] ?? 'Your Name' }}</h1>
                            <p style="margin:5px 0 20px 0; font-size:14px; color:#ccc;text-transform: uppercase;">
                                {{ $data['company'] ?? 'Company Profile' }}</p>
                            <p style="margin:0 0 20px 0; font-size:14px; color:#e41a78;text-transform: uppercase;">
                                <b>{{ $data['slogan'] ?? 'Your Company Slogan' }}</b>
                            </p>
                            <!-- Icon Links -->
                            <div
                                style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px; max-width:500px; margin:0 auto;">
                                <!-- Call Me -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="tel:{{ $data['mobile'] ?? '' }}"
                                            style="color:white; font-size:24px; text-decoration:none;"><i
                                                class="fas fa-phone text-2xl"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">Call Me</p>
                                </div>
                                <!-- Email -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="mailto:{{ $data['email'] ?? '' }}"
                                            style="color:white; font-size:24px; text-decoration:none;"><i
                                                class="fa-solid fa-envelope"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">E-Mail</p>
                                </div>
                                <!-- Address -->
                                @php
                                    $address = $data['address'] ?? '';
                                    $encodedAddress = urlencode($address);
                                @endphp
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="https://www.google.com/maps/search/?api=1&query={{ $encodedAddress }}"
                                            style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i
                                                class="fa-solid fa-location-dot"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">Address</p>
                                </div>
                            </div>
                            <div
                                style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px; max-width:500px; margin:0 auto;">
                                <!-- Website -->
                                @php
                                    $website = $data['website'] ?? '';
                                    if ($website && !preg_match('/^https?:\/\//', $website)) {
                                        $website = 'https://' . $website;
                                    }
                                @endphp
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="{{ $website ?: '#' }}"
                                            style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i
                                                class="fa-solid fa-globe"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">Website</p>
                                </div>
                                <!-- Instagram -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="{{ $data['instagram'] ?? '#' }}"
                                            style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i
                                                class="fab fa-instagram text-2xl"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">Instagram</p>
                                </div>
                                <!-- Facebook -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="{{ $data['facebook'] ?? '#' }}"
                                            style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i
                                                class="fab fa-facebook-f text-2xl"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">Facebook</p>
                                </div>
                            </div>
                            <div
                                style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px; max-width:500px; margin:0 auto;">
                                <!-- Twitter -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="{{ $data['twitter'] ?? '#' }}"
                                            style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">Twitter</p>
                                </div>
                                <!-- LinkedIn -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="{{ $data['linkedin'] ?? '#' }}"
                                            style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">LinkedIn</p>
                                </div>
                                   {{--  <!-- Telegram -->
                                        <div style="text-align:center;">
                                            <div style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                                <a href="{{ $data['telegram'] ?? '#' }}" style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                                            </div>
                                            <p style="margin-top:10px;font-family: ui-sans-serif;">Telegram</p>
                                        </div>  
                                <!-- WhatsApp -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:60px; height:60px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="https://wa.me/{{ $data['whatsapp'] ?? '' }}"
                                            style="color:white; font-size:24px; text-decoration:none;" target="_blank"><i
                                                class="fab fa-whatsapp text-2xl"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">WhatsApp</p>
                                </div>
                            </div>




                        </div>  --}}

                        {{--  <div id="template5" class="dash-template5 template-preview"
                            style="margin:0; width:80%; height:auto; overflow:hidden; background-color:black; color:white; font-family:Arial, sans-serif; text-align:center;">
                            <!-- Banner Image -->
                            <div style="width:100%; height:auto; overflow:hidden; position:relative;margin-top: 8px;">
                                <img src="{{ asset($data['banner'] ?? 'images/bg-03.jpg') }}"
                                    style="width:100%; max-width:400px;max-height: 170px; display:block; margin:0 auto;opacity: .5;">
                            </div>
                            <!-- Profile Image -->
                            <div style="margin-top:-50px;position: relative;">
                                <img src="{{ asset($data['profile'] ?? '') }}"
                                    style="width:100px; height:100px; border-radius:50%; border:4px solid white;">
                            </div>
                            <!-- Name & Tagline -->
                            <h1 id ="name" style="margin:10px 0 0 0; font-size:28px; letter-spacing:2px;text-transform: uppercase;">
                                {{ $data['name'] ?? 'EVA LITANY' }}</h1>
                            <p  id ="slogan " style="margin:5px 0 20px 0; font-size:14px; color:#ccc;text-transform: uppercase;">
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
                                        <a href="mailto:{{ $data['email'] ?? '' }}"
                                            style="color:white; font-size:24px; text-decoration:none;"><i
                                                class="fa-solid fa-envelope"></i></a>
                                    </div>
                                    <p style="margin-top:10px;font-family: ui-sans-serif;">E-Mail</p>
                                </div>
                            </div>

                        </div>  --}}

                        <!-- filepath: c:\wamp64\www\visitingcard\resources\views\user\dashboard.blade.php -->
                        <div id="template5" class="dash-template5 template-preview d-none"
                            style="margin:0; width:230px; height:auto; overflow:hidden; background-color:black; color:white; font-family:Arial, sans-serif; text-align:center; border-radius:14px; box-shadow:0 2px 10px rgba(0,0,0,0.18); ">
                            <!-- Banner Image (shorter) -->
                            <div style="width:100%; height:70px; overflow:hidden; position:relative; ">
                                <img src="{{ asset($data['banner'] ?? 'images/templates/t1.jpg') }}"
                                    style="width:100%; max-width:350px; max-height:70px; display:block; margin:0 auto; opacity:.5; object-fit:cover;">
                            </div>
                            <!-- Profile Image (smaller) -->

                            <div style="margin-top:-32px; position:relative;">

                                <img src="#" class="previewQR"
                                    style=" width:56px; height:56px; border-radius:50%; border:3px solid black; object-fit:cover; margin:0 auto 8px auto; display:none;">
                            </div>
                            <!-- Name & Tagline -->
                            <h1 class="previewName"
                                style="margin:8px 0 0 0; font-size:18px; letter-spacing:1px; text-transform:uppercase;">
                                Your Name</h1>
                            <p class="previewCompany"
                                style="margin:2px 0 0 0; font-size:12px; color:#ccc; text-transform:uppercase;">
                                Company Profile</p>
                            <p class="previewSlogan"
                                style="margin:0 0 10px 0; font-size:12px; color:#e41a78; text-transform:uppercase;">
                                <b>Your Company Slogan</b>
                            </p>
                            <!-- Icon Links: 3 per row -->
                            <div
                                style="display:flex; justify-content:center; gap:18px; max-width:320px; margin:0 auto 0 auto;">
                                <!-- Call Me -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="previewMobile"
                                            style="color:white; font-size:16px; text-decoration:none;"><i
                                                class="fas fa-phone"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">Call</p>
                                </div>
                                <!-- Email -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="previewEmail"
                                            style="color:white; font-size:16px; text-decoration:none;"><i
                                                class="fa-solid fa-envelope"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">Email</p>
                                </div>
                                <!-- Address -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="previewAddress"
                                            style="color:white; font-size:16px; text-decoration:none;" target="_blank"><i
                                                class="fa-solid fa-location-dot"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">Address</p>
                                </div>
                            </div>
                            <div
                                style="display:flex; justify-content:center; gap:18px; max-width:320px; margin:8px auto 0 auto;">
                                <!-- Website -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="previewWebsite"
                                            style="color:white; font-size:16px; text-decoration:none;" target="_blank"><i
                                                class="fa-solid fa-globe"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">Web</p>
                                </div>
                                <!-- Instagram -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="linkInstagram"
                                            style="color:white; font-size:16px; text-decoration:none; display:none;"
                                            target="_blank"><i class="fab fa-instagram text-2xl"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">Instagram</p>
                                </div>
                                <!-- Facebook -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="linkFacebook"
                                            style="color:white; font-size:16px; text-decoration:none; display:none;"
                                            target="_blank"><i class="fab fa-facebook-f text-2xl"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">Facebook</p>
                                </div>
                            </div>
                            <div
                                style="display:flex; justify-content:center; gap:18px; max-width:320px; margin:8px auto 0 auto;">
                                <!-- Twitter -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="linkTwitter"
                                            style="color:white; font-size:16px; text-decoration:none; display:none;"
                                            target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">Twitter</p>
                                </div>
                                <!-- LinkedIn -->
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="linkLinkedin"
                                            style="color:white; font-size:16px; text-decoration:none; display:none;"
                                            target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">LinkedIn</p>
                                </div>
                                <div style="text-align:center;">
                                    <div
                                        style="width:36px; height:36px; border:1px solid white; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                                        <a href="#" class="linkLinkedin"
                                            style="color:white; font-size:16px; text-decoration:none; display:none;"
                                            target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                    </div>
                                    <p style="margin-top:4px; font-size:10px;">WhatsApp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for showing/copying the link -->
    <div class="modal fade" id="linkModal" tabindex="-1" aria-labelledby="linkModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="linkModalLabel">Shareable Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="shareableLink" readonly>
                    <button class="btn btn-secondary mt-2" onclick="copyLink()">Copy Link</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Template switching
        // Template switching for two dropdowns
document.getElementById('tabletTemplateSelector').addEventListener('change', function() {
    let selected = this.value;
    document.getElementById('mobileTemplateSelector').selectedIndex = -1; // Deselect mobile
    document.querySelectorAll('.template-preview').forEach(el => el.classList.add('d-none'));
    document.getElementById('template' + selected).classList.remove('d-none');
    document.getElementById('selected_template').value = selected;
    updatePreview();
});
document.getElementById('mobileTemplateSelector').addEventListener('change', function() {
    let selected = this.value;
    document.getElementById('tabletTemplateSelector').selectedIndex = -1; // Deselect tablet
    document.querySelectorAll('.template-preview').forEach(el => el.classList.add('d-none'));
    document.getElementById('template' + selected).classList.remove('d-none');
    document.getElementById('selected_template').value = selected;
    updatePreview();
});
// Set default selection
document.getElementById('tabletTemplateSelector').value = -1;
document.getElementById('mobileTemplateSelector').selectedIndex = -1;

        function updatePreview() {
            const name = document.getElementById('name').value || 'Your Name';
            const company = document.getElementById('companyp').value || 'Profile';
            const slogan = document.getElementById('slogan').value || 'Company Name';
            const mobile = document.getElementById('mobile').value || '+91-xxxxxxxxxx';
            const email = document.getElementById('email').value || 'you@example.com';
            const address = document.getElementById('address').value || 'Your Address Here';
            const website = document.getElementById('websiteInput').value || 'yourwebsite.com';
            const qrFile = document.getElementById('qr_image').files[0];

            const visibleTemplate = document.querySelector('.template-preview:not(.d-none)');
            if (!visibleTemplate) return;

            // --- Template 4 & 5: Show/hide icons based on input ---
            if (visibleTemplate.id === 'template4' || visibleTemplate.id === 'template5') {
                // Mobile
                const mobileElem = visibleTemplate.querySelector('.previewMobile');
                if (mobileElem) {
                    if (mobile && mobile !== '+91-xxxxxxxxxx') {
                        mobileElem.style.display = (visibleTemplate.id === 'template4') ? 'flex' : 'inline-block';
                        mobileElem.href = 'tel:' + mobile;
                    } else {
                        mobileElem.style.display = 'none';
                        mobileElem.href = '#';
                    }
                }
                // Email
                const emailElem = visibleTemplate.querySelector('.previewEmail');
                if (emailElem) {
                    if (email && email !== 'you@example.com') {
                        emailElem.style.display = (visibleTemplate.id === 'template4') ? 'flex' : 'inline-block';
                        emailElem.href = 'mailto:' + email;
                    } else {
                        emailElem.style.display = 'none';
                        emailElem.href = '#';
                    }
                }
                // Address
                const addressElem = visibleTemplate.querySelector('.previewAddress');
                if (addressElem) {
                    if (address && address !== 'Your Address Here') {
                        addressElem.style.display = (visibleTemplate.id === 'template4') ? 'flex' : 'inline-block';
                        addressElem.href = 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(address);
                    } else {
                        addressElem.style.display = 'none';
                        addressElem.href = '#';
                    }
                }
                // Website
                const websiteElem = visibleTemplate.querySelector('.previewWebsite');
                if (websiteElem) {
                    if (website && website !== 'yourwebsite.com') {
                        websiteElem.style.display = (visibleTemplate.id === 'template4') ? 'flex' : 'inline-block';
                        websiteElem.href = website.startsWith('http') ? website : 'http://' + website;
                    } else {
                        websiteElem.style.display = 'none';
                        websiteElem.href = '#';
                    }
                }
                // Social links
                ['linkedin', 'twitter', 'instagram', 'facebook'].forEach(network => {
                    const urlInput = document.querySelector(`input[name="${network}"]`);
                    const url = urlInput ? urlInput.value.trim() : '';
                    visibleTemplate.querySelectorAll(`.link${capitalize(network)}`).forEach(a => {
                        if (url) {
                            a.href = url.startsWith('http') ? url : 'http://' + url;
                            a.style.display = (visibleTemplate.id === 'template4') ? 'flex' :
                            'inline-block';
                        } else {
                            a.style.display = 'none';
                            a.href = '#';
                        }
                    });
                });
            } else if (["template1", "template2", "template3"].includes(visibleTemplate.id)) {
                // --- Templates 1, 2, 3: Show/hide social icons based on input ---
                ['linkedin', 'twitter', 'instagram', 'facebook'].forEach(network => {
                    const urlInput = document.querySelector(`input[name="${network}"]`);
                    const url = urlInput ? urlInput.value.trim() : '';
                    visibleTemplate.querySelectorAll(`.link${capitalize(network)}`).forEach(a => {
                        if (url) {
                            a.href = url.startsWith('http') ? url : 'http://' + url;
                            a.style.display = 'inline-block';
                        } else {
                            a.style.display = 'none';
                            a.href = '#';
                        }
                    });
                });
            }

            // --- Update text fields ---
            const nameElem = visibleTemplate.querySelector('.previewName');
            if (nameElem) nameElem.textContent = name;
            const companyElem = visibleTemplate.querySelector('.previewCompany');
            if (companyElem) companyElem.textContent = company;
            const sloganElem = visibleTemplate.querySelector('.previewSlogan b') || visibleTemplate.querySelector(
                '.previewSlogan');
            if (sloganElem) sloganElem.textContent = slogan;

           // --- Update contact fields for templates 1, 2, 3 only ---
if (["template1", "template2", "template3"].includes(visibleTemplate.id)) {
    const mobileElem = visibleTemplate.querySelector('.previewMobile');
    if (mobileElem) mobileElem.textContent = mobile;

    const emailElem = visibleTemplate.querySelector('.previewEmail');
    if (emailElem) emailElem.textContent = email;

    const addressElem = visibleTemplate.querySelector('.previewAddress');
    if (addressElem) addressElem.textContent = address;

    const websiteElem = visibleTemplate.querySelector('.previewWebsite');
    if (websiteElem) websiteElem.textContent = website;
}

            // --- QR code preview (profile image) ---
            const qrImg = visibleTemplate.querySelector('.previewQR');
            if (qrImg) {
                if (qrFile) {
                    const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                    if (!allowedTypes.includes(qrFile.type)) {
                        alert('Invalid file type! Only JPG, JPEG, and PNG images are allowed.');
                        qrImg.style.display = 'none';
                    } else {
                        const reader = new FileReader();
                        reader.onload = e => {
                            qrImg.src = e.target.result;
                            qrImg.style.display = 'block';
                        };
                        reader.readAsDataURL(qrFile);
                    }
                } else {
                    qrImg.style.display = 'none';
                }
            }
        }

        function capitalize(s) {
            return s.charAt(0).toUpperCase() + s.slice(1);
        }


        document.querySelectorAll('#profileForm input[type="text"]').forEach(input => {
            input.addEventListener('input', updatePreview);
            input.addEventListener('change', updatePreview);
        });
        document.querySelectorAll('#profileForm input[type="file"]').forEach(input => {
            input.addEventListener('change', updatePreview);
        });

        // Initial preview update
        updatePreview();

        function setFormAction(type) {
            var form = document.getElementById('profileForm');
            document.getElementById('action_type').value = type;
            if (type === 'pdf') {
                form.action = "{{ route('pdf') }}";
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const getLinkBtn = document.getElementById('getLinkBtn');
            if (getLinkBtn) {
                getLinkBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const form = document.getElementById('profileForm');
                    const formData = new FormData(form);
                    formData.set('action_type', 'link');
                    fetch("{{ route('card.share') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.link) {
                                document.getElementById('shareableLink').value = data.link;
                                var modal = new bootstrap.Modal(document.getElementById('linkModal'));
                                modal.show();
                            } else {
                                alert('Failed to generate link.');
                            }
                        })
                        .catch(() => alert('Error generating link.'));
                });
            }
        });

        function copyLink() {
            var linkInput = document.getElementById('shareableLink');
            linkInput.select();
            linkInput.setSelectionRange(0, 99999);
            document.execCommand('copy');
        }
    </script>
@endsection
