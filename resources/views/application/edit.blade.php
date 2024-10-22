@extends('layouts.master')


@section('contenu')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Formulaire Application</h5>
                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('application.update', $application->id) }}">
                            @csrf
                            @method('patch')
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Nom Service</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{$application->nom}}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Adresse Url</label>
                                <input type="url" class="form-control" id="url" name="url" value="{{$application->url}}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{ route('application') }}" class="btn btn-secondary">Retour</a>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
