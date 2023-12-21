@extends('layouts.general')

@section('title', 'cek')

@section('content')
    <div>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <form action="/checkout" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Quantity</label>
                        <input type="number" name="qty" id="qty" class="form-control" aria-describedby="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="text" name="phone" id="phone" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">phone</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>

    </div>
@endsection
