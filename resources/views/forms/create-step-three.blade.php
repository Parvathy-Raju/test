@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('forms.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Review</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>First Name:</td>
                                    <td><strong>{{$form->first_name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td><strong>{{$form->last_name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth:</td>
                                    <td><strong>{{$form->dob}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Email Address:</td>
                                    <td><strong>{{$form->email}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Phone Number:</td>
                                    <td><strong>{{$form->phone_no}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('forms.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection