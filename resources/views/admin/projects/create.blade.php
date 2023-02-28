@extends('layouts.admin')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row gy-5">
                    <div class="col-12">
                        <h2>Aggiungi un nuovo progetto</h2>
                    </div>
                    <div class="col-12">
                        <form action="{{ route('admin.projects.store') }}" method="POST">
                        @csrf
                            <div class="form-group mb-4">
                                <label class="control-label">Titolo</label>
                                <input type="text" class="form-control" placeholder="Inserisci un nuovo titolo" id="title" name="title">
                            </div>
                            <div class="form-group mb-5">
                                <label class="control-label">Contenuto</label>
                                <textarea type="text" class="form-control" placeholder="Inserisci una nuova Descrizione" id="content" name="content"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Salva Progetto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection