                <!--CONTACT SECTION START-->
                <div class="bg-white overflow-hidden">
                    <div class="row">
                        <div class="lg:w-1/2 w-full relative bg-cover max-lg:h-125"
                            style="background-image: url(assets/images/background/frm-left.jpg);">
                            <div
                                class="rounded-3xl xl:py-8.75 xl:px-12.5 p-5 absolute bottom-12.5 right-12.5 left-12.5 bg-primary/30 backdrop-blur-[7px] max-xl:text-center">
                                <h4 class="xl:text-52 !font-normal !text-citrusyellow !font-display">Hi there!</h4>
                                <h2 class="xl:text-6xl lg:text-4xl text-28 !font-normal !text-white !font-display">What
                                    can
                                    I do for you today?</h2>
                            </div>
                        </div>
                        <div class="lg:w-1/2 w-full">
                            <div class="xl:p-12.5 xl:pl-9.5 lg:p-3 lg:pl-0 py-12.5 md:px-5 sm:px-9 px-3">
                                <div
                                    class="bg-eggshell xl:py-15 xl:px-12.5 p-7.5 rounded-3xl max-lg:mx-auto max-lg:max-w-160 max-md:max-w-full">
                                    <!-- TITLE START-->
                                    <div class="sm:mb-15 mb-7.5">
                                        <h2 class="xl:text-46 md:text-40 text-3xl mb-2.5"><span
                                                class="text-citrusyellow">Reach</span> & Get in Touch With Us!</h2>
                                        <div class="text-base">We'love to hear from you. Our friendly team is always
                                            here
                                            to chat</div>
                                    </div>
                                    <!-- TITLE END-->
                                    <form class="dz-form dzForm" method="POST" action="assets/script/contact_smtp.php">
                                        <div class="dzSubscribeMsg"></div>
                                        <input type="hidden"
                                            class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                            name="dzToDo" value="Contact">
                                        <input type="hidden"
                                            class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                            name="reCaptchaEnable" value="0">
                                        <div class="dzFormMsg"></div>

                                        <div class="mb-5">
                                            <input required type="text" name="dzName" id="fullname"
                                                placeholder="Enter Your Name"
                                                class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor">
                                        </div>
                                        <div class="mb-5">
                                            <input required type="email" name="dzEmail" id="emailaddress"
                                                placeholder="Enter Email Address"
                                                class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor">
                                        </div>
                                        <div class="mb-5">
                                            <input required type="text" name="dzOther" id="Subject"
                                                placeholder="Select Your Subject"
                                                class="block w-full sm:h-18.5 h-12.5 rounded-5xl border border-primary/20 sm:py-5 sm:px-10 py-1.25 px-3.75 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor">
                                        </div>
                                        <div class="mb-5">
                                            <textarea placeholder="Write here" name="dzMessage" id="message"
                                                class="block w-full min-h-42 h-full rounded-3xl border border-primary/20 py-10 px-7.5 sm:text-base text-sm text-bodycolor bg-white outline-0 placeholder:text-bodycolor"
                                                placeholder="Message"></textarea>
                                        </div>
                                        <div class="mb-5">
                                            <div class="input-recaptcha">
                                                <div class="g-recaptcha" data-sitekey="<!-- Put your reCaptcha Key -->"
                                                    data-callback="verifyRecaptchaCallback"
                                                    data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control hidden" style="display:none;"
                                                    data-recaptcha="true" required
                                                    data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                        <button name="submit" type="submit" value="Submit"
                                            class="site-button butn-bg-shape">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CONTACT SECTION END-->
