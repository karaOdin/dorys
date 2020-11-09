@extends('layouts.app')

@section('content')
@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif
<div class="card"  style="centre">
<div class="card-body">
    <form method="POST" action="{{ route('reservation.store', app()->getLocale())}}">
        {{ csrf_field() }}
            <div class="form-group row">
                <label for="nom" class="col-md-2 col-form-label text-md-right centre">{{ __('nom') }}</label>

                <div class="col-md-2">
                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom">

                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <label for="prenom" class="col-form-label text-md-right centre">{{ __('prenom') }}</label>

                <div class="col-md-2">
                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="nom">

                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                    <label for="tel" class="col-form-label text-md-right centre">{{ __('tel') }}</label>

                    <div class="col-md-2">
                        <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel">

                        @error('tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

            </div>


        <div class="form-group row">

            <label for="email" class="col-md-2 col-form-label text-md-right centre">{{ __('E-Mail Address') }}</label>

            <div class="col-md-7">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
      </div>
      <div class="form-group row">

        <label for="date_congre" class="col-md-2 col-form-label text-md-right centre">{{ __('date de congre ') }}</label>

        <div class="col-md-7">
            <input id="date_congre" type="DATE" class="form-control @error('date_congre') is-invalid @enderror" name="date_congre" value="{{ old('date_congre') }}" required autocomplete="Date">

            @error('date_congre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
  </div>

  </div>

<div class="form-group">
    <label for="inputAddress">Address</label>
    <div >
    <input id="inputAddress" type="text"class="form-control" name="adresse" required autocomplete="adresse" placeholder="1234 Main St">

    </div>
</div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="adresse2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity"name="city" >
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="inputState"name="state" class="form-control">
        <option selected>Choose...</option>
        <option>alger.</option>
        <option>france.</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="fonction">fonction</label>
      <select id="fonction"name="fonction" class="form-control">
        <option selected>Choose...</option>
        <option>Etudiant.</option>
        <option>salarie</option>
      </select>


    </div>



  <button type="submit" name="formsend"class="btn btn-primary">Sign in</button>
</form>
</div>
</div>
@endsection
