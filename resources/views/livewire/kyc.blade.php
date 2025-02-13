<div>
    <div class="container-fluid content-inner pb-0">
        <div>
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-body d-grid gap-2">
                            <h4 class="card-title">KYC Verification Status:
                                @if ($user->google_auth == '1')
                                    <strong class="text-success">Verified</strong>
                                @elseif ($user->google_auth == '0')
                                    <strong class="text-danger">Not Verified</strong>
                                @else
                                    <strong class="text-warning">Pending</strong>
                                @endif
                            </h4>
                            <p class="card-text">To ensure the security of your account and access all features, KYC
                                verification is required. This helps us confirm your identity and prevent fraudulent
                                activities.</p>
                            @if ($user->google_auth == '0')
                                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">
                                    Enable KYC Verification
                                </button>
                            @elseif ($user->google_auth == '2')
                                <button disabled class="btn btn-primary">KYC under review</button>
                            @elseif ($user->google_auth == '1')
                                <a href="#" class="btn btn-secondary">KYC Verified</a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Modal structure -->
                <div class="modal fade" wire:ignore.self id="exampleModalCenter" tabindex="-1"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">KYC Verification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Complete the following steps to enable your KYC verification. This will help secure
                                    your account and give you access to all features.</p>
                                <p>Please enter the OTP sent to your email <strong
                                        class="text-warning">{{ auth()->user()->email }}</strong> and complete the
                                    verification process.</p>
                                @session('mailSent')
                                    <p class="text-success">{{ session('mailSent') }}</p>
                                @endsession
                                @session('mailFailed')
                                    <p class="text-danger">{{ session('mailFailed') }}</p>
                                @endsession
                                <div class="d-flex align-items-end mb-5 col-md-12">
                                    <div class="form-group col-md-8">
                                        <label class="form-label" for="otp">Verify OTP:</label>
                                        <input name="otp" type="text" class="form-control" id="otp"
                                            placeholder="Enter OTP" wire:model="otp">
                                        @error('otp')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button wire:loading.attr="disabled" type="button" wire:click="sendOtp"
                                        style="height: 40px;" class="btn btn-primary">
                                        <span wire:loading.remove>Send Otp</span>
                                        <span wire:loading>Sending....</span>
                                    </button>
                                </div>
                                @session('otpSuccess')
                                    <p class="text-success">{{ session('otpSuccess') }}</p>
                                @endsession
                                @session('otpError')
                                    <p class="text-danger">{{ session('otpError') }}</p>
                                @endsession
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                <button wire:loading.attr="disabled" type="button" class="btn btn-primary"
                                    wire:click="verifyOtp">
                                    <span wire:loading.remove>Verify</span>
                                    <span wire:loading>Verifying....</span>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Listen for the 'otpVerified' event to close the modal with a 2-second delay
    document.addEventListener('livewire:load', function() {
        @this.on('otpVerified', () => {
            const modal = new bootstrap.Modal(document.getElementById('exampleModalCenter'));

            // Set a 2-second delay before closing the modal
            setTimeout(() => {
                modal.hide();
            }, 2000); // 2000 milliseconds = 2 seconds
        });
    });
</script>
