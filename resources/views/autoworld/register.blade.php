@extends('autoworld.masterAuto.masterNav')

@section('main')
    <div class="container" style="padding: 20px 0">
        <div class="card" id="regis-info">
            <form action="{{ route('autoworld.storeCus') }}" method="post">
                @csrf
                <div class="form-group">
                    <h2>Registration Form</h2>
                    @include('adminauto.partial.error')
                </div>
                <div class="form-group">
                    <label style="font-weight: bold" for="">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}" placeholder="Enter your name">
                </div>

                <div class="form-group">
                    <label style="font-weight: bold" for="">DOB</label>
                    <input type="date" class="form-control" name="dob" id="name" value="{{ old('dob')}}">
                </div>
                @php
                    $gender= old('gender') ?? null;
                @endphp
                <div class="form-group">
                    <label style="font-weight: bold" for="">Gender</label>
                    <div class="input-group mb-3">
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
                    <input type="text" class="form-control" name="address" id="name" value="{{ old('address')}}" placeholder="City">
                </div>
                <div class="form-group">
                    <label style="font-weight: bold" for="">Email</label>
                    <input type="email" class="form-control" name="email" id="name" value="{{ old('email')}}" placeholder="Email address">
                </div>
                <div class="form-group">
                    <label style="font-weight: bold" for="">Contact</label>
                    <input type="number" class="form-control" name="phone" id="contact" value="{{ old('phone')}}" placeholder="Phonenumber">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
