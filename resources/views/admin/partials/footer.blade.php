{{-- <script type="text/javascript">
    $(document).ready(function(){
        $('.nav_btn').click(function(){
            $('.mobile_nav_items').toggleClass('active');
        });
    });
    </script> --}}
<script type="text/javascript">
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.dot');
const menuLength = menuItem.length
for(let i=0;i<menuLength;i++){
    if(menuItem[i].href===currentLocation){
        menuItem[i].className="active_1"
    }
}
</script>
<script>
    var xValues = [30];
    var yValues = [100];
    var valuess=[2,6,9,8,45,63,21,56,84]
    generateData("Math.sin(x)*2", 0, 30, 10);

    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,

          pointRadius: 2,
          borderColor: "rgba(0,0,255,0.5)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Monthly Earn",
          fontSize: 16
        }
      }
    });
    function generateData(value, i1, i2, step = 1) {
  for (let x = i1; x <= i2; x += step) {
    yValues.push(eval(value));
    xValues.push(x);
  }
}
    </script>
    <script>
        var xValues = ["Monopoly", "Scopode", "ETA", "Conan"];
        var yValues = [55, 49, 44, 70];
        var barColors = ["red", "green","blue","orange"];

        new Chart("TopProduct", {
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
              text: "Best Sale In the Month"
            }
          }
        });
        </script>
{{-- <script type="text/javascript">
    function loadUser(){
        history.pushState({},"","admin/user");
        /* location.reload(); */
        location.replace(location.href)
    }
</script> --}}
