@extends('layouts.app')
@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                                            <li class="breadcrumb-item active">Range Slider</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Range Slider</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Default</h4>
                                        <p class="text-muted font-14">Start with default options</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#default-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-range-preview" dir="ltr">
                                                <input type="text" id="range_01" data-plugin="range-slider" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="default-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_01" data-plugin="range-slider" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Prefix</h4>
                                        <p class="text-muted font-14">Showing grid and adding prefix "$"</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#prefix-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#prefix-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="prefix-range-preview" dir="ltr">
                                                <input type="text" id="range_03" data-plugin="range-slider" data-type="double"
                                                    data-grid="true" data-min="0" data-max="1000" data-from="200" data-to="800"
                                                    data-prefix="$" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="prefix-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_03" data-plugin="range-slider" data-type="double"
                                                            data-grid="true" data-min="0" data-max="1000" data-from="200" data-to"800"
                                                            data-prefix="$" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Step</h4>
                                        <p class="text-muted font-14">Increment with specific value only (step)</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#step-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#step-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="step-range-preview" dir="ltr">
                                                <input type="text" id="range_05" data-plugin="range-slider"
                                                    data-type="double" data-grid="true" data-min="-1000" data-max="1000"
                                                    data-from="-500" data-to="500" data-step="250" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="step-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_05" data-plugin="range-slider"
                                                            data-type="double" data-grid="true" data-min="-1000" data-max="1000"
                                                            data-from="-500" data-to="500" data-step="250" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Prettify Numbers</h4>
                                        <p class="text-muted font-14">Prettify enabled. Much better!</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#prettify-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#prettify-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="prettify-range-preview" dir="ltr">
                                                <input type="text" id="range_07" data-plugin="range-slider"
                                                    data-grid="true" data-min="1000" data-max="1000000"
                                                    data-step="1000" data-from="200000" data-to="1000" data-prettify_enabled="true" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="prettify-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_07" data-plugin="range-slider"
                                                            data-grid="true" data-min="1000" data-max="1000000"
                                                            data-step="1000" data-from="200000" data-to="1000" data-prettify_enabled="true" /&lt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Extra Example</h4>
                                        <p class="text-muted font-14">Want to show that max number is not the biggest one?</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#biggest-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#biggest-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="biggest-range-preview" dir="ltr">
                                                <input type="text" id="range_09" data-plugin="range-slider"
                                                    data-grid="true" data-min="18" data-max="70" data-prefix="Age"
                                                    data-max_postfix="+" data-from="30" data-to="1000" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="biggest-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_09" data-plugin="range-slider"
                                                            data-grid="true" data-min="18" data-max="70" data-prefix="Age"
                                                            data-max_postfix="+" data-from="30" data-to="1000" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Postfixes</h4>
                                        <p class="text-muted font-14">Using postfixes</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#postfixes-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#postfixes-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="postfixes-range-preview" dir="ltr">
                                                <input type="text" id="range_11" data-plugin="range-slider"
                                                    data-type="single" data-grid="true" data-min="-90" data-max="90"
                                                    data-postfix=" Â°" data-from="0" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="postfixes-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_11" data-plugin="range-slider"
                                                            data-type="single" data-grid="true" data-min="-90" data-max="90"
                                                            data-postfix=" Â°" data-from="0" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Min-Max</h4>
                                        <p class="text-muted font-14">Set min value, max value and start point</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#max-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#max-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="max-range-preview" dir="ltr">
                                                <input type="text" id="range_02" data-plugin="range-slider"
                                                    data-min="100" data-max="1000" data-from="550" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="max-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_02" data-plugin="range-slider"
                                                            data-min="100" data-max="1000" data-from="550" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Range</h4>
                                        <p class="text-muted font-14">Set up range with negative values</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#negative-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#negative-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="negative-range-preview" dir="ltr">
                                                <input type="text" id="range_04" data-plugin="range-slider"
                                                    data-min="-1000" data-max="1000" data-from="-500" data-to="500"
                                                    data-type="double" data-grid="true" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="negative-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_04" data-plugin="range-slider"
                                                            data-min="-1000" data-max="1000" data-from="-500" data-to="500"
                                                            data-type="double" data-grid="true" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Custom Values</h4>
                                        <p class="text-muted font-14">Using any strings as values</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#values-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#values-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="values-range-preview" dir="ltr">
                                                <input type="text" id="range_06" data-plugin="range-slider"
                                                    data-grid="true" data-from="3"
                                                    data-values='January,February,March,April,May,June,July,Auguest,September,October,November,December' />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="values-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_06" data-plugin="range-slider"
                                                            data-grid="true" data-from="3"
                                                            data-values='January,February,March,April,May,June,July,Auguest,September,October,November,December' /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Disabled</h4>
                                        <p class="text-muted font-14">Lock slider by using disable option</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#disable-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#disable-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="disable-range-preview" dir="ltr">
                                                <input type="text" id="range_08" data-plugin="range-slider"
                                                    data-min="100" data-max="1000" data-from="550" data-disable="true" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="disable-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_08" data-plugin="range-slider"
                                                            data-min="100" data-max="1000" data-from="550" data-disable="true" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Use Decorate Both option</h4>
                                        <p class="text-muted font-14">Use decorate_both option</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#decorate-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#decorate-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="decorate-range-preview" dir="ltr">
                                                 <input type="text" id="range_10" data-plugin="range-slider"
                                                    data-type="double" data-min="100" data-max="200" data-from="145"
                                                    data-to="155" data-prefix="Weight " data-postfix=" million pounds"
                                                    data-decorate_both="true" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="decorate-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_10" data-plugin="range-slider"
                                                            data-type="double" data-min="100" data-max="200" data-from="145"
                                                            data-to="155" data-prefix="Weight " data-postfix=" million pounds"
                                                            data-decorate_both="true" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Hide</h4>
                                        <p class="text-muted font-14">Or hide any part you wish</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#hide-range-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#hide-range-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="hide-range-preview" dir="ltr">
                                                <input type="text" id="range_12" data-plugin="range-slider"
                                                    data-type="double" data-min="1000" data-max="2000" data-from="1200"
                                                    data-to="1800" data-hide_min_max="true" data-hide_from_to="true"
                                                    data-grid="true" />
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="hide-range-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;input type="text" id="range_12" data-plugin="range-slider"
                                                            data-type="double" data-min="1000" data-max="2000" data-from="1200"
                                                            data-to="1800" data-hide_min_max="true" data-hide_from_to="true"
                                                            data-grid="true" /&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->
@endsection
@section('script')
        <!-- Plgins only -->
        <script src="{{ asset('assets/js/vendor/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets/js/ui/component.range-slider.js') }}"></script>
@endsection
