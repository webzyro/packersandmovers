<div class="why-choose-us dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="why-choose-box">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">why choose us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Why we're the preferred choice
                                <span>for moving</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Body Start -->
                        <div class="why-choose-body wow fadeInUp" data-wow-delay="0.2s">
                            <ul>
                                <li>Timely service with no hidden fees.</li>
                                <li>Safe, secure transport for your belongings.</li>
                                <li>Customized moving plans to fit your needs.</li>
                                <li>Eco-friendly practices for a sustainable move.</li>
                            </ul>
                        </div>
                        <!-- Why Choose Body End -->
                    </div>
                    <!-- Why Choose Content End -->

                    <!-- Request Quote Form Start -->
                    <div class="request-quote-form-box wow fadeInUp" data-wow-delay="0.4s">
                        <h3>request a quote</h3>

                        <!-- Request Quote Form Start -->
                        <div class="request-quote-form">
                            <form id="requestquoteForm" action="#" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="name"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Phone" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="date" name="date" class="form-control" id="date" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="distance" class="form-control" id="distance"
                                            placeholder="distance" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <select name="movetype" class="form-control form-select" id="movetype" required>
                                            <option value="" disabled selected>move type</option>
                                            <option value="household">Household Move</option>
                                            <option value="office">Office Move</option>
                                            <option value="intercity">Intercity Relocation</option>
                                            <option value="local">Local Shifting</option>
                                            <option value="international">International Move</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <select name="services" class="form-control form-select" id="services" required>
                                            <option value="" disabled selected>service type</option>
                                            <option value="residential_moving">Residential Moving</option>
                                            <option value="commercial_moving">Commercial Moving</option>
                                            <option value="specialty_item">Specialty Item Moving</option>
                                            <option value="eco_friendly">Eco-Friendly Moving</option>
                                            <option value="office_relocation">Office Relocation</option>
                                            <option value="packing_unpacking">Packing & Unpacking</option>
                                            <option value="storage_solutions">Storage Solutions</option>
                                            <option value="moving_assistance">Moving Assistance</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn-default">contact us now</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Request Quote Form End -->
                    </div>
                    <!-- Request Quote Form End -->
                </div>
            </div>
        </div>
    </div>
</div>