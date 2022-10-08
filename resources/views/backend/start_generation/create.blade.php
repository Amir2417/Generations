@extends('home')
@section('admin')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add Your First Generation Member</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('first_generation/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control " name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="birth">Date Of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date" naplaceholder="Date"
                                aria-describedby="inputGroupPrepend3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="birth_place">Birth Place</label>
                                <input type="text" class="form-control " id="birth_place" name="birth_place" placeholder="Enter The Birth Place" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer04">Date of Death</label>
                                <input type="date" name="date_of_death" class="form-control " id="Date Of Death" placeholder="Enter The Date" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="birth_place">About That Person </label>
                                <textarea class="form-control "  name="about" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer04">Death Place</label>
                                <input type="text" class="form-control " id="Date Of Death" name="death_place" placeholder="Enter The death Place" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="birth_place">Photo </label>
                                <input type="file" name="photo" id="photo" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="birth_place">Uploaded Image </label>
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="birth_place">Father-in-laws house </label>
                                <input type="text" name="laws_house" id="photo" class="form-control" placeholder="Enter Father In Laws House">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="birth_place">Wife Name</label>
                                <input type="text" name="wife" id="photo" class="form-control" placeholder="Wife Name">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="birth_place">Total Children</label>
                                <input type="text" name="child" id="child" class="form-control" placeholder="Total Children">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
