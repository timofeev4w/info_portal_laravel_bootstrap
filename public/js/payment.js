$(document).ready(function() {
    let percent = 0;
    function searchProgress() {
        percent += 1
        let percentString = percent + '%'
        $('.progress-bar').css({'width' : percentString})
        $('.progress-bar').text(percentString)
        if (percent == 100) {
            clearInterval(progressBar)
            $('.info-progress').addClass('d-none')
            $('.info-success').removeClass('d-none')
        }
    }

    let progressBar = setInterval(searchProgress, 90)
})