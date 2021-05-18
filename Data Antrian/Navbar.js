function openNav() {
    document.getElementById("mySidenav").style.width = "270px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function renderTime() {

    // Date
    var mydate = new Date();
    var year = mydate.getYear();
        if (year < 1000) {
            year += 1900;
        }

        var day = mydate.getDay();
        var month = mydate.getMonth();
        var daym = mydate.getDate();
        var dayArray = new Array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu" );
        var monthArray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    // Time
    var currentTime = new Date();
    var hour = currentTime.getHours();
    var minute = currentTime.getMinutes();
    var second = currentTime.getSeconds();
        if (hour == 24) {
            hour = 0;
        } else if (hour > 12) {
            hour -= -0;
        }

        if (hour < 10) {
            hour = "0" + hour;
        } 

        if (minute < 10) {
            minute = "0" + minute;
        }

        if (second < 10) {
            second = "0" + second;
        }

    var myClock  = document.getElementById("clockDisplay");
    myClock.textContent = "" +dayArray[day]+ " " +daym+ " " +monthArray[month]+ " " +year+ " ( " + hour+ ":" +minute+ ":" +second+ " )";
    myClock.innerText = "" + dayArray[day] + " " + daym + " " + monthArray[month] + " " + year + " ( " + hour + ":" + minute + ":" + second+ " )";

    setTimeout("renderTime()", 1000);

    }

    renderTime(); 