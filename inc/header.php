<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">ATTACK & TITANS</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Catering</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>
            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">User Register</button>
            </div>
        </div>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow-none">Login</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   

<div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-plus fs-3 me-2"></i>User Register</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
            Note: Your details must match your ID (Aadhaar card, passport, driving license, etc..)
            that will be required during check-in.
        </span>
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control shadow-none" required>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Email</label>
                <input name="email" type="email" class="form-control shadow-none" required>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone number</label>
                <input name="phonenum" type="number" class="form-control shadow-none" required>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Picture</label>
                <input name="profile" type="file" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none" required>
              </div>
              <div class="col-md-12 ps-0 mb-3">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control shadow-none" rows="1">required</textarea>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pincode</label>
                <input name="pincode" type="number" class="form-control shadow-none"required>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Date of birth</label>
                <input name="dob" type="date" class="form-control shadow-none"required>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input name="pass"type="password" class="form-control shadow-none"required>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input name="cpass"type="password" class="form-control shadow-none"required>
              </div>
            </div>
            <div class="col-md-6 ps-0 mb-3">
    <label class="form-label">District</label>
    <select class="form-select shadow-none">
        <option value="">Select District</option>
        <option value="Ariyalur">Ariyalur</option>
        <option value="Chengalpattu">Chengalpattu</option>
        <option value="Chennai">Chennai</option>
        <option value="Coimbatore">Coimbatore</option>
        <option value="Cuddalore">Cuddalore</option>
        <option value="Dharmapuri">Dharmapuri</option>
        <option value="Dindigul">Dindigul</option>
        <option value="Erode">Erode</option>
        <option value="Kallakurichi">Kallakurichi</option>
        <option value="Kanchipuram">Kanchipuram</option>
        <option value="Kanyakumari">Kanyakumari</option>
        <option value="Karur">Karur</option>
        <option value="Krishnagiri">Krishnagiri</option>
        <option value="Madurai">Madurai</option>
        <option value="Nagapattinam">Nagapattinam</option>
        <option value="Namakkal">Namakkal</option>
        <option value="Nilgiris">Nilgiris</option>
        <option value="Perambalur">Perambalur</option>
        <option value="Pudukkottai">Pudukkottai</option>
        <option value="Ramanathapuram">Ramanathapuram</option>
        <option value="Ranipet">Ranipet</option>
        <option value="Salem">Salem</option>
        <option value="Sivagangai">Sivagangai</option>
        <option value="Tenkasi">Tenkasi</option>
        <option value="Thanjavur">Thanjavur</option>
        <option value="Theni">Theni</option>
        <option value="Thoothukudi">Thoothukudi</option>
        <option value="Tiruchirappalli">Tiruchirappalli</option>
        <option value="Tirunelveli">Tirunelveli</option>
        <option value="Tirupathur">Tirupathur</option>
        <option value="Tiruppur">Tiruppur</option>
        <option value="Tiruvallur">Tiruvallur</option>
        <option value="Tiruvannamalai">Tiruvannamalai</option>
        <option value="Tiruvarur">Tiruvarur</option>
        <option value="Virudhunagar">Virudhunagar</option>
    </select>
</div>

<div class="col-md-6 ps-0 mb-3">
    <label class="form-label">Food Options</label>
    <select class="form-select shadow-none">
        <option value="">Select Food Option</option>
        <option value="Breakfast">Breakfast</option>
        <option value="Dinner">Meals</option>
        <option value="Meals">Dinner</option>
        <option value="Only Rooms">Only Rooms</option>
    </select>
</div>




        </div>
        <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>