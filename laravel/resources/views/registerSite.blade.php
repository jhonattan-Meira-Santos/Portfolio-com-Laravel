
@extends('layouts.main')

@section('title', 'Cadastrar Novo Site')

@section('content')
   <main class="principal-index">
        <section class='form-section'>
            <div class="container">
                <form class="form" action='/events' enctype="multipart/form-data" method='POST'>
                    <h1 class='form-title'>Cadastrar Novo Site</h1>
                    @csrf
                    <div class="form-group">
                        <b><label for="image">Imagem do Projeto: </label></b>
                        <input type='file' id='image' name='image' class='form-control-file'></input>
                    </div>
                    <div class="form-group">
                        <b><label for="nome">Nome do Projeto: </label></b>
                        <input type='text' id='nome' name='name' placeholder="Nome do Projeto" class='form-input'>
                    </div>
                    <div class="form-group">
                        <b><label for="site">Link do Site: </label></b>
                        <input type='url' id='site' name='visit' placeholder="Link do Site" class='form-input'>
                    </div>
                    <div class="form-group">
                        <b><label for="git">Link do GitHub: </label></b>
                        <input type='url' id='git' name='github' placeholder="Link do GitHub" class='form-input'>
                    </div>
                    <div class="form-group">
                        <b><label for="tags">Tags: </label></b>
                        <input type='text' id='tags' name='tags' placeholder="Tecnologias usadas (separadas por vírgulas)" class='form-input'>
                    </div>
                    <div class="form-group">
                        <b><label for="nome">Descrição do Projeto: </label></b>
                        <textarea placeholder="Descrição do Projeto" id='description' name='description' class='form-control'></textarea>
                    </div>
                    <div class='form-div-sub'>
                        <input type='submit' class='form-submit' value='Criar novo site'>
                    </div>
                </form>
            </div>
        </section>
   </main>
@endsection
