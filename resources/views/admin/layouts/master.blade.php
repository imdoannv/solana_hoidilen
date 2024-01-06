<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->

<!-- Mirrored from rubick-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 03:36:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('be/dist/css/app.css')}}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="py-5">
<!-- BEGIN: Mobile Menu -->
    @include('admin.layouts.partials.header')
<!-- END: Mobile Menu -->
<div class="flex mt-[4.7rem] md:mt-0">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="#" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Midone - HTML Admin Template" class="w-6" src="{{asset('be/dist/images/logo.svg')}}">
            <span class="hidden xl:block text-white text-lg ml-3"> Rubick </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="javascript:;.html" class="side-menu side-menu--active">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Dashboard
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="side-menu__sub-open">
                    <li>
                        <a href="index.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 3 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-4.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 4 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                    <div class="side-menu__title">
                        Menu Layout
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Side Menu </div>
                        </a>
                    </li>
                    <li>
                        <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Simple Menu </div>
                        </a>
                    </li>
                    <li>
                        <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Top Menu </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                    <div class="side-menu__title">
                        E-Commerce
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-categories.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Categories </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-add-product.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Add Product </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Products
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-product-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Product List</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-product-grid.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Product Grid</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Transactions
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-transaction-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Transaction List</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-transaction-detail.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Transaction Detail</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Sellers
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-seller-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Seller List</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-seller-detail.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Seller Detail</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-reviews.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Reviews </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="side-menu-light-inbox.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title"> Inbox </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-file-manager.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                    <div class="side-menu__title"> File Manager </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-point-of-sale.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                    <div class="side-menu__title"> Point of Sale </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-chat.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                    <div class="side-menu__title"> Chat </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-post.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="side-menu__title"> Post </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-calendar.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                    <div class="side-menu__title"> Calendar </div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                    <div class="side-menu__title">
                        Crud
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-crud-data-list.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Data List </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-crud-form.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Form </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="side-menu__title">
                        Users
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-users-layout-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Layout 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Layout 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Layout 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                    <div class="side-menu__title">
                        Profile
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Overview 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="layout"></i> </div>
                    <div class="side-menu__title">
                        Pages
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Wizards
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Blog
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Pricing
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Invoice
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                FAQ
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login-light-login.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Login </div>
                        </a>
                    </li>
                    <li>
                        <a href="login-light-register.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Register </div>
                        </a>
                    </li>
                    <li>
                        <a href="main-light-error-page.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Error Page </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-update-profile.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Update profile </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-change-password.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Change Password </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title">
                        Components
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Table
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-table.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Regular Table</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tabulator.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Tabulator</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Overlay
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-modal.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Modal</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slide-over.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Slide Over</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-notification.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Notification</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-tab.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Tab </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-accordion.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Accordion </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-button.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Button </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-alert.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Alert </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-progress-bar.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Progress Bar </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tooltip.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Tooltip </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dropdown.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Dropdown </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-typography.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Typography </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-icon.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Icon </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-loading-icon.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Loading Icon </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="sidebar"></i> </div>
                    <div class="side-menu__title">
                        Forms
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-regular-form.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Regular Form </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-datepicker.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Datepicker </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tom-select.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Tom Select </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-upload.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> File Upload </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Wysiwyg Editor
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-classic.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Classic</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-inline.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Inline</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-balloon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Balloon</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Balloon Block</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-document.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Document</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-validation.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Validation </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                    <div class="side-menu__title">
                        Widgets
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-chart.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Chart </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-slider.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Slider </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-image-zoom.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Image Zoom </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
        @include('admin.layouts.partials.sidebar')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification sm:hidden" href="#"> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="#" class="flex items-center">
                                <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="#" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="#" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="#" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-7.jpg')}}">
                                </div>
                                <div class="ml-3">Kevin Spacey</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                            </a>
                            <a href="#" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-2.jpg')}}">
                                </div>
                                <div class="ml-3">Johnny Depp</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                            </a>
                            <a href="#" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-5.jpg')}}">
                                </div>
                                <div class="ml-3">Johnny Depp</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                            </a>
                            <a href="#" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-9.jpg')}}">
                                </div>
                                <div class="ml-3">Morgan Freeman</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">morganfreeman@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="#" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/preview-9.jpg')}}">
                            </div>
                            <div class="ml-3">Oppo Find X2 Pro</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                        </a>
                        <a href="#" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/preview-1.jpg')}}">
                            </div>
                            <div class="ml-3">Nikon Z6</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                        </a>
                        <a href="#" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/preview-2.jpg')}}">
                            </div>
                            <div class="ml-3">Sony Master Series A9G</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                        </a>
                        <a href="#" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/preview-8.jpg')}}">
                            </div>
                            <div class="ml-3">Dell XPS 13</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-7.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-2.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-5.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-9.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Morgan Freeman</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('be/dist/images/profile-1.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="{{asset('be/dist/images/profile-5.jpg')}}">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">Kevin Spacey</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Software Engineer</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
            @yield('content')
        </div>
    </div>
    <!-- END: Content -->
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="side-menu-dark-dashboard-overview-1.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
<!-- <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script> -->
<script src="{{asset('be/dist/js/app.js')}}"></script>
<!-- END: JS Assets-->
</body>

<!-- Mirrored from rubick-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 03:36:41 GMT -->
</html>
