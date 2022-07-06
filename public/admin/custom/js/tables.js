/**
 * Handle all admin tables
 */

/**
 *  Datatables
 */
<<<<<<< HEAD
(function(){

    $('#usersDataTable').DataTable(
        {
          autoWidth: true,
          "lengthMenu": [
=======
(function() {

    // users
    $('#usersDataTable').DataTable({
        autoWidth: true,
        "lengthMenu": [
>>>>>>> 524c50778437c0245c2e6ee4a2f792c17b09533b
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
    // customers table
    $('#customersDataTable').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
    })
})()