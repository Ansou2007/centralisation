@extends('layouts.master')


@section('contenu')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Equipement</h5>

                        <!-- Table with stripped rows -->
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <a href="{{route('equipement.create')}}" class="btn btn-primary">Ajouter</a>
                            <div class="datatable-container">
                                <table class="table datatable datatable-table">
                                    <thead>
                                        <tr>
                                          <th>N</th>
                                          <th>Appareil</th>
                                          <th>MAC</th>
                                          <th>Marque</th>
                                          <th>Model</th>
                                          <th>Url</th>
                                          <th>Type</th>
                                          <th class="align-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                        @foreach ($data as $equipement )
                                           <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$equipement->nom_appareil	}}</td>
                                            <td>{{$equipement->adresse_mac	}}</td>
                                            <td>{{$equipement->marque	}}</td>
                                            <td class="green">{{$equipement->model	}}</td>
                                            <td class="green">
                                                <a href="{{$equipement->url	}}" target="_blank">Voir</a>
                                            </td>
                                            <td class="green"><span class="badge rounded-pill bg-success">{{$equipement->type_equipement}}</span></td>
                                            <td class="green">
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
