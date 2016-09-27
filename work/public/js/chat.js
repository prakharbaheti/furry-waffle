$(document).ready(function() {

    $('#send').on('click', function () {
        var x=$('#text').val();

        if(!(x.length==0)){
        $.post( "",{text:x}, function( id ) {

            $('#chat-window').append('<div id="'+id+'"><strong>' +x+ '</strong></div>');
            $('#text').val('');

        });
       return false; }return false;



    });

    setInterval(function(){
           var y = $('#chat-window').children().last().attr('id');

            if (typeof y === 'undefined')
            {
                y=null;
                $.post("update/retrieve",{id:y},function(data){

                    chat(data);

                });
            }

            $.post("update/retrieve",{id:y},function(data){

               if(!(data==false)){
                chat(data);}
                else return false;

            });





         },



        1000);


    function chat(data)
    {

        var z= JSON.parse(data);

        var i =0;
        var a = $('#chat-window').children().last().attr('id');
        if(!(z[i].id==a)) {
            $.each(z, function () {
                $('#chat-window').append('<div id="' + z[i].id + '">' + z[i].name + '</div>');
                i++;
            });

            return false;}
        else{return false};
    }
});