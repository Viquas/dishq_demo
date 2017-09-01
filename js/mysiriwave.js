var SW = null;
var displaySiriwave = function () {
    var windowsize = $(window).width();
    var $siri_classic = document.getElementById('container-classic');

    if (SW != null) {
        SW.stop();
        SW._clear();
        delete SW;

        $siri_classic.innerHTML = '';
    }

    SW = new SiriWave({
        width : windowsize,
        height: 300,
        speed: 0.005,
        amplitude: 1,
        container: $siri_classic,
        autostart: true,
    });
}

$(window).resize(displaySiriwave);
displaySiriwave();
