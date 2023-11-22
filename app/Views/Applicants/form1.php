<!DOCTYPE html>
<html lang="en">

<?= view('/Applicants/chop/head'); ?>

<body>
<?= view('/Applicants/chop/header'); ?>
  <!-- ======= Header ======= -->
  
  <?= view('/Applicants/chop/sidebar'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Allianz Forms</h1>
    <nav>
      <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item active"><a href="index.html">Home</a></li> -->
        <li class="breadcrumb-item active">LIFE CHANGER</li>
        <li class="breadcrumb-item">AIAL</li>
        <li class="breadcrumb-item">GROUP LIFE INSURANCE</li>
        <li class="breadcrumb-item">AFFIDAVIT OF NON-FILING</li>
        <li class="breadcrumb-item">STATEMENT OF UNDERTAKING</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">LIFE CHANGER FORM</h5>
            <form class="container mt-5" method="post" action="/form1sv">
              <fieldset>
                <div class="form-group">
                  <label for="position">Position applying for:</label>
                  <input type="text" id="position" name="positionApplying" class="form-control" required>
                  <label for="preferredArea">Preferred area:</label>
                  <input type="text" id="preferredArea" name="preferredArea" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Source:</label><br>
                  <input type="checkbox" id="referral" name="referral" value="yes">
                  <label for="referral">Referral</label>
                  <label for="referralBy">by whom:</label>
                  <input type="text" id="referralBy" name="referralBy" class="form-control">

                  <input type="checkbox" id="onlineAd" name="onlineAd" value="Online Advertisement">
                  <label for="onlineAd">Online Advertisement</label>

                  <input type="checkbox" id="walkIn" name="walkIn" value="yes">
                  <label for="walkIn">Walk-In</label>

                  <input type="checkbox" id="others" name="others" value="yes">
                  <label for="others">Others</label><br><br>
                </div>

                <div class="form-group">
                  <h2>Personal information</h2>
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="fullname" class="form-control" required><br>

                  <label for="nickname">Nickname:</label>
                  <input type="text" id="nickname" name="nickname" class="form-control"><br>

                  <label for="birthdate">Birth date:</label>
                  <input type="date" id="birthdate" name="birthdate" class="form-control" required><br>

                  <label for="placeOfBirth">Place of birth:</label>
                  <input type="text" id="placeOfBirth" name="placeOfBirth" class="form-control" required><br>

                  <label for="gender">Gender:</label>
                                    <select id="gender" name="gender" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><br>

                                    <label for="bloodType">Blood Type:</label>
                                    <select id="bloodType" name="bloodType" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select><br>

                  <label for="homeAddress">Home address:</label>
                  <input type="text" id="homeAddress" name="homeAddress" class="form-control" required><br>

                  <label for="mobileNo">Mobile Number:</label>
                  <input type="text" id="mobileNo" name="mobileNo" class="form-control" required><br>

                  <label for="landline">Landline:</label>
                  <input type="text" id="landline" name="landline" class="form-control"><br>

                  <label for="email">Email Address:</label>
                  <input type="email" id="email" name="email" class="form-control"><br>
                </div>
                <div class="form-group">
                  <label for="citizenship">Citizenship:</label><br>
                  <input type="checkbox" id="citizenship" name="citizenship" value="Filipino">
                  <label for="filipino">Filipino</label>
                  <label for="others">Others, please specify</label>
                  <input type="text" id="others" name="others" class="form-control"><br>

                  <label for="naturalizationInfo">If naturalized citizen of the Philippines, give date and place of
                    naturalization and attached photocopy of certificate of naturalization:</label>
                  <input type="text" id="naturalizationInfo" name="naturalizationInfo" class="form-control"><br>

                  <label for="maritalStatus">Marital Status:</label>
                                    <select id="maritalStatus" name="maritalStatus" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select><br>

                  <div id="ifMarried">
                    <label for="maidenName">If Married, a) Maiden Name</label>
                    <input type="text" id="maidenName" name="maidenName" class="form-control"><br>

                    <label for="spouseName">b) Name of Spouse:</label>
                    <input type="text" id="spouseName" name="spouseName" class="form-control"><br>
                  </div>

                  <label for="sssNo">SSS No.:</label>
                  <input type="text" id="sssNo" name="sssNo" class="form-control"><br>

                  <label for="tin">Tax Identification No.:</label>
                  <input type="text" id="tin" name="tin" class="form-control"><br>

                  <label for="lifeInsuranceExperience">Life Insurance Experience:</label>
                  <input type="checkbox" id="yesLife" name="lifeInsuranceExperience" value="Yes">
                  <label for="yesLife">Yes</label><br><br>

                  <input type="checkbox" id="noLife" name="lifeInsuranceExperience" value="No">
                  <label for="noLife">No</label><br><br>

                  <label for="insuranceType">If yes, check the type:</label><br>
                  <input type="checkbox" id="traditional" name="traditional" value="Traditional">
                  <label for="traditional">Traditional</label>

                  <input type="checkbox" id="variable" name="variable" value="Variable">
                  <label for="variable">Variable</label><br><br>

                  <label for="recentInsuranceCompany">Most recent Life Insurance Company:</label>
                  <input type="text" id="recentInsuranceCompany" name="recentInsuranceCompany" class="form-control"><br>
                </div>

                <h2>Educational Background</h2>
                <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th></th>
                    <th class="text-center">SCHOOL</th>
                    <th class="text-center">COURSE</th>
                    <th class="text-center">YEAR GRADUATED</th>
                  </tr>
                  <tr>
                    <td>High School</td>
                    <td><input type="text" name="highSchool" class="form-control text-center"></td>
                    <td><input type="text" name="highSchoolCourse" class="form-control text-center"></td>
                    <td><input type="date" name="highSchoolYear" class="form-control text-center"></td>
                  </tr>
                  <tr>
                    <td>College</td>
                    <td><input type="text" name="college" class="form-control text-center"></td>
                    <td><input type="text" name="collegeCourse" class="form-control text-center"></td>
                    <td><input type="date" name="collegeYear" class="form-control text-center"></td>
                  </tr>
                  <tr>
                    <td>Graduate School</td>
                    <td><input type="text" name="graduateSchool" class="form-control text-center"></td>
                    <td><input type="text" name="graduateCourse" class="form-control text-center"></td>
                    <td><input type="date" name="graduateYear" class="form-control text-center"></td>
                  </tr>
                </table>
                </div>

                <h2>Employment History</h2>
                <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th class="text-center">NAME AND ADDRESS OF EMPLOYER</th>
                    <th class="text-center">POSITION</th>
                    <th class="text-center" colspan="2">EMPLOYMENT DATE</th>
                    <th class="text-center">REASON FOR LEAVING</th>
                  </tr>
                  <tr>
                    <td><input type="text" name="companyName1" class="form-control text-center"></td>
                    <td><input type="text" name="position1" class="form-control text-center"></td>
                    <td><input type="date" name="employmentFrom1" class="form-control text-center"></td>
                    <td><input type="date" name="employmentTo1" class="form-control text-center" ></td>
                    <td><input type="text" name="reason1" class="form-control text-center"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="companyName2" class="form-control text-center"></td>
                    <td><input type="text" name="position2" class="form-control text-center"></td>
                    <td><input type="date" name="employmentFrom2" class="form-control text-center"></td>
                    <td><input type="date" name="employmentTo2" class="form-control text-center" ></td>
                    <td><input type="text" name="reason2" class="form-control text-center"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="companyName3" class="form-control text-center"></td>
                    <td><input type="text" name="position3" class="form-control text-center"></td>
                    <td><input type="date" name="employmentFrom3" class="form-control text-center"></td>
                    <td><input type="date" name="employmentTo3" class="form-control text-center" ></td>
                    <td><input type="text" name="reason3" class="form-control text-center"></td>
                  </tr>
                </table>
                </div>


                <h2>Most recent employer's contact details</h2>
                <table class="table" border="1">
                  <tr>
                    <td>Company Name:<input type="text" name="companyName" class="form-control"></td>
                    <td>Position:<input type="text" name="resposition" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align: center;">Employer's contact details:</td>
                  </tr>
                  <tr>
                    <td><input type="text" name="contactName" class="form-control" placeholder="Contact Name:"></td>
                    <td><input type="text" name="contactPosition" class="form-control" placeholder="Position:"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="emailAddress" class="form-control" placeholder="Email Address:"></td>
                    <td><input type="text" name="contactNumber" class="form-control" placeholder="Contact Number:"></td>
                  </tr>
                  <tr>
                    <td colspan="2">If currently employed, have you already tendered your resignation?
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="yesCheckbox">Yes</label>
                        <input type="checkbox" name="yescuremployed" class="form-check-input" value="Yes">

                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="noCheckbox">No</label>
                        <input type="checkbox" name="nocuremployed" class="form-check-input" value="No">

                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td colspan="2">1. If answer is No, are we allowed to conduct the employment verification?
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="yesCheckbox">Yes</label>
                        <input type="checkbox" name="allowed" class="form-check-input" value="Yes">

                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="noCheckbox">No</label>
                        <input type="checkbox" name="notallowed" class="form-check-input" value="No">

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="text" name="ifnoProvdtls" class="form-control"
                        placeholder="2. If answer in number 1 is no, please provide details "></td>
                  </tr>
                </table>
                <input type="submit" value="Submit" class="btn btn-primary">
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?= view('/Applicants/chop/footer'); ?>
  <!-- End Footer -->


  <!-- Vendor JS Files -->
  <?= view('/Applicants/chop/script'); ?>
   <!-- Template Main JS File -->
</body>

</html>
