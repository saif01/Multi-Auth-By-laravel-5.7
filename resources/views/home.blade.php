@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">


                    @component('component.who')
                    @endcomponent

                   



                    You are not logged in as !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
