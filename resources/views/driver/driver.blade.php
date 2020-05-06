@extends('layouts.app')

@section('title', config('app.name').' | Driver')

@section('content')
    <div class="container mt-4">
        @if(\Gate::denies('license-is-created', auth()->user()->id))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Attention!</strong> You have not provided your Drivers License.
                    <a href="{{ route('driver.setup') }}" class="alert-link">add it here</a>
                </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6" >
                <div class="card border-0 bg-card-pink">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0 text-white">Driver Reviews</h5>
                                <span class="h2 font-weight-bold mb-0 text-white">N/A</span>
                            </div>
                            <div class="col-auto">
                                <div class="">
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> N/A %</span>
                            <span class="text-nowrap text-light">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="card border-0 bg-card-yellow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0 text-white">Completed Trips </h5>
                                <span class="h2 font-weight-bold mb-0 text-white">N/A</span>
                            </div>
                            <div class="col-auto">
                                <div class="">
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> N/A %</span>
                            <span class="text-nowrap text-light">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Active Orders For Pickup</h3>
            </div>
            <div class="col-md-12">
                <div class="list-group">
                    @forelse($orders as $order)
                        <a href="{{ route('driver.order', $order->id) }}" class="list-group-item list-group-item-action">{{ $order->restaurant->name }}</a>
                    @empty
                        <li class="list-group-item">No active orders at this time.</li>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
@endsection
