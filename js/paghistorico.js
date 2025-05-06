const dataHistory = [
    { datetime: '2024-11-11 10:00', temperature: 30, humidity: 75, waterLevel: 45 },
    { datetime: '2024-11-10 14:00', temperature: 28, humidity: 80, waterLevel: 50 },
    { datetime: '2024-11-09 08:30', temperature: 32, humidity: 70, waterLevel: 60 },
    { datetime: '2024-11-08 16:45', temperature: 29, humidity: 82, waterLevel: 40 },
    { datetime: '2024-11-07 12:20', temperature: 31, humidity: 76, waterLevel: 55 },
    { datetime: '2024-11-06 09:15', temperature: 27, humidity: 78, waterLevel: 65 },
    { datetime: '2024-11-05 18:00', temperature: 30, humidity: 74, waterLevel: 50 }
    
];

let currentIndex = 0;
const rowsPerLoad = 3; 


function loadMoreData() {
    const tableBody = document.getElementById('data-table').getElementsByTagName('tbody')[0];

    for (let i = 0; i < rowsPerLoad; i++) {
        if (currentIndex >= dataHistory.length) {
            document.querySelector('.load-more').style.display = 'none';
            break;
        }

        const row = tableBody.insertRow();
        const data = dataHistory[currentIndex];

        const cellDatetime = row.insertCell(0);
        const cellTemperature = row.insertCell(1);
        const cellHumidity = row.insertCell(2);
        const cellWaterLevel = row.insertCell(3);

        cellDatetime.textContent = data.datetime;
        cellTemperature.textContent = `${data.temperature} °C`;
        cellHumidity.textContent = `${data.humidity} %`;
        cellWaterLevel.textContent = `${data.waterLevel} %`;

        currentIndex++;
    }
}


loadMoreData();