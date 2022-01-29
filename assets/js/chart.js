$(document).ready(function () {
    $.ajax({
        url: "../../kb-bmis/reports/data/brgy-weekly-data.php",
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
        url: "../../kb-bmis/reports/data/business-weekly-data.php",
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


$(document).ready(function () {
    $.ajax({
        url: "../../kb-bmis/reports/data/brgy-month-data.php",
        method: "GET",
        success: function (data) {
            // console.log(data);
            var month = [];
            var brgymonthsales = [];

            for (var i in data) {
                month.push(data[i].MonthName);
                brgymonthsales.push(data[i].brgymonthSales);
            }

            var chartdata = {
                labels: month,
                datasets: [{
                    label: 'Barangay Clearance Monthly Sales',
                    backgroundColor: "#ef6a61",
                    data: brgymonthsales,
                }]
            };

            var ctx11 = $("#brgy-month");

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
        url: "../../kb-bmis/reports/data/business-month-data.php",
        method: "GET",
        success: function (data) {
            // console.log(data);
            var bsmonth = [];
            var bsmonthsales = [];

            for (var i in data) {
                bsmonth.push(data[i].bsMonth);
                bsmonthsales.push(data[i].bsMonthlySales);
            }

            var chartdata = {
                labels: bsmonth,
                datasets: [{
                    label: 'Business Clearance Monthly Sales',
                    backgroundColor: "#ef6a61",
                    data: bsmonthsales,
                }]
            };

            var ctx11 = $("#bs-month");

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

// YEAR CHARTS
$(document).ready(function () {
    $.ajax({
        url: "../../kb-bmis/reports/data/brgy-year-data.php",
        method: "GET",
        success: function (data) {
            // console.log(data);
            var brgyYear = [];
            var brgyYearSales = [];

            for (var i in data) {
                brgyYear.push(data[i].brgyyear);
                brgyYearSales.push(data[i].brgyyearsales);
            }

            var chartdata = {
                labels: brgyYear,
                datasets: [{
                    label: 'Barangay Clearance Monthly Sales',
                    backgroundColor: "#ef6a61",
                    data: brgyYearSales,
                }]
            };

            var ctx11 = $("#brgy-year");

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
        url: "../../kb-bmis/reports/data/business-year-data.php",
        method: "GET",
        success: function (data) {
            // console.log(data);
            var bsYear = [];
            var bsYearsales = [];

            for (var i in data) {
                bsYear.push(data[i].bsyear);
                bsYearsales.push(data[i].bsyearsales);
            }

            var chartdata = {
                labels: bsYear,
                datasets: [{
                    label: 'Business Clearance Monthly Sales',
                    backgroundColor: "#ef6a61",
                    data: bsYearsales,
                }]
            };

            var ctx11 = $("#bs-year");

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