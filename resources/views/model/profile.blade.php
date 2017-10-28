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
<form>
<div class="col-sm-12">
	<div class="panel">
		<div class="panel-heading">
	        <h3 class="panel-title">
	            <h1>Mein Konto</h1>
	        </h3>
	        <span class="pull-right hidden-xs">
	                <i class="fa fa-fw ti-angle-up clickable"></i>
	                <i class="fa fa-fw ti-close removepanel clickable"></i>
	        </span>
        </div>
        <div class="panel-body">
        	
        		<div class="col-sm-6">
        		
        			<div class="form-body">
        				<div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>Benutzername</strong></label>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>Vorname</strong></label>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>In Suche erlauben?</strong></label>
                                <select class="form-control">
                                	<option>Ja</option>
                                	<option>Nein</option>
                                </select>
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>Benutzername</strong></label>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
	                    </div>
        			</div>
        		
        		</div>
        		<div class="col-sm-6">
        		
        			<div class="form-body">
        				<div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>go-code</strong></label>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>Nachname</strong></label>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
	                    </div>

	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>Benutzername</strong></label>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>In Suche erlauben?</strong></label>
                                <select class="form-control">
                                	<option>50plus Model (50-100 Jahre)</option>
                                	<option>Baby Model (0-2 Jahre)</option>
                                	<option>Fitness Model (18-100 Jahre)</option>
                                	<option>Model Kids (2-15 Jahre)</option>
                                	<option>Models (15-50 Jahre)</option>
                                	<option>Plus Size Model (18-100 Jahre)</option>
                                </select>
                            </div>
	                    </div>
        			</div>
        		
        		</div>
        		
        			<div class="col-sm-12">
        				<div class="form-body">
        					<div class="form-group">
        						      <label for="inputEmail1"><strong>Schreibe etwas über dich:</strong></label>
        						<textarea class="textarea editor-cls" placeholder="Place some text here"></textarea>

        					</div>
        				</div>

        			</div>
        		
        	
        </div>
	</div>
</div>	

<div class="col-sm-12">
	<div class="panel">
		<div class="panel-heading">
	        <h3 class="panel-title">
	            <h1>SOZIALE NETZWERKE</h1>
	        </h3>
	        <span class="pull-right hidden-xs">
	                <i class="fa fa-fw ti-angle-up clickable"></i>
	                <i class="fa fa-fw ti-close removepanel clickable"></i>
	        </span>
        </div>
		<div class="panel-body">
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong></strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Facebook">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong></strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Google Plus">
                    </div>
	            </div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong></strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Twitter">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong></strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
			</div>
		</div>
	</div>
</div>

<div class='col-sm-12'>
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">
	            <h1>KONTAKTINFORMATIONEN</h1>
	        </h3>
		</div>
		<div class="panel-body">
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Telefonnummer</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Twitter">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Website (wenn vorhanden)</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Postleitzahl</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Twitter">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Land</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>

			</div>
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>E-Mail</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Twitter">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Adresse (Strasse)</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group" style="visibility:hidden">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>asdfasdf</strong></label>
                        <input type="" class="form-control" id="inputEmail1" placeholder="Twitter">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Stadt</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            
			</div>
			<div class="col-sm-12">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Adresse vervollständigen</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
			</div>		
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">
	            <h1>PERSÖNLICHE INFORMATIONEN</h1>
	        </h3>
		</div>
		<div class="panel-body">
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Geburtstag</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Gewicht</strong></label>
                        <select class="form-control" v-for="n in 115">
                        	 <option>@{{ n }}</option>
                        </select>
                       
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Schuhgröße</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Augenfarbe</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Hautfarbe</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Körpergröße(cm)</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Kleidergröße</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Brust-Taille-Hüfte</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Haarfarbe</strong></label>
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Linkedin">
                    </div>
	            </div>
			</div>
			<div class="col-sm-12"></div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label>Geschlecht</label>
				<div class="iradio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="option1"> männlich
                    </label>
                </div>
                <div class="iradio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2"
                               value="option2"> weiblich
                    </label>
                </div>
               
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label>Piercing</label>
				<div class="iradio">
                    <label>
                        <input type="radio" name="piercing" id="optionsRadios1"
                               value="option1"> Ja
                    </label>
                </div>
                <div class="iradio">
                    <label>
                        <input type="radio" name="piercing" id="optionsRadios2"
                               value="option2">  Nein

                    </label>
                </div>
               
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label>Tattoo</label>
				<div class="iradio">
                    <label>
                        <input type="radio" name="tatoo" id="optionsRadios1"
                               value="option1"> Ja
                    </label>
                </div>
                <div class="iradio">
                    <label>
                        <input type="radio" name="tatoo" id="optionsRadios2"
                               value="option2">  Nein

                    </label>
                </div>
               
			</div>
			<div class="col-sm-12">
				<button type="submit" class="btn btn-effect-ripple btn-primary">Aktualisieren</button>
			</div>
		</div>
	</div>
</div>
</form>
@endsection