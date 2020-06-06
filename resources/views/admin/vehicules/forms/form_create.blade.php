    @if (count($assurances) >= 1)
        <form action="{{ route('admin.vehicules.store') }}" method="POST">


                        @csrf

                        <div class="d-flex flex-row">
                            <div class="form-group col-12">
                                <label for="assurance" class="text-dark control-label">L'assurance attaché au véhicule</label>
                                <select name="assurance_id" id="assurance" class="form-control @error('assurance_id') is-invalid @enderror">
                                    <option value="{{ $assurances->last()->id }}">{{ $assurances->last()->police }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="form-group col-4">
                                <label for="marque" class="control-label">Marque</label>
                                <input id="marque" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" placeholder="Votre marque">
                                @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="type" class="control-label">Type (essence, diesel...)</label>
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" placeholder="Votre type">
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="matricule" class="control-label">Matricule</label>
                                <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" placeholder="Votre matricule">
                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="form-group col-4">
                                <label for="modele" class="control-label">Modéle</label>
                                <input id="modele" type="text" class="form-control @error('modele') is-invalid @enderror" name="modele" placeholder="Votre modele">
                                @error('modele')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="nb_places" class="control-label">Nombre de places</label>
                                <input id="nb_places" type="text" class="form-control @error('nb_places') is-invalid @enderror" name="nb_places" placeholder="Votre nombre de places">
                                @error('nb_places')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-8">
                            <button type="submit" class="btn btn-success text-uppercase">
                                Créer nouveau <i class="typcn icon typcn-plus-outline ml-1"></i>
                            </button>
                        </div>
        </form>
    @else
        <p class="text-justify text-lead">
            aucune assurance type enregitrée pour le moment !.
        </p>
    @endif




