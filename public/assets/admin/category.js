
$(document).ready( function () {
    
    let columns = [
        {
            data: 'id',
            name: 'id'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'path',
            name: 'path'
        },
        {
            data: 'status',
            name: 'status'
        },
      
        {
            data: 'actions',
            name: 'actions'
        },
    ];

    let table =  initDataTable($('#category_table'), columns);
    
});

$(document).on('click', '.delete', function () {
    $('div#message-area').html('');
    $('#delete-modal .modal-title').html('Delete Category');
    $('#delete-modal #ajax-form').attr('method', 'DELETE');
    $('#delete-modal #ajax-form').attr('action', $(this).attr('data-url'));
    $('#delete-modal #ajax-form').attr('data-table', 'category_table');
    let modal = new bootstrap.Modal(document.getElementById('delete-modal'));
    modal.show();
});