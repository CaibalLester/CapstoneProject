<!DOCTYPE html>
<html lang="en">

<?= view('/Home/chop/head'); ?>


<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="home/images/allianzlogo1.png" alt="">
                <span class="d-none d-lg-block">ALLIANZ PNB</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your personal details to create account</p>
                </div>

                <form class="row g-3 needs-validation" novalidate method="post" action="/Authreg">
                  

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>
                  
                  <div class="col-12">
                    <label for="branch" class="form-label">Branch</label>
                    <select class="form-select" name="branch" id="branch" required>
                      <option value="" selected disabled>Select a branch</option>
                      <option value="Calapan">Calapan</option>
                      <option value="branch2">Others</option>
                      <!-- Add more options for each branch -->
                    </select>
                    <div class="invalid-feedback">Please select a branch.</div>
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                          conditions</a></label>
                      <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="button" onclick="showConfirmation()">Create Account</button>
 
                  </div>
                  <div class="col-12">
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
  // Add an event listener to the form on submission
  document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('.needs-validation');
    form.addEventListener('submit', function (event) {
      // Get the password and confirmed password fields
      var password = form.querySelector('#yourPassword');
      var confirmPassword = form.querySelector('input[name="confirmpassword"]');

      // Get the error message element
      var errorElement = confirmPassword.nextElementSibling;

      // Check if the passwords match
      if (password.value !== confirmPassword.value) {
        // Prevent form submission
        event.preventDefault();

        // Show error message
        errorElement.textContent = 'Passwords do not match';

        // Add 'is-invalid' class to the password and confirmed password fields
        password.classList.add('is-invalid');
        confirmPassword.classList.add('is-invalid');
      } else {
        // Reset error message and remove 'is-invalid' class
        errorElement.textContent = 'Please enter your password!';
        password.classList.remove('is-invalid');
        confirmPassword.classList.remove('is-invalid');
      }
    });
  });
</script>
<script>
  function showConfirmation() {
    var confirmation = confirm("Are you sure you want to create an account?");
    if (confirmation) {
      document.querySelector('form').submit();
    } else {
    
    }
  }
</script>
</body>

</html>