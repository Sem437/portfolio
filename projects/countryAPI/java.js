function land() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://restcountries.com/v3.1/all', true);
    
    let data;
    let tabel = '<table>' +
    '<tr>' + '<th>' + 'Country' + '</th>' + 
    '<th>' + 'Flag' + '</th>'  + 
    '<th>' + 'Borders' + '</th>' + '</tr>';

    xhr.onload = function() {
        if(xhr.status == 200 && xhr.readyState == 4) {
            data = JSON.parse(xhr.responseText);
    
            for(let i = 0; i < data.length; i++) {
                tabel += '<tr>' +
                '<td>' + data[i].name.common + '</td>' + 
                '<td>' + '<img src="' + data[i].flags.png + '" />' + '</td>';

                if(data[i].borders == undefined) {
                    tabel += '<td>' + 'No Borders' + '</td>' + '</tr>';
                    
                }
                else {
                    tabel += '<td>' + data[i].borders + '</td>' + '</tr>';
                }
            }
            document.getElementById('output').innerHTML = tabel;
        }
    }

    xhr.send();
}

land()