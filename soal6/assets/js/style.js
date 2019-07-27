$("button#button-add").click(function(){
    $(".bg-form").slideToggle("slow");
});

$("button#close").click(function(){
    $(".bg-form").slideToggle("slow");
    $("form").attr("action", "proses/prosesTambah.php");
    $(".bg-form h4").text("ADD DATA");
    $(".bg-form .form-body button#add").text("ADD");
    $('form')[0].reset();
});
$("button#alert-close").click(function () {
    $(".bg-alert").slideToggle("slow");
});

$("a#button-update").click(function () {
    var id = $(this).attr("class");
    var nama = $(this).attr("nama");
    var pekerjaan = $(this).attr("pekerjaan");
    var gaji = $(this).attr("gaji");
    
    $(".bg-form").slideToggle("slow");

    $("form").attr("action","proses/ubah.php");
    $(".bg-form .form-header h4").text("EDIT DATA");
    $(".bg-form .form-body button#add").text("EDIT");
    $(".bg-form .form-body input#name").val(nama);
    $(".bg-form .form-body select#kerja").val(pekerjaan);
    $(".bg-form .form-body select#gaji").val(gaji);
    $(".bg-form .form-body input#id").val(id);

});

$("button.doDelete").click(function(){
    var id = $(this).attr("id");
    var nama = $(this).attr("nama");
    $(".bg-alert").slideToggle("slow");
    $(".bg-alert .alert-body h2").text("Data "+nama+" telah berhasil dihapus");

    setTimeout(function(){
        document.location.href ='proses/hapus.php?id='+id;
    }, 3000);
});