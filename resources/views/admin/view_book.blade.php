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
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Tables</h3>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row align-item-center">
            <div class="col-md-12">
                
                   
                  
               
             
                    
                
                <div class="card mb-3">
                    <div class="card-header py-3  bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold "></h6> 
                    </div>
                    <div class="card-body">
                      
                        <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                         
                            <thead>
                                <tr>
                                    <td>Id</th>
                                    <th>Book Name</th>
                                    <th>Authors</th>
                                    <th>Categories</th>
                                    <th>Book Image</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $bookitem as $bookitem )
                                <tr>
                                    <td>{{ $bookitem['id'] }}</td>
                                    <td>{{ $bookitem['name'] }}</td>
                                    <td>{{ $bookitem['owner']['name'] }}</td>
                                    <td>
                                        @foreach ($bookitem['categories'] as $category)
                                            <p>{{ $category['name'] }}</p>
                                            
                                        @endforeach
                                    </td>
                                    <td><img src="{{  asset('images/' . $bookitem['image_path'])}}" class="avatar sm rounded-circle me-2" alt="profile-image"><span> </span></td>
                                    <td>{{ $bookitem['description'] }}</td>
                                    
                                    
                                        <td>                           
                                            <div class="btn-group btn-space">
                                                    <a href="{{ $bookitem->id }}/edit_book">
    
                                                        <button type="button" class="btn btn-primary">EDIT &rarr;</button>
                                                    </a>    
                                                    <form action="/delete/book/{{ $bookitem->id }}" method="POST" >
                                                        @csrf
                                                        @method('delete')
                                                        
                                                        {{-- <input type="text" hidden="" name="id" value=""> --}}
                                                        <button type="submit"  class="btn btn-danger">DELETE</button>
                                                    </form>
    
                                            </div>
                                        </td>
                                        
                                </tr>
                            
                               
                                @endforeach
                                
                                
                                
                               
                                
                              
                                
                            </tbody>
                           
                        </table>
                        
                    </div>
                </div>
               
            </div>
        </div><!-- Row end  -->

    </div>
</div>
@endsection