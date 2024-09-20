@extends('layouts.master')


@section('contenu')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">

                            <div class="card-body">
                              <h5 class="card-title">Formulaire d'Ajout Service</h5>
                
                              <!-- Multi Columns Form -->
                              <form class="row g-3" method="POST" action="{{route('service.store')}}">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Type Service</label>
                                    <select id="type_equipement" class="form-select" name="type_service">
                                      <option value="" disabled selected>Selectionner</option>
                                      <option value="supervision">Supervision</option>
                                      <option value="virtualisation">Virtualisation</option>
                                      <option value="drive">Fichier Interne</option>
                                      
                                    </select>
                                  </div>
                                <div class="col-md-6">
                                  <label for="inputEmail5" class="form-label">Nom Service</label>
                                  <input type="text" class="form-control" id="nom" name="nom">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputPassword5" class="form-label">Adresse Url</label>
                                  <input type="url" class="form-control" id="url" name="url">
                                </div>
                               
                                
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                                  <button type="reset" class="btn btn-secondary">Annuler</button>
                                </div>
                              </form><!-- End Multi Columns Form -->
                
                            </div>
                          </div>

            </div>
        </div>
    </section>
@endsection
