function land() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://restcountries.com/v3.1/all', true);

    let data;
    let werelddeel = [];

    let tabel = '<table>' +
        '<tr>' + '<th>' + 'Country' + '</th>' +
        '<th>' + 'Region' + '</th>' +
        '<th>' + 'Borders' + '</th>' +
        '<th>' + 'Selectbox' + '</th>' +
        '</tr>';

    xhr.onload = function () {
        if (xhr.status == 200 && xhr.readyState == 4) {
            data = JSON.parse(xhr.responseText);

            // Iterate through countries to gather unique world regions
            data.forEach(country => {
                if (country.region && !werelddeel.includes(country.region)) {
                    werelddeel.push(country.region);
                }
            });


            for (let i = 0; i < data.length; i++) {
                let test = 0;
                if (typeof (data[i].borders) != "undefined") {
                    test = data[i].borders.length
                }

                let selectbox = '<select id="IDoption" class="option">' + '<option>' + 'Choose A Border' + '</option>';
                if (data[i].borders) {
                    for (let j = 0; j < data[i].borders.length; j++) {
                        selectbox += '<option value="' + data[i].borders[j] + '">' + data[i].borders[j] + '</option>';
                    }
                }
                selectbox += '</select>';
                // alle landen 
                tabel += '<tr>' +
                    '<td>' + data[i].name.common + '</td>' +
                    '<td>' + data[i].region + '</td>' +
                    '<td>' + test + '</td>' + '<td>' + selectbox + '</td>' +
                    '</tr>';
            }

            document.getElementById('output').innerHTML = tabel;

            let option = document.getElementsByClassName('option');

            for (let k = 0; k < option.length; k++) {
                option[k].addEventListener('click', zoeken);
            }
            function zoeken(e) {
                let optionWaarde = e.currentTarget.value;

                for (let i = 0; i < data.length; i++) {
                    if (optionWaarde == data[i].cca3) {
                        let gevondenLand = (data[i].name.common);
                        let hoofdland = (data[i].capital);
                        let inwoners = (data[i].population);

                        document.getElementById('outputselectvalue').innerHTML = 'Chosen country: ' + gevondenLand + '<br>' +
                            'Capital: ' + hoofdland + '<br>' +
                            'Population: ' + inwoners;
                        break; // Stop de loop zodra het land is gevonden
                    }
                }
            }

        }
        werelddeel = document.getElementById('wereldDeel');
        werelddeel.addEventListener('change', function () { Werleddeel(data); });
    }

    xhr.send();
}

land()

function Werleddeel(data) {
    let selectWereldeel = document.getElementById('wereldDeel').value;
    let tabel2 = '<table>' +
        '<tr>' + '<th>' + 'Country' + '</th>' +
        '<th>' + 'Region' + '</th>' +
        '</tr>';;

    for (let m = 0; m < data.length; m++) {
        if (data[m].region === selectWereldeel) 
        {
            let landd = data[m].name.common
            tabel2 += '<tr>' +
            '<td>' + landd + '</td>' +
            '<td>' + data[m].region + '</td>' +
            '</tr>';
        }
    }
    tabel2 += '</table>'
    document.getElementById('output').innerHTML = tabel2;
}