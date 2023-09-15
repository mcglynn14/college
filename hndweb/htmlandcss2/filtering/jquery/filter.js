$(document).ready(function() {
    $('.image-container div').show();

    $('.filter-buttons button').click(function() {
        const filter = $(this).data('filter');

        if (filter === 'all') {
            $('.image-container div').show();
        } else {
            $('.image-container div').hide();
            $(`.image-${filter}`).show();
        }
    });
});