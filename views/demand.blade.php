@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Demand</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET" action="{{ url('/insertdmd') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('mcode') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('data') }}">

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('mcode') ? ' has-error' : '' }}">
                            <label for="mcode" class="col-md-4 control-label">Municipality Code</label>

                            <div class="col-md-6">
                                <input id="mcode" type="text" class="form-control" name="mcode" value="{{ old('mcode') }}">

                                @if ($errors->has('mcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



        

                        <div class="form-group{{ $errors->has('tcode') ? ' has-error' : '' }}">
                            <label for="tcode" class="col-md-4 control-label">Tax Code</label>

                            <div class="col-md-6">
                                <input id="tcode" type="text" class="form-control" name="tcode">

                                @if ($errors->has('tcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('dmdamt') ? ' has-error' : '' }}">
                            <label for="dmdamt" class="col-md-4 control-label">Demand Amount</label>

                            <div class="col-md-6">
                                <input id="dmdamt" type="text" class="form-control" name="dmdamt">

                                @if ($errors->has('dmdamt'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dmdamt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
