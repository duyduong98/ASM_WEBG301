
<div class="form-group">
    <input type="hidden" name="id" value="{{old('id')?? $brands->brand_id}}">
    <label style="font-weight: bold" for="name">Brand Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('brands')?? $brands->brand_name}}">
</div>

<div class="form-group">
    <label class="form-label" style="font-weight: bold" for="descrip">Brand Description</label>
    <textarea class="form-control" name="descrip" id="descrip">{{old('descrip')?? $brands->brand_descrip}}</textarea>
</div>
<div class="form-group">
    {{--<label style="font-weight: bold" for="">Images</label>
    <input type="file" class="form-control" name="images" value="{{ old('images')?? $cars->car_images}}">--}}
    <label style="font-weight: bold" for="">Logo</label>
    @php
     list($file, $fileimages) = explode('\\', $brands->brand_logo);
    if ($fileimages == ''){
        $fileimages = 'Choose File';
    }
    @endphp
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="logoBrands" name="images">
        {{--On Update function: If user not choose the new file this field will null--}}
        {{--Input type = file do not have Value attribute--}}
        <label class="custom-file-label" for="logoBrands">{{old('images') ?? $fileimages }}</label>
        <input type="hidden" name="imagesIfNull" value="{{$brands->brand_logo}}">
        {{--Store old file if user not choose a new file--}}
    </div>
</div>

{{--<div class="form-group">
    <img class="img-fluid" src="{{asset($brands->brand_logo)}}" alt="Brand Logo">
</div>--}}

<script>
    /*code for show name of file*/
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
