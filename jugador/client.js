
function TraerInstruccion(timestamp)
{
    var queryString = {'timestamp' : timestamp};

    $.ajax(
        {
            type: 'GET',
            url: '../server/server.php',
            data: queryString,
            success: function(data){
                // put result data into "obj"
                var obj = jQuery.parseJSON(data);
                // put the data_from_file into #response
                $('#response').html(obj.data_from_file);
                // call the function again, this time with the timestamp we just got from server.php
                TraerInstruccion(obj.timestamp);
            }
        }
    );
}

// initialize jQuery
$(function() {
    TraerInstruccion();
});
