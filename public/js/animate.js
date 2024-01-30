$(document).ready(function () {
    let offset = {
        offset: "60%"
    }
    $(".blog").waypoint(function () {
            $(".blog").addClass("animate__animated animate__fadeInUp")
        },
        offset
    )
    $(".portofolio").waypoint(function () {
            $(".portofolio").addClass("animate__animated animate__fadeInLeft")
        },
        offset
    )
    $(".about").waypoint(function () {
            $(".about").addClass("animate__animated animate__fadeInRight")
        },
        offset
    )
    $(".contact").waypoint(function () {
            $(".contact").addClass("animate__animated animate__fadeInUp")
        },
        offset
    )
})

$('#submit-btn').click(function () {
    alert('Sudah di Submit')
})
