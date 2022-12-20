<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS Plataforma -->
    <link href='/css/index.css' rel="stylesheet">
</head>

<body>
    <header class="cabecalho-index">
        <nav class="index-nav">
            <div class="div-logo">
                <a href="/index">
                    <h1 class="titulo">Jhonattan Santos</h1>
                </a>
            </div>
            <div class="links">
                <ul>
                    <li class="links-li link-adm"><a href="#Redes">
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="separator">
                    </li>
                    <li class="links-li"><a href="#Redes">
                            <p>Redes Sociais</p>
                        </a>
                    </li>
                    <li class="links-li"><a href="#projects">
                            <p>Projetos</p>
                        </a>
                    </li>
                    <li class="links-li"><a href="#Jornada">
                            <p>Jornada</p>
                        </a></li>

                </ul>
            </div>
        </nav>
    </header>
    @yield('content')



    <footer> Jhonattan &copy; 2022</footer>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/b6471a517e.js" crossorigin="anonymous"></script>

</body>

</html>
