@extends('layouts.apps')

@section('content')


<section class="slider_section ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6">
                <form action="{{route('enquiry.send')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="text-center mt-3">Enquiry Now</h4>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter name">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="text" name="number" id="number" class="form-control" value="{{ old('number') }}" placeholder="Enter number">
                        @error('number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label for="productDropdown">Choose a product:</label>
                    <select class="form-control" id="productDropdown" name="product" placeholder="Choose a product">
                        <option value="product1">AGM VRLA Batteries</option>
                        <option value="product2">Tubular Gel Batteries</option>
                        <option value="product3">Support</option>
                    </select>
                </div>
                    <div class="form-group">
                    <label for="query">Query</label>
                    <textarea class="form-control" id="query" name="query" required></textarea>
                </div>
                    <div class="text-center">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>





<!-- footer start -->

@endsection