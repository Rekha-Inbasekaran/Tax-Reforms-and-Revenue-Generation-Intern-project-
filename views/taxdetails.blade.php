@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tax Details</div>

                <div class="panel-body">
                <div class="text-center btntax"> 
                <a href=""> <button type="button" class="btn-primary btn-lg taxd">Enter Tax Details</button></a>
                </div>
                <div class="text-left btntax"> 
                <a href=""><button type="button" class="btn-primary btn-lg taxcd">Tax Collection</button></a>
                <button style=" visibility: hidden;" type="button" class="btn-primary btn-lg taxcd"></button>
                <a href=""> <button type="button" class="btn-primary btn-lg taxcd">Tax Demand</button></a>
                </div>           
             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
