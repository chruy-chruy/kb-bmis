<script>
/*=============== CHARTS ===============*/

// CHART 2
const chart3 = document.getElementById("brgy-month")
const myChart3 = new Chart(chart3, {
    type: "bar",
    data: {
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec"


        ],
        datasets: [{
            label: "Barangay Clearance Sales",
            data: [
                <?php echo $janBrgy['total']; ?>,
                <?php echo $febBrgy['total2']; ?>,
                <?php echo $marBrgy['total3']; ?>,
                <?php echo $aprBrgy['total4']; ?>,
                <?php echo $mayBrgy['total5']; ?>,
                <?php echo $junBrgy['total6']; ?>,
                <?php echo $julBrgy['total7']; ?>,
                <?php echo $augBrgy['total8']; ?>,
                <?php echo $sepBrgy['total9']; ?>,
                <?php echo $octBrgy['total10']; ?>,
                <?php echo $novBrgy['total11']; ?>,
                <?php echo $decBrgy['total12']; ?>
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
const chart6 = document.getElementById("bs-month")
const myChart6 = new Chart(chart6, {
    type: "bar",
    data: {
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",


        ],
        datasets: [{
            label: "Barangay Clearance Sales",
            data: [
                <?php echo $janBs['bstotal']; ?>,
                <?php echo $febBs['bstotal2']; ?>,
                <?php echo $marBs['bstotal3']; ?>,
                <?php echo $aprBs['bstotal4']; ?>,
                <?php echo $mayBs['bstotal5']; ?>,
                <?php echo $junBs['bstotal6']; ?>,
                <?php echo $julBs['bstotal7']; ?>,
                <?php echo $augBs['bstotal8']; ?>,
                <?php echo $sepBs['bstotal9']; ?>,
                <?php echo $octBs['bstotal10']; ?>,
                <?php echo $novBs['bstotal11']; ?>,
                <?php echo $decBs['bstotal12']; ?>

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