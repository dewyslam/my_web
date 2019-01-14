$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});


jQuery(function($) {
	//initiate dataTables plugin
	var oTable1 = 
	$('#dynamic-table')
	//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
	.dataTable( {
		bAutoWidth: false,


		//,
		//"sScrollY": "200px",
		//"bPaginate": false,

		//"sScrollX": "100%",
		//"sScrollXInner": "120%",
		//"bScrollCollapse": true,
		//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
		//you may want to wrap the table inside a "div.dataTables_borderWrap" element

		//"iDisplayLength": 50
    } );

    $('#colorpicker1').colorpicker();

	// --------------------------------------------------------------

	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		no_file:'No File ...',
		btn_choose:'Choose',
		btn_change:'Change',
		droppable:false,
		onchange:null,
		thumbnail:false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});
	$('#id-input-file-11').ace_file_input({
		no_file:'No File ...',
		btn_choose:'Choose',
		btn_change:'Change',
		droppable:false,
		onchange:null,
		thumbnail:false, //| true | large
		whitelist:'pdf'
		//blacklist:'exe|php'
		//onchange:''
		//
	});
	//pre-show a file name, for example a previously selected file
	//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


	$('#id-input-file-3').ace_file_input({
		style:'well',
		btn_choose:'Drop files here or click to choose',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'small'//large | fit
		//,icon_remove:null//set null, to hide remove/reset button
		/**,before_change:function(files, dropped) {
			//Check an example below
			//or examples/file-upload.html
			return true;
		}*/
		/**,before_remove : function() {
			return true;
		}*/
		,
		preview_error : function(filename, error_code) {
			//name of the file that failed
			//error_code values
			//1 = 'FILE_LOAD_FAILED',
			//2 = 'IMAGE_LOAD_FAILED',
			//3 = 'THUMBNAIL_FAILED'
			//alert(error_code);
		}

	}).on('change', function(){
		//console.log($(this).data('ace_input_files'));
		//console.log($(this).data('ace_input_method'));
	});


	//datepicker plugin
	//link
	$('.date-picker').datepicker({
		autoclose: true,
		todayHighlight: true
	})
	//show datepicker when clicking on the icon
	.next().on(ace.click_event, function(){
		$(this).prev().focus();
	});

	//or change it into a date range picker
	$('.input-daterange').datepicker({autoclose:true});


	//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
	$('input[name=date-range-picker]').daterangepicker({
		'applyClass' : 'btn-sm btn-success',
		'cancelClass' : 'btn-sm btn-default',
		locale: {
			applyLabel: 'Apply',
			cancelLabel: 'Cancel',
		}
	})
	.prev().on(ace.click_event, function(){
		$(this).next().focus();
	});


	$('#timepicker1').timepicker({
		minuteStep: 1,
		showSeconds: true,
		showMeridian: false
	}).next().on(ace.click_event, function(){
		$(this).prev().focus();
	});
	
	$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
		$(this).prev().focus();
	});



	//////////////////
	//select2
	$('.select2').css('width','100%').select2({allowClear:true})
	$('#select2-multiple-style .btn').on('click', function(e){
		var target = $(this).find('input[type=radio]');
		var which = parseInt(target.val());
		if(which == 2) $('.select2').addClass('tag-input-style');
		 else $('.select2').removeClass('tag-input-style');
	});
	

});




function downloadEdit(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","modules/download/ajaxedit.php?id="+str,true);
        xmlhttp.send();
    }
}

$(function(){
	CKEDITOR.replace( 'editor1', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor2', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor3', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor4', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor5', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor6', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor7', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor8', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor9', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor10', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor11', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor12', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor13', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor14', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
	CKEDITOR.replace( 'editor15', { skin : 'moono', toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
});