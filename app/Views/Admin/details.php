<?= view('Admin/chop/head') ?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="container mt-5" method="post" action="/newAgent">
                        <fieldset>
                            <h2><?= isset($lifechangerform['fname']) ? $lifechangerform['fname'] : '' ?></h2>
                            <h3>Applicant Name: <?= isset($lifechangerform['fname']) ? $lifechangerform['fname'] : '' ?></h3>
                            <input type="hidden" name="id" class="btn btn-success" value="<?= isset($lifechangerform['id']) ? $lifechangerform['id'] : '' ?>">
                            <input type="hidden" name="user_id" class="btn btn-success" value="<?= isset($lifechangerform['user_id']) ? $lifechangerform['user_id'] : '' ?>">
                            <a href="/ManageApplicant" class="btn btn-primary">Back</a>
                            <input type="submit" class="btn btn-success" value="Confirm">
                            <div class="form-group">
                                <label for="position">Position applying for:</label>
                                <input type="text" readonly id="position" name="positionApplying" class="form-control" value="<?= isset($lifechangerform['position']) ? $lifechangerform['position'] : 'Agent' ?>" required readonly>
                                <label for="preferredArea">Preferred area:</label>
                                <input type="text" readonly id="preferredArea" name="preferredArea" class="form-control" value="<?= isset($lifechangerform['preferredArea']) ? $lifechangerform['preferredArea'] : '' ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Source:</label><br>
                                <input type="checkbox" disabled id="referral" name="referral" value="yes" <?= isset($lifechangerform['referral']) && $lifechangerform['referral'] === 'yes' ? 'checked' : '' ?>>
                                <label for="referral">Referral</label>

                                <label for="referralBy">by whom:</label>
                                <input type="text" readonly id="referralBy" name="referralBy" class="form-control" value="<?= isset($lifechangerform['referralBy']) ? $lifechangerform['referralBy'] : '' ?>">

                                <input type="checkbox" disabled id="onlineAd" name="onlineAd" value="Online Advertisement" <?= isset($lifechangerform['onlineAd']) && $lifechangerform['onlineAd'] === 'Online Advertisement' ? 'checked' : '' ?>>
                                <label for="onlineAd">Online Advertisement</label>

                                <input type="checkbox" disabled id="walkIn" name="walkIn" value="yes" <?= isset($lifechangerform['walkIn']) && $lifechangerform['walkIn'] === 'yes' ? 'checked' : '' ?>>
                                <label for="walkIn">Walk-In</label>

                                <input type="checkbox" disabled id="others" name="othersRef" value="yes" <?= isset($lifechangerform['othersRef']) && $lifechangerform['othersRef'] === 'yes' ? 'checked' : '' ?>>
                                <label for="others">Others</label><br><br>
                            </div>

                            <div class="form-group">
                                <h2>Personal information</h2>
                                <label for="name">Name:</label>
                                <input type="text" readonly id="name" name="Agentfullname" class="form-control" value="<?= isset($lifechangerform['fname']) ? $lifechangerform['fname'] : '' ?>" required><br>

                                <label for="nickname">Nickname:</label>
                                <input type="text" readonly id="nickname" name="nickname" class="form-control" value="<?= isset($lifechangerform['nickname']) ? $lifechangerform['nickname'] : '' ?>"><br>

                                <label for="birthdate">Birth date:</label>
                                <input type="date" readonly id="birthdate" name="birthdate" class="form-control" value="<?= isset($lifechangerform['birthdate']) ? $lifechangerform['birthdate'] : '' ?>" required><br>

                                <label for="placeOfBirth">Place of birth:</label>
                                <input type="text" readonly id="placeOfBirth" name="placeOfBirth" class="form-control" value="<?= isset($lifechangerform['placeOfBirth']) ? $lifechangerform['placeOfBirth'] : '' ?>" required><br>

                                <label for="gender">Gender</label>
                                <input type="text" id="gender" name="gender" class="form-control" value="<?= isset($lifechangerform['gender']) ? $lifechangerform['gender'] : '' ?>" readonly>
                                <br>
                                <label for="bloodType">bloodType</label>
                                <input type="text" id="bloodType" name="bloodType" class="form-control" value="<?= isset($lifechangerform['bloodType']) ? $lifechangerform['bloodType'] : '' ?>" readonly>

                                <br>

                                <label for="homeAddress">Home address:</label>
                                <input type="text" readonly id="homeAddress" name="homeAddress" class="form-control" value="<?= isset($lifechangerform['homeAddress']) ? $lifechangerform['homeAddress'] : '' ?>" required><br>

                                <label for="mobileNo">Mobile Number:</label>
                                <input type="text" readonly id="mobileNo" name="mobileNo" class="form-control" value="<?= isset($lifechangerform['mobileNo']) ? $lifechangerform['mobileNo'] : '' ?>" required><br>

                                <label for="landline">Landline:</label>
                                <input type="text" readonly id="landline" name="landline" value="<?= isset($lifechangerform['landline']) ? $lifechangerform['landline'] : '' ?>" class="form-control"><br>

                                <label for="email">Email Address:</label>
                                <input type="email" readonly id="email" name="email" class="form-control" value="<?= isset($lifechangerform['email']) ? $lifechangerform['email'] : '' ?>"><br>
                            </div>
                            <div class="form-group">
                                <label for="citizenship">Citizenship:</label><br>
                                <input type="checkbox" disabled id="citizenship" name="citizenship" value="Filipino" <?= isset($lifechangerform['citizenship']) && $lifechangerform['citizenship'] === 'Filipino' ? 'checked' : '' ?>>
                                <label for="filipino">Filipino</label>
                                <label for="others">Others, please specify</label>
                                <input type="text" readonly id="others" name="others" class="form-control" value="<?= isset($lifechangerform['othersCitizenship']) ? $lifechangerform['othersCitizenship'] : '' ?>"><br>

                                <label for="naturalizationInfo">If naturalized citizen of the
                                    Philippines, give date and place of
                                    naturalization and attached photocopy of certificate of
                                    naturalization:</label>
                                <input type="text" readonly id="naturalizationInfo" name="naturalizationInfo" class="form-control"><br>
                                <label for="maritalStatus">Marital Status</label>
                                <input type="text" id="maritalStatus" name="maritalStatus" class="form-control" value="<?= isset($lifechangerform['maritalStatus']) ? $lifechangerform['maritalStatus'] : '' ?>" readonly>

                                <br>

                                <div id="ifMarried">
                                    <label for="maidenName">If Married, a) Maiden Name</label>
                                    <input type="text" readonly id="maidenName" name="maidenName" class="form-control" value="<?= isset($lifechangerform['maidenName']) ? $lifechangerform['maidenName'] : '' ?>"><br>

                                    <label for="spouseName">b) Name of Spouse:</label>
                                    <input type="text" readonly id="spouseName" name="spouseName" class="form-control" value="<?= isset($lifechangerform['spouseName']) ? $lifechangerform['spouseName'] : '' ?>"><br>
                                </div>

                                <label for="sssNo">SSS No.:</label>
                                <input type="text" readonly id="sssNo" name="sssNo" class="form-control" value="<?= isset($lifechangerform['sssNo']) ? $lifechangerform['sssNo'] : '' ?>"><br>

                                <label for="tin">Tax Identification No.:</label>
                                <input type="text" readonly id="tin" name="tin" class="form-control" value="<?= isset($lifechangerform['tin']) ? $lifechangerform['tin'] : '' ?>"><br>

                                <label for="lifeInsuranceExperience">Life Insurance Experience:</label>
                                <input type="checkbox" disabled id="yesLife" name="lifeInsuranceExperience" value="yes" <?= isset($lifechangerform['lifeInsuranceExperience']) && $lifechangerform['lifeInsuranceExperience'] === 'yes' ? 'checked' : '' ?>>
                                <label for="yesLife">Yes</label><br><br>

                                <input type="checkbox" disabled id="noLife" name="lifeInsuranceExperience" value="No" <?= isset($lifechangerform['lifeInsuranceExperience']) && $lifechangerform['lifeInsuranceExperience'] === 'No' ? 'checked' : '' ?>>
                                <label for="noLife">No</label><br><br>

                                <label for="insuranceType">If yes, check the type:</label><br>
                                <input type="checkbox" disabled id="traditional" name="traditional" value="traditional" <?= isset($lifechangerform['traditional']) && $lifechangerform['traditional'] === 'traditional' ? 'checked' : '' ?>>
                                <label for="traditional">Traditional</label>

                                <input type="checkbox" disabled id="variable" name="variable" value="variable" <?= isset($lifechangerform['variable']) && $lifechangerform['variable'] === 'variable' ? 'checked' : '' ?>>
                                <label for="variable">Variable</label><br><br>

                                <label for="recentInsuranceCompany">Most recent Life Insurance
                                    Company:</label>
                                <input type="text" readonly id="recentInsuranceCompany" name="recentInsuranceCompany" class="form-control" value="<?= isset($lifechangerform['recentInsuranceCompany']) ? $lifechangerform['recentInsuranceCompany'] : '' ?>"><br>
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
                                        <td><input type="text" readonly name="highSchool" class="form-control text-center" value="<?= isset($lifechangerform['highSchool']) ? $lifechangerform['highSchool'] : '' ?>">
                                        </td>
                                        <td><input type="text" readonly name="highSchoolCourse" class="form-control text-center" value="<?= isset($lifechangerform['highSchoolCourse']) ? $lifechangerform['highSchoolCourse'] : '' ?>">
                                        </td>
                                        <td><input type="date" readonly name="highSchoolYear" class="form-control text-center" value="<?= isset($lifechangerform['highSchoolYear']) ? $lifechangerform['highSchoolYear'] : '' ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>College</td>
                                        <td><input type="text" readonly name="college" value="<?= isset($lifechangerform['college']) ? $lifechangerform['college'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="collegeCourse" value="<?= isset($lifechangerform['collegeCourse']) ? $lifechangerform['collegeCourse'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="collegeYear" value="<?= isset($lifechangerform['collegeYear']) ? $lifechangerform['collegeYear'] : '' ?>" class="form-control text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>Graduate School</td>
                                        <td><input type="text" readonly name="graduateSchool" value="<?= isset($lifechangerform['graduateSchool']) ? $lifechangerform['graduateSchool'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="graduateCourse" value="<?= isset($lifechangerform['graduateCourse']) ? $lifechangerform['graduateCourse'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="graduateYear" value="<?= isset($lifechangerform['graduateYear']) ? $lifechangerform['graduateYear'] : '' ?>" class="form-control text-center"></td>
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
                                        <td><input type="text" readonly name="companyName1" value="<?= isset($lifechangerform['companyName1']) ? $lifechangerform['companyName1'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="position1" value="<?= isset($lifechangerform['position1']) ? $lifechangerform['position1'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="employmentFrom1" value="<?= isset($lifechangerform['employmentFrom1']) ? $lifechangerform['employmentFrom1'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="employmentTo1" value="<?= isset($lifechangerform['employmentTo1']) ? $lifechangerform['employmentTo1'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="reason1" value="<?= isset($lifechangerform['reason1']) ? $lifechangerform['reason1'] : '' ?>" class="form-control text-center"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" readonly name="companyName2" value="<?= isset($lifechangerform['companyName2']) ? $lifechangerform['companyName2'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="position2" value="<?= isset($lifechangerform['position2']) ? $lifechangerform['position2'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="employmentFrom2" value="<?= isset($lifechangerform['employmentFrom2']) ? $lifechangerform['employmentFrom2'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="employmentTo2" value="<?= isset($lifechangerform['employmentTo2']) ? $lifechangerform['employmentTo2'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="reason2" value="<?= isset($lifechangerform['reason2']) ? $lifechangerform['reason2'] : '' ?>" class="form-control text-center"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" readonly name="companyName3" value="<?= isset($lifechangerform['companyName3']) ? $lifechangerform['companyName3'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="position3" value="<?= isset($lifechangerform['position3']) ? $lifechangerform['position3'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="employmentFrom3" value="<?= isset($lifechangerform['employmentFrom3']) ? $lifechangerform['employmentFrom3'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="date" readonly name="employmentTo3" value="<?= isset($lifechangerform['employmentTo3']) ? $lifechangerform['employmentTo3'] : '' ?>" class="form-control text-center"></td>
                                        <td><input type="text" readonly name="reason3" value="<?= isset($lifechangerform['reason3']) ? $lifechangerform['reason3'] : '' ?>" class="form-control text-center"></td>
                                    </tr>
                                </table>
                            </div>

                            <h2>Most recent employer's contact details</h2>
                            <table class="table" border="1">
                                <tr>
                                    <td>Company Name:<input type="text" readonly name="companyName" value="<?= isset($lifechangerform['companyName']) ? $lifechangerform['companyName'] : '' ?>" class="form-control"></td>
                                    <td>Position:<input type="text" readonly name="resposition" value="<?= isset($lifechangerform['resposition']) ? $lifechangerform['resposition'] : '' ?>" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">Employer's contact
                                        details:</td>
                                </tr>
                                <tr>
                                    <td><input type="text" readonly name="contactName" class="form-control" value="<?= isset($lifechangerform['contactName']) ? $lifechangerform['contactName'] : '' ?>" placeholder="Contact Name:"></td>
                                    <td><input type="text" readonly name="contactPosition" class="form-control" value="<?= isset($lifechangerform['contactPosition']) ? $lifechangerform['contactPosition'] : '' ?>" placeholder="Position:"></td>
                                </tr>
                                <tr>
                                    <td><input type="email" readonly name="emailAddress" class="form-control" value="<?= isset($lifechangerform['emailAddress']) ? $lifechangerform['emailAddress'] : '' ?>" placeholder="Email Address:"></td>
                                    <td><input type="text" readonly name="contactNumber" class="form-control" value="<?= isset($lifechangerform['contactNumber']) ? $lifechangerform['contactNumber'] : '' ?>" placeholder="Contact Number:"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">If currently employed, have you already tendered
                                        your resignation?
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="yesCheckbox">Yes</label>
                                            <input type="checkbox" disabled name="yescuremployed" class="form-check-input" value="yes" <?= isset($lifechangerform['yescuremployed']) && $lifechangerform['yescuremployed'] === 'yes' ? 'checked' : '' ?>>

                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="noCheckbox">No</label>
                                            <input type="checkbox" disabled name="yescuremployed" class="form-check-input" value="no" <?= isset($lifechangerform['yescuremployed']) && $lifechangerform['yescuremployed'] === 'no' ? 'checked' : '' ?>>

                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2">1. If answer is No, are we allowed to conduct the
                                        employment verification?
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="yesCheckbox">Yes</label>
                                            <input type="checkbox" disabled name="allowed" class="form-check-input" value="yes" <?= isset($lifechangerform['allowed']) && $lifechangerform['allowed'] === 'yes' ? 'checked' : '' ?>>

                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="noCheckbox">No</label>
                                            <input type="checkbox" disabled name="allowed" class="form-check-input" value="no" <?= isset($lifechangerform['allowed']) && $lifechangerform['allowed'] === 'no' ? 'checked' : '' ?>>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="text" readonly name="ifnoProvdtls" value="<?= isset($lifechangerform['ifnoProvdtls']) ? $lifechangerform['ifnoProvdtls'] : '' ?>" class="form-control" placeholder="2. If answer in number 1 is no, please provide details ">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
                <div class="fixed-bottom text-center mb-3">
                    <a href="<?= base_url('generatePdf/' . $lifechangerform['user_id']) ?>" class="btn btn-success"><i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>