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
            label: "Population by Purok",
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
            label: "Population by Purok",
            data: [


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