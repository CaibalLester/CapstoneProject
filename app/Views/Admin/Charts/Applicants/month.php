<canvas id="barChart" width="400" height="200"></canvas>

    <script>
        // Retrieve the data from your PHP endpoint (monthlyPendingApplicantCount)
        fetch('http://your-app-url/your-controller/monthlyPendingApplicantCount')
            .then(response => response.json())
            .then(data => {
                // Render the bar graph using Chart.js
                var ctx = document.getElementById('barChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        datasets: [{
                            label: 'Pending Applicants',
                            data: data,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    </script>