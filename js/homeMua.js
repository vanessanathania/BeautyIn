var ratedIndex = -1,
    uID = 0;

$(document).ready(function () {
    resetStarColors();

    const rating = document.querySelector(".rating").innerHTML;
    const width = (rating / 5) * 100;
    $(".stars").css("width", width + "%");

    if (localStorage.getItem('ratedIndex') != null) {
        setStars(parseInt(localStorage.getItem('ratedIndex')));
        uID = localStorage.getItem('uID');
    }

    $('.fa-star').on('click', function () {
        ratedIndex = parseInt($(this).data('index'));
        localStorage.setItem('ratedIndex', ratedIndex);
        saveToTheDB();
    });

    $('.fa-star').mouseover(function () {
        resetStarColors();
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    });

    $('.fa-star').mouseleave(function () {
        resetStarColors();

        if (ratedIndex != -1)
            setStars(ratedIndex);
    });
});

function saveToTheDB() {
    $.ajax({
        url: "index.php",
        method: "POST",
        dataType: 'json',
        data: {
            save: 1,
            uID: uID,
            ratedIndex: ratedIndex
        },
        success: function (r) {
            uID = r.id;
            localStorage.setItem('uID', uID);
        }
    });
}

function setStars(max) {
    for (var i = 0; i <= max; i++)
        $('.modal-star:eq(' + i + ')').css('color', 'green');
}

function resetStarColors() {
    $('.modal-star').css('color', 'white');
}

