$(document).ready(function () {
	// $(".nav-treeview .nav-link, .nav-link").each(function () {
	// 		var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
	// 		var link = this.href;
	// 		if(link == location2){
	// 				$(this).addClass('active');
	// 				$(this).parent().parent().parent().addClass('menu-is-opening menu-open');

	// 		}
	// });
	$("#news").DataTable({
		"responsive": true,
		"lengthChange": false,
		"autoWidth": false,
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Russian.json"
		},
		// "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
	}).buttons().container().appendTo('#news_wrapper .col-md-6:eq(0)');

	$('.btn-delete').on('click', function(){
		var res = confirm('Подтвердите действие');
		if(!res){
			return false;
		}
	});

	var inputFile = 2;

	$('.repeaterItemAdd').on('click', function(e){
		e.preventDefault();
		var card = $(this).closest('.card');
		var repeaterItem = "<div class='repeaterItem col-md-4'><a href='#' class='btn btn-tool closeRepeaterItem' data-card-widget='remove'><i class='fas fa-times'></i></a><div class='input-group mb-3'><div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-check-circle'></i></span></div><input type='text' class='form-control' name='important_information[]'></div></div>";
		$(card).find('.repeaterWrap').append(repeaterItem);
	});

	$('.repeaterItemHomeAdd').on('click', function(e){
		e.preventDefault();
		var card = $(this).closest('.card');
		var repeaterItem = "<div class='repeaterItem col-md-4'><a href='#' class='btn btn-tool closeRepeaterItem' data-card-widget='remove'><i class='fas fa-times'></i></a><div class='input-group mb-3'><div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-check-circle'></i></span></div><input type='text' class='form-control' name='home_amenities[]'></div></div>";
		$(card).find('.repeaterWrap').append(repeaterItem);
	});

	$('.planItemAdd').on('click', function(e){
		e.preventDefault();
		var card = $(this).closest('.card');
		var options = $('.plansItem').find('.form-control.select2').html();
		var repeaterItem = "<div class='plansItem row'>\
		<a href='#' class='btn btn-tool closePlanItem'><i class='fas fa-times'></i></a>\
		<div class='col-lg-3'>\
			<div class='form-group'>\
				<div class='plan_img" + inputFile + " d-flex'></div>\
				<div class='d-flex'>\
					<a href='' class='popup_selector btn btn-block btn-info w-100' data-inputid='plan_img" + inputFile + "'>Выбрать изображение</a>\
				</div>\
			</div>\
		</div>\
		<div class='col-lg-3'>\
			<div class='form-group'>\
				<label>Количество комнат</label>\
				<select class='form-control select2' name=\"plan[" + inputFile + "][room]\"  style='width: 100%;'>"+ options +"\
				</select>\
			</div>\
			<div class='form-group'>\
				<label for='exampleInputEmail1'>Цена</label>\
				<input type='text' class='form-control' name=\"plan[" + inputFile + "][price]\">\
			</div>\
		</div>\
		<div class='col-lg-6'>\
			<div class='form-group'>\
				<label for='exampleInputEmail1'>Описание</label>\
				<textarea name=\"plan[" + inputFile + "][description]\" class='form-control'></textarea>\
			</div>\
		</div>\
	</div>";
		$(card).find('.plansWrap').append(repeaterItem);
		inputFile += 1;
	});

	$('body').on('click', '.closeRepeaterItem', function(e){
		e.preventDefault();
		var repeaterItem = $(this).closest('.repeaterItem');
		$(repeaterItem).remove();
	});

	$('body').on('click', '.closePlanItem', function(e){
		e.preventDefault();
		var planItem = $(this).closest('.plansItem');
		$(planItem).remove();
	});

	$('body').on('click', '.uploadImgClose', function(){
		$(this).remove();
	});
	$('.select2').select2()
});

tinymce.init({
	selector: '.editor',
	plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
	toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
	tinycomments_mode: 'embedded',
	tinycomments_author: 'Author name',
	language: 'ru',
	file_picker_callback : elFinderBrowser
});

function elFinderBrowser (callback, value, meta) {
	tinymce.activeEditor.windowManager.openUrl({
			title: 'File Manager',
			url: '/elfinder/tinymce5',
			/**
			 * On message will be triggered by the child window
			 * 
			 * @param dialogApi
			 * @param details
			 * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
			 */
			onMessage: function (dialogApi, details) {
					if (details.mceAction === 'fileSelected') {
							const file = details.data.file;
							
							// Make file info
							const info = file.name;
							
							// Provide file and text for the link dialog
							if (meta.filetype === 'file') {
									callback(file.url, {text: info, title: info});
							}
							
							// Provide image and alt text for the image dialog
							if (meta.filetype === 'image') {
									callback(file.url, {alt: info});
							}
							
							// Provide alternative source and posted for the media dialog
							if (meta.filetype === 'media') {
									callback(file.url);
							}
							
							dialogApi.close();
					}
			}
	});
}