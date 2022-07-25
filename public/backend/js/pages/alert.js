$(function () {
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: "Hapus Data Ini?",
            icon: "warning",
            iconColor: "#EF3737",
            background: "#1A233B",
            showCancelButton: true,
            confirmButtonColor: "#EF3737",
            cancelButtonColor: "#7A15F7",
            confirmButtonText: "Hapus!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        });
    });
});
