$(document).on('click','.popup_selector',function (event) {
    event.preventDefault();
    var updateID = $(this).attr('data-inputid'); // Btn id clicked
    var elfinderUrl = '/elfinder/popup/';

    // trigger the reveal modal with elfinder inside
    var triggerUrl = elfinderUrl + updateID;
    $.colorbox({
        href: triggerUrl,
        fastIframe: true,
        iframe: true,
        width: '70%',
        height: '80%'
    });

});
// function to update the file selected by elfinder
function processSelectedFile(filePath, requestingField) {
	filePaths = [];
	filePath.forEach(function(file, index) {
		filePaths[index] = file.path;
	});
	var pefixFiels = requestingField.split('_');
	var pefixFielsNumber = requestingField.split('g');
	console.log(filePath);
	if(pefixFiels[0] == 'plan'){
			$('.' + requestingField).html(" ");
			$('.' + requestingField).append( "<div class='uploadImgClose'><img src='/" + filePath[0]['path'] + "' alt='' class='uploadImg d-block mb-4 mr-2 w-100'><input type='text' class='d-none' name=\"plan[" + pefixFielsNumber[1] + "][img]\" value=' /" + filePath[0]['path'] + "'></div>" ).trigger('change');
	}else{
		filePaths.forEach(element => {
			$('.' + requestingField).append( "<div class='uploadImgClose w-25 mr-2'><img src='/" + element + "' alt='' class='uploadImg d-block mb-4 mr-2 w-100'><input type='text' class='d-none' name='img[]' value=' /" + element + "'></div>" ).trigger('change');
		});
	}
}
