var xValues = [ "Indonesia", "Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15, 10];
var barColors = ["red", "green","blue","orange","brown", "purple"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
