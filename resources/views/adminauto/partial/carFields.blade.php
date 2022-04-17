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
        <option value="0">Select Brand</option>
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
    {{--<label style="font-weight: bold" for="">Images</label>
    <input type="file" class="form-control" name="images" value="{{ old('images')?? $cars->car_images}}">--}}
    <label style="font-weight: bold" for="">Images</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input"
                   id="imagesCar"
                   name="images"
                    value="{{ old('images') ?? $cars->car_images }}">
            <label class="custom-file-label" for="imagesCar">Choose File</label>
        </div>
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Origin</label> <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="origin" value="Xe Nhập Khẩu">
        <label class="form-check-label" for="inlineRadio1">Xe Nhập Khẩu</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="origin" value="Lắp Ráp Trong Nước">
        <label class="form-check-label" for="inlineRadio2">Lắp Ráp Trong Nước</label>
    </div>
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Status</label> <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" value="Xe Mới">
        <label class="form-check-label" for="inlineRadio1">Xe Mới</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" value="Đã Qua Sử Dụng">
        <label class="form-check-label" for="inlineRadio2">Xe Đã Qua Sử Dụng</label>
    </div>
</div>
<script>
    /*code for show name of file*/
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

