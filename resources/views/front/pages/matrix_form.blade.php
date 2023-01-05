<div class="section-row global-query-form" id="requestCallBack">
    <div class="container">
        <h3 class="heading heading-2 text-center">
            Interested in Subhash Education Society? <br />
            <span class="apply_online_tag_line">Provide your contact details and our team will call you soon!</span>
        </h3>

        <form id="footerCallBack" class="col-12 global-query-warp text-center" name="footerform" method="post">
            <input type="hidden" name="footerForm" value="submit" />
            <input type="hidden" name="type" value="callback" />
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" name="name" class="form-control" id="formname" placeholder="Full Name" value="" />
                    <span class="validationErrorName validationError"></span>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="email" class="form-control" id="formemail" placeholder="Email id" value="" />
                    <span class="validationErrorEmail validationError"></span>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="mobile" class="form-control" id="formmobile" placeholder="Contact No" value="" maxlength="10" />
                    <span class="validationErrorMobile validationError"></span>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="currentschool" class="form-control" id="formcurrentschool" placeholder="Current School/Coaching" value="" />
                    <span class="validationErrorCurrentschool validationError"></span>
                </div>
                <div class="form-group col-md-6">
                    <select id="currentclass" name="currentclass" class="form-control">
                        <option value="">Course</option>
                        <option value="JEE">IIT JEE</option>
                        <option value="NEET">NEET</option>
                        <option value="Pre-foundation">Pre-foundation</option>
                        <option value="Schooling">Schooling</option>
                    </select>
                    <span class="validationErrorCurrentclass validationError"></span>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <!--<input class="form-check-input" type="checkbox" id="gridCheck">-->
                    <label class="form-check-label" for="gridCheck">
                        By clicking on submit button you are expressly agreeing to Matrix's <a href="https://www.matrixedu.in/page/terms-and-conditions"> Terms of Use </a> and
                        <a href="https://www.matrixedu.in/page/privacy-policy">Privacy Policy</a>
                    </label>
                </div>
            </div>
            <div id="showLoading"></div>
            <button type="submit" class="btn btn-request-call">Request to Call Back</button>
        </form>
    </div>
</div>

