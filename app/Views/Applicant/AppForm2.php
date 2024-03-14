<!doctype html>
<html lang="en">
<?= view('Applicant/chop/head'); ?>

<body>

    <?= view('Applicant/chop/header'); ?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/AppDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-bs-toggle="collapse"
                                data-bs-target="#manageDropdown" aria-expanded="false">
                                <i class="bi-book me-2"></i>
                                Forms
                            </a>
                            <div class="collapse" id="manageDropdown">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <span><a class="nav-link " href="/AppForm1">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">LIFE CHANGER</span>
                                            </a></span><br>
                                        <a class="nav-link active" href="/AppForm2">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AIAL</span>
                                        </a><br>
                                        <a class="nav-link" href="/AppForm3">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">GROUP LIFE INSURANCE</span>
                                        </a><br>
                                        <a class="nav-link" href="/AppForm4">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AFFIDAVIT OF NON-FILING</span>
                                        </a><br>
                                        <a class="nav-link" href="/AppForm5">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">STATEMENT OF UNDERTAKING</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AppProfile">
                                <i class="bi-person me-2"></i>
                                Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AppSetting">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AppHelp">
                                <i class="bi-question-circle me-2"></i>
                                Help Center
                            </a>
                        </li>

                        <li class="nav-item border-top mt-auto pt-2">
                            <a class="nav-link" href="/AdDash">
                                <i class="bi-box-arrow-left me-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h3>APPLICATION FOR INSURANCE AGENT'S LICENSE</h3>
                </div>


                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <form class="container mt-5" method="post" action="/form2sv">
                                        <fieldset>
                                            <div class="form-group">
                                                <h6>To the Insurance Commissioner:</h6>
                                                <p style="text-align: justify;">The undersigned hereby applies for a
                                                    license under the provisions of Chapter IV, Title I of the Insurance
                                                    Code, to act as insurance/general agent of Allianz PNB Life
                                                    Insurance, Inc. in respect of the kind of insurance indicated
                                                    herein:</p>

                                                <input type="checkbox" id="nonLife" name="nonLife" value="Non-Life">
                                                <label for="nonLife">Non-Life</label><br>
                                                <input type="checkbox" id="life" name="life" value="Life">
                                                <label for="life">Life</label><br>
                                                <input type="checkbox" id="variableLife" name="variableLife"
                                                    value="Variable Life">
                                                <label for="variableLife">Variable Life</label><br>
                                                <input type="checkbox" id="accidentAndHealth" name="accidentAndHealth"
                                                    value="Accident and Health">
                                                <label for="accidentAndHealth">Accident and Health</label><br>
                                                <input type="checkbox" id="others" name="others" value="Others">
                                                <label for="others">Others (please specify)</label><br>
                                                <input type="text" id="othersSpecification" name="othersSpecification"
                                                    class="form-control"><br>
                                                <p>and for that purpose submits the following statements and information
                                                    required herein.</p>
                                                <label for="agencyName">Agency Name (if any):</label>
                                                <input type="text" id="agencyName" name="agencyName"
                                                    class="form-control"><br><br>
                                            </div>

                                            <div class="form-group">
                                                <label>1. Name of applicant:</label><br>
                                                <label for="surname">Surname:</label>
                                                <input type="text" id="surname" name="surname" class="form-control">
                                                <label for="firstName">First Name:</label>
                                                <input type="text" id="firstName" name="firstName" class="form-control">
                                                <label for="middleName">Middle Name:</label>
                                                <input type="text" id="middleName" name="middleName"
                                                    class="form-control"><br><br>
                                            </div>

                                            <div class="form-group">
                                                <label>2. Agent Type:</label><br>
                                                <input type="radio" id="ordinaryAgent" name="agentType"
                                                    value="Ordinary Agent">
                                                <label for="ordinaryAgent">Ordinary Agent</label>
                                                <input type="radio" id="generalAgent" name="agentType"
                                                    value="General Agent">
                                                <label for="generalAgent">General Agent</label><br><br>
                                            </div>

                                            <div class="form-group">
                                                <label>Home Address:</label><br>
                                                <textarea id="homeAddress" name="homeAddress" rows="3"
                                                    class="form-control"></textarea>
                                                <label>Zip code:</label>
                                                <input type="text" id="zipCode" name="zipCode" class="form-control">
                                                <label>Business Address:</label>
                                                <textarea id="businessAddress" name="businessAddress" rows="3"
                                                    class="form-control"></textarea>
                                                <label>TIN:</label>
                                                <input type="text" id="tin" name="tin" class="form-control">
                                                <label>Email Address:</label>
                                                <input type="email" id="email" name="email" class="form-control">
                                                <label>Mobile Number:</label>
                                                <input type="tel" id="mobileNumber" name="mobileNumber"
                                                    class="form-control"><br><br>
                                            </div>


                                            <div class="form-group">
                                                <label>4. Birth:</label>
                                                <label>a) Date:</label>
                                                <input type="date" id="birthDate" name="birthDate" class="form-control">
                                                <label>b) Place:</label>
                                                <input type="text" id="birthPlace" name="birthPlace"
                                                    class="form-control"><br><br>
                                                <label>5. Citizenship:</label>
                                                <input type="text" id="citizenship" name="citizenship"
                                                    class="form-control">
                                                <label>Sex:</label>
                                                <select id="sex" name="sex" class="form-control">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                                <label>Civil Status:</label>
                                                <input type="text" id="civilStatus" name="civilStatus"
                                                    class="form-control"><br><br>
                                                <label>6. If married:</label><br>
                                                <label>a) Maiden Name:</label>
                                                <input type="text" id="maidenName" name="maidenName"
                                                    class="form-control">
                                                <label>b) Husband’s Name:</label>
                                                <input type="text" id="husbandsName" name="husbandsName"
                                                    class="form-control"><br><br>
                                                <label>7. If naturalized citizen of the Philippines, give date and place
                                                    of naturalization and attach photocopy of certificate of
                                                    naturalization.</label>
                                                <input type="text" id="naturalizationDetails"
                                                    name="naturalizationDetails" class="form-control"
                                                    placeholder="N/A"><br><br>
                                            </div>

                                            <div class="form-group">
                                                <label>8. If applicant is a foreigner, give serial number, date and
                                                    place of issue of alien certificate of registration (ACR) and the
                                                    immigrant certificate of residence (ICR) for the current year and
                                                    attach photocopy of each thereof:</label>
                                                <input type="text" id="foreignerDetails" name="foreignerDetails"
                                                    class="form-control" placeholder="N/A"><br><br>

                                                <label>9. If applicant is a partnership, association or
                                                    corporation:</label><br>

                                                <label>a) Attach a certified true copy of the certificate of
                                                    registration, articles of partnership, association or incorporation
                                                    and by-laws:</label>
                                                <input type="text" id="certifiedCopyDetails" name="certifiedCopyDetails"
                                                    class="form-control" placeholder="N/A">

                                                <label>b) State percentage of Filipino participation in the partnership,
                                                    association or corporation:</label>
                                                <input type="text" id="filipinoParticipation"
                                                    name="filipinoParticipation" class="form-control"
                                                    placeholder="N/A"><br><br>
                                            </div>

                                            <div class="form-group">
                                                <label>10. Any license previously granted to act as insurance/general
                                                    agent in this country? State name of insurance company
                                                    represented.</label>

                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Company</th>
                                                                <th>License Type</th>
                                                                <th>License No.</th>
                                                                <th>Year issued/renewed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" id="company1" name="company1"
                                                                        class="form-control" placeholder="N/A"></td>
                                                                <td><input type="text" id="licenseType1"
                                                                        name="licenseType1" class="form-control"></td>
                                                                <td><input type="text" id="licenseNo1" name="licenseNo1"
                                                                        class="form-control"></td>
                                                                <td><input type="text" id="yearIssued1"
                                                                        name="yearIssued1" class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="company2" name="company2"
                                                                        class="form-control" placeholder="N/A"></td>
                                                                <td><input type="text" id="licenseType2"
                                                                        name="licenseType2" class="form-control"></td>
                                                                <td><input type="text" id="licenseNo2" name="licenseNo2"
                                                                        class="form-control"></td>
                                                                <td><input type="text" id="yearIssued2"
                                                                        name="yearIssued2" class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="company3" name="company3"
                                                                        class="form-control" placeholder="N/A"></td>
                                                                <td><input type="text" id="licenseType3"
                                                                        name="licenseType3" class="form-control"></td>
                                                                <td><input type="text" id="licenseNo3" name="licenseNo3"
                                                                        class="form-control"></td>
                                                                <td><input type="text" id="yearIssued3"
                                                                        name="yearIssued3" class="form-control"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label>11. Have you filed your income tax return for the preceding
                                                    year?</label>
                                                <input type="text" id="taxReturnFiled" name="taxReturnFiled"
                                                    class="form-control" value="NO" readonly>

                                                <label>If not, give reason:</label>
                                                <input type="text" id="taxReturnNotFiledReason"
                                                    name="taxReturnNotFiledReason" class="form-control" value="PANDEMIC"
                                                    readonly><br><br>
                                            </div>
                                            <div class="form-group">
                                                <label>12. In the blanks below, state your last (2) employers.</label>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Name of Employer</th>
                                                                <th>Position</th>
                                                                <th>Inclusive Dates</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" id="employer1" name="employer1"
                                                                        class="form-control"></td>
                                                                <td><input type="text" id="position1" name="position1"
                                                                        class="form-control"></td>
                                                                <td><input type="date" id="dates1" name="dates1"
                                                                        class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="employer2" name="employer2"
                                                                        class="form-control"></td>
                                                                <td><input type="text" id="position2" name="position2"
                                                                        class="form-control"></td>
                                                                <td><input type="date" id="dates2" name="dates2"
                                                                        class="form-control"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label>13. Are you an official or an employee of an insurance company or
                                                    broker?</label><br>
                                                <input type="text" id="insuranceEmployee" name="insuranceEmployee"
                                                    class="form-control" value="NO" readonly>

                                                <label>If yes, give the position held:</label>
                                                <input type="text" id="positionHeld" name="positionHeld"
                                                    class="form-control" value="N/A" readonly><br><br>
                                            </div>

                                            <div class="form-group">
                                                <label>14. Are you a government employee?</label>
                                                <input type="text" id="governmentEmployee" name="governmentEmployee"
                                                    class="form-control" value="NO" readonly>
                                                <label style="text-align: justify;">If yes, attach the necessary
                                                    clearance/permission from the Head of the Department or Agency in
                                                    accordance with Section 18, of Memorandum Circular No. 15, series of
                                                    1999 of the Civil Service Commission.</label><br><br>
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Executed this
                                                    <input type="text" id="date" name="date"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="date">
                                                    day of <input type="text" id="month" name="month"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="month">,
                                                    <input type="text" id="year" name="year"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="year">, at
                                                    <input type="text" id="place" name="place"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="place">, Philippines.
                                                </label><br><br>

                                                <label><input type="text" id="applicantName" name="applicantName"
                                                        class="form-control" placeholder="applicant"></label><br>
                                                <label for="applicant">Applicant</label>
                                            </div><br><br><br>

                                            <div class="form-group">
                                                <h4>AFFIDAVIT OF VERIFICATION</h4>

                                                <p>Republic of the Philippines)<br>
                                                    Province/City of <input type="text" id="provinceCity"
                                                        name="provinceCity"
                                                        style="width: 170px;;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="Province/City"> S.S.</p>

                                                <p>I, <input type="text" id="applicantName" name="applicantName"
                                                        style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="Name">, being duly sworn, depose and say that I am
                                                    the person named in and who signed the foregoing application; that I
                                                    know the contents thereof and the statements made and answers to
                                                    question therein are true.</p><br>

                                                <p><input type="text" id="affiant" name="affiant" class="form-control"
                                                        placeholder="Affiant">
                                                    Affiant</p><br>

                                                <p>TIN <input type="text" id="tin" name="tin" class="form-control">
                                                    SSS No. <input type="text" id="sss" name="sss" class="form-control">
                                                </p>

                                                <p style="text-align: justify;">SUBSCRIBED AND SWORN TO before me this
                                                    <input type="text" id="day" name="day"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;">
                                                    day of <input type="text" id="month" name="month"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="month">,
                                                    <input type="text" id="year" name="year"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="year">,<br>
                                                    Affiant/s exhibited to me his/her TIN/SSS/Passport/Postal/LTO/
                                                    <input type="text" id="exhibit" name="exhibit"
                                                        style="width: 150px;  padding:5px 5px; border-radius: 13px;">.
                                                </p><br><br>

                                                <p style="text-align: justify;">APPROVED AND COUNTERSIGNED for Allianz
                                                    PNB Life Insurance, Inc. for the solicitation or procurement of
                                                    application for life/variable/non-life insurance</p>
                                            </div><br><br>

                                            <div class="form-group">
                                                <h4>CERTIFICATE OF WAIVER</h4>

                                                <p>WE HEREBY CERTIFY:</p>

                                                <p style="text-align: justify;">That we know the applicant <input
                                                        type="text" id="applicant" name="applicant"
                                                        style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="applicant">, that a thorough investigation has been
                                                    made into his/her character, conduct and fitness; he/she is of good
                                                    moral character and worthy of a Certificate of Authority, and that
                                                    he/she has had experience in each of the kinds of insurance he/she
                                                    proposes to write or solicit under the Certificate of Authority
                                                    applied for.</p>

                                                <p style="text-align: justify;">That we have communicated with the
                                                    former and present employees of the applicant and the replies have
                                                    been satisfactory.</p>

                                                <p style="text-align: justify;">That to the best of our knowledge,
                                                    information and belief, all statements and answer contained in the
                                                    application have been in the handwriting of the applicant with
                                                    respect to the questions applicable to him/her.</p>

                                                <p style="text-align: justify;">If and when the agency is terminated,
                                                    written notice thereof will be given forthwith to the Insurance
                                                    Commission together with the reason therefore.</p>

                                                <p style="text-align: justify;">In consideration of the Certificate of
                                                    Authority to be issued to the above-mentioned applicant, under the
                                                    provision of Section 299 of the Insurance Code, we hereby waive, on
                                                    behalf of –</p><br>

                                                <p style="text-align: center;"><input type="text" id="companyName"
                                                        name="companyName"
                                                        style="width: 40%;  padding:5px 5px; border-radius: 13px; text-align: center;"
                                                        value="ALLIANZ PNB LIFE INSURANCE, INC." readonly><br> (Company
                                                    Name)</p><br>

                                                <p>the right to appeal to the Secretary of Finance in case of revocation
                                                    by the Insurance Commissioner of the certificate to be issued in
                                                    favor of the above-mentioned applicant and agree to cancel at once
                                                    the contract of agency between said applicant and the company upon
                                                    receipt of the notice of revocation.</p>

                                                <p>Executed in <input type="text" id="place" name="place"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="place"> on <input type="text" id="date" name="date"
                                                        style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="date"> TIN 204-145-589-000.</p><br>
                                            </div>
                                            <p>By <input type="text" id="authorizedRepresentative"
                                                    name="authorizedRepresentative"
                                                    style="width: 40%;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="Province/City"><br> Authorized Representative of the
                                                Company</p><br><br>
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </div>
    <!-- JAVASCRIPT FILES -->
    <script src="AdminInfo/js/jquery.min.js"></script>
    <script src="AdminInfo/js/bootstrap.bundle.min.js"></script>
    <script src="AdminInfo/js/custom.js"></script>
</body>

</html>