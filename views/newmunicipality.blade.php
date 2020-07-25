@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Municipality</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET" action="{{ url('/insertmunci') }}">
                        {{ csrf_field() }}


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



                        <div class="form-group{{ $errors->has('mname') ? ' has-error' : '' }}">
                            <label for="mname" class="col-md-4 control-label">Municipality Name</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control" name="mname" value="{{ old('mname') }}">

                                @if ($errors->has('mname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mname') ? ' has-error' : '' }}">
                            <label for="mname" class="col-md-4 control-label">Short Name</label>

                            <div class="col-md-6">
                                <input id="sname" type="text" class="form-control" name="sname" value="{{ old('mname') }}">

                                @if ($errors->has('sname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('adname') ? ' has-error' : '' }}">
                            <label for="adname" class="col-md-4 control-label">Admin Name</label>

                            <div class="col-md-6">
                                <input id="adname" type="text" class="form-control" name="adname" value="{{ old('adname') }}">

                                @if ($errors->has('adname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('ofph') ? ' has-error' : '' }}">
                            <label for="ofph" class="col-md-4 control-label">Officer PH.No</label>

                            <div class="col-md-6">
                                <input id="ofph" type="text" class="form-control" name="ofph">

                                @if ($errors->has('ofph'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ofph') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        
                        <div class="form-group{{ $errors->has('tcode') ? ' has-error' : '' }}">
                            <label for="tcode" class="col-md-4 control-label">Officer Cell</label>

                            <div class="col-md-6">
                                <input id="ofcl" type="text" class="form-control" name="ofcl">

                                @if ($errors->has('ofcl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ofcl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Officer Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('prcode') ? ' has-error' : '' }}">
                            <label for="prcode" class="col-md-4 control-label">Section Email</label>

                            <div class="col-md-6">
                                <input id="semail" type="text" class="form-control" name="semail">

                                @if ($errors->has('semail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semail') }}</strong>
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
