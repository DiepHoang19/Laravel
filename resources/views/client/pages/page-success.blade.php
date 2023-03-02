@extends('client.layout.public')
@section('content')
    @if (Session::has('message'))
    @endif
    <div class="container" style="margin-top:5%;">
        <div class="row">
            <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
                <h2 class="text-center">YOUR ORDER HAS BEEN RECEIVED</h2>
                <h3 class="text-center">Thank you for your payment, it’s processing</h3>

                <p class="text-center">Your order # is: 100000023</p>
                <p class="text-center">You will receive an order confirmation email with details of your order and a
                    link to track your process.</p>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

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
