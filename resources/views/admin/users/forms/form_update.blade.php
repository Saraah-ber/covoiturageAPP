<form action="{{ route('admin.users.update', $user->name) }}" method="POST">

                    @csrf
                    @method('PATCH')

                      <div class="d-flex flex-row">
                        <div class="form-group col-4">
                            <label for="name" class="control-label">Nom</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Votre nom" value="{{ $user->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <small class="form-text text-danger">{{ $message }}</small>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="email" class="control-label">Email</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre email" value="{{ $user->email }}">
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
                        <button type="submit" class="btn btn-info text-uppercase">
                            Enregistrer les modifications <i class="typcn icon typcn-pencil ml-1"></i>
                        </button>
                    </div>


</form>
