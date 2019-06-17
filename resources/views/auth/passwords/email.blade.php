@extends('layouts.default')
@section('title','重置密码')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="page-header">重置密码</div>
            <div class="panel-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" method="post" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">邮箱地址：</label>
                        <div class="col-md-6">
                            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}"
                                   required>
                            @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button class="btn btn-primary" type="submit">
                                发送密码重置邮件
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
