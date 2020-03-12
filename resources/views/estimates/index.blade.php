@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-sm-12 mb-4">
            <h1>@lang('app.estimates')</h1>
            <button class="btn btn-primary btn-lg"><i class="icon ion-md-add"></i> @lang('app.add_estimate')</button>
        </div>

        @forelse ($estimates as $estimate)    
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $estimate->name }}</h4>

                    <p class="card-subtitle">{{ $estimate->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse
    </div>
</div>
@endsection