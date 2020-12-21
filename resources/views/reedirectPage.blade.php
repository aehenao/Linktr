<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $link->enlace }}</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        :root {
            --color1: #DE6262;
            --color2: #FFB88C;
            --color3: #12c2e9;
            --color4: #c471ed;
            --color5: #f64f59;
        }

        body {
            margin: 0;
            padding: 0;
            /* background: url('https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_960_720.jpg'); */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .gradient {
            margin: 0;
            padding: 0;
            min-weight: 100vw;
            min-height: 100vh;
            background: linear-gradient(-45deg, var(--color1), var(--color2), var(--color3), var(--color4), var(--color5));
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 500% 500%;
            animation: gradient 20s ease infinite;
            opacity: 0.5;
        }

        .text {
            z-index: 2;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 35px;
            font-weight: 650;
            letter-spacing: 1px;
            text-align: center;
        }

        .sub {
            z-index: 2;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: 300;
            letter-spacing: 1px;
            text-align: center;
        }

        .wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 2;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

    </style>
</head>

<body style=" background: url({{ asset($link->imagen) }}) no-repeat center center fixed;">
    <span id="data" time="{{ $link->tiempo_espera }}" style="display: none;" destino="{{ $link->destino }} "></span>

    <div class="wrapper">
        <span class="text">{{ $link->titulo }}</span><br>
        <span class="sub">{{ $link->subtitulo }}</span>
    </div>
    <div class="gradient"></div>




    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let tiempo = parseInt($('#data').attr('time')) * 1000
            let destinoURL = $('#data').attr('destino')
            //Redirecciono
            setInterval(function() {
                window.location.replace(destinoURL);
            }, tiempo, "Redirect");
        })

    </script>
</body>

</html>
