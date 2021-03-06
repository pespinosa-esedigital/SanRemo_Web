<div class="register-box">
	<div class="register-box-body" ng-controller="DatepickerDemoCtrl">
		<p class="login-box-msg">Nuovo Microsito</p>
		<form action="<?php echo base_url() ?>micro/add/<?php echo $user ?>" method="post" enctype="multipart/form-data" id="registerMicrosite">
			<input type="hidden" name="registro" value="1">
			<input type="hidden" name="userMicrosite" value="<?php echo $user ?>">
			<div class="form-group has-feedback">
			<?php foreach ($config->idiomas as $key => $value): ?>
				<label>Nome Microsite <?php echo $value->nombre ?></label>
				<input type="text" class="form-control" placeholder="Nome Microsite <?php echo $value->nombre ?>" name="nombre-<?php echo $value->letras ?>" <?php echo $key==0 ? 'required' : '' ?>/>
				<br>
			<?php endforeach ?>
			</div>
			<div class="form-group has-feedback">
					<label for="exampleInputEmail1">Seleziona il logo 458x304px</label>
					<input type="file" class="form-control" name="logogris" placeholder="Seleziona Foto" multiple="true" />
					<div id="errorBlock47" class="help-block"></div>
				</div>
			<div class="form-group has-feedback">
					<label for="exampleInputEmail1">Seleziona l'immagine il logo microsite 458x304px</label>
					<input type="file" class="form-control" name="logo" placeholder="Seleziona Foto" multiple="true" />
					<div id="errorBlock45" class="help-block"></div>
				</div>
			<div class="form-group has-feedback">
					<label for="exampleInputEmail1">Immagini per slide principale (desktop). Misure: 1876x720px </label>
					<input type="file" class="form-control" name="fotoPrincipal" placeholder="Seleziona Foto" multiple="true"/>
					<div id="errorBlock46" class="help-block"></div>
				</div>
				<div class="form-group has-feedback">
					<label for="exampleInputEmail1">Immagini per slide principale (mobile). Misure: 704x568px</label>
					<input type="file" class="form-control" name="foto" placeholder="Seleccione Fotos" multiple="true" />
					<div id="errorBlock44" class="help-block"></div>
				</div>
			<div class="form-group has-feedback categorias-cuadro">
				<label for="exampleInputEmail1">Categorie</label>
				<div class="form-group">
					<?php foreach ($padres as $key => $value): ?>
						<?php $u = json_decode($value); ?>
	                    <label>
	                      <input type="checkbox" name="categoria[]" data-label="<?php echo $u->it ?>" class="categori" value="<?php echo $key ?>" class="minimal" <?php echo $key == 5 ? 'id="barco"' : '' ?> <?php echo $key == 3 ? 'id="basurero"' : '' ?>
	                      	
	                      <?php echo $key == 1 ? 'id="camisa"' : '' ?>/>
	                      <?php echo $u->it ?>
	                    </label>
					<?php endforeach ?>
              	</div>
			</div>
			<div class="form-group has-feedback subs-1 sss" style="display:none">
				<label for="exampleInputEmail1">Sotto-categorie Negozi</label>
				<div class="form-group">
					<?php if (count($hijo1) > 0): ?>
						<?php foreach ($hijo1 as $key => $value): ?>
							<?php $r = json_decode($value['label'])  ?>
							<?php $value['label'] = $r->it; ?>
		                    <label>
		                      <input type="checkbox" name="subcategoria[]" data-label="<?php echo $value['label'] ?>" value="<?php echo $value['id'] ?>" class="minimal"/>
		                      <?php echo $value['label'] ?>
		                    </label>
						<?php endforeach ?>
					<?php else: ?>
						<h5>Non ci sono sottocategorie nella categoria selezionata </h5>
					<?php endif ?>
              	</div>
			</div>
			<div class="form-group has-feedback subs-2 sss" style="display:none">
				<label for="exampleInputEmail1">Sotto-categorie Ristoranti</label>
				<div class="form-group">
					<?php if (count($hijo2) > 0): ?>
					<?php foreach ($hijo2 as $key => $value): ?>
					<?php $r = json_decode($value['label'])  ?>
							<?php $value['label'] = $r->it; ?>
	                    <label>
	                      <input type="checkbox" name="subcategoria[]" data-label="<?php echo $value['label'] ?>" value="<?php echo $value['id'] ?>" class="minimal"/>
	                      <?php echo $value['label'] ?>
	                    </label>
					<?php endforeach ?>
					<?php else: ?>
						<h5>Non ci sono sottocategorie nella categoria selezionata</h5>
					<?php endif ?>
              	</div>
			</div>
			<div class="form-group has-feedback subs-3 sss" style="display:none">
				<label for="exampleInputEmail1">Sotto-categorie Tempo Libero Benessere</label>
				<div class="form-group">
					<?php if (count($hijo3) > 0): ?>
					<?php foreach ($hijo3 as $key => $value): ?>
					<?php $r = json_decode($value['label'])  ?>
							<?php $value['label'] = $r->it; ?>
	                    <label>
	                      <input type="checkbox" name="subcategoria[]" data-label="<?php echo $value['label'] ?>" value="<?php echo $value['id'] ?>" class="minimal"/>
	                      <?php echo $value['label'] ?>
	                    </label>
					<?php endforeach ?>
					<?php else: ?>
						<h5>Non ci sono sottocategorie nella categoria selezionata</h5>
					<?php endif ?>
              	</div>
			</div>
			<div class="form-group has-feedback subs-4 sss" style="display:none">
				<label for="exampleInputEmail1">Sotto-categorie Cinema e Spectacoli</label>
				<div class="form-group">
					<?php if (count($hijo4) > 0): ?>
					<?php foreach ($hijo4 as $key => $value): ?>
					<?php $r = json_decode($value['label'])  ?>
							<?php $value['label'] = $r->it; ?>
	                    <label>
	                      <input type="checkbox" name="subcategoria[]" data-label="<?php echo $value['label'] ?>" value="<?php echo $value['id'] ?>" class="minimal"/>
	                      <?php echo $value['label'] ?>
	                    </label>
					<?php endforeach ?>
					<?php else: ?>
						<h5>Non ci sono sottocategorie nella categoria selezionata</h5>
					<?php endif ?>
              	</div>
			</div>
			<div class="form-group has-feedback subs-5 sss" style="display:none">
				<label for="exampleInputEmail1">Sotto-categorie Accomodation</label>
				<div class="form-group">
					<?php if (count($hijo5) > 0): ?>
					<?php foreach ($hijo5 as $key => $value): ?>
					<?php $r = json_decode($value['label'])  ?>
							<?php $value['label'] = $r->it; ?>
	                    <label>
	                      <input type="checkbox" name="subcategoria[]" data-label="<?php echo $value['label'] ?>" value="<?php echo $value['id'] ?>" class="minimal"/>
	                      <?php echo $value['label'] ?>
	                    </label>
					<?php endforeach ?>
					<?php else: ?>
						<h5>Non ci sono sottocategorie nella categoria selezionata</h5>
					<?php endif ?>
              	</div>
			</div>
		<div class="form-group has-feedback marcas" style="display:none" >
					<label for="exampleInputEmail1">Seleziona brands </label>
					<select class="form-control" name="marcas[]" placeholder="Seleccione Marcas" multiple>
						<?php foreach ($marcas as $key => $value): ?>
							<option value="<?php echo $value->getIdmarca() ?>"><?php echo $value->getNombre() ?></option>
						<?php endforeach ?>
					</select>
					<div id="errorBlock44" class="help-block"></div>
				</div>
		<div class="form-group has-feedback">
			<div class="mapa"></div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Cerca in Google Maps" name="punto" required/>
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button" id="findDir">Cerca</button>
		      </span>
		    </div>

			<input type="hidden" name="Lat">
			<input type="hidden" name="Long">
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Indirizzo" name="direccion" required/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Sito Web" name="website" />
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control ruta" placeholder="Reservation" name="ruta" style="display:none"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback rutas" style="display:none"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Telefono" name="telefono"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="email" class="form-control" placeholder="Email" name="email" required/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<?php foreach ($config->idiomas as $key => $value): ?>
				<label>Descrizione <?php echo $value->nombre ?></label>
				<textarea name="descripcion-<?php echo $value->letras ?>" id="descripcion-<?php echo $value->nombre ?>" placeholder="Descrizione <?php echo $value->nombre ?>" class="form-control" cols="30" rows="10" <?php echo $key==0 ? 'required' : '' ?>></textarea>
				<br>
			<?php endforeach ?>
		</div>
		<div class="form-group has-feedback">
			<?php foreach ($config->idiomas as $key => $value): ?>
				<label>Giorni e orario di apertura <?php echo $value->nombre ?></label>
				<textarea name="apertura-<?php echo $value->letras ?>" id="apertura-<?php echo $value->nombre ?>" placeholder="Giorni e orario di apertura <?php echo $value->nombre ?>" class="form-control" cols="30" rows="2" <?php echo $key==0 ? 'required' : '' ?>></textarea>
				<br>
			<?php endforeach ?>
		</div>
		<div class="form-group has-feedback">
			<?php foreach ($config->idiomas as $key => $value): ?>
				<label>Giorno di chiusura <?php echo $value->nombre ?></label>
				<textarea name="cierre-<?php echo $value->letras ?>" id="cierre-<?php echo $value->nombre ?>" placeholder="Giorno di chiusura <?php echo $value->nombre ?>" class="form-control" cols="30" rows="2" <?php echo $key==0 ? 'required' : '' ?>></textarea>
				<br>
			<?php endforeach ?>
		</div>





		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Facebook" name="facebook"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Twitter" name="twitter"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Google" name="google"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="LinkedIn" name="linkedin"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Pinterest" name="pinterest"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Instagram" name="instagram"/>
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>		






		<h3>SEO BOX</h3>
		<div class="form-group has-feedback">
			<?php foreach ($config->idiomas as $key => $value): ?>
				<input type="text" class="form-control" placeholder="Title <?php echo $value->nombre ?>" name="title-<?php echo $value->letras ?>" <?php echo $key==0 ? 'required' : '' ?>/>
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				<br>
			<?php endforeach ?>
		</div>
		<div class="form-group has-feedback">
			<?php foreach ($config->idiomas as $key => $value): ?>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon">http://www.sanremo-on.com/<?php echo $value->letras ?>/<span class="uu"></span></span>
					<input type="text" class="form-control url-control" placeholder="URL <?php echo $value->nombre ?>" name="url-<?php echo $value->letras ?>" <?php echo $key==0 ? 'required' : '' ?>/>
					<span class="input-group-addon" id="basic-addon2">.html</span>
				</div>
				<br>
			<?php endforeach ?>
		</div>
		<div class="form-group has-feedback">
			<?php foreach ($config->idiomas as $key => $value): ?>
				<label>Description <?php echo $value->nombre ?></label>
				<textarea name="description-<?php echo $value->letras ?>" id="description-<?php echo $value->nombre ?>" placeholder="Description <?php echo $value->nombre ?>" class="form-control" cols="30" rows="10" <?php echo $key==0 ? 'required' : '' ?>></textarea>
				<br>
			<?php endforeach ?>
		</div>
		<input type="hidden" name="estatus" value="0">
		<div class="row">
			<div class="col-xs-4">
				<button type="button" class="btn btn-primary btn-block btn-flat" data-value="0">Salva</button>
			</div><!-- /.col -->
			<div class="col-xs-4">
				<button type="button" class="btn btn-primary btn-block btn-flat" data-value="1">Pubblica</button>
			</div>
			<div class="col-xs-4">
				<button type="button" class="btn btn-primary btn-block btn-flat" data-value="-1">Anteprima</button>
			</div>
		</div>
		<input type="hidden" name="registro" value="1">
	</form>        
