<x-layout>
    <x-breadcrumb title="Booking success" />
    <style>
        .success-page-container {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .success-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            animation: slideUp 0.5s ease-out;
        }

        .success-icon-wrapper {
            width: 80px;
            height: 80px;
            background: #e8f5e9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .success-icon {
            font-size: 40px;
            color: #2e7d32;
        }

        .success-title {
            color: #1a1a1a;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .success-message {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .payment-id-box {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            border: 1px dashed #bdbdbd;
        }

        .payment-label {
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #757575;
            margin-bottom: 5px;
        }

        .payment-id {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            letter-spacing: 0.5px;
        }

        .important-note {
            font-size: 13px;
            color: #ef5350;
            margin-bottom: 30px;
            font-style: italic;
        }

        .btn-home {
            background: var(--primary-color, #ffc107);
            /* Fallback to a standard yellow if var not defined */
            color: #000;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.2s, box-shadow 0.2s;
            display: inline-block;
            border: none;
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: #000;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="success-page-container">
        <div class="success-card">
            <div class="success-icon-wrapper">
                <i class="fa-solid fa-check success-icon"></i>
            </div>

            <h1 class="success-title">Booking Successful!</h1>
            <p class="success-message">Your booking has been successfully booked. Our team will contact you shortly to
                confirm the details.</p>

            <div class="payment-id-box">
                <span class="payment-label">Booking Reference</span>
                <span class="payment-id">Your booking is being processed</span>
            </div>

            <p class="important-note">
                <i class="fa-solid fa-circle-info me-1"></i>
                Our team will contact you shortly with the confirmation details.
            </p>

            <a href="{{ route('home') }}" class="btn-home">
                <i class="fa-solid fa-house me-2"></i>Back to Home
            </a>
        </div>
    </div>
</x-layout>