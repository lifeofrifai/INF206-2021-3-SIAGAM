function openNav() {
    document.getElementById("mySidenav").style.width = "270px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//clock


function getSvrTD() {
    var xhr = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP");
    var days = [], months = [];
    days[0] = "Minggu", days[1] = "Senin", days[2] = "Selasa", days[3] = "Rabu", days[4] = "Kamis", days[5] = "Jumat", days[6] = "Sabtu";
    months[0] = "Januari", months[1] = "Februari", months[2] = "Maret", months[3] = "April", months[4] = "Mei", months[5] = "Juni", months[6] = "Juli", months[7] = "Agustus", months[8] = "September", months[9] = "Oktober", months[10] = "November", months[11] = "Desember";

    
    xhr.open('HEAD', window.location.href.toString(), false);
    xhr.setRequestHeader('Content-Type', 'text/html');
    xhr.send(null);
    var st = xhr.getResponseHeader("Date"), dt = new Date(st), hour, minute, second, day, month, dayt, year, tz;
    hour = dt.getHours(), minute = dt.getMinutes(), second = dt.getSeconds(), day = dt.getDay(), month = dt.getMonth(), dayt = dt.getDate(), year = dt.getFullYear();
    hour = hour < 10 ? "0" + hour : hour;
    minute = minute < 10 ? "0" + minute : minute;
    second = second < 10 ? "0" + second : second;
    day = days[day];
    month = months[month];
    dayt = dayt < 10 ? "0" + dayt : dayt;
    tz = tz == 360 ? " (CDT)" : " (CST)"; // Only works for CENTRAL time zone; modify as needed.

    document.getElementById("jamSiagam").innerHTML = day + " " + dayt + " " + month + " " + year + " (" + hour + ":" + minute + ":" + second + ")";
}
setInterval("getSvrTD()", 1000);