</div><!-- /.form-box -->
</div><!-- /.register-box -->
<style>
	.mapa {
	    height: 250px;
	    width: 100%;
	}
</style>
<script>
if($.isEmptyObject($('.categori:checked'))){
	$('.uu').html($('.categori:checked').data('label').toLowerCase().replace(/[\s,]+/g,'-')+'/');
}

$('[name="marcas[]"]').multiSelect();

$('.url-control').on('change',function(){
	$(this).val(tools.clearStr($(this).val()));
});

if($.isEmptyObject($('input[value="1"]:checked'))){
	$('.marcas').show('slow');
}
$('.categori').on('change',function(){
	$('.categorias-cuadro').removeClass('error-categoria');
	if($('#barco').prop('checked')){
		$('.ruta').show('slow');
	}else{
		$('.ruta').hide();
		$('.ruta').val('');
		if($('#basurero').prop('checked')){
			$('.ruta').show('slow');
		}else{
			$('.ruta').hide();
			$('.ruta').val('');
		}
	}
	if($('#camisa').prop('checked')){
		$('.marcas').show('slow');
	}else{
		$('.marcas').hide();
		$('[name="marcas[]"]').multiSelect('deselect_all');
	}

	if($.isEmptyObject($('.categori:checked'))){
		$('.uu').html('');
	}else{
		if ($(this).is(':checked')) {
			// $('.sss').hide();
			$('.subs-'+$(this).val()).show('slow');
			$('.uu').html($(this).data('label').toLowerCase().replace(/[\s,]+/g,'-')+'/');
		}else{
			$('.subs-'+$(this).val()).hide('slow');
			$('.subs-'+$(this).val() +' input[type="checkbox"]').each(function(index, el) {
				$(el).prop('checked', false);
			});
		}
		if ($(this).is(':unchecked')) {

			$('.categori:checked').on('change',function(){
				$('.uu').html($(this).data('label').toLowerCase().replace(/[\s,]+/g,'-')+'/');		
			});
		};
	}
})
$('[name="title"]').on('keydown',function(e){
	if(e.keyCode != 8){
		if($(this).val().length > 155 ){
			return false;
		}
	}
});
$('[name="description"]').on('keydown',function(e){
	if(e.keyCode != 8){
		if($(this).val().length > 155 ){
			return false;
		}
	}
})
$('[name="url"]').on('keydown',function(e){
	console.log(e.keyCode);
	if ( (e.keyCode >= 65 && e.keyCode <=90) || (e.keyCode >= 48 && e.keyCode <=57) || (e.keyCode >= 96 && e.keyCode <=105) || e.keyCode == 173 || e.keyCode == 189 || e.keyCode == 8 ) {
        $(this).val($(this).val().toLowerCase())
        return;
    }else{
    	e.preventDefault();
    	return false;
    }
})
$.validator.setDefaults({ ignore: ":hidden:not(select)" });
$("#registerMicrosite").validate({
	errorPlacement: function(error, element) {
        if(element.parent('.form-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});
$('[data-chosen="1"]').chosen({
	allow_single_deselect: true,
	width:"100%"
});

$('input[name="foto"]').fileinput({
	showUpload: false,
	browseClass: "btn btn-primary",
	language: 'es',
	uploadAsync: false,
    minFileCount: 1,
    maxImageWidth: 705,
    minImageWidth: 703,
    maxImageHeight:569,
    minImageHeight:567,
    maxFileCount: 5,
	allowedFileExtensions: ['jpg', 'png', 'gif'],
    elErrorContainer: "#errorBlock44",
	previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});
$('[name="logo"]').fileinput({
	showUpload: false,
	browseClass: "btn btn-primary",
	language: 'es',
	uploadAsync: false,
	maxImageWidth: 459,
	minImageWidth: 457,
	maxImageHeight:305,
	minImageHeight:303,
    minFileCount: 1,
	allowedFileExtensions: ['jpg', 'png', 'gif'],
    elErrorContainer: "#errorBlock45",
	previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});
$('[name="logogris"]').fileinput({
	showUpload: false,
	browseClass: "btn btn-primary",
	language: 'es',
	uploadAsync: false,
    minFileCount: 1,
    maxImageWidth: 459,
    minImageWidth: 457,
    maxImageHeight:305,
    minImageHeight:303,
	allowedFileExtensions: ['jpg', 'png', 'gif'],
    elErrorContainer: "#errorBlock47",
	previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});
    
$('[name="fotoPrincipal"]').fileinput({
	showUpload: false,
	browseClass: "btn btn-primary",
	language: 'es',
	uploadAsync: false,
    minFileCount: 1,
    maxImageWidth: 1877,
    minImageWidth: 1875,
    maxImageHeight:721,
    minImageHeight:719,
    maxFileCount: 5,
	allowedFileExtensions: ['jpg', 'png', 'gif'],
    elErrorContainer: "#errorBlock46",
	previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});


$('button[data-value]').on('click',function(){
	$('input[name="estatus"]').val($(this).data('value'));
	if($(this).data('value') == '-1'){
		tools.notificacion('top', 'Previsualizando...', 'success');
	}
	$('#registerMicrosite').submit();
})



$('#registerMicrosite').on('submit', function(evt) {

    // if($.isEmptyObject($('.categori:checked'))){
    // 	$('.categori').focus();
    // 	$('.categorias-cuadro').addClass('error-categoria');
    // 	return false;
    // }else{
    // 	$('.categorias-cuadro').removeClass('error-categoria');
    // }


    var t = false;
    if($('.categori:checked').get().length > 0){
    	t = true;
    }
    if(!t){
    	$('.categorias-cuadro').addClass('error-categoria');
    	$('html,body').animate({
        scrollTop: $('.categorias-cuadro').offset().top},
        'slow');
    	return false;
    }

    var pru = false;
    var ele;
    $('.file-error-message').each(function(i,e){
    	console.log(i);
    	if( !$(e).is(':hidden')) {
    		pru = true;
    		ele = e;
    	}
    })
    if(pru){
    	tools.scrollTo('#'+ele.id);
    	return false;
    }
    
	// $('[required]').each(function(){
	//     if(!this.validity.valid){
	//         $(this).focus();
	//         return false;
	//     }
	// });
	var isvalidate=$(this).valid();
    if(!isvalidate){
        return false;
    }
    evt.preventDefault();
	var postData = new FormData();
	var files = $('input[name="foto"]').prop('files');//[0];
	var logo = $('input[name="logo"]').prop('files')[0];
	var principal = $('input[name="fotoPrincipal"]').prop('files');//[0];
	var gris = $('input[name="logogris"]').prop('files')[0];//[0];
	for (var i = 0; i < files.length; i++) {
		postData.append('galeria'+i, files[i]);
	};
	for (var i = 0; i < principal.length; i++) {
		postData.append('imagePrincipal'+i, principal[i]);
	};
	postData.append('logogris', gris);
	postData.append('logo', logo);

	$('input[type="email"],input[type="text"],input[type="password"],input[type="hidden"],textarea,input[type="checkbox"]:checked,select').
		each(function(index, el) {
			if($(el).is('select')){
				if($(el).val()){
					for (var i = 0; i < $(el).val().length; i++) {
						postData.append(el.name,$(el).val()[i]);
					}
				}
			}else{
				postData.append(el.name, el.value.trim());
			}
	});
	var cat = $('input[type="checkbox"]:checked').val();
	console.log(cat);
	categoria = '';
	switch(parseInt(cat)){
			case 1:
				categoria ='negozi';
				break;
			case 2:
				categoria ='ristoranti-bar';
				break;
			case 3:
				categoria ='tempo-libero-e-benessere';
				break;
			case 4:
				categoria ='spettacoli-cinema';
				break;
			case 5:
				categoria ='hotel';
				break;
	}
	$.ajax({
		url: $('#registerMicrosite').attr('action'),
		type: "POST",
		data: postData,
		processData: false,
		contentType: false,
		success: function(data, textStatus, jqXHR) {
			console.log(data);
			if (typeof(data) == 'object') {
				if (data.code == 200) {
					if(data.prev){
						window.open('//doffice.com.mx/sanremoOn/it/'+categoria+'/'+$('[name="url-it"]').val()+'.html', '_blank');
					}else{
						tools.notificacion('top', data.msg, 'success');
						tools.cargarPrincipal({url:data.url});
					}
					// window.location = data.url;
				} else {
					tools.notificacion('top', data.msg, 'alert');
				}
			} else {
				
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			//if fails     
		}
	});
	return false;
})
$('#findDir').on('click',function(){
	codeAddress();
});
var geocoder;
var map;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(43.81596709999999, 7.7760567000000265);
  var mapOptions = {
    zoom: 8,
    center: latlng
  }
  map = new google.maps.Map(document.querySelector('.mapa'), mapOptions);
}

function codeAddress() {
  var address = $('[name="punto"]').val();
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      marker.setMap(null);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          draggable:true
      });
		google.maps.event.addListener(marker,'drag',function(event) {
			$('[name="Lat"]').val(event.latLng.lat());
			$('[name="Long"]').val(event.latLng.lng());
		});

		google.maps.event.addListener(marker,'dragend',function(event) {
			$('[name="Lat"]').val(event.latLng.lat());
			$('[name="Long"]').val(event.latLng.lng());
		});
      $('[name="Lat"]').val(results[0].geometry.location.lat);
      $('[name="Long"]').val(results[0].geometry.location.lng);
      //console.log(results[0].geometry.location.A);
      map.setZoom(15);
    } else {
      alert('No se encontro el punto: ' + status);
    }
  });
}
initialize();
$('[name="punto"]').keydown(function(event){
	if(event.keyCode == 13) {
		event.preventDefault();
		$('#findDir').click();
		return false;
	}
});
window.addEventListener("beforeunload", function (e) {
  var confirmationMessage = "\o/";
  (e || window.event).returnValue = confirmationMessage; //Gecko + IE
  return confirmationMessage;                            //Webkit, Safari, Chrome
});
$('[name^="descripcion-"]').each(function(index, el) {
	text = $(el);
	text.summernote({
		height: 300, 
		toolbar: [
		    ['font', ['bold', 'italic', 'underline', 'clear']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['insert', ['link']],
		    ['view', ['codeview']],
		]
	}).on('summernote.change', function(customEvent, contents, $editable) {
		$('[name="'+$(this).attr('name')+'"]').val(contents);
		$('[name="'+$(this).attr('name')+'"]').html(contents);
    })
});
</script>

