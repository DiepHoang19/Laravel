@extends('admin.layout.master')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Account</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add
                                                Account</li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="{{ route('account.index') }}" class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li>
                                        <a href="{{ route('account.index') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-eye"></em><span>View Account</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form method="POST" action="{{ route('account.register') }}">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-xxl-9">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">username</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="productname" placeholder="Name" name="name">
                                                                    @error('name')
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="productname" placeholder="Email" name="email">
                                                                    @error('email')
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" class="form-control"
                                                                        id="productname" placeholder="Password"
                                                                        name="password">
                                                                    @error('password')
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gap-col">
                                    <ul class="d-flex align-items-center gap g-3">
                                        <li><button type="submit" class="btn btn-primary">Save
                                                Changes</button></li>
                                        <li><a href="{{ route('account.index') }}" class="btn border-0">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
