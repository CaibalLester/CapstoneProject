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
                                        <span><a class="nav-link active" href="/AppForm1">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">LIFE CHANGER</span>
                                            </a></span><br>
                                        <a class="nav-link " href="/AppForm2">
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
                            <a class="nav-link" href="/FA">
                                <i class="bi-person me-2"></i>
                                Agents
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
                <div class="title-group mb-3 text-center">
                    <h3>LIFE CHANGER FORM</h3>
                </div>

                <section class="section">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">

                                    <form class="container mt-5" method="post" action="/form1sv">
                                        <fieldset>
                                            <!-- <div class="row">
                                                Position applying for:  
                                                    <div class="col-xl-1"> 
                                                        <input type="text" id="position" name="positionApplying"
                                                            class="underline-input w-50"
                                                            value="<?= isset($lifechangerform['position']) ? $lifechangerform['position'] : 'Agent' ?>"
                                                            required readonly>
                                                    </div>
                                                    <label for="preferredArea">Preferred area:</label>
                                                    <div class="col-xl-6"> 
                                                        <input type="text" id="preferredArea" name="preferredArea"
                                                            class="underline-input w-50"
                                                            value="<?= isset($lifechangerform['preferredArea']) ? $lifechangerform['preferredArea'] : '' ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <br> -->
                                                
                                                    <div class="form-group">
                                                        <label for="position">Position applying for:</label>
                                                        <input type="text" id="position" name="positionApplying"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['position']) ? $lifechangerform['position'] : 'Agent' ?>"
                                                            required readonly>
                                                        <label for="preferredArea">Preferred area:</label>
                                                        <input type="text" id="preferredArea" name="preferredArea"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['preferredArea']) ? $lifechangerform['preferredArea'] : '' ?>"
                                                            required>
                                                    </div>
                                                    

<!-- <div class="row">
    <div class="col-xl-1">
        <label>Source:</label>
    </div>
    <div class="col-xl-8">
        <input type="checkbox" id="referral" name="referral" value="yes"
            <?= isset($lifechangerform['referral']) && $lifechangerform['referral'] === 'yes' ? 'checked' : '' ?>>
        Referal [by whom:
        <select id="referralBy" name="referralBy" class=" underline-input w-50" required>
            <option value="" disabled selected>Select Agent</option>
            <?php foreach ($agents as $agent): ?>
                <option value="<?= $agent['agent_id']; ?>"
                    <?= (isset($lifechangerform['referralBy']) && $lifechangerform['referralBy'] == $agent['agent_id']) ? 'selected' : ''; ?>>
                    <?= $agent['Agentfullname']; ?>
                </option>
            <?php endforeach; ?>
        </select>]
    </div>
