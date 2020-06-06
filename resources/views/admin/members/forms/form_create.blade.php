<form action="{{ route('admin.members.store') }}" method="POST">

                    @csrf

                    <div class="d-flex flex-row">
                        <div class="form-group col-6">
                            <label for="category" class="text-dark control-label">La Catégorie de membre</label>
                            <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                                <option data-display="-- Choisissez votre catégorie --">Choisissez votre catégorie</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <small class="form-text text-danger">{{ $message }}</small>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="user" class="text-dark control-label">Votre compte Attaché</label>
                            <select disabled="disabled" name="user_id" id="user" class="form-control">
                                @if (Auth::check())
                                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                            <div class="form-group col-4">
                                <label for="nom" class="control-label">Nom</label>
                                <input id="nom" type="nom" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Votre nom">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="Prénom" class="control-label">Prénom</label>
                                <input id="Prénom" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Votre prénom">
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-2">
                                <label class="control-label">Sexe / Femme</label>
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="Femme" name="gender" value="femme" class="custom-control-input @error('gender') is-invalid @enderror" {{ (old('gender') == 'Femme') ? 'checked' : '' }}>
                                  <label class="custom-control-label" for="Femme">Femme</label>
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="control-label">Sexe / Homme</label>
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="Homme" name="gender" value="homme" class="custom-control-input @error('gender') is-invalid @enderror" {{ (old('gender') == 'Homme') ? 'checked' : '' }}>
                                  <label class="custom-control-label" for="Homme">Homme</label>
                                </div>
                            </div>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <small class="form-text text-danger">{{ $message }}</small>
                                </span>
                            @enderror
                    </div>
                    <div class="d-flex flex-row">
                            <div class="form-group col-4">
                                <label for="phoneNumber" class="control-label">Numéro de téléphone</label>
                                <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Votre numéro de téléphone">
                                @error('phoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="cin" class="control-label">CIN</label>
                                <input id="cin" type="text" class="form-control @error('CIN') is-invalid @enderror" name="CIN" placeholder="Votre CIN">
                                @error('CIN')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="ville" class="control-label">Ville</label>
                                <input id="ville" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Votre ville">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="d-flex flex-row">
                            <div class="form-group col-4">
                                <label for="Email" class="control-label">@ Email</label>
                                <input id="Email" type="text" class="form-control @error('mail') is-invalid @enderror" name="mail" placeholder="Votre email">
                                @error('mail')
                                    <span class="invalid-feedback" role="alert">
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-8">
                                <label for="Adresse" class="control-label">Adresse exacte</label>
                                <textarea id="Adresse" type="text" class="text-truncate form-control @error('address') is-invalid @enderror" name="address" placeholder="Votre addresse exacte"></textarea>
                                @error('address')
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
