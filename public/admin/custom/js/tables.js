/**
 * Handle all admin tables
 */

/**
 *  Datatables
 */
(function(){

    $('#usersDataTable').DataTable(
        {
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
<<<<<<< HEAD

    // users
    $('#staffDataTable').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
        ]
    })

=======
    // customers table
    $('#customersDataTable').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
    })
>>>>>>> 0db528c182e0c94e15bf55e3e4e6a0d7b97ba007
})()