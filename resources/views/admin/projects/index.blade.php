@extends('layouts.admin')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 my-5">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h2>Elenco Projects</h2>
                            </div>
                            <div>
                                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Aggiungi un Progetto</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    @if (session('message'))
                    <div class="col-4">
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    </div>
                    @endif
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <th>id</th>
                                <th>Titolo</th>
                                <th>Slug</th>
                                <th>Azioni</th>
                            </thead>
                            <tbody>
                                @foreach ( $projects as $project )
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->slug }}</td>
                                        <td>
                                            <div>
                                                <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
    </main>
@endsection