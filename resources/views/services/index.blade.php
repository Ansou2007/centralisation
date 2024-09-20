@extends('layouts.master')


@section('contenu')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Services</h5>

                        <!-- Table with stripped rows -->
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <a href="{{route('service.create')}}" class="btn btn-primary">Ajouter</a>
                            <div class="datatable-container">
                                <table class="table datatable datatable-table">
                                    <thead>
                                        <tr>
                                          <th>N</th>
                                          <th>Service</th>
                                          <th>Nom</th>
                                          <th>Url</th>
                                          <th class="align-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                        @foreach ($data as $service )
                                          <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                @if ($service->type_service == 'supervision')
                                                <span class="badge rounded-pill bg-success">{{$service->type_service}}</span>

                                                @else
                                                <span class="badge rounded-pill bg-primary">{{$service->type_service}}</span>
 
                                                @endif
                                            </td>
                                            <td>
                                                {{$service->nom}}
                                            </td>
                                            <td>
                                                <a href="{{$service->url}}" class="btn btn-info" target="_blank">Voir</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary">Editer</a>
                                                <a href="" class="btn btn-danger">Supprimer</a>
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
