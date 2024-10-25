@extends('layouts.master')


@section('contenu')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Applications</h5>
                        <!-- Table with stripped rows -->
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <a href="{{route('application.create')}}" class="btn btn-primary">Ajouter</a>
                            <div class="datatable-container">
                                <table class="table datatable datatable-table">
                                    <thead>
                                        <tr>
                                          <th>N</th>
                                          <th>Nom</th>
                                          <th>Url</th>
                                          <th class="align-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                        @foreach ($data as $application )
                                          <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$application->nom}}
                                            </td>
                                            <td>
                                                <a href="{{$application->url}}" class="btn btn-info" target="_blank">Acceder</a>
                                            </td>
                                            <td>
                                                <a href="{{route('application.show',$application->id)}}" class="btn btn-primary">Editer</a>
                                                <a href="{{route('application.delete',$application->id)}}" class="btn btn-danger">Supprimer</a>
                                            </td>
                                        </tr>  
                                        @endforeach 
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
