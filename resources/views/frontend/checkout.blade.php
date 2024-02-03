@extends('frontend.layouts.app')

@section('title', 'PestKit - Service Page')

@section('content')


<main id="main" class="main" style="width: 70%; margin: 0 auto; ">

  <div class="pagetitle">
    <h1>Checkout</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Products</h5>

            <form action="{{route('checkout.order')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>

                                </div>
                                <label>Email address *</label>
                                <input type="email" class="form-control" name="email">

                                <label>Phone Number *</label>
                                <input type="text" class="form-control" name="phone">

                                <label>Street address *</label>
                                <input type="text" class="form-control" placeholder="House number and Street name"  name="address">                              
                                
                                
                                <label>Order notes (optional)</label>
                                <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>

                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn btn-success">Place Order</span>
                                    {{-- <span class="btn-hover-text">Proceed to Checkout</span> --}}
                                </button>

                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php $subtotal = 0 @endphp
                                        @php $subquantity = 0 @endphp
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                        <tr>
                                            <td style="font-weight: 700">{{ $details['name'] }}</td>
                                            <td style="font-weight: 700">{{ $details['price'] }}</td>
                                            <td style="font-weight: 700">{{ $details['quantity'] }}</td>
                                            <td style="font-weight: 700">{{ $details['price']  * $details['quantity'] }}</td>
                                            @php $subquantity +=  $details['quantity']; @endphp
                                            @php $subtotal += ($details['price'] * $details['quantity']); @endphp
                                        </tr>
                                        @endforeach
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td></td>
                                            <td></td>                                            
                                            <td>${{ $subtotal }}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td></td>
                                            <td></td>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td style="font-weight: 700">Total:</td>
                                            <td></td>
                                            <td style="font-weight: 700">Q- {{$subquantity}}</td>
                                            <td style="font-weight: 700">${{ $subtotal }}</td>
                                        <input type="hidden" name="quantity" value="{{ $subquantity }}">
                                        <input type="hidden" name="sub_total" value="{{ $subtotal }}">
                                        <input type="hidden" name="total_amount" value="{{ $subtotal }}">
                                        </tr>
                                        
                                        @endif
                                    </tbody>
                                </table>



                                
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </form>

</div>
</div>

</div>
</div>
</section>

</main><!-- End #main -->

@endsection


@section('scripts')
<script>
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart')}}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection