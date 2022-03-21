
// import { graphic } from 'echarts/lib/export'

let data1 = [];
for (let i = 0; i <= 360; i++) {
    let t = (i / 180) * Math.PI;
    let r = Math.sin(2 * t) * Math.cos(2 * t);
    data1.push([r, i]);
}





const lineChart = {
    // Setup grid
    grid: {
        zlevel: 0,
        x: 50,
        x2: 50,
        y: 30,
        y2: 30,
        borderWidth: 0,
        backgroundColor: 'rgba(0,0,0,0)',
        borderColor: 'rgba(0,0,0,0)',
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        axisLine: {
            lineStyle: {
                color: '#8791af'
            },
        },
    },
    yAxis: {
        type: 'value',
        axisLine: {
            lineStyle: {
                color: '#8791af'
            },
        },
        splitLine: {
            lineStyle: {
                color: "rgba(166, 176, 207, 0.1)"
            }
        }
    },
    legend: {
        data: [ 'This Week', 'Last Week'],
        textStyle: {
            color: '#999'
        }

    },
    series: [
        {
            name: 'This Week',
            type: 'line',
            stack: 'yes',
            data: [220, 182, 191, 234, 290, 330, 310]
        },
        {
            name: 'Last Week',
            type: 'line',
            stack: 'yes',
            data: [150, 232, 201, 154, 190, 330, 410]
        },
    ]
};








export {  lineChart};
