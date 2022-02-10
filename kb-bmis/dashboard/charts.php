<script>
const chart1 = document.getElementById("myChart1")
const myChart1 = new Chart(chart1, {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ],
        datasets: [{
            label: "Total Sales",
            data: [

                <?php echo $jan_count['janSales']; ?>,
                <?php echo $feb_count['janSales']; ?>,
                <?php echo $mar_count['janSales']; ?>,
                <?php echo $apr_count['janSales']; ?>,
                <?php echo $may_count['janSales']; ?>,
                <?php echo $jun_count['janSales']; ?>,
                <?php echo $jul_count['janSales']; ?>,
                <?php echo $aug_count['janSales']; ?>,
                <?php echo $sept_count['janSales']; ?>,
                <?php echo $oct_count['janSales']; ?>,
                <?php echo $nov_count['janSales']; ?>,
                <?php echo $dec_count['janSales']; ?>
            ],
            backgroundColor: [
                "#ef6a61",
            ],
            borderColor: "#ef6a61",
            fill: false,
            tension: 0.3,
            // stepped: true,
        }, ],
    },
    options: {
        responsive: true,
        scales: {
            y: {
                ticks: {
                    callback: function(value, index, ticks) {
                        return '₱' + value.toLocaleString();;
                    }
                }
            }
        }
    },
});

// CHART 2
const chart2 = document.getElementById("myChart2")
const myChart2 = new Chart(chart2, {
    type: "polarArea",
    data: {
        labels: ["Children", "Adolescents", "Adults", "Senior Citizens"],
        datasets: [{
            label: "# of Votes",
            data: [

                <?php echo $age_group_count['child']; ?>,
                <?php echo $age_group_count2['adolescent']; ?>,
                <?php echo $age_group_count3['adult']; ?>,
                <?php echo $age_group_count4['senior']; ?>
            ],
            backgroundColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
            ],
        }, ],
    },
    options: {
        responsive: true,
    },
});



// CHART 3
const chart3 = document.getElementById("myChart3")
const myChart3 = new Chart(chart3, {
    type: "bar",
    data: {
        labels: [
            "Purok 1",
            "Purok 2",
            "Purok 3",
            "Purok 4",
            "Purok 5",
            "Purok 6",
            "Purok 7",
            "Purok 8",
            "Purok 9",
            "Purok 10",
            "Purok 11",
            "Purok 12",
            "Purok 13",
        ],
        datasets: [{
            label: "Population by Purok",
            data: [

                <?php echo $prk1_count['prk1Count']; ?>,
                <?php echo $prk2_count['prk2Count']; ?>,
                <?php echo $prk3_count['prk3Count']; ?>,
                <?php echo $prk4_count['prk4Count']; ?>,
                <?php echo $prk5_count['prk5Count']; ?>,
                <?php echo $prk6_count['prk6Count']; ?>,
                <?php echo $prk7_count['prk7Count']; ?>,
                <?php echo $prk8_count['prk8Count']; ?>,
                <?php echo $prk9_count['prk9Count']; ?>,
                <?php echo $prk10_count['prk10Count']; ?>,
                <?php echo $prk11_count['prk11Count']; ?>,
                <?php echo $prk12_count['prk12Count']; ?>,
                <?php echo $prk13_count['prk13Count']; ?>
            ],
            backgroundColor: [
                "#ef6a61",
                //
            ],
        }, ],
    },
    options: {
        responsive: true,
    },
});
</script>