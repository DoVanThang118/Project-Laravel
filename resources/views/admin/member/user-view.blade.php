@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Ui Form</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>View User Details</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                        </div>
                        <div class="tab-inn">
                            <form>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="first_name" type="text" value="Marsha" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" value="Hogen" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="phone" type="text" value="+01 1234 4654" class="validate">
                                        <label for="phone">Mobile</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="cphone" type="text" value="+01 6541 32145" class="validate">
                                        <label for="cphone">Phone</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="city" type="text" value="Illunois" class="validate">
                                        <label for="city">City</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="country" type="text" value="United States" class="validate">
                                        <label for="country">Country</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="password" type="password" value="aksdjfhasdf" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="password1" type="password" value="asdfaefrerfg" class="validate">
                                        <label for="password1">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" value="marshahi@mail.com" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="email1" type="email" value="marshahi@mail.com" class="validate">
                                        <label for="email1">Alternate Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
