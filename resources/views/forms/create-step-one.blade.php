@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('forms.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Personal Details</div>
  
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
                                <label for="title">First Name:</label>
                                <input type="text" value="{{ $form->first_name ?? '' }}" class="form-control" id="first_name"  name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="description">Last Name:</label>
                                <input type="text"  value="{{{ $form->last_name ?? '' }}}" class="form-control" id="last_name" name="last_name"/>
                            </div>
   
                            <div class="form-group">
                                <label for="description">Date of Birth:</label>
                                <input type="text"  value="{{{ $form->dob ?? '' }}}" class="form-control" id="dob" name="dob"/>
                            </div>
                          
                    </div>
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection