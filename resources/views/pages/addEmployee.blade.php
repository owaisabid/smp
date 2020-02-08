@extends('layouts.app')
@section('content')
<div class="container register">
                

                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                                <h3 class="register-heading">Create Employee Record</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="CNIC *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Contact No *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Type *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Create"/>
                                    </div>

                                </div>
                            
                        </div>
                    </div>

            </div>
            @endsection