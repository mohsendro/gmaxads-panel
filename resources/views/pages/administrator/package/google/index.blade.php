@extends('index')

@section('content')


{{-- {{ dd($GooglePackage) }} --}}


<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">مشتری
                    لیست</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::آیتم-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">خانه</a>
                    </li>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <li class="breadcrumb-item text-muted">مشتریان</li>
                    <!--end::آیتم-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::فیلتر menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>فیلتر</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_641ac428124dc">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">فیلتر تنظیمات</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Tags-->
                                <label class="form-label fw-semibold">وضعیت:</label>
                                <!--end::Tags-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="انتخاب گزینه" data-dropdown-parent="#kt_menu_641ac428124dc"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">تایید شده</option>
                                        <option value="2">در انتظار</option>
                                        <option value="2">در حال پردازش</option>
                                        <option value="2">رد شد</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Tags-->
                                <label class="form-label fw-semibold">نوع عضویت:</label>
                                <!--end::Tags-->
                                <!--begin::تنظیمات-->
                                <div class="d-flex">
                                    <!--begin::تنظیمات-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">نویسنده</span>
                                    </label>
                                    <!--end::تنظیمات-->
                                    <!--begin::تنظیمات-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">مشتری</span>
                                    </label>
                                    <!--end::تنظیمات-->
                                </div>
                                <!--end::تنظیمات-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Tags-->
                                <label class="form-label fw-semibold">اعلان ها:</label>
                                <!--end::Tags-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked" />
                                    <label class="form-check-label">فعال</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">ریست</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">تایید</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::فیلتر menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::اصلی button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">ساختن</a>
                <!--end::اصلی button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::کارت-->
            <div class="card">
                <!--begin::کارت header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <!--begin::جستجو-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-customer-table-filter="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="جستجو مشتریان" />
                        </div>
                        <!--end::جستجو-->
                    </div>
                    <!--begin::کارت title-->
                    <!--begin::کارت toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::فیلتر-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>فیلتر</button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true"
                                id="kt-toolbar-filter">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-4 text-dark fw-bold">فیلتر تنظیمات</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Tags-->
                                        <label class="form-label fs-5 fw-semibold mb-3">ماه:</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                            data-placeholder="انتخاب گزینه" data-allow-clear="true"
                                            data-kt-customer-table-filter="month"
                                            data-dropdown-parent="#kt-toolbar-filter">
                                            <option></option>
                                            <option value="aug">مرداد</option>
                                            <option value="sep">شهریور</option>
                                            <option value="oct">مهر</option>
                                            <option value="nov">آبان</option>
                                            <option value="dec">آذر</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Tags-->
                                        <label class="form-label fs-5 fw-semibold mb-3">پرداخت نوع:</label>
                                        <!--end::Tags-->
                                        <!--begin::تنظیمات-->
                                        <div class="d-flex flex-column flex-wrap fw-semibold"
                                            data-kt-customer-table-filter="payment_type">
                                            <!--begin::Option-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="payment_type"
                                                    value="all" checked="checked" />
                                                <span class="form-check-label text-gray-600">همه</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="payment_type"
                                                    value="visa" />
                                                <span class="form-check-label text-gray-600">ویزا</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                <input class="form-check-input" type="radio" name="payment_type"
                                                    value="mastercard" />
                                                <span class="form-check-label text-gray-600">مستر کارت</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="payment_type"
                                                    value="american_express" />
                                                <span class="form-check-label text-gray-600">اکسپرس</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::تنظیمات-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true"
                                            data-kt-customer-table-filter="reset">ریست</button>
                                        <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true"
                                            data-kt-customer-table-filter="filter">تایید</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::فیلتر-->
                            <!--begin::خروجی-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_customers_export_modal">
                                <i class="ki-duotone ki-exit-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>خروجی</button>
                            <!--end::خروجی-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_customer">افزودن مشتری</button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::گروه actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-customer-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>انتخاب شده
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-customer-table-select="delete_selected">حذف انتخاب شده</button>
                        </div>
                        <!--end::گروه actions-->
                    </div>
                    <!--end::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">مشتری نام</th>
                                <th class="min-w-125px">ایمیل</th>
                                <th class="min-w-125px">کمپانی</th>
                                <th class="min-w-125px">روش پرداخت</th>
                                <th class="min-w-125px">زمان ایجاد تاریخ</th>
                                <th class="text-end min-w-70px">عملیات</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @foreach( $GooglePackages as $key => $value )
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->currency_price }}</td>
                                    <td>{{ $value->main_price }}</td>
                                    <td>{{ $value->offer }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>{{ $value->bid }}</td>
                                    <td>{{ $value->currency }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <a href="../../demo1/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">مرادی نیا</a>
                                </td>
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                                </td>
                                <td>-</td>
                                <td data-filter="mastercard">
                                    <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3"
                                        alt="" />**** 4393
                                </td>
                                <td>14 آذر 2020, 8:43 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/customers/view.html"
                                                class="menu-link px-3">نمایش</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-customer-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::کارت-->
            <!--begin::Modals-->
            <!--begin::Modal - مشتریان - Add-->
            <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_add_customer_form"
                            data-kt-redirect="../../demo1/dist/apps/customers/list.html">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">افزودن مشتری</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_modal_add_customer_close"
                                    class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                    data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                    data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Tags-->
                                        <label class="required fs-6 fw-semibold mb-2">نام</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="name" value="محسن برومند" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Tags-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">ایمیل</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="ایمیل address must be active">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="email" class="form-control form-control-solid" placeholder=""
                                            name="email" value="sean@dellito.com" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Tags-->
                                        <label class="fs-6 fw-semibold mb-2">توضیحات</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="description" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::صورتحساب toggle-->
                                    <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                        href="#kt_modal_add_customer_billing_info" role="button" aria-expوed="false"
                                        aria-controls="kt_customer_view_details">اطلاعات حمل و نقل
                                        <span class="ms-2 rotate-180">
                                            <i class="ki-duotone ki-down fs-3"></i>
                                        </span>
                                    </div>
                                    <!--end::صورتحساب toggle-->
                                    <!--begin::صورتحساب form-->
                                    <div id="kt_modal_add_customer_billing_info" class="collapse show">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="required fs-6 fw-semibold mb-2">ادرس1</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder=""
                                                name="address1" value="101, Collins Street" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">ادرس2</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder=""
                                                name="address2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="required fs-6 fw-semibold mb-2">شهر</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="city"
                                                value="Melbourne" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-7">
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Tags-->
                                                <label class="required fs-6 fw-semibold mb-2">استان</label>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="state" value="Victoria" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Tags-->
                                                <label class="required fs-6 fw-semibold mb-2">کدپستی</label>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="postcode" value="3000" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span class="required">کشور</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="کشور of origination">
                                                    <i class="ki-duotone ki-information fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="انتخاب a کشور" data-control="select2"
                                                data-placeholder="انتخاب  کشور..."
                                                data-dropdown-parent="#kt_modal_add_customer"
                                                class="form-select form-select-solid fw-bold">
                                                <option value="">انتخاب کشور...</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">AlandIslands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AG">Antigua و Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">ایران</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius و Saba</option>
                                                <option value="BA">Bosnia و Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British هندn Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islوs</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Islو</option>
                                                <option value="CC">Cocos (Keeling) Islوs</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CK">Cook Islوs</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falklو Islوs (Malvinas)</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finlو</option>
                                                <option value="FR">فرانسه</option>
                                                <option value="PF">فرانسه Polynesia</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">المان</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenlو</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="HT">هلند</option>
                                                <option value="VA">Holy See (Vatican شهر State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">ایسلند</option>
                                                <option value="IN">هند</option>
                                                <option value="شناسه">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Irelو</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">ایتالیا</option>
                                                <option value="KP">Korea, دموcratic People's Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's دموcratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">اسفندshall Islوs</option>
                                                <option value="MQ">اسفندtinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="MX">مکزیک</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">فرانسه</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">منanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlوs</option>
                                                <option value="NZ">جدید Zealو</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Islو</option>
                                                <option value="MP">Northern اسفندiana Islوs</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua جدید Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PL">لهستان</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwوa</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="KN">Saint Kitts و Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint اسفندtin (فرانسه part)</option>
                                                <option value="VC">Saint Vincent و the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San اسفندino</option>
                                                <option value="ST">Sao Tome و Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islوs</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SZ">Swazilو</option>
                                                <option value="SE">سوئد</option>
                                                <option value="CH">Switzerlو</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, حرفه ایvince of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailو</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad و Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">ترکیه</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks و Caicos Islوs</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Ugوa</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="ایران" selected="selected">آمریکا</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">ونuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VI">Virgin Islوs</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Tags-->
                                                <div class="me-5">
                                                    <!--begin::Tags-->
                                                    <label class="fs-6 fw-semibold">به عنوان مخاطب صورتحساب استفاده می
                                                        شود؟?</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <div class="fs-7 fw-semibold text-muted">اگر به اطلاعات بیشتری نیاز
                                                        دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Tags-->
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input" name="billing" type="checkbox"
                                                        value="1" id="kt_modal_add_customer_billing"
                                                        checked="checked" />
                                                    <!--end::Input-->
                                                    <!--begin::Tags-->
                                                    <span class="form-check-label fw-semibold text-muted"
                                                        for="kt_modal_add_customer_billing">بله</span>
                                                    <!--end::Tags-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--begin::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::صورتحساب form-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_add_customer_cancel"
                                    class="btn btn-light me-3">لغو</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">ثبت</span>
                                    <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - مشتریان - Add-->
            <!--begin::Modal - Adjust تعادل-->
            <div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">خروجی مشتریان</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_customers_export_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Tags-->
                                    <label class="fs-5 fw-semibold form-label mb-5">انتخاب خروجی فرمت:</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <select data-control="select2" data-placeholder="انتخاب فرمت"
                                        data-hide-search="true" name="format" class="form-select form-select-solid">
                                        <option value="excell">Excel</option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Tags-->
                                    <label class="fs-5 fw-semibold form-label mb-5">انتخاب تاریخ Range:</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick a date"
                                        name="date" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row fv-row mb-15">
                                    <!--begin::Tags-->
                                    <label class="fs-5 fw-semibold form-label mb-5">پرداخت نوع:</label>
                                    <!--end::Tags-->
                                    <!--begin::رادیو group-->
                                    <div class="d-flex flex-column">
                                        <!--begin::رادیو button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked"
                                                name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">همه</span>
                                        </label>
                                        <!--end::رادیو button-->
                                        <!--begin::رادیو button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked"
                                                name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">ویزا</span>
                                        </label>
                                        <!--end::رادیو button-->
                                        <!--begin::رادیو button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="3"
                                                name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">مستر کارت</span>
                                        </label>
                                        <!--end::رادیو button-->
                                        <!--begin::رادیو button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="4"
                                                name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">اکسپرس</span>
                                        </label>
                                        <!--end::رادیو button-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_customers_export_cancel"
                                        class="btn btn-light me-3">لغو</button>
                                    <button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - کارت جدید-->
            <!--end::Modals-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@stop