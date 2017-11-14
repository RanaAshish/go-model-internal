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
<form id='client-form'>
    <input type="hidden" name="profile_id" value="{{ $user->profile_id }}"/>
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
                                <input type="text" class="form-control"  value="{{ $user->name}}" placeholder="" disabled>
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>Vorname</strong></label>
                                <input type="text" name="first_name" value="{{ $user->profile->first_name }}" class="form-control"  placeholder="Vorname">
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>In Suche erlauben?</strong></label>
                                <select name="allow_search" class="form-control" select-value="{{ $user->profile->allow_search }}">
                                	<option value="1">Ja</option>
                                	<option value="0">Nein</option>
                                </select>
                            </div>
	                    </div>

        			</div>

        		</div>
        		<div class="col-sm-6">

        			<div class="form-body">
        				<div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>go-code</strong></label>
                                <input type="text" class="form-control" value="{{ $user->profile->go_code}}" disabled  placeholder="go-code">
                            </div>
	                    </div>
	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>Nachname</strong></label>
                                <input type="text" name="last_name" class="form-control" value="{{$user->profile->last_name }}" placeholder="Nachname">
                            </div>
	                    </div>


	                    <div class="form-group">
	                       <div class="form-group">
                                <label for="inputEmail1"><strong>In Suche erlauben?</strong></label>
                                <select class="form-control select-box" name="model_catgory" select-value="{{ $user->profile->model_catgory }}">
                                    <?php
                                        $modeCategories = \DB::table('model_categories')->get();
                                    ?>

                                    @foreach($modeCategories as $m)
                                    <option value="{{ $m->id }}">{{ $m->description }}</option>

                                    @endforeach

                                </select>
                            </div>
	                    </div>
        			</div>

        		</div>

        			<div class="col-sm-12">
        				<div class="form-body">
        					<div class="form-group">
        						      <label for="inputEmail1"><strong>Schreibe etwas über dich:</strong></label>
        						<textarea name="about" class="textarea editor-cls" placeholder="Place some text here">{{ $user->profile->about }}</textarea>

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
                        <input type="text" class="form-control"  value="{{ $user->profile->facebook }}" placeholder="Facebook">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong></strong></label>
                        <input type="text" class="form-control"  value="{{ $user->profile->google_plus }}" placeholder="Google Plus">
                    </div>
	            </div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong></strong></label>
                        <input type="text" class="form-control"  value="{{ $user->profile->twitter }}" placeholder="Twitter">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong></strong></label>
                        <input type="text" class="form-control" name="linkedin"  value="{{ $user->profile->linkedin }}" placeholder="Linkedin">
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
                        <input type="text" name="phone" class="form-control"  value="{{ $user->profile->phone }}" placeholder="Twitter">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Website (wenn vorhanden)</strong></label>
                        <input type="text" name="web_site" class="form-control"  value="{{ $user->profile->web_site }}" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Postleitzahl</strong></label>
                        <input type="text" name="post_code" class="form-control"  value="{{ $user->profile->post_code }}" placeholder="Post code">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Land</strong></label>
                        <input type="text" name="country" class="form-control" id="inputEmail1" value="{{ $user->profile->country }}" placeholder="Land">
                    </div>
	            </div>

			</div>
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>E-Mail</strong></label>
                        <input type="text" name="email" class="form-control" value="{{ $user->profile->email }}" id="inputEmail1" placeholder="">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Adresse (Strasse)</strong></label>
                        <input type="text" class="form-control" value="{{ $user->profile->address }}"  placeholder="Adresse (Strasse)">
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
                        <input type="text" name="city" class="form-control" value="{{ $user->profile->city }}"  placeholder="Stadt">
                    </div>
	            </div>

			</div>
			<div class="col-sm-12">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Adresse vervollständigen</strong></label>
                        <input type="text" name="road" class="form-control" value="{{ $user->profile->road }}"  placeholder="Adresse vervollständigen">
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
                        <input type="text" class="form-control" name="birth_day" placeholder="" value="{{ $user->profile->birth_day }}">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Gewicht</strong></label>
                        <select  name="weight_in_kg" class="select-box form-control" select-value="{{ $user->profile->weight_in_kg }}">
                            <?php for($i = 5; $i < 115;$i++): ?>
                             <option value="{{ $i }}"> {{ $i}} kg</option>
                            <?php endfor; ?>

                        </select>

                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Schuhgröße</strong></label>
                        <input type="text" name="shoe_size" value="{{ $user->profile->shoe_size }}" class="form-control" placeholder="Linkedin">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Augenfarbe</strong></label>
                        <input type="text" name="eye_color" value="{{ $user->profile->eye_color }}" class="form-control"  placeholder="">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Hautfarbe</strong></label>
                        <input type="text" name="skin_color" value="{{ $user->profile->skin_color }}" class="form-control" id="inputEmail1" placeholder="">
                    </div>
	            </div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Körpergröße(cm)</strong></label>

                        <select  name="height_in_cm" class="select-box form-control" select-value="{{ $user->profile->height_in_cm }}">
                            <?php for($i = 5; $i < 207;$i++): ?>
                             <option value="{{ $i }}"> {{ $i}} cm</option>
                            <?php endfor; ?>

                        </select>
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Kleidergröße</strong></label>
                        <input type="text" name="dress_size" value="{{ $user->profile->dress_size }}" class="form-control"  placeholder="">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Brust-Taille-Hüfte</strong></label>
                        <input type="text" name="brust_tail" class="form-control" value="{{$user->profile->brust_tail}}" placeholder="">
                    </div>
	            </div>
	            <div class="form-group">
                   <div class="form-group">
                        <label for="inputEmail1"><strong>Haarfarbe</strong></label>
                        <input type="text" value="{{ $user->profile->hair_color}}" class="form-control" name="hair_color" placeholder="">
                    </div>
	            </div>
			</div>
			<div class="col-sm-12"></div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label>Geschlecht</label>
				<div class="iradio">
                    <label>
                        <input type="radio" select-value="{{ $user->profile->gender}}" name="gender"
                               value="male"> männlich
                    </label>
                </div>
                <div class="iradio">
                    <label>
                        <input type="radio" select-value="{{ $user->profile->gender}}" name="gender"
                               value="female"> weiblich
                    </label>
                </div>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label>Piercing</label>
				<div class="iradio">
                    <label>
                        <input type="radio" select-value="{{ $user->profile->Piercing}}" name="Piercing" value="1"/> Ja
                    </label>
                </div>
                <div class="iradio">
                    <label>
                        <input type="radio" select-value="{{ $user->profile->Piercing}}" name="Piercing" value="0"/>  Nein
                    </label>
                </div>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label>Tattoo</label>
				<div class="iradio">
                    <label>
                        <input type="radio" select-value="{{ $user->profile->tattoo}}" name="tattoo"  value="1"> Ja
                    </label>
                </div>
                <div class="iradio">
                    <label>
                        <input type="radio" select-value="{{ $user->profile->tattoo}}" name="tattoo" value="0">  Nein
                    </label>
                </div>

			</div>
			<div class="col-sm-12">
				<button type="submit" id="my-submit" class="btn btn-effect-ripple btn-primary" lable-submit="Aktualisieren ..." lable-static="Aktualisieren">Aktualisieren</button>
			</div>

		</div>
	</div>
</div>
</form>
@endsection

@push('page-script')
<script>


    $('.select-box').each(function(){

        var myvalue = $(this).attr('select-value');
        $(this).val(myvalue);

    });
    $('input[type="radio"]').each(function(){

        var myvalue = $(this).attr('select-value');
        if(myvalue == $(this).val()){

           $(this).prop('checked', true);
        }
    });

    var url = '<?php echo route("model.model.update",["type"=>"client-update"])?>';

    $('#my-submit').click(function(e){

        var button = $(this);
        var label_on = $(this).attr('lable-submit');
        var label_off = $(this).attr('lable-static');
        e.preventDefault();
        var object = objectifyForm($('#client-form').serializeArray());
        console.log(object);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url,
            type: 'POST',
            data: {_method: 'PUT', object: object},
            beforeSend:function(){
                button.text(label_on);
            },
            success: function (response, textStatus, request) {
                button.text(label_off);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // todo: handle error
            }
        });
    });





    function objectifyForm(formArray) {//serialize data function

    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){

        if(formArray[i]['value'] == ''){

            continue;
        }
        returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
  return returnArray;
    }

</script>



@endpush