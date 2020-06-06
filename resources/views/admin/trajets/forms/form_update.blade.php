<form role="form" action="{{ route('admin.trajets.update', $trajet->id) }}" method="POST">

        @csrf
        @method('PATCH')

          <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="typeTrajet" class="text-dark control-label">Le type de trajet</label>
                <select name="type_id" id="typeTrajet" class="form-control @error('type_id') is-invalid @enderror">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ $trajet->type->name == $type->name ? 'selected' : 'selected'}}>{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="date_départ" class="control-label">Horaire départ</label>
                <input id="date_départ" type="text" class="datepicker-dd form-control @error('date_départ') is-invalid @enderror" name="date_départ" placeholder="Votre horaire de départ" value="{{ $trajet->date_départ }}">
                @error('date_départ')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="date_arrivé" class="control-label">Horaire d'arrivé</label>
                <input id="date_arrivé" type="text" class="datepicker-da form-control @error('date_arrivé') is-invalid @enderror" name="date_arrivé" placeholder="Votre horaire d'arrivé" value="{{ $trajet->date_arrivé }}">
                @error('date_arrivé')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="Temps_pause" class="control-label">Temps pause</label>
                <input id="Temps_pause" type="text" class="form-control @error('Temps_pause') is-invalid @enderror" name="Temps_pause" placeholder="Votre Temps de pause en minutes" value="{{ $trajet->Temps_pause }}">
                @error('Temps_pause')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="Lieu_départ" class="control-label">Lieu départ</label>
                <input id="Lieu_départ" type="text" class="form-control @error('Lieu_départ') is-invalid @enderror" name="Lieu_départ" placeholder="Votre Lieu de départ" value="{{ $trajet->Lieu_départ }}">
                @error('Lieu_départ')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="Lieu_arrivé" class="control-label">Lieu d'arrivé</label>
                <input id="Lieu_arrivé" type="text" class="form-control @error('Lieu_arrivé') is-invalid @enderror" name="Lieu_arrivé" placeholder="Votre Lieu d'arrivé" value="{{ $trajet->Lieu_arrivé }}">
                @error('Lieu_arrivé')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="Ville_départ" class="control-label">Ville départ</label>
                <input id="Ville_départ" type="text" class="form-control @error('Ville_départ') is-invalid @enderror" name="Ville_départ" placeholder="Votre ville de départ" value="{{ $trajet->Ville_départ }}">
                @error('Ville_départ')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="Ville_arrivé" class="control-label">Ville d'arrivé</label>
                <input id="Ville_arrivé" type="text" class="form-control @error('Ville_arrivé') is-invalid @enderror" name="Ville_arrivé" placeholder="Votre ville de départ" value="{{ $trajet->Ville_arrivé }}">
                @error('Ville_arrivé')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="pays_départ" class="control-label">Pays départ</label>
                <input id="pays_départ" type="text" class="form-control @error('pays_départ') is-invalid @enderror" name="pays_départ" placeholder="Votre pays de départ" value="{{ $trajet->pays_départ }}">
                @error('pays_départ')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="pays_arrivé" class="control-label">Pays d'arrivé</label>
                <input id="pays_arrivé" type="text" class="form-control @error('pays_arrivé') is-invalid @enderror" name="pays_arrivé" placeholder="Votre pays de départ" value="{{ $trajet->pays_arrivé }}">
                @error('pays_arrivé')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group col-8">
          <button type="submit" class="btn btn-info text-uppercase">
              Enregistrer les modifications <i class="typcn icon typcn-pencil ml-1"></i>
          </button>
        </div>
</form>
