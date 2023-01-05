@extends('layouts.main')

@section('title', 'Oi, eu sou o Jhonattan')

@section('content')
<main class="principal-index">
        <section>
            <div class="introduction">
                <h1 class="title">Web Developer Portfolio</h1>
                <h3 class="subtitle">Desenvolvedor de Plataformas Web com PHP, Laravel, JavaScript, Jquery, MySql.
                    Confira meus últimos projetos de Portfólio.</h3>

                <ul class='filters'>
                    <li title="Mostrar Todos os Projetos">
                        <span>Mostrar Tudo</span>
                    </li>
                    <li title="Front-end">
                        <span>Front-End</span>
                    </li>
                    <li title="Back-End">
                        <span>Back-End</span>
                    </li>
                    <li title="PHP">
                        <span>PHP</span>
                    </li>
                    <li title="Laravel">
                        <span>Laravel</span>
                    </li>
                    <li title="Yii">
                        <span>Yii</span>
                    </li>
                    <li title="JavaScript">
                        <span>JavaScript</span>
                    </li>
                    <li title="Mysql">
                        <span>Mysql</span>
                    </li>
                    <li title="Jquery">
                        <span>Jquery</span>
                    </li>
                    <li title="Bootstrap">
                        <span>Bootstrap</span>
                    </li>
                </ul>
            </div>

    </main>
    <div class="container">

                <h3 id="Redes">Redes Sociais</h3>
                <div class="content">
                    <a class="card-link" target="_BLANK" href="https://www.linkedin.com/in/jhonattan-santos-720803200/">
                        <div class="card-social">
                            <div class="linkedin">
                                <div class="icon">
                                    <img src="/img/linkedin.png">
                                </div>
                                <div class="myahoba">
                                    <h2>Jhonattan Santos</h2>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="card-link" target="_BLANK" href="https://github.com/jhonattan-Meira-Santos">
                        <div class="card-social">
                            <div class="github">
                                <div class="icon">
                                    <img src="/img/github.png">
                                </div>
                                <div class="myahoba">
                                    <h2>jhonattan-Meira-Santos</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <hr size="1" width="50%" noshade>

                <div class="row portfolio">
                    <small id="projects">Mostrando todos os projetos. Use os filtros para listar quais tecnologias você deseja listar.</small>
                    @foreach($sites as $site)
                    <div class="col-md-6 sites">
                        <a href="https://vitrinekta.com.br/version-2/app/views/site/index.php" target="_BLANK">
                            <div class="card-site">
                                <div class="card-img">
                                    <img src="{{$site->image}}">
                                </div>
                                <div class="card-descricao">
                                    <h4 class="titulo">{{$site->name}}</h4>
                                    <small>{{$site->tags}}</small>
                                    <p class="descricao">
                                        {{$site->description}}
                                    </p>
                                </div>

                            </div>
                        </a>
                        <div class='row links-git-site'>
                            <div class="col-md-6">
                                <a href='{{$site->github}}'>
                                    <div class="link-git">
                                        <p class='link-projeto'>Git Hub</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href='{{$site->visit}}'>
                                    <div class="link-git">
                                        <p class='link-projeto'>Visitar</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>



@endsection
