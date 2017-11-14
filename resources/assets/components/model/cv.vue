<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw ti-download"></i> Advanced File Input
                        </h3>
                        <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
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
        <!--main content-->
        <div class="panel ">
            <div class="panel-heading">
                <div class=" bootstrap-admin-box-title ">
                    <h3 class="panel-title">
                        Flip Editor</h3>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="bootstrap-admin-panel-content flip_editing">
                        <textarea class="" id="split_editor"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends-->
    </div>
</template>
<script>
    import fileinput from "../../vendors/bootstrap-fileinput/js/fileinput.min.js";
    import trumbowyg from "../../vendors/trumbowyg/dist/trumbowyg.min.js";

    export default {
        name: "cv",
        mounted: function () {
            "use strict";
            $(".content .row").find('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
            $("#input-42").fileinput({
                browseClass: "btn btn-warning",
                maxFilesNum: 10,
                allowedFileExtensions: ["jpg", "gif", "png", "txt"]
            });

            $("textarea#split_editor").trumbowyg({
                _dir: "ltr", // This line is optionnal, but usefull to override the `dir` option
                svgPath: "static/data/icons.svg",
                bold: "Gras",
                close: "Fermer"
            });
            if ($(window).width() < 700) {
                $("<br>").insertAfter(".summer_noted .dropdown-menu li .btn-group");
            }
        },
        destroyed: function () {

        }
    }
</script>
<style src="../../vendors/bootstrap-fileinput/css/fileinput.min.css"></style>
<style src="../../assets/css/formelements.css"></style>
<style src="../../vendors/trumbowyg/dist/ui/trumbowyg.min.css"></style>
<style src="../../assets/css/form_editors.css"></style>