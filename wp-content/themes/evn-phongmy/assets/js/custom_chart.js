var labelMonth = ["Tháng 1", "Tháng 2", "Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"];
var labelKy = ["Kỳ 1", "Kỳ 2", "Kỳ 3", "Kỳ 4","Kỳ 5","Kỳ 6","Kỳ 7","Kỳ 8","Kỳ 9","Kỳ 10","Kỳ 11","Kỳ 12"];
var dataDemo1 = [800, 900, 1000,700,600,500,400,800,900,700,900,800];
var dataDemo2 = [880, 1600, 2200, 1500, 2000, 1700, 880, 1600, 2200, 1500, 2000,1700];
var dataDemo3 = [1000, 1800, 2400, 1600, 2200, 1800, 1000, 1800, 2400, 1600, 2200, 1800];
var dataDemo4 = [3400, 3600, 3200,3300,3400,3400,3400,3400,3400,3400,3400,3400];
var dataDemo5 = [1000, 2100, 2200,2300,2500,1800,2300,3000,3600,3200,2600,2500];
var dataDemo6 = [800, 1800, 2000,2200,2300,1600,2000,2200,2600,3000,2300,2000];
var dataDemo7 = [880, 1600, 2200, 1500, 2000, 1700, 880, 1600, 2200, 1500, 2000,1700];
var dataDemo8 = [1000, 1800, 2400, 1600, 2200, 1800, 1000, 1800, 2400, 1600, 2200, 1800];
var dataDemo9 = [10, 9.5, 9, 8.5, 8, 7.5, 7, 6.5, 6, 5.5 , 5, 4.5];
var dataDemo10 = [18, 17.5, 16.5, 16, 15.5, 15, 14.5, 13.5, 13, 12.5 , 12, 11.5];

