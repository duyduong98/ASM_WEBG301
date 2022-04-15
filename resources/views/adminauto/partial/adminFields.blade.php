
<div class="form-group">
    <label style="font-weight: bold" for="">User Name: <span class="h5">{{$admin->user_name}}</span></label>
    <input type="hidden" class="form-control" name="username" id="name" value="{{ old('name') ?? $admin->user_name }}">
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Email</label>
    <input type="email" class="form-control" name="email" id="name" value="{{ old('email') ?? $admin->email }}">
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Address</label>
    <input type="text" class="form-control" name="address" id="name" value="{{ old('address') ?? $admin->address }}">
</div>
<div class="form-group">
    <label style="font-weight: bold" for="">Contact</label>
    <input type="number" class="form-control" name="contact" id="contact" value="{{ old('phone') ?? $admin->contact }}">
</div>
