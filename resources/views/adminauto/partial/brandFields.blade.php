{{--<input type="hidden" name="id" value="{{old('id') ?? $cars->car_id }}">
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
        <option value="0">Select Brand</option>
        @foreach($brands as $b)
            <option value="{{ $b->brand_id}}" {{ ($bId != null && $b->brand_id == $bId) ? 'selected' : '' }}>{{ $b->brand_name }}</option>
        @endforeach
    </select>
</div>--}}

<div class="form-group">
    <input type="hidden" name="id" value="{{old('id')?? $brands->brand_id}}">
    <label style="font-weight: bold" for="">Brand Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('brands')?? $brands->brand_name}}">

</div>
<div class="form-group">
    {{--<label style="font-weight: bold" for="">Images</label>
    <input type="file" class="form-control" name="images" value="{{ old('images')?? $cars->car_images}}">--}}
    <label style="font-weight: bold" for="">Logo</label>
    @php
     list($file, $fileimages) = explode('/', $brands->brand_logo);
    @endphp
    <div class="custom-file">
        <input type="file" class="custom-file-input"
               id="logoBrands"
               name="images"
               value="{{ old('images') ?? $fileimages }}">
        <label class="custom-file-label" for="imagesCar">{{old('images') ?? $fileimages }}</label>
    </div>
</div>

<script>
    /*code for show name of file*/
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
