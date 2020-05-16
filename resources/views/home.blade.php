@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file">
                        <br><br>
                        <input type="submit" value="Upload">                    
                    </form>
                    <br>
                    <a href="../file" target="_blank">File Content Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
