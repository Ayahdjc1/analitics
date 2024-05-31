// Функция для загрузки данных из JSON
async function loadAnalyticsData() {
    const response = await fetch('/data');
    const data = await response.json();
    return data;
}

// Функция для отображения таблицы
function renderTable(data) {
    const tableBody = document.getElementById('analyticsTableBody');
    tableBody.innerHTML = '';
    data.daily.forEach(item => {
        const row = `<tr>
            <td>${item.date}</td>
            <td>${item.visits}</td>
            <td>${item.avg_time}</td>
        </tr>`;
        tableBody.innerHTML += row;
    });
}

// Функция для отображения графиков
function renderCharts(data) {
    const ctxDaily = document.getElementById('dailyChart').getContext('2d');

    const dailyData = {
        labels: data.daily.map(item => item.date),
        datasets: [{
            label: 'Посещения',
            data: data.daily.map(item => item.visits),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    new Chart(ctxDaily, {
        type: 'line',
        data: dailyData,
        options: {
            scales: {
                x: { title: { display: true, text: 'Дата' }},
                y: { title: { display: true, text: 'Посещения' }}
            }
        }
    });
}

// Загрузка и отображение данных
loadAnalyticsData().then(data => {
    renderTable(data);
    renderCharts(data);
});
