@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire #1 Utilisateur</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/user" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname">firstname</label>
                    <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" name="firstname" placeholder="firstname">
                    {!! $errors->first('firstname', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    <label for="lastname">lastname</label>
                    <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" name="lastname" placeholder="lastname">
                    {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="men">men</option>
                        <option value="women">women</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="newsletter" value="yes"> suscribe to newsletter
                      </label>
                    </div><br>
                </div>
                <div class="form-group">
                <label for="mood">LE NOMOON</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="happy" checked>
                            Happy
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="sad">
                            Sad
                      </label>
                    </div>
                </div><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
