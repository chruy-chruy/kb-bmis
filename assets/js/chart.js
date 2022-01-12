$(document).ready(function () {
    $.ajax({
        url: "http://localhost/kb-bmis/kb-bmis/reports/queries/brgy-weekly-data.php",
        method: "GET",
        success: function (data) {
            // console.log(data);
            var date = [];
            var sales = [];

            for (var i in data) {
                date.push(data[i].Date);
                sales.push(data[i].brgyweeksales);
            }

            var chartdata = {
                labels: date,
                datasets: [{
                    label: 'Barangay Clearance Sales',
                    backgroundColor: "#ef6a61",
                    borderColor: 'rgba(200, 200, 200, 0.75)',
                    hoverBorderColor: 'rgba(200, 200, 200, 1)',
                    data: sales,
                }]
            };

            var ctx11 = $("#brgy-week");

            var barGraph = new Chart(ctx11, {
                type: 'bar',
                data: chartdata,
                options: {
                    scales: {
                        y: {
                            ticks: {
                                // Include a dollar sign in the ticks
                                callback: function (value, index, values) {
                                    return '₱' + value;
                                }
                            }
                        }
                    },
                    responsive: true,
                }

            });
        },
        error: function (data) {
            // console.log(data);
        }
    });
});




$(document).ready(function () {
    $.ajax({
        url: "http://localhost/kb-bmis/kb-bmis/reports/queries/business-weekly-data.php",
        method: "GET",
        success: function (data) {
            // console.log(data);
            var bsdate = [];
            var bssales = [];

            for (var i in data) {
                bsdate.push(data[i].bsDate);
                bssales.push(data[i].bsweeksales);
            }

            var chartdata = {
                labels: bsdate,
                datasets: [{
                    label: 'Business Clearance Sales',
                    backgroundColor: "#ef6a61",
                    borderColor: 'rgba(200, 200, 200, 0.75)',
                    hoverBorderColor: 'rgba(200, 200, 200, 1)',
                    data: bssales,
                }]
            };

            var ctx12 = $("#bs-week");

            var barGraph = new Chart(ctx12, {
                type: 'bar',
                data: chartdata,
                options: {
                    scales: {
                        y: {
                            ticks: {
                                // Include a dollar sign in the ticks
                                callback: function (value, index, values) {
                                    return '₱' + value;
                                }
                            }
                        }
                    },
                    responsive: true,
                }

            });
        },
        error: function (data) {
            // console.log(data);
        }
    });
});