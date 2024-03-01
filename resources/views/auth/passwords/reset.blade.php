@include('components.start')
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::احراز هویت - کلمه عبور جدید -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <!--begin::Form-->
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-10">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_new_password_form" method="POST"
                        data-kt-redirect-url="{{ url('/') }}" action="{{ route('password.update') }}">
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">تعریف کلمه عبور جدید</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-500 fw-semibold fs-6">آیا قبلا رمز عبور را بازنشانی کرده اید؟
                                <a href="{{ route('login') }}" class="link-primary fw-bold">ورود</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->

                        <div class="fv-row mb-8 d-none">
                            <!--begin::ایمیل-->
                            <input id="email" type="email" name="email" placeholder="ایمیل"
                                class="form-control bg-transparent @error('email') is-invalid @enderror"
                                value="{{ $email ?? old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--end::ایمیل-->
                        </div>

                        <!--begin::Input group-->
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input id="password" type="password" placeholder="کلمه عبور" name="password"
                                        class="form-control bg-transparent @error('password') is-invalid @enderror"
                                        required autocomplete="new-password" autofocus />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="ki-duotone ki-eye-slash fs-2"></i>
                                        <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">استفاده از 8 یا بیشتر کاراکتر با ترکیبی از حروف، اعداد و نمادها
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->

                        <!--end::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::تکرار رمز عبور-->
                            <input id="password-confirm" type="password" placeholder="تکرار رمز عبور" name="password_confirmation"
                                class="form-control bg-transparent" required autocomplete="new-password" />
                            <!--end::تکرار رمز عبور-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <div class="form-check form-check-inline">
                                <input id="password-confirm" type="checkbox" name="password_confirmation"
                                    class="form-check-input" {{ old('password_confirmation') ? 'checked' : '' }}
                                    required autocomplete="new-password" />
                                <label class="form-check-label fw-semibold text-gray-700 fs-base ms-1"
                                    for="password-confirm">
                                    <a href="#" target="_blank" class="ms-1 link-primary">قوانین و مقررات</a> را قبول
                                    میکنم
                                </label>
                            </div>
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Actions-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_new_password_submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">ثبت</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">لطفا صبر کنید...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Form-->
            <!--begin::Footer-->
            <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
                <!--begin::زبانs-->
                <div class="me-10">
                    <!--begin::Toggle-->
                    <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-offset="0px, 0px">
                        <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
                            src="assets/media/flags/united-states.svg" alt="" />
                        <span data-kt-element="current-lang-name" class="me-1">انگلیسی</span>
                        <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
                    </button>
                    <!--end::Toggle-->
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
                        data-kt-menu="true" id="kt_auth_lang_menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="انگلیسی">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1"
                                        src="assets/media/flags/united-states.svg" alt="" />
                                </span>
                                <span data-kt-element="lang-name">انگلیسی</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="اسپانیایی">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1"
                                        src="assets/media/flags/spain.svg" alt="" />
                                </span>
                                <span data-kt-element="lang-name">اسپانیایی</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="آلمانی">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1"
                                        src="assets/media/flags/germany.svg" alt="" />
                                </span>
                                <span data-kt-element="lang-name">آلمانی</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="ژاپنی">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1"
                                        src="assets/media/flags/japan.svg" alt="" />
                                </span>
                                <span data-kt-element="lang-name">ژاپنی</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="فرانسه">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1"
                                        src="assets/media/flags/france.svg" alt="" />
                                </span>
                                <span data-kt-element="lang-name">فرانسه</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::زبانs-->
                <!--begin::Links-->
                <div class="d-flex fw-semibold text-primary fs-base gap-5">
                    <a href="../../demo1/dist/pages/team.html" target="_blank">تیم ها</a>
                    <a href="../../demo1/dist/pages/pricing/column.html" target="_blank">برنامه ریزی ها</a>
                    <a href="../../demo1/dist/pages/contact.html" target="_blank">تماس با ما</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
        <!--begin::کناری-->
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
            style="background-image: url(assets/media/misc/auth-bg.png)">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                <!--begin::Logo-->
                <a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">
                    <img alt="Logo" src="assets/media/logos/custom-1.png" class="h-60px h-lg-75px" />
                </a>
                <!--end::Logo-->
                <!--begin::Image-->
                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                    src="assets/media/misc/auth-screens.png" alt="" />
                <!--end::Image-->
                <!--begin::Title-->
                <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">سریع، کارآمد و محصولات</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="d-none d-lg-block text-white fs-base text-center">در این نوع پست،
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">وبلاگر</a>فردی را که با او مصاحبه
                    کرده اند معرفی می کند
                    <br />و برخی اطلاعات پس زمینه در مورد ارائه می دهد
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">مصاحبه شونده</a>و آنها
                    <br />کار بعد از این متن مصاحبه است.
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::کناری-->
    </div>
    <!--end::احراز هویت - کلمه عبور جدید-->
</div>


<!--end::Root-->

<!--begin::سفارشی Javascript(used for this page only)-->
<script src="<?php echo asset('assets/js/custom/authentication/reset-password/new-password.js'); ?>"></script>
<!--end::سفارشی Javascript-->
@include('components.end')