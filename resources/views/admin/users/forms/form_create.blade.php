<form action="{{ route('admin.users.store') }}" method="POST">

                    @csrf

                    <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="name" class="control-label">Nom</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Votre nom">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <small class="form-text text-danger">{{ $message }}</small>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="email" class="control-label">Email</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <small class="form-text text-danger">{{ $message }}</small>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="password" class="control-label">Mot de passe</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Votre mot de passe">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <small class="form-text text-danger">{{ $message }}</small>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="password-confirm" class="control-label">Mot de passe de confirmation</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Votre mot de passe de confirmation">
                        </div>
                    </div>

                    <div class="form-group col-8">
                        <button type="submit" class="btn btn-success text-uppercase">
                            Créer nouveau <i class="typcn icon typcn-plus-outline ml-1"></i>
                        </button>
                    </div>

</form>
