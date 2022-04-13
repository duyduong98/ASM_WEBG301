<dl class="row">
    <dt class="col-md-3">Name</dt>
    <dd class="col-md-9">{{ $customer->cus_name }}</dd>
    <dt class="col-md-3">DOB</dt>
    <dd class="col-md-9">{{ $customer->cus_dob }}</dd>
    <dt class="col-md-3">Gender</dt>
    @if( $customer->cus_gender == "M")
        <dd class="col-md-9">Male</dd>
    @elseif( $customer->cus_gender == "F")
        <dd class="col-md-9">Female</dd>
    @elseif( $customer->cus_gender == "O")
        <dd class="col-md-9">Other</dd>
    @endif
    {{--<dd class="col-md-9">{{ $customer->cus_gender }}</dd>--}}
    <dt class="col-md-3">Address</dt>
    <dd class="col-md-9">{{ $customer->cus_address}}</dd>
    <dt class="col-md-3">Email</dt>
    <dd class="col-md-9">{{ $customer->cus_email}}</dd>
    <dt class="col-md-3">Contact</dt>
    <dd class="col-md-9">{{ $customer->cus_phone }}</dd>
</dl>
