$(document).ready(function() {
    $btnOpenModal = $('#btn-open-modal');
    $btnCloseModal = $('#btn-close-modal');
    $modal = $('#modal');

    $btnOpenModal.on('click', function() {
        if ($modal.hasClass('d-none')) {
            $modal.removeClass('d-none');
        }
    });

    $btnCloseModal.on('click', function() {
        if (!$modal.hasClass('d-none')) {
            $modal.addClass('d-none');
        }
    });
})