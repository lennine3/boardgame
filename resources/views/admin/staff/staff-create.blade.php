@extends('admin.layout')
@section('content')
<div class="container" style="padding-top: 20px">
    <div style="background-color: #fff;border-radius:15px 15px 15px 15px;padding:15px 15px 15px 15px">
        <form action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ex: John Uzumaki"
                            name="name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label>Gender</label>
                    </div>

                    <div class="mb-3 row">
                        <div class="form-check col-lg-4">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="1">
                            <label class="form-check-label" for="genderMale">
                                Male
                            </label>
                        </div>
                        <div class="form-check col-lg-4">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="2">
                            <label class="form-check-label" for="genderFemale">
                                Female
                            </label>
                        </div>
                        <div class="form-check col-lg-4">
                            <input class="form-check-input" type="radio" name="gender" id="genderOther" value="3">
                            <label class="form-check-label" for="genderOther">
                                Other
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Ex: name@example.com"
                            name="email">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3 floating-label">
                        <label for="inputPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPass" placeholder="Enter Password"
                            name="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="inputPhone" placeholder="name@example.com"
                            name="phone">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputDate" class="form-label">Birth</label>
                        <input type="date" class="form-control" id="inputDate" name="birth">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress"
                            placeholder="Ex: 65 black street, California, USA" name="address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Avatar</label>
                        <input class="form-control" type="file" id="formFile" name="image" onchange="ImgPreview()">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in cen">
                        <img id="img-preview" class="profile_staff">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    function ImgPreview() {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("img-preview");
        preview.src = src;
    }

</script>
@endsection
