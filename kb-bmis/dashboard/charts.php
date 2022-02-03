<script>
    /*=============== CHARTS ===============*/

    // CHART 1
    const ctx = document.getElementById("myChart")
    const myChart = new Chart(ctx, {
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



    // CHART 2
    const chart2 = document.getElementById("myChart2")
    const myChart2 = new Chart(chart2, {
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