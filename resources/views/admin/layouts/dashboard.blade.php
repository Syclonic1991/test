@extends('admin.layouts.app')

@section('body')
    <div id="wrapper" class="container" style="width: 100%; min-width: 1024px">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url ('/admin') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('charts') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*tables') ? 'class="active"' : '') }}>
                            <a href="{{ url ('tables') }}"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li {{ (Request::is('*forms') ? 'class="active"' : '') }}>
                            <a href="{{ url ('forms') }}"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Panels and Collapsibles</a>
                                </li>
                                <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('buttons' ) }}">Buttons</a>
                                </li>
                                <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                                    <a href="{{ url('notifications') }}">Alerts</a>
                                </li>
                                <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('typography') }}">Typography</a>
                                </li>
                                <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('icons') }}"> Icons</a>
                                </li>
                                <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('grid') }}">Grid</a>
                                </li>
                                <li {{ (Request::is('*progressbars') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('progressbars') }}">Progressbars</a>
                                </li>
                                <li {{ (Request::is('*collapse') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('collapse') }}">Collapse</a>
                                </li>
                                <li {{ (Request::is('*stats') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('stats') }}">Stats</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('blank') }}">Blank Page</a>
                                </li>
                                <li>
                                    <a href="{{ url ('login') }}">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                            <a href="{{ url ('documentation') }}"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
                        </li>
                        <li>
                            <a href="{{ route('promotions.index') }}"><i class="fa fa-file-word-o fa-fw"></i> Акции</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@endsection
