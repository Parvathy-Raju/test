@extends('layout.default')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('forms.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">personal details</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            <div class="form-group">
                            <label for="description">Email Address</label>
                                <input type="email"  value="{{{ $form->email ?? '' }}}" class="form-control" id="email" name="email"/>
                            </div>
  
                            <div class="form-group">
                                <label for="description">Phone Number</label>
                                <input type="number"  value="{{{ $form->phone_no ?? '' }}}" class="form-control" id="phone_no" name="phone_no"/>
                            </div>
  
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('forms.create.step.one') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection