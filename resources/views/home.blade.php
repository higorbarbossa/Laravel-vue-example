@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">x</div>
                    <div class="card-body">xxxx</div>
                </div>
            </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <brand-form  />
                </div>
            </div>
            <div class="card">
                    <div class="card-header">Produto</div>
                    <div class="card-body">

                            <product-form  />
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
