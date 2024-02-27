
$(document).ready( function () {
    
    let columns = [
        {
            data: 'id',
            name: 'id'
        },
        {
            data: 'addmission_number',
            name: 'addmission_number'
        },
        {
            data: 'nic',
            name: 'nic'
        },
        {
            data: 'f_name',
            name: 'f_name'
        },
        {
            data: 'l_name',
            name: 'l_name'
        },
        {
            data: 'status',
            name: 'status'
        },
        {
            data: 'date',
            name: 'date'
        },
     
    ];

    let table =  initDataTable($('#challans_table'), columns);
    
});