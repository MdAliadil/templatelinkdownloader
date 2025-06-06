@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        #template2 {
            flex-wrap: nowrap;
            background: linear-gradient(to right, #9c27b0, #ff5722);
            border-radius: 12px;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 450px;
            height: 300px;
        }

        #template2 .left,
        #template2 .right {
            padding: 10px;
        }

        #template2 .left {
            flex: 1 1 35%;
            background: #eee;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        #template2.left img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }



        #template2 .right {
            flex: 1 1 65%;
            position: relative;
            background: transparent;
        }

        #template2 .right .company-logo {
            position: absolute;
            top: 10px;
            right: 10px;
            height: 30px;
        }

        #template2 .right h2 {
            margin: 25px 0 5px 0;
            font-size: 18px;
        }

        #template2 .right p {
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

        .card-container {
            display: flex;
            justify-content: space-between;
            max-width: 450px;
            max-height: 350px;
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
            background: #d4af7f;
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

        .previewSocials i {
            font-size: 22px;
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
                    <div class="card-body">
                        <form id="profileForm" method="POST" action="{{ route('pdf') }}" enctype="multipart/form-data">
                            @csrf

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
                            <input type="text" name="linkedin" id="linkedin" placeholder="LinkedIn URL"
                                class="form-control mb-2">
                            <input type="text" name="twitter" id="twitter" placeholder="Twitter URL"
                                class="form-control mb-2">
                            <input type="text" name="instagram" id="instagram" placeholder="Instagram URL"
                                class="form-control mb-2">
                            <input type="text" name="facebook" id="facebook" placeholder="Facebook URL"
                                class="form-control mb-2">
                            <input type="hidden" name="selected_template" id="selected_template" value="1">
                            <button type="submit" class="btn btn-primary">Download as PDF</button>
                        </form>

                        {{--  <form id="profileForm" method="POST" action="#">
                            @csrf
                            
                            <input type="text" name="slogan" id="slogan" placeholder="Company Name"
                                class="form-control mb-2">

                            <input type="text" name="name" id="name" placeholder="Full Name"
                                class="form-control mb-2">
                            <input type="text" name="company" id="companyp" placeholder="Profile"
                                class="form-control mb-2">
                            <input type="email" name="email" id="email" placeholder="Email"
                                class="form-control mb-2">
                            <input type="text" name="mobile" id="mobile" placeholder="Mobile Number"
                                class="form-control mb-2">
                            <input type="text" name="address" id="address" placeholder="Address"
                                class="form-control mb-2">
                            <input type="file" name="qr_image" id="qr_image" accept="image/*" class="form-control mb-2">

                            <input type="text" name="website" id="websiteInput" placeholder="Website"
                                class="form-control mb-2">
                            <input type="url" name="linkedin" id="linkedin" placeholder="LinkedIn URL"
                                class="form-control mb-2">
                            <input type="url" name="twitter" id="twitter" placeholder="Twitter URL"
                                class="form-control mb-2">
                            <input type="url" name="instagram" id="instagram" placeholder="Instagram URL"
                                class="form-control mb-2">
                            <input type="url" name="facebook" id="facebook" placeholder="Facebook URL"
                                class="form-control mb-2">
                        </form>  --}}
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
                        <div class="mb-3">
                            <label for="templateSelector" class="form-label">Select Template</label>
                            <select id="templateSelector" class="form-control w-50">
                                <option value="1">Template 1 (Default)</option>
                                <option value="2">Template 2 (Blue)</option>
                                <option value="3">Template 3 (Green)</option>
                            </select>
                        </div>
                        <!-- Template 1: Default -->
                        <div id="template1" class="card-container template-preview" style="background-color: #f9f9f9;">
                            <div class="left">
                                <div class="qr">
                                    <img src="{{ asset('storage/qrcodes/' . $user->qr_code_filename) }}" alt="QR code"
                                        class="previewQR"
                                        style="display:none; width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                                <div></div>
                                <div class="d-flex gap-2 mt-2" class="previewSocials">
                                    <a id="linkLinkedin" href="#" target="_blank" style="display:none;"><i
                                            class="fa-brands fa-linkedin fa-lg"></i></a>
                                    <a id="linkTwitter" href="#" target="_blank" style="display:none;"><i
                                            class="fab fa-twitter fa-lg"></i></a>
                                    <a id="linkInstagram" href="#" target="_blank" style="display:none;"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                    <a id="linkFacebook" href="#" target="_blank" style="display:none;"><i
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
                                    <a class="previewWebsite">🌐 yourwebsite.com</a>
                                    <p class="previewAddress">📍 Your Address Here</p>
                                </div>
                            </div>
                        </div>

                        <!-- Template 2: Blue Background -->
                        <div id="template2" class="card-container template-preview d-none"
                            style="background: linear-gradient(to right, #9c27b0, #ff5722);">
                            <div class="left">
                                <div class="qr">
                                    <img src="#" alt="QR code" class="previewQR"
                                        style="display:none; width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                                <div></div>
                                <div class="d-flex gap-2 mt-2 previewSocials">
                                    <a id="linkLinkedin" href="#" target="_blank" style="display:none;"><i
                                            class="fa-brands fa-linkedin fa-lg"></i></a>
                                    <a id="linkTwitter" href="#" target="_blank" style="display:none;"><i
                                            class="fab fa-twitter fa-lg"></i></a>
                                    <a id="linkInstagram" href="#" target="_blank" style="display:none;"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                    <a id="linkFacebook" href="#" target="_blank" style="display:none;"><i
                                            class="fab fa-facebook fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="right">
                               
                                <p class="previewWebsite">🌐 yourwebsite.com</p>
                                <h4 class="previewName" style="font-size: clamp(14px, 2.5vw, 20px);">Your Name</h4>
                                <h5 class="previewCompany">Profile</h5>
                                <hr>
                                <div class="info">
                                    <h5 class="previewSlogan"><b></b></h5>
                                    <p class="previewMobile">📞 +91-xxxxxxxxxx</p>
                                    <p class="previewEmail">📧 you@example.com</p>
                                    <p class="previewAddress">📍 Your Address Here</p>
                                </div>
                            </div>
                        </div>



                        <!-- Template 3: Green Background -->
                        <div id="template3" class="card-container template-preview d-none"
                            style="background-color: #e6ffe6;">
                            <div class="left">
                                <div class="qr">
                                    <img src="{{ asset('storage/qrcodes/' . $user->qr_code_filename) }}" alt="QR code"
                                        class="previewQR"
                                        style="display:none; width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                                <div></div>
                                <div class="d-flex gap-2 mt-2" class="previewSocials">
                                    <a id="linkLinkedin" href="#" target="_blank" style="display:none;"><i
                                            class="fa-brands fa-linkedin fa-lg"></i></a>
                                    <a id="linkTwitter" href="#" target="_blank" style="display:none;"><i
                                            class="fab fa-twitter fa-lg"></i></a>
                                    <a id="linkInstagram" href="#" target="_blank" style="display:none;"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                    <a id="linkFacebook" href="#" target="_blank" style="display:none;"><i
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
                                    <a class="previewWebsite">🌐 yourwebsite.com</a>
                                    <p class="previewAddress">📍 Your Address Here</p>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('#name').on('input', function() {
                $('.previewName').text($(this).val() || 'Your Name');
            });

            $('#companyp').on('input', function() {
                $('.previewCompany').text($(this).val() || 'Company');
            });

            $('#email').on('input', function() {
                $('.previewEmail').text('📧 ' + ($(this).val() || 'you@example.com'));
            });

            $('#mobile').on('input', function() {
                $('.previewMobile').text('📞 ' + ($(this).val() || '+91-xxxxxxxxxx'));
            });

            $('#address').on('input', function() {
                $('.previewAddress').text('📍 ' + ($(this).val() || 'Your Address Here'));
            });

            $('#websiteInput').on('input', function() {
                $('.previewWebsite').text('🌐 ' + ($(this).val() || 'yourwebsite.com'));
            });

            $('#linkedin, #twitter, #instagram, #facebook').on('input', function() {
                const val = $(this).val().trim();
                const id = $(this).attr('id');
                const linkId = '#link' + id.charAt(0).toUpperCase() + id.slice(1);

                if (val === '') {
                    $(linkId).hide();
                } else {
                    $(linkId).attr('href', val).show();
                }
            });

            $('#slogan').on('input', function() {
                $('.previewSlogan').text($(this).val() || 'Your Company Name');
            });

            $('#qr_image').on('change', function(e) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    $('.previewQR').attr('src', event.target.result).show();
                };
                reader.readAsDataURL(e.target.files[0]);
            });



            $('#templateSelector').on('change', function() {
                var selected = $(this).val();
                $('.template-preview').addClass('d-none');
                $('#template' + selected).removeClass('d-none');
                $('#selected_template').val(selected);
            });



        });
    </script>
