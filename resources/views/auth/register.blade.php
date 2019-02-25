@extends('layouts.plantilla')

@section('contenido')

    <div class="card ventana-2">
        <div class="card-header">
            Registro
        </div>
        <div class="card-body">
            <form class="" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label">Nombre:</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">Correo Electronico:</label>

                    <div class="">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                @guest
                    
                @else
                    <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                        <label for="tipo" class="control-label">Tipo:</label>

                        <div class="">
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="cliente">Cliente</option>
                                <option value="admin">Admin</option>
                            </select>

                            @if ($errors->has('tipo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tipo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                @endguest

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Contraseña:</label>

                    <div class="">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="control-label">Confirmar Contraseña:</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            Registro
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
