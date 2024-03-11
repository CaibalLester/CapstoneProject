<!DOCTYPE html>
<html lang="en">

<?= view('/Home/chop/head'); ?>


<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="/" class="logo d-flex align-items-center w-auto">
                <img src="home/images/allianzlogo1.png" alt="">
                <span class="d-none d-lg-block">ALLIANZ PNB</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-6">

              <div class="card-body">
              <?php if (session()->getFlashdata('error')): ?>
                                            <div class="alert alert-danger mt-3 text-center" role="alert">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                        <?php endif; ?>
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your personal details to create account</p>
                </div>
                

                <form class="row g-3 needs-validation" novalidate method="post" action="/Authreg"
                  onsubmit="return confirmSubmit()">

                  <!-- <div class="col-md-4">
                    <label for="yourUsername" class="form-label small">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      <input type="text" name="username" class="form-control text-center" id="yourUsername" required>
                      <div class="invalid-feedback">Please Enter your username.</div>
                    </div>
                  </div> -->

                  <div class="col-md-4">
                    <label for="lastname" class="form-label small">Last Name</label>
                    <div class="input-group has-validation">
                      <input type="text" name="lastname" class="form-control text-center" id="lastname" required>
                      <div class="invalid-feedback">Please Enter Last Name!</div>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <label for="firstname" class="form-label small">First Name</label>
                    <div class="input-group has-validation">
                      <input type="text" name="firstname" class="form-control text-center" id="firstname" required>
                      <div class="invalid-feedback">Please Enter First Name!</div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="middlename" class="form-label small">Middle Initial</label>
                    <div class="input-group has-validation">
                      <input type="text" name="middlename" class="form-control text-center" id="middlename" required>
                      <div class="invalid-feedback">Please Enter Middle Initial!</div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label for="yourUsername" class="form-label small">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      <input type="text" name="username" class="form-control text-center" id="yourUsername" required>
                      <div class="invalid-feedback">Please Enter your username!</div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label for="birthday" class="form-label small">Birthday</label>
                    <div class="input-group has-validation">
                      <input type="date" name="birthday" class="form-control text-center" id="birthday" required>
                      <div class="invalid-feedback">Please Enter Birthday!</div>
                    </div>
                  </div>

                  <!-- <div class="col-md-6">
                    <label for="role" class="form-label small">User</label>
                    <select class="form-select" name="role" id="role" required>
                      <option value="" selected disabled>Type of user</option>
                      <option value="client">Client</option>
                      <option value="agent">Agent</option>
                      <option value="applicant">Applicant</option>

                    </select>
                    <div class="invalid-feedback">Please select a Type of user.</div>
                  </div> -->

                  <div class="col-md-4">
                    <label for="number" class="form-label small">Number</label>
                    <input type="text" name="number" class="form-control text-center" id="number" required>
                    <div class="invalid-feedback">Please enter a valid number!</div>
                  </div>

                  <div class="col-md-12">
                    <label for="yourEmail" class="form-label small">Your Email</label>
                    <input type="email" name="email" class="form-control text-center" id="yourEmail" required>
                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                  </div>

                  <div class="col-md-12">
                    <label for="yourPassword" class="form-label small">Password</label>
                    <input type="password" name="password" class="form-control text-center" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-md-12">
                    <label for="yourPassword" class="form-label small">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control text-center" id="yourPassword"
                      required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                          conditions</a></label>
                      <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-primary w-100" type="submit" onclick="showConfirmation()">Create
                      Account</button>
                  </div>
                  <div class="col-md-12">
                    <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main><!-- End #main -->

<!-- Vendor JS Files -->
<?= view('/Home/chop/script'); ?>
<!-- Template Main JS File -->

<script>
  function confirmSubmit() {
    return confirm("Are you sure you want Register?");
  }
</script>
</body>

</html>