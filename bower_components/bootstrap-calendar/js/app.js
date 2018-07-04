(function($) {

	"use strict";
        
        var date = new Date();
		var yyyy = date.getFullYear().toString();
		var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
		var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();
                

	var options = {
		events_source: '../pages/calendar/events.json.php',
                language: 'es-MX',
                //modal: true,
                modal: '#events-modal',  /* agregar esta linea para mostrar en modal*/
                modal_type:'iframe',  /*agregar esta linea para mostrar en modal */
		view: 'month',
		tmpl_path: '../bower_components/bootstrap-calendar/tmpls/',
		tmpl_cache: false,
		//day: '2013-03-12',
                day: yyyy+"-"+mm+"-"+dd,
                time_start: '07:00',
                time_end: '21:00',
                time_split: '30',
                //width: '100%',
		onAfterEventsLoad: function(events) {
			if(!events) {
				return;
			}
			var list = $('#eventlist');
			list.html('');

			$.each(events, function(key, val) {
				$(document.createElement('li'))
					.html('<a data-toggle="modal" data-target="#events-modal" href="' + val.url + '">' + val.title + '</a>')
					.appendTo(list);
			});
		},		
                onAfterViewLoad: function(view) {
                        $('.page-header h3').text(this.getTitle());
			$('.panel-heading span b').text(this.getTitle());
			$('.btn-group button').removeClass('active');
			$('button[data-calendar-view="' + view + '"]').addClass('active');
		},
		classes: {
			months: {
				general: 'label'
			}
		}
	};
        
	var calendar = $('#calendar').calendar(options);

	$('.btn-group button[data-calendar-nav]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.navigate($this.data('calendar-nav'));
		});
	});

	$('.btn-group button[data-calendar-view]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.view($this.data('calendar-view'));
		});
	});

	$('#first_day').change(function(){
		var value = $(this).val();
		value = value.length ? parseInt(value) : null;
		calendar.setOptions({first_day: value});
		calendar.view();
	});

	$('#language').change(function(){
		calendar.setLanguage($(this).val());
		calendar.view();
	});

	$('#events-in-modal').change(function(){
		var val = $(this).is(':checked') ? $(this).val() : null;
		calendar.setOptions({modal: val});
	});
	$('#events-modal .modal-header, #events-modal .modal-footer').click(function(e){
		e.preventDefault();
		e.stopPropagation();
	});
}(jQuery));