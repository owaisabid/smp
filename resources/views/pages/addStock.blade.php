@extends('layouts.app')
@section('content')
<div class="container register">
                

                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Add Stock</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Quantity *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="Date" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="time" class="form-control" placeholder=" Time  *" value="" />
                                    </div>

                                    <input type="submit" class="btnRegister"  value="Add"/>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>

        </div>
        @endsection

