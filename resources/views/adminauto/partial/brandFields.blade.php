
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
        <input type="file" class="custom-file-input" id="logoBrands" name="images">
        <label class="custom-file-label" for="imagesCar">{{old('images') ?? $fileimages }}</label>
        <input type="hidden" name="imagesIfNull" value="{{$fileimages}}">
    </div>
</div>

<script>
    /*code for show name of file*/
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
