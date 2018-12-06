@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Operatorzy</div>

                <div class="card-body">
                    <form action="{{route('adduser')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" id="login" placeholder="login" name="login" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Imię</label>
                            <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="surname">Nazwisko</label>
                            <input type="text" class="form-control" id="surname" placeholder="surname" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Hasło</label>
                            <input type="text" class="form-control" id="password" placeholder="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                    </form>
                </div>   
                
            </div>
        </div>
    </div>
</div>
@endsection
