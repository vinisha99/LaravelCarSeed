@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

    <div class="card mt-5 pl-2 pr-2">

        <div class="card-header">
            <h4>Contact Form</h4>
        </div>

        <div class="card-body">
            <form action="{{route('contact.store')}}" id="contact-form" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="given names">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary nb-2">Submit</button>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>



@endsection