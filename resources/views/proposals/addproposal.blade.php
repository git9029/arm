@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodaj wniosek</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="proposal-user">Wybierz użytkownika</label>
                            <select name="proposal-user" id="proposal-user" class="form-control">
                                @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                    </form>
                </div>   
                
            </div>
        </div>
    </div>
</div>
@endsection
