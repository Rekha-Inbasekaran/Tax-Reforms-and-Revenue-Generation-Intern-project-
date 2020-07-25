@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <div class="text-center btntax"> 
                <a href="entertax"> <button type="button" class="btn-primary btn-lg taxd">Tax Details</button></a>
                </div>
                <div class="text-left btntax"> 
                <a href="insert"><button type="button" class="btn-primary btn-lg taxcd">Register New User</button></a>
                <button style=" visibility: hidden;" type="button" class="btn-primary btn-lg taxcd"></button>
                <a href="addmunicipality"> <button type="button" class="btn-primary btn-lg taxcd">Register New Municipality</button></a>
                </div>           
             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
