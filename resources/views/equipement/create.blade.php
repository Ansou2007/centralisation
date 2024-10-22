@extends('layouts.master')
@section('contenu')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                            <div class="card-body">
                              <h5 class="card-title">Formulaire d'Ajout Equipement</h5>
                
                              <!-- Multi Columns Form -->
                              <form class="row g-3" method="POST" action="{{route('equipement.store')}}">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Type Equipemnt</label>
                                    <select id="type_equipement" class="form-select" name="type_equipement">
                                      <option value="" disabled selected>Selectionner</option>
                                      <option value="routeur">Routeur</option>
                                      <option value="switch">Switch</option>
                                      <option value="serveur">Serveur</option>
                                      <option value="imprimante">Imprimante</option>
                                      <option value="onduleur">Onduleur</option>
                                      <option value="camera">Camera</option>
                                      <option value="ap">Point d'Acces</option>
                                      <option value="ipphone">Telephone IP</option>
                                      <option value="autres">Autres</option>
                                    </select>
                                  </div>
                                <div class="col-md-6">
                                  <label for="inputEmail5" class="form-label">Nom Equipement</label>
                                  <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="inputPassword5" class="form-label">Adresse Url</label>
                                  <input type="url" class="form-control" id="url" name="url" >
                                </div>
                                <div class="col-6">
                                  <label for="inputAddress5" class="form-label">Marque</label>
                                  <input type="text" class="form-control" id="marque" placeholder="la marque de l'appareil" name="marque">
                                </div>
                                <div class="col-6">
                                  <label for="inputAddress2" class="form-label">Model</label>
                                  <input type="text" class="form-control" id="model" placeholder="le model de l'appareil" name="model">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label">Adresse MAC</label>
                                  <input type="text" class="form-control" id="mac" name="mac">
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
    <script>

    </script>
@endsection
