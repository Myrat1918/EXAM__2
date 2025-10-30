<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futbol Täzelikleri Merkezi</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <style>

        body {

            background-image: url('{{ asset('images/football-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }


        .content-wrapper {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            max-width: 90%;
        }


        #wrapper {
            width: 100%;
            min-height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
        }

        #wrapper span {
            transition: all 0.6s ease-in-out;
            white-space: nowrap;
        }



    </style>

</head>

<body class="bg-dark">
    <div class="content-wrapper">
        <div class="text-center">

            <div class="mb-4">
                <a href="{{ route('locale', 'tm') }}" class="btn btn-sm btn-outline-light me-2">TM</a>
                <a href="{{ route('locale', 'ru') }}" class="btn btn-sm btn-outline-light me-2">RU</a>
                <a href="{{ route('locale', 'en') }}" class="btn btn-sm btn-outline-light">EN</a>
            </div>



            <div class="h1 fw-bold mb-5">
                <div id="wrapper" class="text-white">
                    
                    <span id="ara">TÄZELIK</span>
                </div>
                <h3 class="text-light">Futbol Täzeliklerini Satyn Al we Gör!</h3>
            </div>

            <a href="{{ route('login') }}" class="btn btn-success btn-lg">
                {{ __('auth.login') }} <i class="bi-box-arrow-in-right"></i>
            </a>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg ms-3">
                {{ __("auth.register") }} <i class="bi-person-plus"></i>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const wrapper = document.getElementById('wrapper');

            setTimeout(() => {
                wrapper.classList.add('activated');
            }, 2000)

            setInterval(() => {
                wrapper.classList.toggle('activated');
            }, 9000);
        });
    </script>

</body>

</html>
