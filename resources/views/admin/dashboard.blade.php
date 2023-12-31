@extends($adminTheme)
@section("content")
<div class="content">
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-1">
                <a href="#">
                    <div class="card-body">
                        {{-- <h2 class="mb-1">{{ $users }}</h2> --}}
                        <p>Invoice</p>
                        <span class="mdi mdi-format-page-break"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-2">
                <a href="{{ route('categories.index') }}">
                    <div class="card-body">
                        {{-- <h2 class="mb-1">{{ $categories }}</h2> --}}
                        <p>Categories</p>
                        <span class="mdi mdi-format-page-break"></span>
                    </div>
                </a>
            </div>
        </div>

    </div>

    {{-- <div class="row">
        <div class="col-12 p-b-15">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none card-default recent-orders" id="recent-orders">
                <div class="card-header justify-content-between">
                    <h2>Recent Orders</h2>
                    <div class="date-range-report">
                        <span></span>
                    </div>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th class="d-none d-lg-table-cell">Units</th>
                                <th class="d-none d-lg-table-cell">Order Date</th>
                                <th class="d-none d-lg-table-cell">Order Cost</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Coach Swagger</a>
                                </td>
                                <td class="d-none d-lg-table-cell">1 Unit</td>
                                <td class="d-none d-lg-table-cell">Oct 20, 2018</td>
                                <td class="d-none d-lg-table-cell">$230</td>
                                <td>
                                    <span class="badge badge-success">Completed</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href=""
                                            role="button" id="dropdown-recent-order1"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                                </td>
                                <td class="d-none d-lg-table-cell">2 Units</td>
                                <td class="d-none d-lg-table-cell">Nov 15, 2018</td>
                                <td class="d-none d-lg-table-cell">$550</td>
                                <td>
                                    <span class="badge badge-primary">Delayed</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#"
                                            role="button" id="dropdown-recent-order2"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Hat Black Suits</a>
                                </td>
                                <td class="d-none d-lg-table-cell">1 Unit</td>
                                <td class="d-none d-lg-table-cell">Nov 18, 2018</td>
                                <td class="d-none d-lg-table-cell">$325</td>
                                <td>
                                    <span class="badge badge-warning">On Hold</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#"
                                            role="button" id="dropdown-recent-order3"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                                </td>
                                <td class="d-none d-lg-table-cell">5 Units</td>
                                <td class="d-none d-lg-table-cell">Dec 13, 2018</td>
                                <td class="d-none d-lg-table-cell">$200</td>
                                <td>
                                    <span class="badge badge-success">Completed</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#"
                                            role="button" id="dropdown-recent-order4"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Speed 500 Ignite</a>
                                </td>
                                <td class="d-none d-lg-table-cell">1 Unit</td>
                                <td class="d-none d-lg-table-cell">Dec 23, 2018</td>
                                <td class="d-none d-lg-table-cell">$150</td>
                                <td>
                                    <span class="badge badge-danger">Cancelled</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#"
                                            role="button" id="dropdown-recent-order5"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

</div> <!-- End Content -->
@endsection

