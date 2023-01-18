let myChart = document.getElementById('myChart').getContext('2d');

//Global options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';

let massPopChart = new Chart(myChart, {
  type:'line',
  data:{
    labels:['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
    datasets:[{
      label: 'Population',
      data:[
        4634634,
        8364636,
        5677646,
        3646436,
        4636436,
        3466363,
        1242535,
        2646634
      ],
      backgroundColor:'lightpink'
    }]
  },
  options:{
    title:{
      display:true,
      text:'Largest Blah',
      fontSize: 25
    },
    scales: {
      xAxes: [{
          barPercentage: 0.1,
          tickWidth: 1
      }]
    }
  },
  layout:{
    padding: {
      left:50,
      top:0,
      right:0,
      bottom:0
    }
  }
});