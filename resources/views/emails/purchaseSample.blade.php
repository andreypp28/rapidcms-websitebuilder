@extends('emails.template')
@section('content')
    <h2>Hello, {{ $receiverName }}!</h2>
    <div>
        Requestor Phone: {{ $customerPhone }}<br/>
        Requestor Email: {{ $customerEmail }}<br/>
        
        @if(isset($customerAddress))
        Requestor Address: {{ $customerAddress }}, {{ $customerState }} {{ $customerCountry }}, {{ $customerZipcode }}<br/>
        @endif

        Sample Pack: {{ $packName }}<br/>
        Shipping Method: {{ $shipping }}<br/>
        Price: {{ $price }}
    </div>
@stop
