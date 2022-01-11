<script>
/*=============== CHARTS ===============*/

// CHART 2
const chart10 = document.getElementById("brgy-year")
const myChart10 = new Chart(chart10, {
    type: "bar",
    data: {
        labels: [
            "2021",
            "2022",
            "2023",
            "2024",



        ],
        datasets: [{
            label: "Barangay Clearance Sales",
            data: [
                <?php echo $year2021BrgySales['brgyAmount2021']; ?>,
                <?php echo $year2022BrgySales['brgyAmount2022']; ?>,
                <?php echo $year2023BrgySales['brgyAmount2023']; ?>,
                <?php echo $year2024BrgySales['brgyAmount2024']; ?>
            ],
            backgroundColor: [
                "#ef6a61",
                //
            ],
        }, ],
    },
    options: {
        scales: {
            y: {
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '₱' + value;
                    }
                }
            }
        },
        responsive: true,

    },
});

// CHART 2
const chart11 = document.getElementById("bs-year")
const myChart11 = new Chart(chart11, {
    type: "bar",
    data: {
        labels: [
            "2021",
            "2022",
            "2023",
            "2024",



        ],
        datasets: [{
            label: "Barangay Clearance Sales",
            data: [
                <?php echo $year2021BsSales['bsAmount2021']; ?>,
                <?php echo $year2022BsSales['bsAmount2022']; ?>,
                <?php echo $year2023BsSales['bsAmount2023']; ?>,
                <?php echo $year2024BsSales['bsAmount2024']; ?>
            ],
            backgroundColor: [
                "#ef6a61",
                //
            ],
        }, ],
    },
    options: {
        scales: {
            y: {
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '₱' + value;
                    }
                }
            }
        },
        responsive: true,

    },
});
</script>