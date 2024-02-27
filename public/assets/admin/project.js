
$(document).ready( function () {
    
    let columns = [
        {
            data: 'id',
            name: 'id'
        },
        {
            data: 'title',
            name: 'title'
        },
        {
            data: 'description',
            name: 'description'
        },
       
        {
            data: 'path',
            name: 'path'
        },
        {
            data: 'category',
            name: 'category'
        },
        {
            data: 'page',
            name: 'page'
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

    let table =  initDataTable($('#project_table'), columns);
    
});

$(document).on('click', '.delete', function () {
    $('div#message-area').html('');
    $('#delete-modal .modal-title').html('Delete Project');
    $('#delete-modal #ajax-form').attr('method', 'DELETE');
    $('#delete-modal #ajax-form').attr('action', $(this).attr('data-url'));
    $('#delete-modal #ajax-form').attr('data-table', 'project_table');
    let modal = new bootstrap.Modal(document.getElementById('delete-modal'));
    modal.show();
});