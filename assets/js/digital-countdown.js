(function(window, $, undefined) {
    
    $.fn.countdownDigital = function(options){
        
        // Default parameters
		var defaults = $.extend({
			dateTo: '2016-06-21',
            dateNow: null,
            labels: true,
            showBlank: true
		},options);
  
        var digits = [
            'zero', 
            'one', 
            'two', 
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine'
        ];

        var labels = [
            'years',
            'months',
            'days',
            'hours',
            'minutes',
            'seconds'
        ];

        function drawCountdown(_element) {
            
            var dateTo = moment(defaults.dateTo);
            var dateNow = (defaults.dateNow == null) ? moment() : defaults.dateNow; 
            var dateDiff = dateTo.diff(dateNow);
            var asDurations = getAsDurations(dateDiff);
            var durations = getDurations(dateDiff);
            var digit_holder = $('<div class="digits"></div>').appendTo(_element);
            
            $.each(labels, function(key,val){
                var arg = (asDurations[key] > 1);
                if(arg || defaults.showBlank) {
                    if(dateDiff > 0) {
                        var num = pad(durations[key],2);
                        var num_split = num.toString().split("");
                    } else {
                        var num_split = ['0','0'];
                    }
                    var label = $('<div></div>',{
                        class: 'each '+val
                    });
                    $.each(num_split, function(key_no,val_no){
                        var digit = $('<div></div>',{
                            class: 'digit '+val+'_'+key_no
                        });
                        for(var i=1; i<8; i++){
                            digit.append('<span class="side d' + i + '">');
                        }
                        if(dateDiff > 0) {
                            digit.addClass(digits[val_no]);
                        } else {
                            digit.addClass('zero');
                        }
                        digit.appendTo(label);
                    });
                    if(defaults.labels) label.append('<span class="text">'+val+'</span>');
                    label.append('<span class="dots"></span>');
                    label.appendTo(digit_holder);

                } 
            });

        }

        
        function updateTime(_element) {

            var dateTo = moment(defaults.dateTo);
            var dateNow = (defaults.dateNow == null) ? moment() : defaults.dateNow; 
            var dateDiff = dateTo.diff(dateNow);
            
            if(dateDiff > 0) {
                var asDurations = getAsDurations(dateDiff);
                var durations = getDurations(dateDiff);
                $.each(labels, function(key,val){
                    var num = pad(durations[key],2);
                    var num_split = num.toString().split("");
                    $.each(num_split, function(key_no,val_no){
                        var dig = $(_element).find('.digit.'+val+'_'+key_no);
                        dig.removeClass().addClass('digit '+val+'_'+key_no+' '+digits[val_no]);
                    });
                });
            } else {
                $.each(labels, function(key,val){
                    var dig = $(_element).find('.digit');
                    dig.addClass('zero');
                });
            }
            
        }
        
        function getDurations(dateDiff) {
            return [
                moment.duration(dateDiff).years(),
                moment.duration(dateDiff).months(),
                moment.duration(dateDiff).days(),
                moment.duration(dateDiff).hours(),
                moment.duration(dateDiff).minutes(),
                moment.duration(dateDiff).seconds()
            ];
        }
        
        function getAsDurations(dateDiff) {
             return [
                moment.duration(dateDiff).asYears(),
                moment.duration(dateDiff).asMonths(),
                moment.duration(dateDiff).asDays(),
                moment.duration(dateDiff).asHours(),
                moment.duration(dateDiff).asMinutes(),
                moment.duration(dateDiff).asSeconds()
            ];            
        }
        
        function startCountdown(_element) {
            setInterval( 
                function() { 
                    updateTime(_element);
                }, 1000);
        }
        
        
        // Return instance
        return this.each(function(){
            
            var _element = $(this);
            
            drawCountdown(_element);
            startCountdown(_element);
		});

        function pad(num, size) {
            // Add the leading zeros to the numbers
            var s = num+"";
            while (s.length < size) s = "0" + s;
            return s;
        }

        
    };
    
}(window, jQuery));