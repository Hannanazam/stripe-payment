<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <title>Payment</title>
</head>
<body>
<form class="contact100-form validate-form" action="{{route('generate_link')}}" method="post">
@csrf
<span class="contact100-form-title">
Generate Link
</span>
@if (isset($session))
@php
$random_no = rand();
@endphp
<a href="{{route('form',['id'=>$random_no])}}">
    {{route('form',['id'=>$random_no])}}
</a>
@endif

<div class="col-md-12 " id="message">
    @if (Session::has('success'))
    <div class="alert alert-success text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
    {{-- @dd($session) --}}
   
</div>
<label class="label-input100" for="phone">Payment Method</label>
<div class="wrap-input100 validate-input" data-validate="Required Valid Payment Method">
    <select name="payment_method" class="payment_method input100" id="payment_method">
        <option value="">Select Method</option> 
    <option selected title="Stripe" value="Stripe">Stripe</option>-->
     <option title="DG" value="Braintree" name="dgg">DG</option>
    <option title="Nmi" value="Nmi" name="net">Network Merchant</option>
    <option title="Paypal" value="Paypal" name="pay">Paypal</option>
    <option title="Easypay" value="Easypay" name="easy">Easypay</option>
    <option title="Authorize-net" value="Authorize-net" name="author">Authorize-net</option>
    </select>
    <span class="focus-input100"></span>
</div> 

<label class="label-input100" for="email">Enter your email </label>
<!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz"> -->
<div class="wrap-input100">
    <input id="email" class="input100" required type="text" name="email" placeholder="Eg. example@email.com">
    <span class="focus-input100"></span>
</div>

<label class="label-input100" for="phone">Enter Item</label>
<div class="wrap-input100 validate-input" data-validate="Required Valid Item">
    <input id="item" class="input100" type="text" name="item" placeholder="OLUS - STARTUP LOGO">
    <span class="focus-input100"></span>
</div>

<label class="label-input100" for="phone">Brand</label>
<div class="wrap-input100 validate-input" data-validate="Required Valid Brand">
    <select name="brand" class="brand input100" id="brand">
   <option value="LogoLadz">LogoLadz</option>
     <option value="Designgenious" name="design">Designgenious</option>
    </select>
    <span class="focus-input100"></span>
</div>

<label class="label-input100" for="phone">Select Currency</label>
<div class="wrap-input100 validate-input" data-validate="Required Valid Currency">
    <select name="currency" class="currency input100" id="currency">
    <option value="USD" name="us">USD</option>
    <option value="EUR" name="eu">EURO</option>
    <option value="GBP" name="gb">GBP</option>
    <option value="CAD" name="ca">CAD</option>
    </select>
    <span class="focus-input100"></span>
</div>

<label class="label-input100" for="phone">Enter Amount(USD)</label>
<div class="wrap-input100 validate-input" data-validate="Required Valid Amount">
    <input id="amount" step="any" min="0" required class="input100" type="number" name="amount" placeholder="Eg. 40">
    <span class="focus-input100"></span>
</div>

<div class="container-contact100-form-btn">
    <button type="submit" class="contact100-form-btn" name="submit">
        Generate
    </button>
    <!-- <div id="result"></div>
    <a href="">visit link</a> -->
    <!-- <script>
function generate(){
     var number=document.querySelector("#phonenumber").value;
     var text=encodeURIComponent(
     document.querySelector("#email").value);
     var link="http://localhost/field-trans/form2.php"+"/?email="+text;
     document.querySelector("#result").innerHTML=link
     document.querySelector("a").href=link;
}


</script> -->
</div>
</form>
</body>
</html>
