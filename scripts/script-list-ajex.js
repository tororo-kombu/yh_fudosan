document.addEventListener("DOMContentLoaded", function () {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "http://y-fudosan-2.local/?page_id=7", true);//元URL
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            let parser = new DOMParser();
            let htmlDoc = parser.parseFromString(xhr.responseText, "text/html");
            let elements = htmlDoc.querySelectorAll("#page");
            let area = document.getElementById("list-area");
            for (var i = 0; i < elements.length; i++) {
                area.appendChild(elements[i].cloneNode(true));
            }
        }
    };
    xhr.send();
});
