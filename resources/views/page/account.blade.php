@extends('layout.default')

@section('content')
    @if(session('success'))
        <div id="alert-success" class="relative mt-5 mx-auto bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded max-w-screen-sm" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    @if(session('error'))
        <div id="alert-error" class="relative mt-5 mx-auto bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded max-w-screen-sm" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <div class="columns">
        <div class="column main">
            <div id="customer-login-container" class="login-container flex flex-wrap">
                <!-- Login Form Section -->
                <div class="w-full md:w-1/2 pr-2 mb-8 md:mb-0">
                    <p class="text-xl font-medium title-font text-primary mb-4 uppercase">Customer login</p>
                    <div class="card">
                        <form class="form form-login" action="{{ url('login') }}" method="post" id="customer-login-form">
                            @csrf
                            <fieldset class="fieldset login">
                                <legend class="mb-3">
                                    <h2 class="font-medium title-font text-primary">Login</h2>
                                </legend>
                                <div class="text-secondary-darker mb-8">
                                    If you have an account, sign in with your email address.
                                </div>
                                <div class="field">
                                    <label class="label" for="email">
                                        <span>Email</span>
                                    </label>
                                    <div class="control">
                                        <input data-test="login-email" name="email" class="form-input" required
                                               value="" autocomplete="off" id="email" type="email" title="Email">
                                        <div id="email-error" class="error text-red-500"></div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="pass" class="label">
                                        <span>Password</span>
                                    </label>
                                    <div class="control flex items-center">
                                        <input data-test="login-password" name="password" class="form-input" required
                                               autocomplete="off" id="pass" title="Password" type="password">
                                        <div class="cursor-pointer px-4" aria-label="Show Password">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5" width="24" height="24">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions-toolbar flex justify-between pt-4 items-center">
                                    <button data-test="login-submit" type="submit"
                                            class="btn btn-primary disabled:opacity-75" name="send">
                                        <span>Sign In</span>
                                    </button>
                                    <a class="underline text-secondary hover:text-secondary-hover active:text-secondary-active" href="#">
                                        <span>Forgot Your Password?</span>
                                    </a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <!-- Registration Form Section -->
                <div class="w-full md:w-1/2 pl-2">
                    <p class="text-xl font-medium title-font text-primary mb-4 uppercase">Create new customer account</p>
                    <div class="card">
                        <form class="form form-register" action="{{ route('register') }}" method="post"
                              id="customer-register-form">
                            @csrf
                            <fieldset class="fieldset register">
                                <legend class="mb-3">
                                    <h2 class="font-medium title-font text-primary">Personal Information</h2>
                                </legend>
                                <div class="field">
                                    <label class="label" for="firstName">
                                        <span>First Name</span>
                                    </label>
                                    <div class="control">
                                        <input data-test="register-firstName" name="firstName" class="form-input" required
                                               value="" autocomplete="off" id="firstName" type="text" title="First Name">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label" for="lastName">
                                        <span>Last Name</span>
                                    </label>
                                    <div class="control">
                                        <input data-test="register-lastName" name="lastName" class="form-input" required
                                               value="" autocomplete="off" id="lastName" type="text" title="Last Name">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="fieldset register">
                                <legend class="mb-3">
                                    <h2 class="font-medium title-font text-primary">Sign-In Information</h2>
                                </legend>
                                <div class="field">
                                    <label class="label" for="email">
                                        <span>Email</span>
                                    </label>
                                    <div class="control">
                                        <input data-test="register-email" name="email" class="form-input" required
                                               value="" autocomplete="off" id="register-email" type="email" title="Email">
                                        <div id="register-email-error" class="error text-red-500"></div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="password" class="label">
                                        <span>Password</span>
                                    </label>
                                    <div class="control flex items-center">
                                        <input data-test="register-password" name="password" class="form-input" required
                                               autocomplete="off" id="password" title="Password" type="password">
                                        <div id="password-error" class="error text-red-500"></div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="password_confirmation" class="label">
                                        <span>Confirm Password</span>
                                    </label>
                                    <div class="control flex items-center">
                                        <input data-test="register-passwordConfirm" name="password_confirmation"
                                               class="form-input" required autocomplete="off" id="passwordConfirm"
                                               title="Confirm Password" type="password">
                                        <div id="password-confirm-error" class="error text-red-500"></div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="flex items-center mt-2">
                                <input data-test="register-newsletter" name="subscribed" type="checkbox" value="1"
                                       class="checkbox w-4 h-4 rounded">
                                <label for="disabled-checkbox" class="ml-2 mt-2 text-sm font-medium">Sign Up for
                                    Newsletter</label>
                            </div>
                            <div class="actions-toolbar flex justify-between pt-4 items-center">
                                <button data-test="register-submit" type="submit"
                                        class="btn btn-primary disabled:opacity-75" name="send">
                                    <span>Create an Account</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Email and Password Validation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const emailInput = document.getElementById('email');
            const emailError = document.getElementById('email-error');
            const registerEmailInput = document.getElementById('register-email');
            const registerEmailError = document.getElementById('register-email-error');
            const passwordInput = document.getElementById('password');
            const passwordConfirmInput = document.getElementById('passwordConfirm');
            const passwordError = document.getElementById('password-error');
            const passwordConfirmError = document.getElementById('password-confirm-error');

            emailInput.addEventListener('input', function () {
                if (emailInput.value === '') {
                    emailError.textContent = 'E-mail address is required';
                } else if (!emailInput.validity.valid) {
                    emailError.textContent = 'Please provide a valid e-mail address';
                } else {
                    emailError.textContent = '';
                }
            });

            registerEmailInput.addEventListener('input', function () {
                if (registerEmailInput.value === '') {
                    registerEmailError.textContent = 'E-mail address is required';
                } else if (!registerEmailInput.validity.valid) {
                    registerEmailError.textContent = 'Please provide a valid e-mail address';
                } else {
                    registerEmailError.textContent = '';
                }
            });

            function validatePasswordConfirmation() {
                if (passwordInput.value !== '' && passwordConfirmInput.value === '') {
                    passwordConfirmError.textContent = 'This field value must be the same as "Password"';
                } else if (passwordInput.value !== passwordConfirmInput.value) {
                    passwordConfirmError.textContent = 'This field value must be the same as "Password"';
                } else {
                    passwordConfirmError.textContent = '';
                }
            }

            passwordInput.addEventListener('input', validatePasswordConfirmation);
            passwordConfirmInput.addEventListener('input', validatePasswordConfirmation);

            // Function to show alerts
            function showAlert(alertId) {
                const alertElement = document.getElementById(alertId);
                if (alertElement) {
                    alertElement.style.display = 'block';
                    setTimeout(function () {
                        alertElement.style.display = 'none';
                    }, 3000); // Adjust the duration as needed
                }
            }

            // Show alerts on page load
            @if(session('success'))
            showAlert('alert-success');
            @endif
            @if(session('error'))
            showAlert('alert-error');
            @endif
        });
    </script>
@stop
