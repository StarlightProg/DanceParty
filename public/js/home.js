$(document).ready(function() {
    $('#playlist').change(function() {
        changeSong($(this).val())
    });

    $('#add-song-btn').click(function() {
        $('#add-song-form').toggle();
    });

    $('#add-dancer-btn').click(function() {
        $('#add-dancer-form').toggle();
    });

    function changeSong(songName) {
        $.ajax({
            url: "/change",
            data: {
                song: songName
            },
            success: function(response) {
                // alert(response['song_info'])
                $('#song_info').html(response[0]);
                $('#dancers_data').html(response[1]);
            }
        });
    }
});