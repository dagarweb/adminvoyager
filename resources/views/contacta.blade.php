@extends('layout')
@section('title', 'Contacta con nosotros')
@section('description', 'Contactar descripción')
@if(request('page'))
    @section('robots', 'noindex,follow')
@else
    @section('robots', 'index,follow')
@endif
@section('header')
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Contacta con nosotros</h1>
                        <hr class="small">
                        <span class="subheading">Te contestamos en menos de dos minutos</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>{{ trans('contacta.descripcioncontacta') }}</p>
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <div class="alert alert-{{ $msg }} alert-dismissible fade in">
                            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                            <p><i class="fa fa-thumbs-o-up"></i> <strong>Estupendo!</strong> {{ Session::get('alert-' . $msg) }}</p>
                        </div>
                    @endif
                @endforeach
            </div> <!-- end .flash-message -->
            <form action="{{ route('sendcontacta')}}" method="post">
                {{ csrf_field() }}


                @if($errors->has('nombre'))
                    <span style="color: red;">{{ $errors->first('nombre') }}</span>
                @endif
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>{{ trans('contacta.nombre') }}</label>
                        <input type="text" class="form-control" placeholder="{{ trans('contacta.nombre') }}" name="nombre" id="nombre" required data-validation-required-message="Inserta tu nombre.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                @if($errors->has('email'))
                    <span style="color: red;">{{ $errors->first('email') }}</span>
                @endif
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>{{ trans('contacta.email') }}</label>
                        <input type="email" class="form-control" placeholder="{{ trans('contacta.email') }}" id="email" name="email" required data-validation-required-message="Inserta tu e-mail.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                @if($errors->has('telefono'))
                    <span style="color: red;">{{ $errors->first('telefono') }}</span>
                @endif
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>{{ trans('contacta.telefono') }}</label>
                        <input type="tel" class="form-control" placeholder="{{ trans('contacta.telefono') }}" id="telefono" name="telefono" required data-validation-required-message="Inserta tu teléfono.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                @if($errors->has('mensaje'))
                    <span style="color: red;">{{ $errors->first('mensaje') }}</span>
                @endif
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>{{ trans('contacta.mensaje') }}</label>
                        <textarea rows="5" class="form-control" placeholder="{{ trans('contacta.mensaje') }}" id="mensaje" name="mensaje" required data-validation-required-message="Inserta tu consulta."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <input type="hidden" name="created_at" value="{{ date('Y-m-d H:i:s') }}">
                        <input type="hidden" name="update_at" value="{{ date('Y-m-d H:i:s') }}">
                        <button type="submit" class="btn btn-default">{{ trans('contacta.enviar') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection