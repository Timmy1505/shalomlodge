<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script defer src="{{ asset('js/app.js')  }}"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>{{ $title }}</title>
    <livewire:styles />
</head>

<body class="font-['Quicksand']">
    <div class="relative overflow-x-hidden min-h-screen flex flex-col justify-between">
        <x-nav />

        {{ $slot }}

        <footer class="py-8 border-t border-gray-200">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Contact</div> -->
                    <div class="d-flex align-items-center">
                        <div class="p-3">

                            <div class="boxeds">
                                <span class="df aic gap05">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <strong>Address</strong>
                                </span>
                                <p>1355 Market St, Suite 900 San Francisco, United States</p>
                            </div>

                            <div class="boxeds">
                                <span class="df aic gap05"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <strong>Email</strong>
                                </span>
                                <p>email@agency.com</p>
                            </div>

                            <div class="boxeds">
                                <span class="df aic gap05"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    <strong>Phone</strong>
                                </span>
                                <p>+123456789</p>
                            </div>
                            <!--+92 340 022 2255 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div style="width:100%;overflow:hidden;height:375px;max-width:100%;">
                    <div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13607.356610977176!2d74.33246765015716!3d31.501104731403522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190519496f773f%3A0x604b255523e76942!2sphptravels!5e0!3m2!1sen!2s!4v1685517501961!5m2!1sen!2s"
                            width="800" height="600" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <style>
                        #google-maps-canvas .map-generator {
                            max-width: 100%;
                            max-height: 100%;
                            background: none;
                        }
                        </style>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <livewire:scripts />
</body>

</html>