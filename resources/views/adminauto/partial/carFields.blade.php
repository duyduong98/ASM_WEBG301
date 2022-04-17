<input type="hidden" name="id" value="{{old('id') ?? $cars->car_id }}">
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
        <option value="0">Select Class</option>
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
<div class="form-group">
    <label style="font-weight: bold" for="">Images</label>
    <input type="file" class="form-control" name="images" value="{{ old('images')?? $cars->car_images}}">
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Description</label>
    <input type="text" class="form-control" name="descrip" value="{{ old('images')?? $cars->car_descrip}}">
</div>

{{--@php
    $cId = old('class') ?? $students->st_class ?? null;
@endphp
<div class="form-group">
    <label style="font-weight: bold" for="class">Class</label>
    <select name="class" id="class" class="form-control">
        <option value="0">Select Class</option>
        @foreach($classR as $c)
            <option value="{{ $c->cl_id}}" {{ ($cId != null && $c->cl_id == $cId) ? 'selected' : '' }}>{{ $c->cl_name }}</option>
        @endforeach
    </select>
</div>--}}
