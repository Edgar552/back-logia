<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gran Logia | Administración</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet"
    >

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            min-height:100vh;
            background:
                linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.85)),
                url('https://images.unsplash.com/photo-1534447677768-be436bb09401?q=80&w=1920&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;

            display:flex;
            align-items:center;
            justify-content:center;

            padding:20px;

            font-family:'Montserrat', sans-serif;
            color:white;
        }

        .container{
            width:100%;
            max-width:720px;
        }

        .card{
            width:100%;

            background:rgba(10,10,10,.78);

            border:1px solid rgba(255,255,255,.08);

            backdrop-filter:blur(14px);

            padding:70px 60px;

            text-align:center;

            box-shadow:
                0 10px 40px rgba(0,0,0,.45),
                0 0 0 1px rgba(255,255,255,.02);
        }

        .logo{
            width:130px;
            max-width:100%;
            margin:0 auto 35px;
            display:block;
        }

        h1{
            font-family:'Cinzel', serif;

            font-size:3.4rem;
            line-height:1.2;

            text-transform:uppercase;
            letter-spacing:.08em;

            margin-bottom:18px;
        }

        .divider{
            width:100px;
            height:2px;

            background:#c9a86a;

            margin:28px auto 38px;
        }

        p{
            color:rgba(255,255,255,.76);

            line-height:2;
            font-size:1rem;

            margin-bottom:45px;
        }

        .button{
            display:inline-flex;

            align-items:center;
            justify-content:center;

            min-height:56px;

            padding:16px 42px;

            border:1px solid rgba(255,255,255,.75);

            color:white;
            text-decoration:none;

            text-transform:uppercase;
            letter-spacing:.2em;

            font-size:.82rem;
            font-weight:500;

            transition:.35s ease;
        }

        .button:hover{
            background:white;
            color:black;

            transform:translateY(-2px);
        }

        .footer{
            margin-top:35px;

            font-size:.78rem;

            color:rgba(255,255,255,.45);

            letter-spacing:.08em;
        }

        /*
        |--------------------------------------------------------------------------
        | TABLET
        |--------------------------------------------------------------------------
        */

        @media (max-width: 992px){

            .card{
                padding:60px 40px;
            }

            h1{
                font-size:2.8rem;
            }
        }

        /*
        |--------------------------------------------------------------------------
        | MOBILE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 768px){

            body{
                padding:16px;
            }

            .card{
                padding:45px 24px;
            }

            .logo{
                width:95px;
                margin-bottom:28px;
            }

            h1{
                font-size:2rem;
                line-height:1.35;
            }

            .divider{
                width:70px;
                margin:22px auto 28px;
            }

            p{
                font-size:.92rem;
                line-height:1.8;
                margin-bottom:35px;
            }

            .button{
                width:100%;

                padding:16px 20px;

                font-size:.75rem;

                letter-spacing:.18em;
            }

            .footer{
                font-size:.72rem;
                line-height:1.6;
            }
        }

        /*
        |--------------------------------------------------------------------------
        | SMALL MOBILE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 420px){

            h1{
                font-size:1.7rem;
            }

            .card{
                padding:40px 20px;
            }

            p{
                font-size:.88rem;
            }
        }

    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <img
            src="{{ asset('logo-log-slp.png') }}"
            alt="Gran Logia"
            class="logo"
        >

        <h1>
            Panel Administrativo
        </h1>

        <div class="divider"></div>

        <p>
            Bienvenido al sistema administrativo de la Gran Logia de Estado
            Soberana e Independiente "El Potosí".
            Accede al panel para administrar noticias, publicaciones,
            eventos y contenido institucional.
        </p>

        <a
            href="{{ url('/admin') }}"
            class="button"
        >
            Acceder al Panel
        </a>

        <div class="footer">
            © {{ date('Y') }} Gran Logia "El Potosí"
        </div>

    </div>

</div>

</body>
</html>
