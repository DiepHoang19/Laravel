@extends('layout.master')
@section('content')
    <div class="nk-block-head">
        <div class="nk-block-head-between flex-wrap gap g-2">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title">Categories</h1>
                    <nav>
                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories
                            </li>
                        </ol>
                    </nav>
            </div>
            <div class="nk-block-head-content">
                <ul class="d-flex">
                    <li><a href="{{ route('category.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em
                                class="icon ni ni-plus"></em><span>Add Categories</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nk-block">
        <div class="card">
            <div class="col-lg-3">
                <form method="GET" action="">
                    <input name="keyword" placeholder="Search by name" class="form-control"
                        value="{{ request()->get('keyword') }}" />
                    <button class="btn btn-primary d-none d-md-inline-flex">Search</button>
                </form>
            </div>
            <table class="datatable-init table" data-nk-container="table-responsive">
                <thead class="table-light">
                    <tr>
                        <th class="tb-col tb-col-check" data-sortable="false">
                            <div class="form-check"><input class="form-check-input" type="checkbox" value=""></div>
                        </th>
                        <th class="tb-col"><span class="overline-title">Category</span></th>
                        <th class="tb-col"><span class="overline-title">Parent</span></th>
                        <th class="tb-col tb-col-end" data-sortable="false"><span class="overline-title">action</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="tb-col tb-col-check">
                                <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                        id="pid1"></div>
                            </td>
                            <td class="tb-col">
                                <div class="media-group">
                                    <div class="media-text">
                                        <a href="{{ route('product.edit', ['id' => $category->id]) }}"
                                            class="title">{{ $category->name }}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="tb-col"><span class="badge text-bg-success-soft">{{ $category->parent?->name }}</span></td>
                            <td class="tb-col tb-col-end">
                                <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <div class="dropdown-content py-1">
                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                <li><a href="{{ route('product.edit', ['id' => $category->id]) }}"><em
                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                </li>
                                                <li><a href="{{ route('product.trash', ['id' => $category->id]) }}"><em
                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                </li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View
                                                            Details</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
@endsection
