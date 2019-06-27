@extends('layouts.app')

@section('content')




<div class="container-fluid page-body-wrapper">
    <nav class="sidebar bg-dark" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
            <div class="nav-profile-image">
            <img src="/images/user.png" alt="profile">
            </div>
            <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
            <span class="text-secondary text-small">Software Developer</span>
            </div>
        </a>
        </li>
        <li class="nav-item active">
        <a class="nav-link d-flex justify-content-between" href="index.html">
            <span class="menu-title text-dark">My Profile</span>
            <i class="fas fa-home text-dark"></i>
        </a>
        </li>

        <li class="nav-item sidebar-actions">
        <span class="nav-link">
            <div class="border-bottom">
            <h6 class="font-weight-normal mb-3">Projects</h6>                
            </div>
            <button class="btn btn-block btn-lg btn-light mt-4">+ Add a project</button>

        </span>
        </li>
    </ul>
    </nav>
    <div class="container-scrollbar">
    <div class="row justify-content-center">
        
        <div class="alert alert-gradient col-12 text-center pt-4">
            <span>Welcome back, {{ Auth::user()->name }}!</span>
        </div>

        <div class="col-md-11 pt-5 pb-5">
            <div class="card card-shadow">
                <div class="card-header d-flex justify-content-between"><span>Dashboard</span>
                <span>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!</span>
                </div>                
            </div>
        </div>

        <div class="col-md-11">
        <div class="page-header">
            <h3 class="page-title">Resume Details</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">My Resume</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details</li>
                </ol>
            </nav>
        </div>
        </div>

        <div class="col-11 grid-margin stretch-card">
            <div class="card card-shadow">
            <div class="card-body">
                <h4 class="card-title pb-3">Contact Info</h4>
                <form class="form-sample">
                <div class="row">
                    <div class="col-xl-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="xxx-xx-xxxx"/>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                        <input class="form-control" placeholder="johndoe@gmail.com"/>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="City, State"/>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Website</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">LinkedIn</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Github</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                </div>                    
                
                </form>
            </div>
            </div>
        </div>

        <div class="col-11 grid-margin stretch-card">
            <div class="card card-shadow">
                <div class="card-body">
                    <h4 class="card-title">Profession Details</h4>
                    <p class="card-description">Job #1</p>
                    <form class="form-sample">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Job Title</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Company</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Start Date</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">End Date</label>
                            <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Location</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="City, State"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">LinkedIn</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    
                </div>                    

                </form>
            </div>
        </div>
        </div>

    </div>
</div>
@endsection
