@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Listing  <span class="float-right"> <a href="/listings/create" class="btn btn-outline-secondary">Create listing</a> </span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/listings" method="POST" >
                        @csrf 
                        <div class="form-group"> 
                            <label for="name">Enter your Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Name" value=" {{old("name")}} ">
                        </div>
                        
                        <div class="form-group"> 
                            <label for="address">Enter your Address</label>
                            <input class="form-control" type="text" name="address" id="address" placeholder="Address" value=" {{old("address")}} ">
                        </div>

                        <div class="form-group"> 
                            <label for="website">Enter your Website</label>
                            <input class="form-control" type="text" name="website" id="website" placeholder="Website" value=" {{old("website")}} ">
                        </div>

                        <div class="form-group"> 
                            <label for="email">Enter your Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" value=" {{old("email")}} ">
                        </div>
                        <div class="form-group"> 
                            <label for="phone">Enter your Phone</label>
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" value=" {{old("phone")}} ">
                        </div>
                        <div class="form-group"> 
                            <label for="bio">Enter your Bio</label>
                            <input class="form-control" type="text" name="bio" id="bio" placeholder="Bio" value=" {{old("bio")}} ">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection