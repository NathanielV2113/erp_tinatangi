<style>
    #loading-screen {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loader {
        width: 50px;
        height: 50px;
        border: 5px solid #fff;
        border-top-color: transparent;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }
</style>
<div class="flex flex-col gap-6">
    <div id="loading-screen">
        <div class="loader"></div>
    </div>
    <x-auth-header :title="__('Enter OTP')" :description="__('Please enter the OTP sent to your email address.')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form action="{{ route('register.store') }}" id="myForm" class="flex flex-col gap-6">
        <!-- Name -->
        @csrf
        <flux:input
            id="otp"
            :label="__('')"
            type="text"
            required
            autofocus
            maxlength="8"
            :placeholder="__('XXXXXXXX')" />
        <!-- {{ $otp }} -->

        <input type="hidden" name="name" value="{{ $request->name }}">
        <input type="hidden" name="email" value="{{ $request->email }}">
        <input type="hidden" name="password" value="{{ $request->password }}">
        <input type="hidden" name="password_confirmation" value="{{ $request->password_confirmation }}">

        <div class="flex items-center justify-end">
            <flux:button id="create" type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>
</div>
<script>
    window.onload = function() {
        document.getElementById("loading-screen").style.display = "none";
    };
    document.documentElement.onload = function() {
        document.getElementById("loading-screen").style.display = "flex";
    };
    document.body.style.overflow = "hidden";

    const createButton = document.getElementById('create');
    createButton.addEventListener('click', function(event) {
        event.preventDefault();
        var OTP = {{$otp}};
        var _OTP = OTP.toString();
        var inputOTP = document.getElementById('otp').value;
        // console.log(typeof(inputOTP));
        console.log(_OTP);
        // console.log(inputOTP);
        if (inputOTP === '') {
            Swal.fire({
                icon: 'question',
                title: 'Warning',
                text: 'Please enter the OTP.',
            });
            return;
        } else if (inputOTP.length < 8) {
            Swal.fire({
                icon: 'question',
                title: 'Warning',
                text: 'Please enter a valid OTP.',
            });
            return;
        } else if (inputOTP == _OTP) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'OTP verified successfully.',
            });
            document.getElementById('myForm').submit();
            return;
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Invalid OTP. Please try again.',
            });
            return;
        }
    });
</script>