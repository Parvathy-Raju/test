@extends('layout.default')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Personal Details</div>
  
                <div class="card-body">
                      
                    <a href="{{ route('forms.create.step.one') }}" class="btn btn-primary pull-right">Enter your personal details</a>
  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Phone Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                            <tr>
                                <th scope="row">{{$form->id}}</th>
                                <td>{{$form->first_name}}</td>
                                <td>{{$form->last_name}}</td>
                                <td>{{$form->dob}}</td>
                                <td>{{$form->email}}</td>
                                <td>{{$form->phone_no}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection