@extends('autoworld.masterAuto.masterNav')

@section('main')
    <form action="{{--{{ route('autoworld.register') }}--}}" method="post">
        <div class="form-group">
            <label style="font-weight: bold" for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}">
        </div>

        <div class="form-group">
            <label style="font-weight: bold" for="">DOB</label>
            <input type="date" class="form-control" name="dob" id="name" value="{{ old('dob')}}">
        </div>
        @php
            $gender= old('gender') ?? null;
        @endphp
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                </div>
                <select name="gender" class="custom-select" id="inputGroupSelect01">
                    <option value=""{{$gender != null && $gender == "" ? 'selected' : ''}}>Choose...</option>
                    <option value="F"{{$gender != null && $gender == "F" ? 'selected' : ''}}>FeMale</option>
                    <option value="M"{{$gender != null && $gender == "M" ? 'selected' : ''}}>Male</option>
                    <option value="O"{{$gender != null && $gender == "O" ? 'selected' : ''}}>Other</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="">Address</label>
            <input type="text" class="form-control" name="address" id="name" value="{{ old('address')}}">
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="">Email</label>
            <input type="email" class="form-control" name="email" id="name" value="{{ old('email')}}">
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="">Contact</label>
            <input type="number" class="form-control" name="phone" id="contact" value="{{ old('phone')}}">
        </div>
    </form>
@endsection
