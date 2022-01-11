<script>
/*=============== CHARTS ===============*/

// CHART 2
const chart2 = document.getElementById("brgy-week")
const myChart2 = new Chart(chart2, {
    type: "bar",
    data: {
        labels: [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday",

        ],
        datasets: [{
            label: "Population by Purok",
            data: [


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




// CHART 2
const chart5 = document.getElementById("bs-week")
const myChart5 = new Chart(chart5, {
    type: "bar",
    data: {
        labels: [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday",

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