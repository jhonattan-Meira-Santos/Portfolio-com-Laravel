
@extends('layouts.main')

@section('title', 'Cadastrar Novo Site')

@section('content')
   <main class="principal-index">
        <section class='form-section'>
            <div class="container">
                <form class="form" action='' method='POST'>
                    <h1 class='form-title'>Cadastrar Novo Site</h1>
                    <div class="form-group">
                        <b><label for="nome">Nome do Projeto: </label></b>
                        <input type='text' id='nome' placeholder="Nome do Projeto" class='form-input'>
                    </div>
                    <div class="form-group">
                        <b><label for="site">Link do Site: </label></b>
                        <input type='url' id='site' placeholder="Link do Site" class='form-input'>
                    </div>
                    <div class="form-group">
                        <b><label for="git">Link do GitHub: </label></b>
                        <input type='url' id='git' placeholder="Link do GitHub" class='form-input'>
                    </div>
                    <div class="form-group">
                        <b><label for="nome">Descrição do Projeto: </label></b>
                        <textarea placeholder="Descrição do Projeto" class='form-input'></textarea>
                    </div>
                    <div class="form-group">
                        <b><label for="nome">Imagem do Projeto: </label></b>
                        <input type='file' placeholder="Descrição do Projeto" class='form-input'></input>
                    </div>
                    <div class='form-div-sub'>
                        <button class='form-submit'>Enviar</button>
                    </div>
                </form>
            </div>
        </section>
   </main>
@endsection