function legendClickCallback(event) {
    event = event || window.event;

    var target = event.target || event.srcElement;
    while (target.nodeName !== 'LI') {
        target = target.parentElement;
    }
    var parent = target.parentElement;
    var chartId = parseInt(parent.classList[0].split("-")[0], 10);
    var chart = Chart.instances[chartId];
    var index = Array.prototype.slice.call(parent.children).indexOf(target);
    var meta = chart.getDatasetMeta(index);

    if (meta.hidden === null) {
        meta.hidden = !chart.data.datasets[index].hidden;
        target.classList.add('hidden');
    } else {
        target.classList.remove('hidden');
        meta.hidden = null;
    }
    chart.update();
}
$(document).ready(function(){
    $('#btn_view_result').click(function () {
        $('#estimate-equals.evn-main').show();
    });
    var chart    = document.getElementById('myChart-2').getContext('2d'),
        gradient = chart.createLinearGradient(0, 0, 0, 450);
    gradient.addColorStop(0, 'rgba(77,183,105,0.24)');
    gradient.addColorStop(1, 'rgba(77,183,105,0)');

    var chart2    = document.getElementById('myChart-2').getContext('2d'),
        gradientblue = chart2.createLinearGradient(0, 0, 0, 450);
    gradientblue.addColorStop(0, 'rgba(78,157,249,0.35)');
    gradientblue.addColorStop(1, 'rgba(78,157,249,0)');
    chartData1 = [
        {
            label: 'Số điện sử dụng hàng tháng',
            data: dataDemo1,
            backgroundColor:'transparent',
            borderColor:'#DC4C4C',
            borderWidth: 1,

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: "Tiêu chuẩn",
            backgroundColor: "#4DB769",
            data: dataDemo2,
            order: 2
        },
        {
            label: "Cao cấp",
            backgroundColor: "#4E9DF9",
            data: dataDemo3,
            order: 2
        }

    ];
    chartDataNoCC = [
        {
            label: 'Số điện sử dụng hàng tháng',
            data: dataDemo1,
            backgroundColor:'transparent',
            borderColor:'#DC4C4C',
            borderWidth: 1,

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: "Tiêu chuẩn",
            backgroundColor: "#4DB769",
            data: dataDemo2,
            order: 2
        }

    ];
    chartData2 = [
        {
            label: 'Số điện sử dụng hàng tháng',
            data: dataDemo4,
            backgroundColor:'transparent',
            borderColor:'#DC4C4C',
            borderWidth: 1,

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: 'Số điện tiết kiệm hàng tháng tiêu chuẩn',
            data: dataDemo5,
            backgroundColor:'rgba(78,157,249,0.2)',
            borderColor:'#2E89F5',
            borderWidth: 1,
            borderDash: [10,5],

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: 'Số điện Tiết kiệm hàng tháng cao cấp',
            data: dataDemo6,
            backgroundColor:'rgba(77,183,105,0.3)',
            borderColor:'#307843',
            borderWidth: 1,
            borderDash: [10,5],

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: "Tiêu chuẩn",
            backgroundColor: "#4DB769",
            data: dataDemo7,
            order: 2
        },
        {
            label: "Cao cấp",
            backgroundColor: "#4E9DF9",
            data: dataDemo8,
            order: 2
        }

    ];
    chartData2NoCC = [
        {
            label: 'Số điện sử dụng hàng tháng',
            data: dataDemo4,
            backgroundColor:'transparent',
            borderColor:'#DC4C4C',
            borderWidth: 1,

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: 'Số điện tiết kiệm hàng tháng tiêu chuẩn',
            data: dataDemo5,
            backgroundColor:'rgba(78,157,249,0.2)',
            borderColor:'#2E89F5',
            borderWidth: 1,
            borderDash: [10,5],

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: 'Số điện Tiết kiệm hàng tháng cao cấp',
            data: dataDemo6,
            backgroundColor:'rgba(77,183,105,0.3)',
            borderColor:'#307843',
            borderWidth: 1,
            borderDash: [10,5],

            // Changes this dataset to become a line
            type: 'line',
            order: 1
        },
        {
            label: "Tiêu chuẩn",
            backgroundColor: "#4DB769",
            data: dataDemo7,
            order: 2
        },
    ];
    chartData3 = [
        {
            label: 'Tiêu chuẩn',
            data: dataDemo9,
            backgroundColor: gradient,
            borderColor:'#4DB769',

            // Changes this dataset to become a line
            type: 'line',
        },
        {
            label: 'Cao cấp',
            data: dataDemo10,
            backgroundColor: gradientblue,
            borderColor:'#4E9DF9',

            // Changes this dataset to become a line
            type: 'line',
        },

    ];
    chartData3NoCC = [
        {
            label: 'Tiêu chuẩn',
            data: dataDemo9,
            backgroundColor: gradient,
            borderColor:'#4DB769',

            // Changes this dataset to become a line
            type: 'line',
        },
    ];
    var ctx = document.getElementById("myChart");
    var myLegendContainer = document.getElementById("myChartLegend");
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labelMonth,
            datasets: chartDataNoCC,
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    myLegendContainer.innerHTML = myChart.generateLegend();

    var legendItems = myLegendContainer.getElementsByTagName('li');
    for (var i = 0; i < legendItems.length; i += 1) {
        legendItems[i].addEventListener("click", legendClickCallback, false);
    }

    var ctx_1 = document.getElementById("myChart-1");
    var myLegendContainer_1 = document.getElementById("myChartLegend-1");
    myChart1 = new Chart(ctx_1, {
        type: 'bar',
        data: {
            labels: labelMonth,
            datasets: chartData2NoCC,
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    myLegendContainer_1.innerHTML = myChart1.generateLegend();
    var legendItems_1 = myLegendContainer_1.getElementsByTagName('li');
    for (var i = 0; i < legendItems_1.length; i += 1) {
        legendItems_1[i].addEventListener("click", legendClickCallback, false);
    }

    var ctx_2 = document.getElementById("myChart-2");
    var myLegendContainer_2 = document.getElementById("myChartLegend-2");
    myChart2 = new Chart(ctx_2, {
        type: 'bar',
        data: {
            labels: labelKy,
            datasets: chartData3NoCC,
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        callback: function(value, index, values) {
                            return value + ' tr';
                        }
                    }
                }]
            }
        }
    });

    myLegendContainer_2.innerHTML = myChart2.generateLegend();
    var legendItems_2 = myLegendContainer_2.getElementsByTagName('li');
    for (var i = 0; i < legendItems_2.length; i += 1) {
        legendItems_2[i].addEventListener("click", legendClickCallback, false);
    }
});
function ShowHideCompare() {
    var checked = $("#is_compare").prop('checked');
    var isKHEVN = $("#isKHEVN").val();
    if (isKHEVN == "true")
        isKHEVN = true;
    else
        isKHEVN = false;

    isKHEVN = true;
    if (checked)
        CompareResult1(isKHEVN);
    else
        HideCompareResult1(isKHEVN);
}