</div> -->



                                                    <div class="form-group">
                                                        <label>Source:</label><br>
                                                        <input type="checkbox" id="referral" name="referral" value="yes"
                                                            <?= isset($lifechangerform['referral']) && $lifechangerform['referral'] === 'yes' ? 'checked' : '' ?>>
                                                        <label for="referral">Referral</label>
                                                        <label for="referralBy">by whom:</label>

                                                        <select id="referralBy" name="referralBy" class="form-control"
                                                            required>
                                                            <option value="" disabled selected>Select Agent</option>
                                                            <?php foreach ($agents as $agent): ?>
                                                                <option value="<?= $agent['agent_id']; ?>"
                                                                    <?= (isset($lifechangerform['referralBy']) && $lifechangerform['referralBy'] == $agent['agent_id']) ? 'selected' : ''; ?>>
                                                                    <?= $agent['Agentfullname']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                        <input type="checkbox" id="onlineAd" name="onlineAd"
                                                            value="Online Advertisement"
                                                            <?= isset($lifechangerform['onlineAd']) && $lifechangerform['onlineAd'] === 'Online Advertisement' ? 'checked' : '' ?>>
                                                        <label for="onlineAd">Online Advertisement</label>

                                                        <input type="checkbox" id="walkIn" name="walkIn" value="yes"
                                                            <?= isset($lifechangerform['walkIn']) && $lifechangerform['walkIn'] === 'yes' ? 'checked' : '' ?>>
                                                        <label for="walkIn">Walk-In</label>

                                                        <input type="checkbox" id="others" name="othersRef" value="yes"
                                                            <?= isset($lifechangerform['othersRef']) && $lifechangerform['othersRef'] === 'yes' ? 'checked' : '' ?>>
                                                        <label for="others">Others</label><br><br>

                                                    </div>

                                                    <div class="form-group">
                                                        <h6>Personal information</h6>
                                                        <label for="name">Name:</label>
                                                        <input type="text" id="name" name="fullname"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['fname']) ? $lifechangerform['fname'] : '' ?>"
                                                            required><br>

                                                        <label for="nickname">Nickname:</label>
                                                        <input type="text" id="nickname" name="nickname"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['nickname']) ? $lifechangerform['nickname'] : '' ?>"><br>

                                                        <label for="birthdate">Birth date:</label>
                                                        <input type="date" id="birthdate" name="birthdate"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['birthdate']) ? $lifechangerform['birthdate'] : '' ?>"
                                                            required><br>

                                                        <label for="placeOfBirth">Place of birth:</label>
                                                        <input type="text" id="placeOfBirth" name="placeOfBirth"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['placeOfBirth']) ? $lifechangerform['placeOfBirth'] : '' ?>"
                                                            required><br>

                                                        <label for="gender">Gender:</label>
                                                        <select id="gender" name="gender" class="form-control" required>
                                                            <!-- Assuming you want a default option with an empty value -->
                                                            <option value="">Select</option>
                                                            <option value="Male" <?= isset($lifechangerform['gender']) && $lifechangerform['gender'] === 'Male' ? 'selected' : '' ?>>Male
                                                            </option>
                                                            <option value="Female" <?= isset($lifechangerform['gender']) && $lifechangerform['gender'] === 'Female' ? 'selected' : '' ?>>
                                                                Female</option>
                                                        </select>
                                                        <br>

                                                        <label for="bloodType">Blood Type:</label>
                                                        <select id="bloodType" name="bloodType" class="form-control"
                                                            required>
                                                            <option value="">Select</option>
                                                            <option value="N/A" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'N/A' ? 'selected' : '' ?>>N/A
                                                            <option value="A+" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'A+' ? 'selected' : '' ?>>A+
                                                            </option>
                                                            <option value="A-" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'A-' ? 'selected' : '' ?>>A-
                                                            </option>
                                                            <option value="B+" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'B+' ? 'selected' : '' ?>>B+
                                                            </option>
                                                            <option value="B-" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'B-' ? 'selected' : '' ?>>B-
                                                            </option>
                                                            <option value="O+" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'O+' ? 'selected' : '' ?>>O+
                                                            </option>
                                                            <option value="O-" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'O-' ? 'selected' : '' ?>>O-
                                                            </option>
                                                            <option value="AB+" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'AB+' ? 'selected' : '' ?>>AB+
                                                            </option>
                                                            <option value="AB-" <?= isset($lifechangerform['bloodType']) && $lifechangerform['bloodType'] === 'AB-' ? 'selected' : '' ?>>AB-
                                                            </option>
                                                        </select>
                                                        <br>

                                                        <label for="homeAddress">Home address:</label>
                                                        <input type="text" id="homeAddress" name="homeAddress"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['homeAddress']) ? $lifechangerform['homeAddress'] : '' ?>"
                                                            required><br>

                                                        <label for="mobileNo">Mobile Number:</label>
                                                        <input type="text" id="mobileNo" name="mobileNo"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['mobileNo']) ? $lifechangerform['mobileNo'] : '' ?>"
                                                            required><br>

                                                        <label for="landline">Landline:</label>
                                                        <input type="text" id="landline" name="landline"
                                                            value="<?= isset($lifechangerform['landline']) ? $lifechangerform['landline'] : '' ?>"
                                                            class="form-control"><br>

                                                        <label for="email">Email Address:</label>
                                                        <input type="email" id="email" name="email" class="form-control"
                                                            value="<?= isset($lifechangerform['email']) ? $lifechangerform['email'] : '' ?>"><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="citizenship">Citizenship:</label><br>
                                                        <input type="checkbox" id="citizenship" name="citizenship"
                                                            value="Filipino" <?= isset($lifechangerform['citizenship']) && $lifechangerform['citizenship'] === 'Filipino' ? 'checked' : '' ?>>
                                                        <label for="filipino">Filipino</label>
                                                        <label for="others">Others, please specify</label>
                                                        <input type="text" id="others" name="others"
                                                            class="form-control"
                                                            value="<?= isset($lifechangerform['othersCitizenship']) ? $lifechangerform['othersCitizenship'] : '' ?>"><br>

                                                        <label for="naturalizationInfo">If naturalized citizen of the
                                                            Philippines, give date and place of
                                                            naturalization and attached photocopy of certificate of
                                                            naturalization:</label>
                                                        <input type="text" id="naturalizationInfo"
                                                            name="naturalizationInfo" class="form-control"><br>

                                                        <label for="maritalStatus">Marital Status:</label>
                                                        <select id="maritalStatus" name="maritalStatus"
                                                            class="form-control" required>
                                                            <option value="">Select</option>
                                                            <option value="Single"
                                                                <?= isset($lifechangerform['maritalStatus']) && $lifechangerform['maritalStatus'] === 'Single' ? 'selected' : '' ?>>Single</option>
                                                            <option value="Married"
                                                                <?= isset($lifechangerform['maritalStatus']) && $lifechangerform['maritalStatus'] === 'Married' ? 'selected' : '' ?>>Married</option>
                                                            <option value="Divorced"
                                                                <?= isset($lifechangerform['maritalStatus']) && $lifechangerform['maritalStatus'] === 'Divorced' ? 'selected' : '' ?>>Divorced</option>
                                                            <option value="Widowed"
                                                                <?= isset($lifechangerform['maritalStatus']) && $lifechangerform['maritalStatus'] === 'Widowed' ? 'selected' : '' ?>>Widowed</option>
                                                        </select>
                                                        <br>

                                                        <div id="ifMarried">
                                                            <label for="maidenName">If Married, a) Maiden Name</label>
                                                            <input type="text" id="maidenName" name="maidenName"
                                                                class="form-control"
                                                                value="<?= isset($lifechangerform['maidenName']) ? $lifechangerform['maidenName'] : '' ?>"><br>

                                                            <label for="spouseName">b) Name of Spouse:</label>
                                                            <input type="text" id="spouseName" name="spouseName"
                                                                class="form-control"
                                                                value="<?= isset($lifechangerform['spouseName']) ? $lifechangerform['spouseName'] : '' ?>"><br>
                                                        </div>

                                                        <label for="sssNo">SSS No.:</label>
                                                        <input type="text" id="sssNo" name="sssNo" class="form-control"
                                                            value="<?= isset($lifechangerform['sssNo']) ? $lifechangerform['sssNo'] : '' ?>"><br>

                                                        <label for="tin">Tax Identification No.:</label>
                                                        <input type="text" id="tin" name="tin" class="form-control"
                                                            value="<?= isset($lifechangerform['tin']) ? $lifechangerform['tin'] : '' ?>"><br>

                                                        <label for="lifeInsuranceExperience">Life Insurance
                                                            Experience:</label>
                                                        <input type="checkbox" id="yesLife"
                                                            name="lifeInsuranceExperience" value="yes"
                                                            <?= isset($lifechangerform['lifeInsuranceExperience']) && $lifechangerform['lifeInsuranceExperience'] === 'yes' ? 'checked' : '' ?>>
                                                        <label for="yesLife">Yes</label><br><br>

                                                        <input type="checkbox" id="noLife"
                                                            name="lifeInsuranceExperience" value="No"
                                                            <?= isset($lifechangerform['lifeInsuranceExperience']) && $lifechangerform['lifeInsuranceExperience'] === 'No' ? 'checked' : '' ?>>
                                                        <label for="noLife">No</label><br><br>

                                                        <label for="insuranceType">If yes, check the type:</label><br>
                                                        <input type="checkbox" id="traditional" name="traditional"
                                                            value="traditional"
                                                            <?= isset($lifechangerform['traditional']) && $lifechangerform['traditional'] === 'traditional' ? 'checked' : '' ?>>
                                                        <label for="traditional">Traditional</label>

                                                        <input type="checkbox" id="variable" name="variable"
                                                            value="variable" <?= isset($lifechangerform['variable']) && $lifechangerform['variable'] === 'variable' ? 'checked' : '' ?>>
                                                        <label for="variable">Variable</label><br><br>

                                                        <label for="recentInsuranceCompany">Most recent Life Insurance
                                                            Company:</label>
                                                        <input type="text" id="recentInsuranceCompany"
                                                            name="recentInsuranceCompany" class="form-control"
                                                            value="<?= isset($lifechangerform['recentInsuranceCompany']) ? $lifechangerform['recentInsuranceCompany'] : '' ?>"><br>
                                                    </div>

                                                    <h6>Educational Background</h6>
                                                    <div class="table-responsive" style="font-size: 10pt">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th></th>
                                                                <th class="text-center">SCHOOL</th>
                                                                <th class="text-center">COURSE</th>
                                                                <th class="text-center">YEAR GRADUATED</th>
                                                            </tr>
                                                            <tr>
                                                                <td>High School</td>
                                                                <td><input type="text" name="highSchool"
                                                                        class="form-control text-center"
                                                                        value="<?= isset($lifechangerform['highSchool']) ? $lifechangerform['highSchool'] : '' ?>">
                                                                </td>
                                                                <td><input type="text" name="highSchoolCourse"
                                                                        class="form-control text-center"
                                                                        value="<?= isset($lifechangerform['highSchoolCourse']) ? $lifechangerform['highSchoolCourse'] : '' ?>">
                                                                </td>
                                                                <td><input type="date" name="highSchoolYear"
                                                                        class="form-control text-center"
                                                                        value="<?= isset($lifechangerform['highSchoolYear']) ? $lifechangerform['highSchoolYear'] : '' ?>">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>College</td>
                                                                <td><input type="text" name="college"
                                                                        value="<?= isset($lifechangerform['college']) ? $lifechangerform['college'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="collegeCourse"
                                                                        value="<?= isset($lifechangerform['collegeCourse']) ? $lifechangerform['collegeCourse'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="collegeYear"
                                                                        value="<?= isset($lifechangerform['collegeYear']) ? $lifechangerform['collegeYear'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Graduate School</td>
                                                                <td><input type="text" name="graduateSchool"
                                                                        value="<?= isset($lifechangerform['graduateSchool']) ? $lifechangerform['graduateSchool'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="graduateCourse"
                                                                        value="<?= isset($lifechangerform['graduateCourse']) ? $lifechangerform['graduateCourse'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="graduateYear"
                                                                        value="<?= isset($lifechangerform['graduateYear']) ? $lifechangerform['graduateYear'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                    <h6>Employment History</h6>
                                                    <div class="table-responsive" style="font-size: 10pt">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th class="text-center">NAME AND ADDRESS OF EMPLOYER
                                                                </th>
                                                                <th class="text-center">POSITION</th>
                                                                <th class="text-center" colspan="2">EMPLOYMENT DATE</th>
                                                                <th class="text-center">REASON FOR LEAVING</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name="companyName1"
                                                                        value="<?= isset($lifechangerform['companyName1']) ? $lifechangerform['companyName1'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="position1"
                                                                        value="<?= isset($lifechangerform['position1']) ? $lifechangerform['position1'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="employmentFrom1"
                                                                        value="<?= isset($lifechangerform['employmentFrom1']) ? $lifechangerform['employmentFrom1'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="employmentTo1"
                                                                        value="<?= isset($lifechangerform['employmentTo1']) ? $lifechangerform['employmentTo1'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="reason1"
                                                                        value="<?= isset($lifechangerform['reason1']) ? $lifechangerform['reason1'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name="companyName2"
                                                                        value="<?= isset($lifechangerform['companyName2']) ? $lifechangerform['companyName2'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="position2"
                                                                        value="<?= isset($lifechangerform['position2']) ? $lifechangerform['position2'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="employmentFrom2"
                                                                        value="<?= isset($lifechangerform['employmentFrom2']) ? $lifechangerform['employmentFrom2'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="employmentTo2"
                                                                        value="<?= isset($lifechangerform['employmentTo2']) ? $lifechangerform['employmentTo2'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="reason2"
                                                                        value="<?= isset($lifechangerform['reason2']) ? $lifechangerform['reason2'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name="companyName3"
                                                                        value="<?= isset($lifechangerform['companyName3']) ? $lifechangerform['companyName3'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="position3"
                                                                        value="<?= isset($lifechangerform['position3']) ? $lifechangerform['position3'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="employmentFrom3"
                                                                        value="<?= isset($lifechangerform['employmentFrom3']) ? $lifechangerform['employmentFrom3'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="date" name="employmentTo3"
                                                                        value="<?= isset($lifechangerform['employmentTo3']) ? $lifechangerform['employmentTo3'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                                <td><input type="text" name="reason3"
                                                                        value="<?= isset($lifechangerform['reason3']) ? $lifechangerform['reason3'] : '' ?>"
                                                                        class="form-control text-center"></td>
                                                            </tr>
                                                        </table>
                                                    </div>


                                                    <h6>Most recent employer's contact details</h6>
                                                    <table class="table" border="1">
                                                        <tr>
                                                            <td>Company Name:<input type="text" name="companyName"
                                                                    value="<?= isset($lifechangerform['companyName']) ? $lifechangerform['companyName'] : '' ?>"
                                                                    class="form-control"></td>
                                                            <td>Position:<input type="text" name="resposition"
                                                                    value="<?= isset($lifechangerform['resposition']) ? $lifechangerform['resposition'] : '' ?>"
                                                                    class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="text-align: center;">Employer's
                                                                contact
                                                                details:</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" name="contactName"
                                                                    class="form-control"
                                                                    value="<?= isset($lifechangerform['contactName']) ? $lifechangerform['contactName'] : '' ?>"
                                                                    placeholder="Contact Name:"></td>
                                                            <td><input type="text" name="contactPosition"
                                                                    class="form-control"
                                                                    value="<?= isset($lifechangerform['contactPosition']) ? $lifechangerform['contactPosition'] : '' ?>"
                                                                    placeholder="Position:"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="email" name="emailAddress"
                                                                    class="form-control"
                                                                    value="<?= isset($lifechangerform['emailAddress']) ? $lifechangerform['emailAddress'] : '' ?>"
                                                                    placeholder="Email Address:"></td>
                                                            <td><input type="text" name="contactNumber"
                                                                    class="form-control"
                                                                    value="<?= isset($lifechangerform['contactNumber']) ? $lifechangerform['contactNumber'] : '' ?>"
                                                                    placeholder="Contact Number:"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">If currently employed, have you already
                                                                tendered
                                                                your resignation?
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label"
                                                                        for="yesCheckbox">Yes</label>
                                                                    <input type="checkbox" name="yescuremployed"
                                                                        class="form-check-input" value="yes"
                                                                        <?= isset($lifechangerform['yescuremployed']) && $lifechangerform['yescuremployed'] === 'yes' ? 'checked' : '' ?>>

                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label"
                                                                        for="noCheckbox">No</label>
                                                                    <input type="checkbox" name="yescuremployed"
                                                                        class="form-check-input" value="no"
                                                                        <?= isset($lifechangerform['yescuremployed']) && $lifechangerform['yescuremployed'] === 'no' ? 'checked' : '' ?>>

                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">1. If answer is No, are we allowed to
                                                                conduct the
                                                                employment verification?
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label"
                                                                        for="yesCheckbox">Yes</label>
                                                                    <input type="checkbox" name="allowed"
                                                                        class="form-check-input" value="yes"
                                                                        <?= isset($lifechangerform['allowed']) && $lifechangerform['allowed'] === 'yes' ? 'checked' : '' ?>>

                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label"
                                                                        for="noCheckbox">No</label>
                                                                    <input type="checkbox" name="allowed"
                                                                        class="form-check-input" value="no"
                                                                        <?= isset($lifechangerform['allowed']) && $lifechangerform['allowed'] === 'no' ? 'checked' : '' ?>>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">2. If answer in number 1 is no, please
                                                                provide details
                                                                <input type="text" name="ifnoProvdtls"
                                                                    value="<?= isset($lifechangerform['ifnoProvdtls']) ? $lifechangerform['ifnoProvdtls'] : '' ?>"
                                                                    class="form-control">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <input type="submit" value="Save" class="btn btn-primary">
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
    <?= view('Applicant/chop/js'); ?>

</body>

</html>