@extends('layout.default')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="columns">
        <div class="column main">
            <div id="customer-login-container" class="login-container flex flex-wrap">
                <!-- Login Form Section -->
                <div class="w-full md:w-1/2 pr-2 mb-8 md:mb-0">
                    <p class="text-xl font-medium title-font text-primary mb-4 uppercase">Customer login</p>
                    <div class="card">
                        <form class="form form-login" action="{{ url('login') }}" method="post"
                              id="customer-login-form">
                            @csrf
                            <fieldset class="fieldset login">
                                <legend class="mb-3">
                                    <h2 class="font-medium title-font text-primary">Login</h2>
                                </legend>
                                {{--todo: word "address" is on a new line--}}
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
                                    {{--todo: adjust color--}}
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
                    <p class="text-xl font-medium title-font text-primary mb-4 uppercase">Create new customer
                        account</p>
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
                                        <input data-test="register-firstName" name="firstName" class="form-input"
                                               required
                                               value="" autocomplete="off" id="firstName" type="text"
                                               title="First Name">
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
                            {{--todo: does register even exist as property--}}
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
                                               value="" autocomplete="off" id="email" type="email" title="Email">
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="password" class="label">
                                        <span>Password</span>
                                    </label>
                                    <div class="control flex items-center">
                                        <input data-test="register-password" name="password" class="form-input" required
                                               autocomplete="off" id="password" title="Password" type="password">
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
                                <div class="field">
                                    <label for="password_confirmation" class="label">
                                        <span>Confirm Password</span>
                                    </label>
                                    <div class="control flex items-center">
                                        <input data-test="register-passwordConfirm" name="password_confirmation"
                                               class="form-input" required autocomplete="off" id="password_confirmation"
                                               title="Confirm Password" type="password">
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
@stop
