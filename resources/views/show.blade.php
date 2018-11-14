@extends('layouts.app')
@section('sidebar')
    @parent
@endsection
@section('content')

    <div class="media border-bottom mt-1">
        <div class="media-body">
            <div class="bg-warning p-3 rounded shadow-sm">
                {{ $business->title}}
            </div>
            <div class="bg-white  p-3 mt-2">
                <i class="fas fa-clipboard"></i> <strong>Sammery</strong> : {{ $business->summary }}
            </div>
            <div class="alert alert-primary rounded-0  p-3">
                <i class="fas fa-bullhorn"></i> <strong>description</strong> : {{ $business->description }}
            </div>
            <div class="bg-white  p-3">
                <div class="p-4 m-0">
                    <span class=""><i class="fas fa-envelope"></i> <strong>email</strong> : <span class="rounded bg-light p-1">{{ $business->email }}</span></span>
                    <span class=""><i class="fas fa-envelope"></i> <strong>zip code</strong> : <span class="rounded bg-light p-1">{{ $business->zip_code }}</span></span>
                </div>
                <div class="p-4 m-0">
                    <span class=""><i class="fas fa-phone"></i> <strong>phone</strong> : <span class="rounded bg-light p-1">{{ $business->phone }}</span></span>
                    <span class=""><i class="fas fa-fax"></i> <strong>fax</strong> : <span class="rounded bg-light p-1">{{ $business->fax }}</span></span>
                </div>
                <div class="p-4 m-0">
                    <span class=""><i class="fas fa-laptop"></i> <strong>website</strong> : <span class="rounded bg-light p-1">{{ $business->website }}</span></span>
                    <span class=""><i class="fas fa-map-marker-alt"></i> <strong>address</strong> : <span class="rounded bg-light p-1">{{ $business->address }}</span></span>
                </div>
                <span class="p-4 m-0"><i class="fas fa-map-marker-alt"></i> <strong>country, city</strong> : <span class="rounded bg-light p-1"> {{ $business->hasCountry($business->country)->country }} , {{ $business->city }}</span></span>
            </div>
            <div class="mt-3 mb-3 rounded">
                <iframe class="rounded" style="width: 100% ;" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
            @auth
            @endauth
@endsection
