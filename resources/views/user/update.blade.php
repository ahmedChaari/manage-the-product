@extends('layouts.menu')
@section('content')
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Form Validation -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Implementation
                </h2>
            </div>
            <div id="form-validation" class="p-5">
                <div class="preview">
                    <!-- BEGIN: Validation Form -->
                    <form class="" action="{{ route('user.update' ,auth()->id()) }}"

                        enctype="multipart/form-data"
                        method="POST" >
                            @csrf
                            @method('PUT')
                        <div class="input-form">
                            <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row"> Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 2 characters</span> </label>
                            <input id="validation-form-1"
                            id="name" name="name" value="{{ auth()->user()->name }}"
                            type="text" class="form-control" placeholder="John Legend" minlength="2" required>
                            @error('name')
                            <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-form mt-3">
                            <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row"> Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span> </label>
                            <input id="validation-form-2"  value="{{ Auth::user()->email }}"
                            type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                            @error('email')
                            <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-form mt-3">
                            <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row"> Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 6 characters</span> </label>
                            <input id="validation-form-3" value="{{ Auth::user()->password }}"
                            type="password" name="password" class="form-control" placeholder="secret" minlength="6" required>
                            @error('password')
                            <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!--   conferm password -->
                        <div class="input-form mt-3">
                            <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row"> Confirm Password
                                <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 6 characters</span> </label>
                            <input id="password-confirm" type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Register</button>
                    </form>
                    <!-- END: Validation Form -->
                    <!-- BEGIN: Success Notification Content -->
                    <div id="success-notification-content" class="toastify-content hidden flex" >
                        <i class="text-success" data-lucide="check-circle"></i>
                        <div class="ml-4 mr-4">
                            <div class="font-medium">Registration success!</div>
                            <div class="text-slate-500 mt-1"> Please check your e-mail for further info! </div>
                        </div>
                    </div>
                    <!-- END: Success Notification Content -->
                    <!-- BEGIN: Failed Notification Content -->
                    <div id="failed-notification-content" class="toastify-content hidden flex" >
                        <i class="text-danger" data-lucide="x-circle"></i>
                        <div class="ml-4 mr-4">
                            <div class="font-medium">Registration failed!</div>
                            <div class="text-slate-500 mt-1"> Please check the fileld form. </div>
                        </div>
                    </div>
                    <!-- END: Failed Notification Content -->
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-form-validation" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-form-validation" class="source-preview"> <code class="html"> HTMLOpenTag!-- BEGIN: Validation Form --HTMLCloseTag HTMLOpenTagform class=&quot;validate-form&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;input-form&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-1&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Name HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, at least 2 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-1&quot; type=&quot;text&quot; name=&quot;name&quot; class=&quot;form-control&quot; placeholder=&quot;John Legend&quot; minlength=&quot;2&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-2&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Email HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, email address formatHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-2&quot; type=&quot;email&quot; name=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-3&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Password HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, at least 6 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-3&quot; type=&quot;password&quot; name=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot; minlength=&quot;6&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-4&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Age HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, integer only &amp; maximum 3 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-4&quot; type=&quot;number&quot; name=&quot;age&quot; class=&quot;form-control&quot; placeholder=&quot;21&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-5&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Profile URL HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagOptional, URL formatHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-5&quot; type=&quot;url&quot; name=&quot;url&quot; class=&quot;form-control&quot; placeholder=&quot;https://google.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-6&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Comment HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, at least 10 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTagtextarea id=&quot;validation-form-6&quot; class=&quot;form-control&quot; name=&quot;comment&quot; placeholder=&quot;Type your comments&quot; minlength=&quot;10&quot; requiredHTMLCloseTagHTMLOpenTag/textareaHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton type=&quot;submit&quot; class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagRegisterHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/formHTMLCloseTag HTMLOpenTag!-- END: Validation Form --HTMLCloseTag HTMLOpenTag!-- BEGIN: Success Notification Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;success-notification-content&quot; class=&quot;toastify-content hidden flex&quot; HTMLCloseTag HTMLOpenTagi class=&quot;text-success&quot; data-lucide=&quot;check-circle&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTagdiv class=&quot;ml-4 mr-4&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;font-medium&quot;HTMLCloseTagRegistration success!HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-slate-500 mt-1&quot;HTMLCloseTag Please check your e-mail for further info! HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Success Notification Content --HTMLCloseTag HTMLOpenTag!-- BEGIN: Failed Notification Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;failed-notification-content&quot; class=&quot;toastify-content hidden flex&quot; HTMLCloseTag HTMLOpenTagi class=&quot;text-danger&quot; data-lucide=&quot;x-circle&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTagdiv class=&quot;ml-4 mr-4&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;font-medium&quot;HTMLCloseTagRegistration failed!HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-slate-500 mt-1&quot;HTMLCloseTag Please check the fileld form. HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Failed Notification Content --HTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Form Validation -->
    </div>
</div>
@endsection