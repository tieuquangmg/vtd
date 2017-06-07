@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('/')}}css/profile.css">
    @endsection
@section('content')
    <section class="content-header">
        <h1>
            Tài khoản: {{$user->full_name}}
        </h1>
    </section>
    <section>
        <div class="container" style="margin-top: 30px;">
            <div class="profile-head">
                <div class="col-md- col-sm-4 col-xs-12">
                    <img src="http://lorempixel.com/200/200/"
                         class="img-responsive"/>
                    <h6>{{$user->full_name}}</h6>
                </div><!--col-md-4 col-sm-4 col-xs-12 close-->

                <div class="col-md-5 col-sm-5 col-xs-12">
                    <h5>{{$user->full_name}}</h5>
                    <p>{{$user->employee->user_employee_type_name}}</p>
                    <ul>
                        {{--<li><span class="glyphicon glyphicon-briefcase"></span> 5 years</li>--}}
                        <li><span class="glyphicon glyphicon-map-marker"></span> Viet Nam</li>
                        <li><span class="glyphicon glyphicon-home"></span> {{$user->permanent_address}}</li>
                        <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">{{$user->sdt}}</a></li>
                        <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">{{$user->email}}</a></li>
                    </ul>
                </div><!--col-md-8 col-sm-8 col-xs-12 close-->
            </div><!--profile-head close-->
        </div><!--container close-->
        <div id="sticky" class="container">
            <!-- Nav tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs nav-menu" role="tablist">
                    <li class="active">
                        <a href="#profile" role="tab" data-toggle="tab">
                            <i class="fa fa-male"></i> Thông tin cá nhân
                        </a>
                    </li>
                    {{--<li><a href="#change" role="tab" data-toggle="tab">--}}
                    {{--<i class="fa fa-key"></i> Chỉnh sửa thông tin--}}
                    {{--</a>--}}
                    {{--</li>--}}
                </ul><!--nav-tabs close-->

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="profile">
                        <div class="container">
                            <div class="col-sm-11" style="float:left;">
                                <div class="hve-pro">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa deserunt
                                        explicabo illum ipsum, neque perspiciatis possimus, qui reprehenderit tenetur unde
                                        voluptates. Alias distinctio eius esse inventore ipsa ipsam placeat.</p>
                                </div><!--hve-pro close-->
                            </div><!--col-sm-12 close-->
                            <br clear="all"/>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="pro-title">Tiểu sử, Lý lịch</h4>
                                </div><!--col-md-12 close-->

                                <div class="col-md-6">

                                    <div class="table-responsive responsiv-table">
                                        <table class="table bio-table">
                                            <tbody>
                                            <tr class="form-group">
                                                <td><label>Họ và tên :</label></td>
                                                <td><p>{{$user->full_name}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Tên đănh nhập :</label></td>
                                                <td><p> {{$user->name}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Email :</label></td>
                                                <td><p> {{$user->email}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Số điện thoại :</label></td>
                                                <td><p> {{$user->sdt}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Địa chỉ: </label></td>
                                                <td><p> {{$user->address}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Địa chỉ thường trú: </label></td>
                                                <td><p> {{$user->permanent_address}}</p></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div><!--table-responsive close-->
                                </div><!--col-md-6 close-->
                                <div class="col-md-6">
                                    <div class="table-responsive responsiv-table">
                                        <table class="table bio-table">
                                            <tbody>
                                            <tr class="form-group">
                                                <td><label>Ngày bắt đầu làm việc :</label></td>
                                                <td><p> {{$user->start_date->format('d/m/Y')}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Loại nhân viên :</label></td>
                                                <td><p> {{$user->employee->user_employee_type_name}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Rank :</label></td>
                                                <td><p> {{$user->rank->user_rank_name}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Trạng thái :</label></td>
                                                <td><p> {{$user->status->user_status_name}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Ngày hết hợp đồng :</label></td>
                                                <td><p> {{($user->contract_date_end)? $user->contract_date_end->format('d/m/Y') : ''}}</p></td>
                                            </tr>
                                            <tr class="form-group">
                                                <td><label>Tài liêu hợp đồng: </label></td>
                                                <td><p><a download href="{{asset($user->contract_file)}}">Tải xuống</a></p></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div><!--table-responsive close-->
                                </div><!--col-md-6 close-->

                            </div><!--row close-->


                        </div><!--container close-->
                    </div><!--tab-pane close-->


                    <div class="tab-pane fade" id="change">
                        <div class="container fom-main">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="register">Edit Your Profile</h2>
                                </div><!--col-sm-12 close-->

                            </div><!--row close-->
                            <br/>
                            <div class="row">

                                <form class="form-horizontal main_form text-left" action=" " method="post"
                                      id="contact_form">
                                    <fieldset>


                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">First Name</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <input name="first_name" placeholder="First Name" class="form-control"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Last Name</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <input name="last_name" placeholder="Last Name" class="form-control"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">E-Mail</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <input name="email" placeholder="E-Mail Address" class="form-control"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input-->

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Phone #</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <input name="phone" placeholder="(845)555-1212" class="form-control"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Address</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                <textarea class="form-control" name="comment"
                                                          placeholder="Project Description"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Project Description</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                <textarea class="form-control" name="comment"
                                                          placeholder="Project Description"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Industry</label>
                                            <div class="col-md-12 selectContainer">
                                                <div class="input-group">
                                                    <select name="state" class="form-control selectpicker">
                                                        <option value=" ">Industry</option>
                                                        <option>Industry</option>
                                                        <option>Industry</option>
                                                        <option>Industry</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Select Basic -->

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Qualification</label>
                                            <div class="col-md-12 selectContainer">
                                                <div class="input-group">
                                                    <select name="state" class="form-control selectpicker">
                                                        <option value=" ">your Qualification</option>
                                                        <option>M.A.</option>
                                                        <option>B.A.</option>
                                                        <option>B.Ed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Expertise areas</label>
                                            <div class="col-md-12 selectContainer">
                                                <div class="input-group">
                                                    <select name="state" class="form-control selectpicker">
                                                        <option value=" ">Expertise areas</option>
                                                        <option>Expertise areas1</option>
                                                        <option>Expertise areas1</option>
                                                        <option>Expertise areas1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Experience</label>
                                            <div class="col-md-12 selectContainer">
                                                <div class="input-group">
                                                    <select name="state" class="form-control selectpicker">
                                                        <option value=" ">your Experience</option>
                                                        <option>1 year</option>
                                                        <option>2 years</option>
                                                        <option>3 years</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Salary expected</label>
                                            <div class="col-md-12 selectContainer">
                                                <div class="input-group">
                                                    <select name="state" class="form-control selectpicker">
                                                        <option value=" ">your Salary expectation</option>
                                                        <option>50 thousand</option>
                                                        <option>30thousand</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Preferred Location</label>
                                            <div class="col-md-12 selectContainer">
                                                <div class="input-group">
                                                    <select name="state" class="form-control selectpicker">
                                                        <option value=" ">your Preferred Location</option>
                                                        <option>Chandigarh</option>
                                                        <option>Chandigarh</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="form-group col-md-12">
                                          <label class="col-md-10 control-label">Project Description</label>
                                            <div class="col-md-10 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil hint_icon"></i></span>
                                                    <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
                                          </div>
                                          </div>
                                        </div>-->


                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Choose Password</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <input name="first_name" placeholder="Choose Password"
                                                           class="form-control" type="password">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Confiram Password</label>
                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <input name="first_name" placeholder="Confiram Password"
                                                           class="form-control" type="password">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- radio checks -->
                                        <div class="form-group col-md-12">
                                            <label class="col-md-10 control-label">Gender</label>
                                            <div class="col-md-6">
                                                <div class="radio col-md-2">
                                                    <label>
                                                        <input type="radio" name="hosting" value="yes"/> Male
                                                    </label>
                                                </div>
                                                <div class="radio col-md-2">
                                                    <label>
                                                        <input type="radio" name="hosting" value="no"/> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- upload profile picture -->
                                        <div class="col-md-12 text-left">
                                            <div class="uplod-picture">
<span class="btn btn-default uplod-file">
    Upload Photo <input type="file"/>
</span>
                                                <span class="btn btn-default uplod-file">
    Upload Resume <input type="file"/>
</span>
                                                <span class="btn btn-default uplod-file">
    Upload Video <input type="file"/>
</span>
                                            </div><!--uplod-picture close-->
                                        </div><!--col-md-12 close-->
                                        <!-- Button -->
                                        <div class="form-group col-md-10">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-warning submit-button">Save</button>
                                                <button type="submit" class="btn btn-warning submit-button">Cancel</button>

                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div><!--row close-->
                        </div><!--container close -->
                    </div><!--tab-pane close-->
                </div><!--tab-content close-->
            </div>
            <a href="{!! route('users.index') !!}" class="btn btn-default">Quay lại danh sách</a>

        </div><!--container close-->
    </section><!--section close-->
@endsection





