/**
 * Handle all admin tables
 */

/**
 *  Datatables
 */
(function() {

    // users
    $('#usersDataTable').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
        ]
    })

    // services
    $('#servicesDataTable').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
        ]
    })
})()