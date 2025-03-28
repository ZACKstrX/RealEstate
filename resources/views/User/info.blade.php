@include('template.nav')

<div class="img1">
    <form class="form1" method="POST" action="{{ route('updateuser', auth()->user()->id) }}" enctype="multipart/form-data">
        @csrf

        <div class="d-flex flex-column align-items-center position-relative mb-4">
            <div class="left">
                <div class="upload">
                    @if(auth()->user()->profile_picture)
                        <img class="size" src="{{ asset('storage/' . 
                        auth()->user()->profile_picture) }}" alt="Profile Picture">
                    @else
                        <img class="" src="images/profile.svg"
                         alt="Default Profile Picture">
                    @endif
                    <div class="round">
                        <input type="file" name="profile_picture">
                        <i class="fa fa-camera" style="color:#F2E8CF;"></i>
                    </div>
                </div>
            </div>
            <h2 class="white-text"><b><i>Hello {{ auth()->user()->first_name }} {{ auth()->user()->last_name }} </i>
                </b></h2>
            <h5 class="white-text"><b><i>You can change your profil information here</i> </b></h5>
        </div>

        <div class="row mb-4 m">
            <div class="col">
                <label for="inputFirstName"><b class="white-text">First Name</b> </label>
                <input type="text"
                    class="form-control searchopacity1 @error('first_name') is-invalid @enderror"id="inputFirstName"
                    name="first_name" placeholder="First name" value="{{ auth()->user()->first_name }}">

            </div>
            <div class="col">
                <label for="inputLastName"><b class="white-text">Last Name</b></label>
                <input type="text"
                    class="form-control searchopacity1 @error('last_name') is-invalid @enderror"id="inputLastName"
                    name="last_name" placeholder="Last name" value="{{ auth()->user()->last_name }}">

            </div>

        </div>
        <div class="row  mb-4">
            <div class="form-group col-md-6">
                <label for="inputEmail4"><b class="white-text">Email</b></label>
                <input type="email" class="form-control searchopacity1 @error('email') is-invalid @enderror"
                    id="inputEmail4" name="email" placeholder="Email" value="{{ auth()->user()->email }}">

            </div>

            <div class="form-group col-md-6">
                <label for="inputPhoneNumber"><b class="white-text">Phone Number</b></label>
                <input type="tel" class="form-control searchopacity1 @error('phone_number') is-invalid @enderror"
                    id="inputPhoneNumber" name="phone_number" placeholder="Phone Number" pattern="[0-9]{10}"
                    maxlength="10" title="Enter a valid 10-digit phone number"
                    value="{{ auth()->user()->phone_number }}">

            </div>

        </div>
        <div class="row mb-4">
            <div class="form-group  col-md-6">
                <label for="inputAddress "><b class="white-text">Address</b></label>
                <input type="text" class="form-control searchopacity1" id="inputAddress" name="adresse"
                    placeholder="1234 Main St" value="{{ auth()->user()->adresse }}">
            </div>
            
            <div class="form-group col-md-6">
                <label for="birthday"><b class="white-text ">Birthday</b></label>
                <input name="birthday" id="birthday" class="form-control searchopacity1" placeholder="Pick a Date"
                    value="{{ auth()->user()->birthday }}">
            </div>

        </div>


        <div class="row mb-4">
            <button type="button" class="btn btn-secondary col-md-6 mt-4" style="height:60px;" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                Change Password
            </button>
            <div class="form-group col-md-6">
                <label for="inputBio"><b class="white-text">Bio</b></label>
                <textarea class="form-control searchopacity1" name="bio" rows="2" maxlength="255"
                    style="height: 60px; max-height: 60px; overflow-y: auto;">
                     {{ old('bio', '') }} {{ auth()->user()->bio }}</textarea>
            </div>

        </div>

        <div class="form-group centrer">
            <button type="submit" class="btn btn-success b"><strong
                    class="wordhover card-text">Update</strong></button>
        </div>
    </form>
</div>
</div>



<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for password change -->
                <form id="changePasswordForm" method="POST" action="{{ route('checkPassword') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" name="current_password" placeholder="Enter current password" required>
                        @if ($errors->has('current_password'))
                            <small class="text-danger">{{ $errors->first('current_password') }}</small>
                        @endif
                    </div>

                    <!-- New Password Fields (Shown only after verification) -->
                    @if (session('password_verified'))
                        <div id="newPasswordFields">
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" name="new_password" placeholder="Enter new password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="new_password_confirmation" placeholder="Confirm new password" required>
                            </div>
                        </div>
                    @endif

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        @if (session('password_verified'))
                            <button type="submit" formaction="{{ route('updatePassword', auth()->user()->id) }}" class="btn btn-primary">Update Password</button>
                        @else
                            <button type="submit" class="btn btn-success">Verify</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $("#verifyPassword").click(function() {
            var currentPassword = $("#currentPassword").val();
    
            $.ajax({
                url: "{{ route('checkPassword') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    password: currentPassword
                },
                success: function(response) {
                    if (response.valid) {
                        $("#passwordError").text("");
                        $("#newPasswordFields").show();
                        $("#updatePasswordBtn").show();
                        $("#verifyPassword").hide(); 
                    } else {
                        $("#passwordError").text("Incorrect password, try again.");
                    }
                },
                error: function() {
                    $("#passwordError").text("An error occurred. Please try again.");
                }
            });
        });
    
        $("#confirmPassword").on("keyup", function() {
            var newPassword = $("#newPassword").val();
            var confirmPassword = $("#confirmPassword").val();
    
            if (newPassword !== confirmPassword) {
                $("#confirmError").text("Passwords do not match.");
                $("#updatePasswordBtn").prop("disabled", true);
            } else {
                $("#confirmError").text("");
                $("#updatePasswordBtn").prop("disabled", false);
            }
        });
    });
    </script>
    <script>
        document.getElementById('changePasswordModal').addEventListener('hidden.bs.modal', function () {
            // Clear the session flag when the modal is closed
            fetch("{{ route('clearPasswordSession') }}", {
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {
        $('#birthday').datepicker({
            format: 'yyyy/mm/dd',
            endDate: '0d',
            autoclose: true,
            startView: 2,
            todayHighlight: true
        });
    });
</script>

</html>
