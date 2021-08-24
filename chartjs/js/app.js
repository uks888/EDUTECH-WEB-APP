$(document).ready(function(){
  $.ajax({
    url: "http://localhost/HACKATHON/chartjs/data.php",
    method: "GET",
    success: function(data1) {
      console.log(data1);
      var levels = [];
      var correctanswer = [];

      for(var i in data1) {
        levels.push("Level" + data1[i].levels);
        correctanswer.push(data1[i].correctanswer);
      }

      var chartdata = {
        labels: levels,
        datasets : [
          {
            data: correctanswer,
            label:'Correctanswer',
            backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)',
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
          }
          
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data1) {
      console.log(data1);
    }
  });
});

