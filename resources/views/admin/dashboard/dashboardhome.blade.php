@extends("admin.layout")
@section("content")
    <!--== BODY INNER CONTAINER ==-->
    <div class="sb2-2">
        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>

            </ul>
        </div>
        <!--== DASHBOARD INFO ==-->
        <div class="ad-v2-hom-info">
            <div class="ad-v2-hom-info-inn">
                <ul>
                    <li>
                        <div class="ad-hom-box ad-hom-box-1">
                            <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Total Ticket</p>
                                <h3>{{$ticket->count()}}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-2">
                            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-down down"></i> Tickets sold</p>
                                <h3>{{$ticketsold->count()}}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-4">
                            <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Expected</p>
                                <h3>{{$expected}}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-2">
                            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-down down"></i> Revenue</p>
                                <h3>{{$revenue}}</h3>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <!--== Country Campaigns ==-->
                <div class="col-md-6">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Country Campaigns</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown1'><i class="material-icons">more_vert</i></a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Add New</a>
                                </li>
                                <li><a href="#!">Edit</a>
                                </li>
                                <li><a href="#!">Update</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                </li>
                                <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                </li>
                                <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Australia</span>
                                        </td>
                                        <td>Beavis</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$1478</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Cuba</span>
                                        </td>
                                        <td>Felix</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>1.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$951</span>
                                        </td>
                                        <td>
                                            <span class="label label-danger">Closed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">France</span>
                                        </td>
                                        <td>Cannibus</td>
                                        <td><span class="txt-danger"><i class="fa fa-angle-up" aria-hidden="true"></i><span>-8.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$632</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Norway</span>
                                        </td>
                                        <td>Neosoft</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>7.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$325</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">South Africa</span>
                                        </td>
                                        <td>Hencework</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>9.43%</span></span>
                                        </td>
                                        <td>
                                            <span>$258</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--== Country Campaigns ==-->
                <div class="col-md-6">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Country Campaigns</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown2'><i class="material-icons">more_vert</i></a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown2' class='dropdown-content'>
                                <li><a href="#!">Add New</a>
                                </li>
                                <li><a href="#!">Edit</a>
                                </li>
                                <li><a href="#!">Update</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                </li>
                                <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                </li>
                                <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>State</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">California</span>
                                        </td>
                                        <td>Beavis</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$1478</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Florida</span>
                                        </td>
                                        <td>Felix</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>1.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$951</span>
                                        </td>
                                        <td>
                                            <span class="label label-danger">Closed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Hawaii</span>
                                        </td>
                                        <td>Cannibus</td>
                                        <td><span class="txt-danger"><i class="fa fa-angle-up" aria-hidden="true"></i><span>-8.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$632</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Alaska</span>
                                        </td>
                                        <td>Neosoft</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>7.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$325</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">New Jersey</span>
                                        </td>
                                        <td>Hencework</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>9.43%</span></span>
                                        </td>
                                        <td>
                                            <span>$258</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--== User Details ==-->
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Google Map</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-map"><i class="material-icons">more_vert</i></a>
                            <ul id="dr-map" class="dropdown-content">
                                <li><a href="#!">Add New</a>
                                </li>
                                <li><a href="#!">Edit</a>
                                </li>
                                <li><a href="#!">Update</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                </li>
                                <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                </li>
                                <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                </li>
                            </ul>
                            <!-- Dropdown Structure -->

                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi tab-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
