@extends('model.layout.app')

@push('page-css')


	<link href="{{ asset('vue/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css"/>  
    <link rel="stylesheet" type="text/css" href="{{ asset('vue/css/form_editors.css') }}">
   
@endpush

@push('page-script')
	
	<script src="{{ asset('vue/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('vue/vendors/trumbowyg/js/trumbowyg.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('vue/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vue/vendors/summernote/summernote.min.js') }}"></script>
	<script src="{{ asset('vue/js/custom_js/form_editors.js') }}" type="text/javascript"></script>
	<script src="{{ asset('vue/js/custom_js/adduser.js') }}" type="text/javascript"></script>
	
@endpush

@section('content')
<style>

.fa-icon i {
    font-size: 30px;
}

</style>
<form>
	<div class="col-sm-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">
	            	<h1>MEIN MODEL PROFIL</h1>
	            	<span class="pull-right hidden-xs">
	                	<i class="fa fa-fw ti-angle-up clickable"></i>
	                	<i class="fa fa-fw ti-close removepanel clickable"></i>
	        		</span>
	        	</h3>
			</div>
			<div class="panel-body">

                            <div class="bs-example">
                                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                    <li class="active">
                                        <a href="#home" data-toggle="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i>AUSBILDUNG</a>
                                    </li>
                                    <li>
                                        <a href="#profile" data-toggle="tab"><i class="fa fa-fw fa-briefcase"></i> ERFAHRUNGEN IM MODEL BUSINESS</a>
                                    </li>
                                    <li>
                                        <a href="#talent" data-toggle="tab"><i class="fa fa-pie-chart" aria-hidden="true"></i> TALENTE</a>
                                    </li>
                                    <li>
                                        <a href="#prize" data-toggle="tab"><i class="fa fa-trophy" aria-hidden="true"></i> ERFOLGE/ REFERENZEN</a>
                                    </li>
                                   
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                	<!-- AUSBILDUNG !-->
                                    <div class="tab-pane fade active in" id="home">
                                    	<div class="table-responsive">
                                    		<table class="table">
                                    			<thead>
                                    				<tr>
                                    					<th>Qualifikation</th>
                                    					<th>Daten</th>
                                    					<th>Schule / Hochschulen</th>
                                    					<th></th>

                                    				</tr>
                                    			</thead>
                                    			<tbody>
                                    				<tr>
                                    					<td>Schule</td>
                                    					<td>20012-2017</td>
                                    					<td>Gymnasium</td>
                                    					<td><i class="fa fa-fw ti-settings"></i><i class="fa fa-fw fa-trash-o"></i></td>
                                    				</tr>
                                    			</tbody>
                                       		</table>
                                       		<button type="button" class="btn btn-labeled btn-primary show-it" id="new-button">
                                                <span class="btn-label">
                                                	<i class="fa fa-plus" aria-hidden="true"></i>
                                                
                                            	</span>Neu hinzufügen
                                        	</button>
                                    	</div>
                                        <div class="clearfix"></div>
                                        <div class="row submit-panel">
                                        <div class="col-sm-12">
                                            <form class="form-horizontal" id="my-submit">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label></label>
                                                        <input class="form-control"  placeholder="titel *" type="text" required>     
                                                    </div>
                                                                
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label> vondatum *</label>
                                                        <input class="form-control" placeholder="01-01-2018" type="text">
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                   
                                                    <div class="form-group">
                                                                   
                                                                     <label>zuDatum *</label>
                                                                        <input class="form-control"  placeholder="01-01-2018" type="text">
                                                                   
                                                    </div>
                                                 
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                   
                                                    <div class="form-group">
                                                                   
                                                                     <label></label>
                                                                        <input class="form-control"  placeholder="Insitute" type="text">
                                                                   
                                                    </div>
                                                 
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                   
                                                        <div class="form-group">
                                                                <label></label>
                                                            <textarea name="about" class="textarea editor-cls" placeholder="Place some text here"></textarea>

                                                        </div>
                                                    

                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                   
                                                        <div class="form-group">
                                                                <label></label>
                                                                <button type="submit" lable-submit="Aktualisieren ..." lable-static="Neu hinzufügen" class="btn btn-primary">Neu hinzufügen
                                                                </button>
                                                                <button type="button" class="btn btn-danger cancel-panel">Annuleer
                                                                </button>

                                                        </div>
                                                    

                                                </div>
                                            </form>
                                            
                                        </div>
                                        </div>
                                    </div>

                                    <!-- AUSBILDUNG END !-->
                                    <div class="tab-pane fade" id="profile">
                                    	<div class="table-responsive">
                                    		<table class="table">
                                    			<thead>
                                    				<tr>
                                    					<th>Jobs / Auftraggeber</th>
                                    					<th>Daten</th>
                                    					

                                    				</tr>
                                    			</thead>
                                    			<tbody>
                                    				<tr>
                                    					<td></td>
                                    					<td></td>
                                    					
                                    				</tr>
                                    			</tbody>
                                       		</table>
                                       		<button type="button" class="btn btn-labeled btn-primary">
                                                <span class="btn-label">
                                                	<i class="fa fa-plus" aria-hidden="true"></i>
                                                
                                            	</span>Neu hinzufügen
                                        	</button>
                                    	</div>
                                       
                                    </div>
                                    <div class="tab-pane fade" id="talent">
                                        <div class="table-responsive">
                                    		<table class="table">
                                    			<thead>
                                    				<tr>
                                    					<th>Was kann ich besonders gut?</th>
                                    					<th>Niveau</th>
                                    					<th></th>
                                    					

                                    				</tr>
                                    			</thead>
                                    			<tbody>
                                    				<tr>
                                    					<td>Verlässlichkeit</td>
                                    					<td>100</td>
                                    					<td><i class="fa fa-fw ti-settings"></i><i class="fa fa-fw fa-trash-o"></i></td>
                                    				</tr>
                                    			</tbody>
                                       		</table>
                                       		<button type="button" class="btn btn-labeled btn-primary">
                                                <span class="btn-label">
                                                	<i class="fa fa-plus" aria-hidden="true"></i>
                                                
                                            	</span>Neu hinzufügen
                                        	</button>
                                    	</div>
                                    </div>
                                    <div class="tab-pane fade" id="prize">
                                        <div class="table-responsive">
                                    		<table class="table">
                                    			<thead>
                                    				<tr>
                                    					<th>Erfolge/ Referenzen</th>
                                    					<th>Daten</th>
                                    					<th></th>
                                    					

                                    				</tr>
                                    			</thead>
                                    			<tbody>
                                    				<tr>
                                    					
                                    				</tr>
                                    			</tbody>
                                       		</table>
                                       		<button type="button" class="btn btn-labeled btn-primary">
                                                <span class="btn-label">
                                                	<i class="fa fa-plus" aria-hidden="true"></i>
                                                
                                            	</span>Neu hinzufügen
                                        	</button>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        

			</div>
		</div>
	</div>
</form>

@endsection


@push('page-script')
<script>
$('.submit-panel').hide();
$(".show-it").click(function(){


    $(this).closest('.tab-pane').find('.submit-panel').toggle();
});

$('.cancel-panel').click(function(){

    $(this).closest('.submit-panel').hide();

});
$('#my-submit').click(function(e){

        var url = '<?php echo route("update-model",["type"=>"client-update","lang"=>"en"])?>';
        var button = $(this);
        var label_on = $(this).attr('lable-submit');
        var label_off = $(this).attr('lable-static');
        e.preventDefault();
        var object = objectifyForm($('#client-form').serializeArray());
        console.log(object);

        $.post(url,{_token:token,object:object});

        $.ajax({
            method:'POST',
            url:url,
            data:{_token:token,object:object},
            beforeSend:function(){
                button.text(label_on);
            },
            complete:function(){
                button.text(label_off);
            }
        });
    });


</script>
@endpush