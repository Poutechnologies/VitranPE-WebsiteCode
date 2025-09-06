<div class="contact-form-wrapper">
    <div class="contact-form  p-4 rounded shadow">
        <h2 class="text-center mb-4 text-black ">Get in Touch</h2>
        <form action="/includes/process_form.php" method="POST" id="contactForm">
            <div class="row gy-3">
                <div class="col-md-6 col-12">
                    <label for="firstName" class="form-label text-black">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="col-md-6 col-12">
                    <label for="lastName" class="form-label text-black">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="col-md-6 col-12">
                    <label for="phone" class="form-label text-black">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="col-md-6 col-12">
                    <label for="email" class="form-label text-black">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-12">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-select" id="service" name="service" required>
                        <option value="" disabled selected>Select a service</option>
                        <option class="text-black" value="Moving">Moving</option>
                        <option value="Ride">Ride</option>
                        <option value="Same day delivery">Same day delivery</option>
                        <option value="Delivery for Businesses">Delivery for Businesses</option>
                        <option value="Scheduled Shipments">Scheduled Shipments</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label text-black">How can we help you?</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <label class="form-check-label" for="acceptTerms">
                            <input class="form-check-input " type="checkbox" id="acceptTerms" required>
                            I accept the <a href="/privacy.php" target="_blank">terms and conditions</a>
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="g-recaptcha btn-custom px-4 py-2" 
                        data-sitekey="6Lfx478rAAAAABIGgk6KItdz-8WyVACYAA8pXx1Y" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


