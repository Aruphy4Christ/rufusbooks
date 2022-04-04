
<div id="mytask-layout" class="theme-indigo">
    
    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.html" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                </span>
                <span class="logo-text">Admin Panel</span>
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link active"  href="/">
                        <i class="icofont-home fs-5"></i> <span>Dashboard</span> </a>
                    <!-- Menu: Sub menu ul -->
                  
                </li>
                <li  class="collapsed">
                    <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                        <i class="icofont-briefcase"></i><span>Author Details</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="project-Components">
                        <li><a class="ms-link" href="/author"><span>Add Author</span></a></li>
                        <li><a class="ms-link" href="/view_author"><span>View Author</span></a></li>
                        
                        
                    </ul>
                </li>

                <li  class="collapsed">
                    <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#client-Components" href="#">
                        <i class="icofont-user-male"></i><span>Category</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components">
                        <li><a class="ms-link" href="/category"><span>Add Category</span></a></li>
                        <li><a class="ms-link" href="/view_category"><span>View Category</span></a></li>
                        
                        
                    </ul>
                </li>

                <li  class="collapsed">
                    <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#tikit-Components" href="#">
                        <i class="icofont-ticket"></i><span>Books</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="tikit-Components">
                        <li><a class="ms-link" href="/book"><span>Add Book</span></a></li>
                        <li><a class="ms-link" href="/view_book"><span>View Book</span></a></li>
                        
                    </ul>
                </li>
             
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

         <!-- Body: Header -->
         <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                           
                          
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">  <span>{{ Auth::user()->name }}</span></span></p>
                                
                                    
                                {{-- <small>{{ Auth::user()->name }}</small> --}}
                            </div>
                            
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="{{ asset('/admin_assets/images/profile_av.png')}}" alt="profile">
                            </a>
                            
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="{{ asset ('/admin_assets/images/profile_av.png')}}" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Email</span></p>
                                                <small class="">{{ Auth::user()->email }}</small>
                                            </div>
                                        </div>
                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">

                                        
                                        {{-- <a href="task.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-tasks fs-5 me-3"></i>My Task</a> --}}
                                        {{-- <a href="members.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user-group fs-6 me-3"></i>members</a> --}}
                                        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                            ></i>Signout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                                {{ csrf_field() }}
                                            </form>
                                       
                          
                                        {{-- <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
    
                </div>
            </nav>
        </div>
    

