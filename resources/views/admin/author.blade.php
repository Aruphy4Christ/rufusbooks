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
                    <h3 class="fw-bold mb-0">Author's Details</h3>
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
                        <form action="/author" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="firstname" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Email Address</label>
                                    <input type="text" name="email" class="form-control" id="lastname" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="addnote" class="form-label">Biography</label>
                                    <textarea  class="form-control" name="biography" id="addnote" rows="3"></textarea> 
                                </div>
                                
                                <div class="col-md-6">
                                    <label  class="form-label">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" id="phonenumber" required>
                                </div>
                                {{-- <div class="col-md-6">
                                    <label for="emailaddress" class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="emailaddress" required>
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <label for="admitdate" class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control" id="admitdate" required>
                                </div> --}}
                               
                                <div class="col-md-6">
                                    <label for="formFileMultiple" class="form-label">Author's Image</label>
                                    <input class="form-control" name="image" type="file" id="formFileMultiple" multiple required>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Gender</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gender11" value="Male" checked>
                                                <label class="form-check-label" for="gender11">
                                                 Male
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gender22" value="Female">
                                                <label class="form-check-label" for="gender22">
                                                   Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="addnote" class="form-label">Description</label>
                                    <textarea  class="form-control" name="description" id="addnote" rows="3"></textarea> 
                                </div>
                               
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                            
                        </form>
                        
                    </div>
                </div>
              

    </div>
</div>
@endsection 