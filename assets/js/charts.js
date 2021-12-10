/*=============== CHARTS ===============*/

// CHART 1
const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
  type: "polarArea",
  data: {
    labels: ["Children", "Teenagers", "Adults", "Senior Citizens"],
    datasets: [
      {
        label: "# of Votes",
        data: [2078, 1543, 4198, 2976],
        backgroundColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});

// CHART 2
const chart2 = document.getElementById("myChart2").getContext("2d");
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
    datasets: [
      {
        label: "Population by Purok",
        data: [678, 443, 398, 576, 401, 508, 478, 521, 645, 583, 712, 597, 498],
        backgroundColor: [
          "#ef6a61",
          //
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});
