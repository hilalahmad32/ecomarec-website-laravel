<!DOCTYPE html>
<html>

<head>
    <title>Larave Generate Invoice PDF - Nicesnippest.com</title>
</head>
<style type="text/css">
    body {
        font-family: 'Roboto Condensed', sans-serif;
    }

    .m-0 {
        margin: 0px;
    }

    .p-0 {
        padding: 0px;
    }

    .pt-5 {
        padding-top: 5px;
    }

    .mt-10 {
        margin-top: 10px;
    }

    .text-center {
        text-align: center !important;
    }

    .w-100 {
        width: 100%;
    }

    .w-50 {
        width: 50%;
    }

    .w-85 {
        width: 85%;
    }

    .w-15 {
        width: 15%;
    }

    .logo img {
        width: 45px;
        height: 45px;
        padding-top: 30px;
    }

    .logo span {
        margin-left: 8px;
        top: 19px;
        position: absolute;
        font-weight: bold;
        font-size: 25px;
    }

    .gray-color {
        color: #5D5D5D;
    }

    .text-bold {
        font-weight: bold;
    }

    .border {
        border: 1px solid black;
    }

    table tr,
    th,
    td {
        border: 1px solid #d2d2d2;
        border-collapse: collapse;
        padding: 7px 8px;
    }

    table tr th {
        background: #F4F4F4;
        font-size: 15px;
    }

    table tr td {
        font-size: 13px;
    }

    table {
        border-collapse: collapse;
    }

    .box-text p {
        line-height: 10px;
    }

    .float-left {
        float: left;
    }

    .total-part {
        font-size: 16px;
        line-height: 12px;
    }

    .total-right p {
        padding-right: 20px;
    }
</style>

<body>
    <div class="head-title">
        <h1 class="text-center m-0 p-0">Invoice</h1>
    </div>
    <div class="add-detail mt-10">
        <div class="w-50 float-left mt-10">
            <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">#6</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Id - <span class="gray-color">{{ $orders->id }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Date - <span
                    class="gray-color">{{ $orders->created_at->format('d-m-Y') }}</span></p>
        </div>
            <div style="clear: both;"></div>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">From</th>
                <th class="w-50">To</th>
            </tr>
            <tr>
                <td>
                    <div class="box-text">
                        <p>Gujarat</p>
                        <p>360004</p>
                        <p>Near Haveli Road,</p>
                        <p>Lal Darvaja,</p>
                        <p>India</p>
                        <p>Contact : 1234567890</p>
                    </div>
                </td>
                <td>
                    <div class="box-text">

                        <p>{{ $billingAddress->first_name }} {{ $billingAddress->last_name }}</p>
                        <p>{{ $billingAddress->postcode }}</p>
                        <p>{{ $billingAddress->street_address1 }}</p>
                        <p>{{ $billingAddress->city }}</p>
                        <p>{{ $billingAddress->phone }}</p>
                        <p>{{ $billingAddress->email }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Payment Method</th>
                <th class="w-50">Shipping Method</th>
            </tr>
            <tr>
                <td>{{ $orders->payment_method }}</td>
                <td>Free Shipping - Free Shipping</td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Product Name</th>
                <th class="w-50">Price</th>
                <th class="w-50">Qty</th>
                <th class="w-50">Subtotal</th>
                <th class="w-50">Tax Amount</th>
                <th class="w-50">Grand Total</th>
            </tr>
          
            <tr align="center">
               <td>
                <?php
                foreach (json_decode($orders->pro_id) as $pro_id) {
                    $products = \App\Models\Product::where('id', $pro_id)
                        ->get();
              ?>
                @foreach ($products as $product)
               <p> {{ $product->product_title }} -  {{$product->price}}</p>  
            @endforeach
            <?php
                }
            ?>
               </td>
                <td>${{ $orders->total }}</td>
                <td>3</td>
                <td>${{$orders->sub_total}}</td>
                <td>10%</td>
                @php
                    $tax=($orders->sub_total *18)/100;
                @endphp
                <td>${{$orders->sub_total+$tax}}</td>
            </tr>
           
            <tr>
                <td colspan="7">
                    <div class="total-part">
                        <div class="total-left w-85 float-left" align="right">
                            <p>Sub Total</p>
                            <p>Tax (18%)</p>
                            <p>Total Payable</p>
                        </div>
                        <div class="total-right w-15 float-left text-bold" align="right">
                            <p>${{$orders->sub_total}}</p>
                            <p>${{$tax}}</p>
                            <p>${{$orders->sub_total+$tax}}</p>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

</html>
