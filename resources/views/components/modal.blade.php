<!-- Get a Quote Modal -->
<div class="modal fade" id="getQuoteModal" tabindex="-1" aria-labelledby="getQuoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered gq-modal-dialog">
        <div class="modal-content gq-modal-content">

            <!-- Modal Header -->
            <div class="modal-header gq-modal-header">
                <div class="gq-header-inner">
                    <span class="gq-header-badge">Free Estimate</span>
                    <h5 class="modal-title gq-modal-title" id="getQuoteModalLabel">
                        Get a <span>Quick Quote</span>
                    </h5>
                    <p class="gq-modal-subtitle">Fill in the details below and we'll get back to you shortly.</p>
                </div>
                <button type="button" class="btn-close gq-close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body gq-modal-body">
                <form id="getQuoteForm" action="{{ route('store-user') }}" method="POST" novalidate>
                    @csrf

                    <!-- Phone Number -->
                    <div class="gq-form-group">
                        <label class="gq-label" for="gq_phone">
                            <i class="fa-solid fa-phone"></i> Phone Number
                        </label>
                        <input type="tel" id="gq_phone" name="phone" class="gq-input" placeholder="e.g. +91 98765 43210"
                            required>
                    </div>

                    <!-- From / To Locations -->
                    <div class="gq-form-row">
                        <div class="gq-form-group">
                            <label class="gq-label" for="gq_from">
                                <i class="fa-solid fa-location-dot"></i> Moving From
                            </label>
                            <input type="text" id="gq_from" name="from" class="gq-input" placeholder="City or Area"
                                required>
                        </div>
                        <div class="gq-form-group">
                            <label class="gq-label" for="gq_to">
                                <i class="fa-solid fa-location-crosshairs"></i> Moving To
                            </label>
                            <input type="text" id="gq_to" name="to" class="gq-input" placeholder="City or Area"
                                required>
                        </div>
                    </div>

                    <!-- Moving Timing -->
                    <div class="gq-form-group">
                        <label class="gq-label" for="gq_timing">
                            <i class="fa-regular fa-calendar-days"></i> When Are You Planning to Move?
                        </label>
                        <div class="gq-select-wrapper">
                            <select id="gq_timing" name="when" class="gq-input gq-select" required>
                                <option value="" disabled selected>Select moving timeline</option>
                                <option value="within_a_week">Within a Week</option>
                                <option value="within_14_days">Within 14 Days</option>
                                <option value="within_a_month">Within a Month</option>
                                <option value="1_3_months">1 – 3 Months</option>
                                <option value="flexible">I'm Flexible</option>
                            </select>
                            <i class="fa-solid fa-chevron-down gq-select-arrow"></i>
                        </div>
                    </div>

                    <!-- Shifting Type -->
                    <div class="gq-form-group">
                        <label class="gq-label" for="gq_shift_type">
                            <i class="fa-solid fa-truck-moving"></i> Type of Shifting
                        </label>
                        <div class="gq-select-wrapper">
                            <select id="gq_shift_type" name="service_type" class="gq-input gq-select" required>
                                <option value="" disabled selected>Select shifting type</option>
                                <option value="household">Household Shifting</option>
                                <option value="office">Office Shifting</option>
                                <option value="vehicle">Vehicle Transportation</option>
                                <option value="international">International Relocation</option>
                                <option value="warehouse">Warehousing & Storage</option>
                                <option value="packing">Packing Only</option>
                            </select>
                            <i class="fa-solid fa-chevron-down gq-select-arrow"></i>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="gq-submit-wrap">
                        <button type="submit" class="gq-submit-btn">
                            <span>Get My Free Quote</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>

                </form>
            </div>
            <!-- /Modal Body -->

        </div>
    </div>
</div>
<!-- /Get a Quote Modal -->