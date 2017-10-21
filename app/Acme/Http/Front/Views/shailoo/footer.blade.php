<script src="{{ asset('js/sweetalert.min.js') }}"></script>

<script>
    function getVote(vote){
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });

        var dataString = 'vote='+vote;
        var url = "{{ route('front.shailoo_poll_vote') }}";
        var parent = $('#poll');

        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            cache: false,
            success: function(data)
            {
                if(data['status'] == false){
                    swal("", "С одного IP-адреса можно голосовать 1 РАЗ!", "error");
                    parent.html(data['html']);
                }
                else{
                    swal("Спасибо!", "Ваш голос учтен!", "success");
                    parent.html(data['html']);
                }
            }
        });
    }
</script>