@extends('layouts.app')

@section('template_title')
    {{ $periodo->name ?? __('Show') . " " . __('Periodo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Periodo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('periodos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Periodo:</strong>
                                    {{ $periodo->id_periodo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha I:</strong>
                                    {{ $periodo->fecha_i }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha F:</strong>
                                    {{ $periodo->fecha_f }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
