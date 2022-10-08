@extends('home')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="content">
    <div class="bg-white border rounded">
      <div class="row no-gutters">
        <div class="col-lg-4 col-xl-3">
          <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
            <div class="card text-center widget-profile px-0 border-0">
              <div class="card-img mx-auto rounded-circle">
                <img class="w-75 border border-rounded border-success rounded-circle" src="{{ (!empty($user->profile_photo_path))?url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" alt="user image">
              </div>

              <div class="card-body">
                <h4 class="py-2 text-dark">{{ $user->name }}</h4>
                <p>{{ $user->email }}</p>
                <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
              </div>
            </div>

            <div class="d-flex justify-content-between ">
              <div class="text-center pb-4">
                <h6 class="text-dark pb-2">1503</h6>
                <p>Friends</p>
              </div>

              <div class="text-center pb-4">
                <h6 class="text-dark pb-2">2905</h6>
                <p>Followers</p>
              </div>

              <div class="text-center pb-4">
                <h6 class="text-dark pb-2">1200</h6>
                <p>Following</p>
              </div>
            </div>

            <hr class="w-100">

            <div class="contact-info pt-4">
              <h5 class="text-dark mb-1">Contact Information</h5>
              <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
              <p>{{ $user->email }}</p>
              <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
              <p>{{ $user->phone }}</p>
              <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
              <p>Nov 15, 1990</p>
              <p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
              <p class="pb-3 social-button">
                <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                  <i class="mdi mdi-twitter"></i>
                </a>

                <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                  <i class="mdi mdi-linkedin"></i>
                </a>

                <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                  <i class="mdi mdi-facebook"></i>
                </a>

                <a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
                  <i class="mdi mdi-skype"></i>
                </a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-8 col-xl-9">
          <div class="profile-content-right profile-right-spacing py-5">
            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                </li>

            </ul>

            <div class="tab-content px-3 px-xl-5" id="myTabContent">


              <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tab-pane-content mt-5">
                    <form action="{{ route('general.profile.update', $user->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row mb-6">
                      <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                      <div class="col-sm-8 col-lg-10">
                          <input type="file" id="image" accept="image/png, image/jpeg" class="form-control" name="profile_photo_path">
                      </div>
                      @error('profile_photo_path')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group row mb-6">
                      <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Picture</label>
                      <img id="showImage" class="w-50 border border-rounded border-success rounded-circle" src="{{ (!empty($user->profile_photo_path))?url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" alt="user image">
                    </div>

                    <div class="form-group mb-4">
                      <label for="userName">User name</label>
                      <input type="text" class="form-control" id="userName" name="name" value="{{ $user->name }}">
                      @error('name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group mb-4">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                      @error('email')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="userName">Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                    <div class="d-flex justify-content-end mt-5">
                      <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                    </div>
                  </form>
                </div>
              </div>

                <div class="tab-pane fade " id="password" role="tabpanel" aria-labelledby="password-tab">
                    <div class="tab-pane-content mt-5">

                    <form>
                        <div class="form-group mb-4">
                            <label for="oldPassword">Old password</label>
                            <input type="password" class="form-control" id="oldPassword">
                        </div>
                        <div class="form-group mb-4">
                            <label for="newPassword">New password</label>
                            <input type="password" class="form-control" id="newPassword">
                        </div>
                        <div class="form-group mb-4">
                            <label for="conPassword">Confirm password</label>
                            <input type="password" class="form-control" id="conPassword">
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="tab-pane fade " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <div class="tab-pane-content mt-5">

                    <form>
                        <div class="form-group mb-4">
                            <label for="oldPassword">Old password</label>
                            <input type="password" class="form-control" id="oldPassword">
                        </div>
                        <div class="form-group mb-4">
                            <label for="newPassword">New password</label>
                            <input type="password" class="form-control" id="newPassword">
                        </div>
                        <div class="form-group mb-4">
                            <label for="conPassword">Confirm password</label>
                            <input type="password" class="form-control" id="conPassword">
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>





</div> <!-- End Content -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
