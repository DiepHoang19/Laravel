@extends('admin.layout.master')
@section('content')
    <div class="nk-block-head">
        <div class="nk-block-head-between flex-wrap gap g-2">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title">Account</h1>
                    <nav>
                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Account
                            </li>
                        </ol>
                    </nav>
            </div>
            <div class="nk-block-head-content">
                <ul class="d-flex">
                    <li><a href="{{ route('account.store') }}" class="btn btn-primary d-none d-md-inline-flex"><em
                                class="icon ni ni-plus"></em><span>Add Account</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nk-block">
        <div class="card">
            <div class="col-lg-3">
                <form method="GET" action="" id="search-input" class="form-search" style="margin:20px">
                    <input name="keyword" placeholder="Search by name" class="form-control" id="form-submi"
                        value="{{ request()->get('keyword') }}" />
                </form>
            </div>
            <table class="datatable-init table" data-nk-container="table-responsive">
                <thead class="table-light">
                    <tr>
                        <th class="tb-col tb-col-check" data-sortable="false">
                            <div class="form-check"><input class="form-check-input" type="checkbox" value="">
                            </div>
                        </th>
                        <th class="tb-col"><span class="overline-title">users</span></th>
                        <th class="tb-col"><span class="overline-title">email</span></th>
                        <th class="tb-col tb-col-end" data-sortable="false">
                            <span class="overline-title">action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                        <tr>
                            <td class="tb-col tb-col-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pid1">
                                </div>
                            </td>

                            <td class="tb-col tb-col-md">
                                <span>{{ $account->name }}</span>
                            </td>
                            <td class="tb-col">
                                <span>{{ $account->email }}</span>
                            </td>
                            <td class="tb-col tb-col-end">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-v">
                                        </em>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <div class="dropdown-content py-1">
                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                <li>
                                                    <a href="{{ route('account.edit', ['id' => $account->id]) }}">
                                                        <em class="icon ni ni-edit">
                                                        </em>
                                                        <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li><a href="{{ route('account.trash', ['id' => $account->id]) }}"><em
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
            {{ $accounts->links('vendor.pagination.bootstrap-5') }}
            <form method="GET" action="" id="limit-form" class="col-2">
                <select name="limit" id="limit-select" class="dataTable-selector" style="margin:20px">
                    <option value=""> Limit </option>
                    <option value="10" @if (request()->get('limit') == 10) selected @endif>10</option>
                    <option value="20" @if (request()->get('limit') == 20) selected @endif>20</option>
                    <option value="30" @if (request()->get('limit') == 30) selected @endif>30</option>
                </select>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#limit-select').change(function(e) {
                e.preventDefault();
                $('#limit-form').submit();
            })

            $('#search-input').change(function(e) {
                e.preventDefault();
                $('#form-submit').submit();
            })
        })
        
        @if (Session::has('message'))
            Toastify({
                text: "{{ Session::get('message') }}",
                duration: 1000,
                destination: "#",
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        @endif
    </script>
@endpush
