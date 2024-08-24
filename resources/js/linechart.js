import { LineChart } from '@stripe/ui-extension-sdk/ui';

document.addEventListener('alpine:init', () => {
  Alpine.data('lineChartComponent', () => ({
    sales: [
      { date: 'Jan', sold: 1 },
      { date: 'Feb', sold: 4 },
      { date: 'Mar', sold: 2 },
      { date: 'Apr', sold: 3 }
    ],
    init() {
      this.$nextTick(() => {
        const lineChart = new LineChart({
          data: this.sales,
          x: 'date',
          y: 'sold',
          axis: 'both',
          color: 'product',
          grid: 'both',
          legend: true,
          tooltip: true,
        });

        // Render the chart
        lineChart.render(document.getElementById('linechart-container'));
      });
    }
  }));
});