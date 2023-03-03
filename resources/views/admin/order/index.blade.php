@extends('admin.layout.master')
@section('content')
    @if (Session::has('status'))
    @endif
    <div class="nk-block-head">
        <div class="nk-block-head-between flex-wrap gap g-2">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title">Orders</h1>
                    <nav>
                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Orders
                            </li>
                        </ol>
                    </nav>
            </div>
            {{-- <div class="nk-block-head-content">
                <ul class="d-flex">
                    <li><a href="{{ route('category.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em
                                class="icon ni ni-plus"></em><span>Add Categories</span></a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
    <div class="nk-block">
        <div class="card">
            <div class="col-lg-3">
                <form method="GET" action="" id="search-input">
                    <input name="keyword" placeholder="Search by name" class="form-control" id="form-submit"
                        style="margin:20px" value="{{ request()->get('keyword') }}" />
                </form>
            </div>
            <table class="datatable-init table" data-nk-container="table-responsive">
                <thead class="table-light">
                    <tr>
                        <th class="tb-col tb-col-check" data-sortable="false">
                            <div class="form-check"><input class="form-check-input" type="checkbox" value=""></div>
                        </th>
                        <th class="tb-col"><span class="overline-title">ID</span></th>
                        <th class="tb-col"><span class="overline-title">Name</span></th>
                        <th class="tb-col"><span class="overline-title">Email</span></th>
                        <th class="tb-col"><span class="overline-title">Phone Number</span></th>
                        <th class="tb-col"><span class="overline-title">Address</span></th>
                        <th class="tb-col"><span class="overline-title">Note</span></th>
                        <th class="tb-col"><span class="overline-title">Payment Method</span></th>
                        <th class="tb-col"><span class="overline-title">Total Money</span></th>

                        <th class="tb-col tb-col-end" data-sortable="false"><span class="overline-title">action</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td class="tb-col tb-col-check">
                                <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                        id="pid1"></div>
                            </td>
                            <td class="tb-col tb-col-md"><span>{{ $order->id }}</span></td>
                            <td class="tb-col tb-col-md"><span>{{ $order->customer }}</span></td>
                            <td class="tb-col tb-col-md"><span>{{ $order->email }}</span></td>
                            <td class="tb-col tb-col-md"><span>{{ $order->phone_number }}</span></td>
                            <td class="tb-col tb-col-md"><span>{{ $order->address }}</span></td>
                            <td class="tb-col tb-col-md"><span>{{ $order->note }}</span></td>
                            <td class="tb-col tb-col-md"><span>{{ $order->payment_method }}</span></td>
                            <td class="tb-col tb-col-md"><span>{{ $order->sub_total }}</span></td>

                            <td class="tb-col tb-col-end">
                                <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <div class="dropdown-content py-1">
                                            {{-- <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                <li><a href="{{ route('category.edit', ['id' => $category->id]) }}"><em
                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                </li>
                                                <li><a href="{{ route('category.trash', ['id' => $category->id]) }}"><em
                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                </li>
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View
                                                            Details</span></a></li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $orders->links('vendor.pagination.bootstrap-5') }}
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


        @if (Session::has('status'))
            Toastify({
                text: "{{ Session::get('status') }}",
                duration: 2000,
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
