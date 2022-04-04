@extends('admin_layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
    <li class="text-red-500 list-none">
        {{ $error }}
    </li>
    @endforeach
</div>

@endif
@if (session('success'))

<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Category Details</h3>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row align-item-center">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold "></h6> 
                    </div>
                    <div class="card-body">
                        <form action="/category" method="POST" enctype="multipatt/form-data">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="firstname" required>
                                </div>
                             
                    
                              
                                <div class="col-md-12">
                                    <label for="addnote"  class="form-label">Description</label>
                                    <textarea required  class="form-control" name="description" id="addnote" rows="3"></textarea> 
                                </div>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
              

    </div>
</div>
@endsection 