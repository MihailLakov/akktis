$(document).ready(function () {

    /**
     * Validation functions 
     * 
     */
    function isTermLengthValid(term) {
        if (term.length < 2 || term.length > 127) {
            return false;
        }       
        return true;
    }
    function isTermASCII(term) {
        return /^[\x00-\x7F]*$/.test(term);
    }
    function isTermValid(term) {        
        if (!isTermASCII(term)) {
            return false;
        }
        if (!isTermLengthValid(term)) {
            return false;
        }
        return true;
    }

    /**
     *  Markup functions 
     *  
     */
    function showNofitication(message) {
        $('.alert p').html(message);
        $('.alert').show("fast", function () {
            setTimeout(function () {
                $('.alert').hide("slow");
            }, 2500);
        });
    }
    function formatSearchResults(data) {

        data = JSON.parse(data);
        var html = '';
        for (var i = 0; i < data.length; i++) {
            var obj = data[i];
            html += '<div class="row">';
            html += '<div class="col-xs-4">' + obj['name'] + '</div>';
            html += '<div class="col-xs-4">' + obj['surname'] + '</div>';
            html += '<div class="col-xs-4 col-color" data-color="' + obj['color'] + '">' + obj['color'] + '</div>';
            html += '</div>';
        }

        return html;
    }
    function resetSearchResultsData() {
        $('#results').html('');
    }
    /** 
     * Event listeners 
     * 
     */
    $('#results').on('click', '.col-color', function () {
        var color = $(this).data('color');
        $(this).parent().css('background', color);
    });
    $('#search').on('click', function () {
        resetSearchResultsData();
        if (isTermValid($('#term').val())) {
            $.ajax({
                method: "POST",
                url: "search.php",
                data: {
                    field: $('#field').val(),
                    term: $('#term').val()
                }
            })
                    .done(function (data) {
                        if(data.length > 10){
                         $('#results').append(formatSearchResults(data));
                         showNofitication('Search results are ready...');   
                        } else{
                            showNofitication('No results for your search');   
                        }
                        
                    })
                    .fail(function (data) {
                        showNofitication('Ooops there has been an error! Please try again');
                    });

        } else {
            showNofitication('Please input a valid search query');
        }

    });
});