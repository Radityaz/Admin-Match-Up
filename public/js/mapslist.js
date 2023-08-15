const api_url = "http://127.0.0.1:5000/api/getdatalocation";

async function getapi(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        const data = await response.json();
        Callapi(data.data);
        console.log(data)
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

function Callapi(data) {
    const container = document.getElementById("table_data");

    data.forEach(function(item) {
        const mapBox = document.createElement("button");
        mapBox.className = "maps-box p-3 b-0";
        mapBox.dataset.filter = "markas";
        mapBox.setAttribute("onclick", "mapsList(" + item.id + ")");
        mapBox.dataset.bsDismiss = "modal";
        mapBox.innerHTML = '<h6 id="mapslocation' + item.id + '" class="fw-bold">' + item.title_lokasi + '</h6>';
        mapBox.innerHTML += '<p id="mapsdetail' + item.id + '" class="p-0 m-0" style="font-size: 10px;">' + item.detail_lokasi + '</p>';
        mapBox.innerHTML += '<p id="mapsurl' + item.id + '" class="p-0 m-0 d-none">' + item.embed_lokasi + '</p>';
        container.appendChild(mapBox);
    });
}

function mapsList(index) {
    var locationInput = document.getElementById("locationtext");
    var frame = document.getElementById("frame-location");
    var detailinput = document.getElementById("locationtext_detail")
    var detail_url = document.getElementById("frame_url")

    var mapslocation = document.getElementById("mapslocation" + index);
    var mapsdetail = document.getElementById("mapsdetail" + index);
    var mapsurls = document.getElementById("mapsurl" + index);
    
    detail_url.value = mapsurls.innerHTML;
    detailinput.value = mapsdetail.innerHTML;
    locationInput.value = mapslocation.innerHTML;
    frame.src = mapsurls.innerHTML;

    locationdisplay();
}

function searchLocation() {
    // Ambil nilai dari input teks
    var searchText = document.getElementById("searchinput").value.toLowerCase();
    
    // Ambil semua elemen lokasi
    var locations = document.getElementsByClassName("maps-box");
    
    // Loop melalui elemen-elemen lokasi
    for (var i = 0; i < locations.length; i++) {
        var locationName = locations[i].querySelector("h6").textContent.toLowerCase();
        
        // Periksa apakah nama lokasi cocok dengan input teks
        if (locationName.includes(searchText)) {
            locations[i].style.display = "block"; // Tampilkan elemen
        } else {
            locations[i].style.display = "none"; // Sembunyikan elemen
        }
    }
}

getapi(api_url);