<template>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw ti-pencil"></i> Change Password
                        </h3>
                        <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                                </span>
                    </div>
                    <div class="panel-body">
                        <div>
                            <form method="post" class="form-horizontal">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="first_Name">Current Password:
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="first_Name" placeholder="Current Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="input_Email">New Password:</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="input_Email" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="input_Password">Confirm Password:</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="input_Password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="button" class="btn btn-primary">Submit
                                            </button>
                                            <button type="reset" class="btn btn-effect-ripple btn-default  reset_btn1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "change_password",
    mounted: function() {
        "use strict";
        $(document).ready(function() {


            $(".content .row").find('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });

            $('[type="reset"]').on('click', function() {
                setTimeout(function() {
                    $("input").iCheck("update");
                }, 10);
            });
        });
    },
    destroyed: function() {

    }
}
</script>
<style src="../../assets/css/form_layouts.css"></style>