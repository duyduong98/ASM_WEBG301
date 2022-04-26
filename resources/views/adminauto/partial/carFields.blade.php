<input type="hidden" name="id" value="{{$cars->car_id}}">
<div class="form-group">
    <label style="font-weight: bold" for="">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name')?? $cars->car_name}}">
</div>
@php
    $bId = old('brand') ?? $cars->brand_id ?? null;
@endphp
<div class="form-group">
    <label style="font-weight: bold" for="">Brand</label>
    <select name="brand" id="class" class="form-control">
        <option value="">Select Brand</option>
        @foreach($brands as $b)
            <option value="{{ $b->brand_id}}" {{ ($bId != null && $b->brand_id == $bId) ? 'selected' : '' }}>{{ $b->brand_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label style="font-weight: bold" for="">Price</label>
    <input type="number" class="form-control" name="price" value="{{ old('price')?? $cars->car_price}}">
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Color</label>
    <input type="text" class="form-control" name="color" value="{{ old('price')?? $cars->car_color}}">
</div>
{{--///////////////////////////////////////////////////////////////////////////////--}}
@php
    list($file1, $file2, $fileImages) = explode('\\',$cars->car_images);
    if ($fileImages == ' '){
        $fileImages = 'Choose File';
    }
@endphp
<div class="form-group">
    <label style="font-weight: bold" for="">Images</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="imagesCar" name="images">
            <label class="custom-file-label" for="imagesCar">{{ $fileImages }}</label>
            <input type="hidden" name="imagesIfNull" value="{{$cars->car_images }}">
        </div>
</div>
{{--///////////////////////////////////////////////////////////////////////////////--}}
@php
    list($origin, $status) = explode(',', $cars->car_descrip);
    $check1 = old('origin') ?? $origin ?? null;
    $check2 = $status ?? null;
@endphp
<div class="form-group">
    <label style="font-weight: bold" for="">Origin</label> <br>
    <div class="form-check form-check-inline">
        <input {{ $check1 != null && 'Imported car' == $check1 ? 'checked' : '' }} class="form-check-input" type="radio" name="origin" value="Imported car">
        <label class="form-check-label" for="inlineRadio1">Imported car</label>
    </div>
    <div class="form-check form-check-inline">
        <input {{ $check1 != null && 'VietNam'  == $check1 ? 'checked' : '' }} class="form-check-input" type="radio" name="origin" value="VietNam">
        <label class="form-check-label" for="inlineRadio2">Viet Nam</label>
    </div>
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Status</label> <br>
    <div class="form-check form-check-inline">
        <input {{ $check2 != null && ' New' == $check2 ? 'checked' : '' }}{{ old('status') == 'New' ? 'checked' : ''}} class="form-check-input" type="radio" name="status" value="New">
        <label class="form-check-label" for="inlineRadio1">New</label>
    </div>
    <div class="form-check form-check-inline">
        <input {{ $check2 != null && ' Used' == $check2 ? 'checked' : '' }}{{ old('status') == 'Used' ? 'checked' : ''}} class="form-check-input" type="radio" name="status" value="Used">
        <label class="form-check-label" for="inlineRadio2">Used</label>
    </div>
</div>
<script>
    /*code for show name of file*/
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
