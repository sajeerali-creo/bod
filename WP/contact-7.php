<form id="cform" class="mil-mb-90 cform">
    <div class="row">
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                <label class="mil-upper"><span>Full Name</span><span class="mil-required">*</span></label>
                [text* full_name placeholder "Enter Your Name Here"]
            </div>

        </div>
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                <label class="mil-upper"><span>Email address</span><span class="mil-required">*</span></label>
                [email* email-id placeholder "Enter Your Email Here"]
            </div>

        </div>
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                <label class="mil-upper"><span>Phone</span><span class="mil-required">*</span></label>
                [tel* phone_number placeholder "Enter Your Phone Here"]
            </div>

        </div>
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                <label class="mil-upper"><span>Budget</span><span class="mil-required">*</span></label>
                [text budjet placeholder "Enter Your budget Here"]
            </div>

        </div>
        <div class="col-lg-12">

            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                <label class="mil-upper"><span>Message</span><span class="mil-required">*</span></label>
                [textarea message placeholder] Enter Your Message Here [/textarea]
            </div>

        </div>
    
        <div class="col-lg-12">
           [submit class:mil-button class:mil-up "Send Now"]
        </div>
    </div>
</form>