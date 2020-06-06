<form class="hidden" action="{{ route('admin.assurances.store') }}" method="POST">

        @csrf

        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="typeAssurances" class="text-dark control-label">Le type d'assurance</label>
                <select name="typeAssurances_id" id="typeAssurances" class="form-control @error('typeAssurances_id') is-invalid @enderror">
                    <option data-display="-- Choisissez votre type --">Type d'assurance</option>
                    @foreach($typeAssurances as $ta)
                        <option value="{{ $ta->id }}">{{ $ta->name }}</option>
                    @endforeach
                </select>
                @error('typeAssurances_id')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="police" class="control-label">Police d'assurance</label>
                <input id="police" type="text" class="form-control @error('police') is-invalid @enderror" name="police" placeholder="Votre police d'assurance">
                @error('police')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="tarif" class="control-label">Tarif</label>
                <input id="tarif" type="text" class="form-control @error('tarif') is-invalid @enderror" name="tarif" placeholder="Votre tarif">
                @error('tarif')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
        <div class="d-flex flex-row">
            <div class="form-group col-4">
                <label for="nb_db" class="control-label">Date de début d'assurance</label>
                <input id="dt_db" type="text" class="datepicker-dt-db form-control @error('date_debut') is-invalid @enderror" name="date_debut" placeholder="Votre nombre de places">
                @error('date_debut')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="dt_fin" class="control-label">Date de fin de validité d'assurance</label>
                <input id="dt_fin" type="text" class="datepicker-dt-fin form-control @error('date_fin') is-invalid @enderror" name="date_fin" placeholder="Votre date de fin">
                @error('date_fin')
                    <span class="invalid-feedback" role="alert">
                        <small class="form-text text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group col-8">
            <button type="submit" class="btn btn-success text-uppercase">
                Enregistrer <i class="typcn icon typcn-plus-outline ml-1"></i>
            </button>
        </div>
</form>
