@extends('user.layout')
@section("title","Profile")
@section('center-content')
    <div class="db-2">
        <div class="db-2-com db-2-main">
            <h4>My Profile</h4>
            <div class="db-2-main-com db-2-main-com-table">
                <table class="responsive-table">
                    <tbody>
                    <tr>
                        <td>User Name</td>
                        <td>:</td>
                        <td>Sam Anderson</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>mypasswordtour</td>
                    </tr>
                    <tr>
                        <td>Eamil</td>
                        <td>:</td>
                        <td>sam_anderson@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td>+01 4561 3214</td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td>:</td>
                        <td>03 Jun 1990</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><span class="db-done">Active</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="db-mak-pay-bot">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p> <a href="db-my-profile-edit.html" class="waves-effect waves-light btn-large">Edit my profile</a> </div>
            </div>
        </div>
    </div>
@endsection