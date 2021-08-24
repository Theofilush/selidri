/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Datatable js
 */

$(document).ready(function() {
    $('#datatable').DataTable();
    $('#datatable_data_hasil').DataTable();
    $('#datatable_soal_holland').DataTable();
    $('#datatable_soal_bigfive').DataTable();

    $('#datatable_mnj_peserta').DataTable();
    $('#datatable_mnj_dosen').DataTable();

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
} );