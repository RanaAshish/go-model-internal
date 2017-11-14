<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw ti-dropbox"></i> Photo
                        </h3>
                    </div>
                    <div class="panel-body p-30">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>AllowedFileExtensions (jpg & PNG )</h5>
                                <input type="file" class="dropify" data-max-file-size="1M"
                                       data-allowed-file-extensions="jpg png"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <label class="control-label">
                                    Select File
                                </label>
                                <input id="input-42" type="file" class="file-loading">
                            </div>
                            <div class="col-sm-4">
                                <div class="alert alert-info small m-t-10">
                                    Allow only specific( jpg, gif, png, txt ) file extensions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw ti-pencil"></i> Personal Details
                        </h3>
                        <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                                </span>
                    </div>
                    <div class="panel-body">
                        <div>
                            <form method="post" class="form-horizontal">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="first_Name">First Name:
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="first_Name"
                                                   placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="input_Email">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="input_Email"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="input_Password">Password:</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="input_Password"
                                                   placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3 m-t-10">Date of Birth:
                                        </label>
                                        <div class="col-sm-3 m-t-10">
                                            <select class="form-control">
                                                <option>Date</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 m-t-10">
                                            <select class="form-control">
                                                <option>Month</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 m-t-10">
                                            <select class="form-control">
                                                <option>Year</option>
                                                <option>1991</option>
                                                <option>1992</option>
                                                <option>1993</option>
                                                <option>1994</option>
                                                <option>1995</option>
                                                <option>1996</option>
                                                <option>1997</option>
                                                <option>1998</option>
                                                <option>1999</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2000</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Zip_Code">Zip Code:
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="Zip_Code"
                                                   placeholder="Zip Code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="city">City:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="city" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="news" class="square-blue">
                                                Send me latest news and updates.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="last_Name">Last Name:
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="last_Name"
                                                   placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="phone_Number">Phone:</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" id="phone_Number"
                                                   placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3"
                                               for="confirm_Password">Confirm Password:</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="confirm_Password"
                                                   placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="postal_Address">Address:</label>
                                        <div class="col-sm-9">
                                            <textarea rows="3" class="form-control resize_vertical" id="postal_Address"
                                                      placeholder="Postal Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Gender:</label>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="genderRadios" class="radio-blue"> Male</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="genderRadios" class="radio-blue"
                                                       value="female"> Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="agree" class="square-blue"> I agree to the
                                                <a href="#" class="forgot">Terms and Conditions</a> .
                                            </label>
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
    import dropify from "../../vendors/dropify/dist/js/dropify.min.js";
    import fileinput from "../../vendors/bootstrap-fileinput/js/fileinput.min.js";

    export default {
        name: "profile",
        mounted: function () {
            "use strict";
            $(document).ready(function () {
                $('.dropify').dropify({
                    error: {
                        'fileSize': 'The file size is too big ({{ value }}B max).'
                    }
                });

                $(".content .row").find('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });

                $('[type="reset"]').on('click', function () {
                    setTimeout(function () {
                        $("input").iCheck("update");
                    }, 10);
                });

                $("#input-42").fileinput({
                    browseClass: "btn btn-warning",
                    maxFilesNum: 10,
                    allowedFileExtensions: ["jpg", "gif", "png", "txt"]
                });
            });
        },
        destroyed: function () {

        }
    }
</script>
<style src="../../vendors/bootstrap-fileinput/css/fileinput.min.css"></style>
<style src="../../vendors/dropify/dist/css/dropify.min.css"></style>
<style src="../../assets/css/form_layouts.css"></style>
<style src="../../assets/css/formelements.css"></style>
<style src="../../assets/css/custom_css/dropify.css"></style>