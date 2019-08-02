@extends('_layout.dashboard._app')
    @section('title')
        Add new Hobby
    @endsection

    <!-- Body Start -->
    @section('side-title')
        <i class="fa fa-soccer-ball-o"></i> <span>Add new Hobby</span>
    @endsection

    @section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add New Hobby </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Hobi Baru</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name Hobby<span class="required">*</span><br><small><i>example: HIMADIF</i></small></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Full Name">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image Documentation <span class="required">*</span><br><small><i>insert image to prove it</i></small></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Full Name">
                                </div>
                            </div>          
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
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
    
    <!-- Body End -->