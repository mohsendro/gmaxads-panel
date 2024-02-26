@include('components.start')
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>
        body {
            background-image: url('assets/media/auth/bg7.jpg');
        }

        [data-bs-theme="dark"] body {
            background-image: url('assets/media/auth/bg7-dark.jpg');
        }
    </style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Signup Welcome Message -->
    <div class="d-flex flex-column flex-center flex-column-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center text-center p-10">
            <!--begin::Wrapper-->
            <div class="card card-flush w-lg-650px py-5">
                <div class="card-body py-15 py-lg-20">
                    <!--begin::Title-->
                    <h1 class="fw-bolder fs-2qx text-gray-900 mb-4">خطای سیستم</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fw-semibold fs-6 text-gray-500 mb-7">مشکلی پیش آمد! لطفاً بعداً دوباره امتحان کنید.
                    </div>
                    <!--end::Text-->
                    <!--begin::Illustration-->
                    <div class="mb-11">
                        <img src="assets/media/auth/500-error.png" class="mw-100 mh-300px theme-light-show"
                            alt="" />
                        <img src="assets/media/auth/500-error-dark.png" class="mw-100 mh-300px theme-dark-show"
                            alt="" />
                    </div>
                    <!--end::Illustration-->
                    <!--begin::Link-->
                    <div class="mb-0">
                        <a href="../../demo1/dist/index.html" class="btn btn-sm btn-primary">برگشت به خانه</a>
                    </div>
                    <!--end::Link-->
                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Authentication - Signup Welcome Message-->
</div>
<!--end::Root-->
@include('components.end')