function HideCompareResult1(isKHEVN) {
    $("#estimate-equals .table td:nth-child(3)").hide();
    $("#estimate-equals .table th:nth-child(3)").hide();
    var barChartData = {};
    var barChartData1= {};
    var barChartData2= {};
    if (isKHEVN) {
        barChartData = {
            labels: labelMonth,
            datasets: chartDataNoCC,
        };
        barChartData1 = {
            labels: labelMonth,
            datasets: chartData2NoCC,
        };
        barChartData2 = {
            labels: labelKy,
            datasets: chartData3NoCC,
        };
    }
    else {
        barChartData = {
            labels: labelMonth,
            datasets: chartData1,
        };
        barChartData1 = {
            labels: labelMonth,
            datasets: chartData2,
        };
        barChartData2 = {
            labels: labelKy,
            datasets: chartData3,
        };
    }

    myChart.config.data = barChartData;
    myChart.update();
    var myLegendContainer = document.getElementById("myChartLegend");
    myLegendContainer.innerHTML = myChart.generateLegend();

    var legendItems = myLegendContainer.getElementsByTagName('li');
    for (var i = 0; i < legendItems.length; i += 1) {
        legendItems[i].addEventListener("click", legendClickCallback, false);
    }

    myChart1.config.data = barChartData1;
    myChart1.update();
    var myLegendContainer_1 = document.getElementById("myChartLegend-1");
    myLegendContainer_1.innerHTML = myChart1.generateLegend();
    var legendItems_1 = myLegendContainer_1.getElementsByTagName('li');
    for (var i = 0; i < legendItems_1.length; i += 1) {
        legendItems_1[i].addEventListener("click", legendClickCallback, false);
    }

    myChart2.config.data = barChartData2;
    myChart2.update();
    var myLegendContainer_2 = document.getElementById("myChartLegend-2");
    myLegendContainer_2.innerHTML = myChart2.generateLegend();
    var legendItems_2 = myLegendContainer_2.getElementsByTagName('li');
    for (var i = 0; i < legendItems_2.length; i += 1) {
        legendItems_2[i].addEventListener("click", legendClickCallback, false);
    }
}

function CompareResult1(isKHEVN) {
    $("#estimate-equals .table td:nth-child(3)").show();
    $("#estimate-equals .table th:nth-child(3)").show();
    var barChartData = {};
    var barChartData1= {};
    var barChartData2= {};
    if (isKHEVN) {
        barChartData = {
            labels: labelMonth,
            datasets: chartData1,
        };
        barChartData1 = {
            labels: labelMonth,
            datasets: chartData2,
        };
        barChartData2 = {
            labels: labelKy,
            datasets: chartData3,
        };
    }
    else {
        barChartData = {
            labels: labelMonth,
            datasets: chartDataNoCC,
        };
        barChartData1 = {
            labels: labelMonth,
            datasets: chartData2NoCC,
        };
        barChartData2 = {
            labels: labelKy,
            datasets: chartData3NoCC,
        };
    }

    myChart.config.data = barChartData;
    myChart.update();
    var myLegendContainer = document.getElementById("myChartLegend");
    myLegendContainer.innerHTML = myChart.generateLegend();

    var legendItems = myLegendContainer.getElementsByTagName('li');
    for (var i = 0; i < legendItems.length; i += 1) {
        legendItems[i].addEventListener("click", legendClickCallback, false);
    }

    myChart1.config.data = barChartData1;
    myChart1.update();
    var myLegendContainer_1 = document.getElementById("myChartLegend-1");
    myLegendContainer_1.innerHTML = myChart1.generateLegend();
    var legendItems_1 = myLegendContainer_1.getElementsByTagName('li');
    for (var i = 0; i < legendItems_1.length; i += 1) {
        legendItems_1[i].addEventListener("click", legendClickCallback, false);
    }

    myChart2.config.data = barChartData2;
    myChart2.update();
    var myLegendContainer_2 = document.getElementById("myChartLegend-2");
    myLegendContainer_2.innerHTML = myChart2.generateLegend();
    var legendItems_2 = myLegendContainer_2.getElementsByTagName('li');
    for (var i = 0; i < legendItems_2.length; i += 1) {
        legendItems_2[i].addEventListener("click", legendClickCallback, false);
    }
}