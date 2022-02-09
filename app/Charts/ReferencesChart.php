<?php

namespace App\Charts;

use App\Models\Reference;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ReferencesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $pendientes = Reference::where('status',1)->count();
        $pagadas = Reference::where('status',2)->count();
        return $this->chart->pieChart()
            ->setTitle('Reporte de referencias')
            ->setSubtitle('Estatus de referencias.')
            ->addData([$pendientes, $pagadas])
            ->setLabels(['Pendientes', 'Pagadas']);
    }
}
