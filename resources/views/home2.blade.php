@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
               {{ Auth::user()->social->provider_user_id }} 
               <img src="http://graph.facebook.com/{{ Auth::user()->social->provider_user_id }}/picture?type=square" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
