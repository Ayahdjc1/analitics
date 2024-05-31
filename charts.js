document.addEventListener('DOMContentLoaded', function() {
    fetch('/data')
        .then(response => response.json())
        .then(data => {
            const dailyVisitsCtx = document.getElementById('dailyVisitsChart').getContext('2d');
            const weeklyVisitsCtx = document.getElementById('weeklyVisitsChart').getContext('2d');
            const monthlyVisitsCtx = document.getElementById('monthlyVisitsChart').getContext('2d');
            const dailyTimeCtx = document.getElementById('dailyTimeChart').getContext('2d');
            const weeklyTimeCtx = document.getElementById('weeklyTimeChart').getContext('2d');
            const monthlyTimeCtx = document.getElementById('monthlyTimeChart').getContext('2d');

            new Chart(dailyVisitsCtx, {
                type: 'line',
                data: {
                    labels: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
                    datasets: [{
                        label: 'Посещаемость (День)',
                        data: data.visits.daily,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                }
            });

            new Chart(weeklyVisitsCtx, {
                type: 'line',
                data: {
                    labels: ['Неделя 1', 'Неделя 2', 'Неделя 3', 'Неделя 4', 'Неделя 5', 'Неделя 6', 'Неделя 7'],
                    datasets: [{
                        label: 'Посещаемость (Неделя)',
                        data: data.visits.weekly,
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                }
            });

            new Chart(monthlyVisitsCtx, {
                type: 'line',
                data: {
                    labels: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл'],
                    datasets: [{
                        label: 'Посещаемость (Месяц)',
                        data: data.visits.monthly,
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                }
            });

            new Chart(dailyTimeCtx, {
                type: 'line',
                data: {
                    labels: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
                    datasets: [{
                        label: 'Время на сайте (День)',
                        data: data.time_on_site.daily,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                }
            });

            new Chart(weeklyTimeCtx, {
                type: 'line',
                data: {
                    labels: ['Неделя 1', 'Неделя 2', 'Неделя 3', 'Неделя 4', 'Неделя 5', 'Неделя 6', 'Неделя 7'],
                    datasets: [{
                        label: 'Время на сайте (Неделя)',
                        data: data.time_on_site.weekly,
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                }
            });

            new Chart(monthlyTimeCtx, {
                type: 'line',
                data: {
                    labels: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл'],
                    datasets: [{
                        label: 'Время на сайте (Месяц)',
                        data: data.time_on_site.monthly,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                }
            });
        });
});
