<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        @include('components.toolbar')
        @if (session('status'))
            <div class="app-container container-fluid d-flex flex-stack">
                <div class="w-100 alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            </div>
        @endif
        @include('components.content')
    </div>
    <!--end::Content wrapper-->
    @include('components.footer')
</div>
<!--end:::Main-->