@endpush
   



{{--  after icons chage with gpt  --}}

@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        #template3 {
            flex-wrap: nowrap;
            background: linear-gradient(to right, #9c27b0, #ff5722);
            border-radius: 12px;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 450px;
            height: 260px;
        }

        #template3 .left,
        #template3 .right {
            padding: 10px;
        }

        #template3 .left {
            flex: 1 1 35%;
            background: rgb(145, 123, 123);
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
            max-width: 450px;
            max-height: 350px;
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
                    <div class="card-body">
                        <form id="profileForm" method="POST" action="{{ route('pdf') }}" enctype="multipart/form-data">
                            @csrf

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
                            <input type="text" name="linkedin" class="social-input" placeholder="LinkedIn URL"
                                class="form-control mb-2">
                            <input type="text" name="twitter" class="social-input" placeholder="Twitter URL"
                                class="form-control mb-2">
                            <input type="text" name="instagram" class="social-input" placeholder="Instagram URL"
                                class="form-control mb-2">
                            <input type="text" name="facebook" class="social-input" placeholder="Facebook URL"
                                class="form-control mb-2">
                            <input type="hidden" name="selected_template" id="selected_template" value="1">
                            <button type="submit" class="btn btn-primary">Download as PDF</button>
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
                        <div class="mb-3">
                            <label for="templateSelector" class="form-label">Select Template</label>
                            <select id="templateSelector" class="form-control w-50">
                                <option value="1">Template 1</option>
                                <option value="2">Template 2 </option>
                                <option value="3">Template 3 </option>
                            </select>
                        </div>

                        <!-- Template 1: Default -->
                        <div id="template1" class="card-container template-preview d-none"
                            style="background-color: #f9f9f9;">
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
                                    <a class="previewWebsite">🌐 yourwebsite.com</a>
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
                                    <div>
                                        <a class="previewWebsite">🌐 yourwebsite.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Template 3:-->
                        <div id="template3" class="card-container template-preview d-none"
                            style="background: linear-gradient(to right, #9c27b0, #ff5722);">
                            <div class="left">
                                <h3 class="previewName"
                                    style="font-size: clamp(4px, 2.5vw, 20px); margin-top:16%; color:#bb1b1b; white-space: nowrap;">
                                    <b>Your Name</b></h3>
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

                                <p class="previewWebsite">🌐 yourwebsite.com</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Template switching
        document.getElementById('templateSelector').addEventListener('change', function() {
            let selected = this.value;
            document.querySelectorAll('.template-preview').forEach(el => el.classList.add('d-none'));
            document.getElementById('template' + selected).classList.remove('d-none');
            document.getElementById('selected_template').value = selected;
        });

        // Update preview dynamically from form inputs
        function updatePreview() {
            const name = document.getElementById('name').value || 'Your Name';
            const company = document.getElementById('companyp').value || 'Profile';
            const slogan = document.getElementById('slogan').value || 'Company Name';
            const mobile = document.getElementById('mobile').value || '📞 +91-xxxxxxxxxx';
            const email = document.getElementById('email').value || '📧 you@example.com';
            const address = document.getElementById('address').value || '📍 Your Address Here';
            const website = document.getElementById('websiteInput').value || 'yourwebsite.com';
            const qrFile = document.getElementById('qr_image').files[0];

            // Update all template previews
            ['template1', 'template2', 'template3'].forEach(templateId => {
                const preview = document.getElementById(templateId);
                if (!preview) return;

                preview.querySelector('.previewName').textContent = name;
                preview.querySelector('.previewCompany').textContent = company;
                const sloganElem = preview.querySelector('.previewSlogan b');
                if (sloganElem) sloganElem.textContent = slogan;

                const mobileElem = preview.querySelector('.previewMobile');
                if (mobileElem) mobileElem.textContent = '📞 ' + mobile;

                const emailElem = preview.querySelector('.previewEmail');
                if (emailElem) emailElem.textContent = '📧 ' + email;

                const addressElem = preview.querySelector('.previewAddress');
                if (addressElem) addressElem.textContent = '📍 ' + address;

                const websiteElems = preview.querySelectorAll('.previewWebsite');
                websiteElems.forEach(el => {
                    el.textContent = '🌐 ' + website;
                    el.href = website.startsWith('http') ? website : 'http://' + website;
                });

                // QR code preview
                const qrImg = preview.querySelector('.previewQR');
                if (qrFile) {
                    const reader = new FileReader();
                    reader.onload = e => {
                        qrImg.src = e.target.result;
                        qrImg.style.display = 'block';
                    };
                    reader.readAsDataURL(qrFile);
                } else {
                    qrImg.style.display = 'none';
                }
            });

            // Social links
            ['linkedin', 'twitter', 'instagram', 'facebook'].forEach(network => {
                const urlInput = document.querySelector(`input[name="${network}"]`);
                const url = urlInput ? urlInput.value.trim() : '';
                document.querySelectorAll(`.link${capitalize(network)}`).forEach(a => {
                    if (url) {
                        a.href = url.startsWith('http') ? url : 'http://' + url;
                        a.style.display = 'inline-block';
                    } else {
                        a.style.display = 'none';
                    }
                });
            });
        }

        function capitalize(s) {
            return s.charAt(0).toUpperCase() + s.slice(1);
        }

        // Event listeners for input changes
        document.querySelectorAll('#profileForm input[type="text"], #profileForm input[type="file"]').forEach(input => {
            input.addEventListener('input', updatePreview);
            input.addEventListener('change', updatePreview);
        });

        // Initial preview update
        updatePreview();
    </script>
@endsection
