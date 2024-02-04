let logout = document.getElementById('logout');
logout.addEventListener('click', () => {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: true
    });
    swalWithBootstrapButtons.fire({
        title: "Logout",
        icon: "warning",
        text: "Are you sure?",
        showCancelButton: true,
        confirmButtonText: "Yes, i'm going out",
        cancelButtonText: "No, i want to stay",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../scripts/authentication/logout.php";
        }
    });
});

let submit = document.getElementById('submit');
submit.addEventListener('click', () =>{
    Swal.fire({
    title: "Are you sure?",
    text: "Check before you confirm",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Confirm"
}).then((result) => {
    if (result.isConfirmed) {
        Swal.fire({
            title: "Uploaded!",
            text: "Research Repository Uploaded Successfully!",
            icon: "success"
        });
        setTimeout(() =>{
            document.getElementById('FORM').submit();
        }, 5000)

    }
});
})



