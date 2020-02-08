@extends('layouts.app')
@section('content')
<div class="container register">
                

                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                                <h3 class="register-heading">Add Sales</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Catagory *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Date *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Amount *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Description *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Add"/>
                                    </div>

                                </div>
                            
                        </div>
                    </div>

            </div>
            @endsection