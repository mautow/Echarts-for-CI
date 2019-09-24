<?php
/**
 * Fixed by zeta.
 */

namespace EchartsPHP\ide;

use EchartsPHP\Property;

/**
 * @property string $type Default: 'line'
 *    
 *
 * @property string $id
 *    
 *
 * @property string $name
 *    
 *
 * @property string $coordinateSystem Default: 'cartesian2d'
 *    
 *
 * @property int $xAxisIndex Default: 0
 *    
 *
 * @property int $yAxisIndex Default: 0
 *    
 *
 * @property int $polarIndex Default: 0
 *    
 *
 * @property string|callable $symbol Default: 'circle'
 *    
 *
 * @property int|array|callable $symbolSize Default: 4
 *    
 *
 * @property int $symbolRotate
 *    
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *
 * @property boolean $showSymbol Default: true
 *    
 *
 * @property boolean $showAllSymbol Default: 'auto'
 *    
 *
 * @property boolean $hoverAnimation Default: true
 *    
 *
 * @property boolean $legendHoverLink Default: true
 *    
 *
 * @property string $stack
 *    
 *
 * @property string $cursor Default: 'pointer'
 *    
 *
 * @property boolean $connectNulls Default: false
 *    
 *
 * @property boolean $clipOverflow Default: true
 *    
 *
 * @property string|boolean $step Default: false
 *    
 *
 * @property Series\Label $label
 *    
 *
 * @property Series\ItemStyle $itemStyle
 *    
 *
 * @property Series\LineStyle $lineStyle
 *    
 *
 * @property Series\AreaStyle $areaStyle
 *    
 *
 * @property Series\Emphasis $emphasis
 *    
 *
 * @property boolean|int $smooth Default: false
 *    
 *
 * @property string $smoothMonotone
 *    
 *
 * @property string $sampling
 *    
 *
 * @property array $dimensions
 *    
 *
 * @property array $encode
 *    
 *
 * @property string $seriesLayoutBy Default: 'column'
 *    
 *
 * @property int $datasetIndex Default: 0
 *    
 *
 * @property array $data
 *    
 *
 * @property Series\MarkPoint $markPoint
 *    
 *
 * @property Series\MarkLine $markLine
 *    
 *
 * @property Series\MarkArea $markArea
 *    
 *
 * @property int $zlevel Default: 0
 *    
 *
 * @property int $z Default: 2
 *    
 *
 * @property boolean $silent Default: false
 *    
 *
 * @property boolean $animation Default: true
 *    
 *
 * @property int $animationThreshold Default: 2000
 *    
 *
 * @property int|callable $animationDuration Default: 1000
 *    
 *
 * @property string $animationEasing Default: 'linear'
 *    
 *
 * @property int|callable $animationDelay Default: 0
 *    
 *
 * @property int|callable $animationDurationUpdate Default: 300
 *    
 *
 * @property string $animationEasingUpdate Default: 'cubicOut'
 *    
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    
 *
 * @property Series\Tooltip $tooltip
 *    
 *
 * @property int $barWidth
 *    
 *
 * @property int $barMaxWidth
 *    
 *
 * @property int $barMinHeight Default: 0
 *    
 *
 * @property string $barGap Default: '30%'
 *    
 *
 * @property string $barCategoryGap Default: '20%'
 *    
 *
 * @property boolean $large Default: false
 *    
 *
 * @property int $largeThreshold Default: 400
 *    
 *
 * @property int $progressive Default: 5000
 *    
 *
 * @property int $progressiveThreshold Default: 3000
 *    
 *
 * @property string $progressiveChunkMode Default: 'mod'
 *    
 *
 * @property int $hoverOffset Default: 10
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property int $selectedOffset Default: 10
 *    
 *
 * @property boolean $clockwise Default: true
 *    
 *
 * @property int $startAngle Default: 90
 *    
 *
 * @property int $minAngle Default: 0
 *    
 *
 * @property int $minShowLabelAngle Default: 0
 *    
 *
 * @property boolean|string $roseType Default: false
 *    
 *
 * @property boolean $avoidLabelOverlap Default: true
 *    
 *
 * @property boolean $stillShowZeroSum Default: true
 *    
 *
 * @property Series\LabelLine $labelLine
 *    
 *
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    
 *
 * @property int|string|array $radius Default: '[0, \'75%\']'
 *    
 *
 * @property string $animationType Default: 'expansion'
 *    
 *
 * @property int $geoIndex Default: 0
 *    
 *
 * @property int $calendarIndex Default: 0
 *    
 *
 * @property string $effectType Default: 'ripple'
 *    
 *
 * @property string $showEffectOn Default: 'render'
 *    
 *
 * @property Series\RippleEffect $rippleEffect
 *    
 *
 * @property int $radarIndex
 *    
 *
 * @property string|int $left Default: '12%'
 *    
 *
 * @property string|int $top Default: '12%'
 *    
 *
 * @property string|int $right Default: '12%'
 *    
 *
 * @property string|int $bottom Default: '12%'
 *    
 *
 * @property string|int $width
 *    
 *
 * @property string|int $height
 *    
 *
 * @property string $layout Default: 'orthogonal'
 *    
 *
 * @property string $orient Default: 'LR'
 *    
 *
 * @property boolean|string $roam Default: false
 *    
 *
 * @property boolean $expandAndCollapse Default: true
 *    
 *
 * @property int $initialTreeDepth Default: 2
 *    
 *
 * @property Series\Leaves $leaves
 *    
 *
 * @property int $squareRatio
 *    
 *
 * @property int $leafDepth
 *    
 *
 * @property string $drillDownIcon Default: '▶'
 *    
 *
 * @property boolean|string $nodeClick Default: 'zoomToNode'
 *    
 *
 * @property int $zoomToNodeRatio Default: '0.32*0.32'
 *    
 *
 * @property array $levels Default: '[]'
 *    
 *
 * @property int $visualDimension Default: 0
 *    
 *
 * @property int $visualMin
 *    
 *
 * @property int $visualMax
 *    
 *
 * @property array $colorAlpha
 *    
 *
 * @property int $colorSaturation
 *    
 *
 * @property string $colorMappingBy Default: 'index'
 *    
 *
 * @property int $visibleMin Default: 10
 *    
 *
 * @property int $childrenVisibleMin
 *    
 *
 * @property Series\UpperLabel $upperLabel
 *    
 *
 * @property Series\Breadcrumb $breadcrumb
 *    
 *
 * @property string $highlightPolicy Default: 'descendant'
 *    
 *
 * @property string|callable $sort Default: 'desc'
 *    
 *
 * @property boolean $renderLabelForZeroData Default: false
 *    
 *
 * @property Series\Highlight $highlight
 *    
 *
 * @property Series\Downplay $downplay
 *    
 *
 * @property array $boxWidth Default: '[7, 50]'
 *    
 *
 * @property int $barMinWidth
 *    
 *
 * @property int $blurSize Default: 20
 *    
 *
 * @property int $minOpacity Default: 0
 *    
 *
 * @property int $maxOpacity Default: 1
 *    
 *
 * @property string $map Default: ''
 *    
 *
 * @property int $aspectScale Default: 0.75
 *    
 *
 * @property array $boundingCoords
 *    
 *
 * @property int $zoom Default: 1
 *    
 *
 * @property Series\ScaleLimit $scaleLimit
 *    
 *
 * @property array $nameMap
 *    
 *
 * @property array $layoutCenter
 *    
 *
 * @property int|string $layoutSize
 *    
 *
 * @property string $mapValueCalculation Default: 'sum'
 *    
 *
 * @property boolean $showLegendSymbol
 *    
 *
 * @property int $parallelIndex Default: 0
 *    
 *
 * @property int $inactiveOpacity Default: 0.05
 *    
 *
 * @property int $activeOpacity Default: 1
 *    
 *
 * @property boolean $realtime Default: true
 *    
 *
 * @property boolean $polyline Default: false
 *    
 *
 * @property Series\Effect $effect
 *    
 *
 * @property Series\Circular $circular
 *    
 *
 * @property Series\Force $force
 *    
 *
 * @property int $nodeScaleRatio Default: 0.6
 *    
 *
 * @property boolean $draggable Default: false
 *    
 *
 * @property boolean $focusNodeAdjacency Default: false
 *    
 *
 * @property array|string $edgeSymbol Default: '[\'none\', \'none\']'
 *    
 *
 * @property array|int $edgeSymbolSize Default: 10
 *    
 *
 * @property Series\EdgeLabel $edgeLabel
 *    
 *
 * @property array $categories
 *    
 *
 * @property array $nodes
 *    
 *
 * @property array $links
 *    
 *
 * @property array $edges
 *    
 *
 * @property int $nodeWidth Default: 20
 *    
 *
 * @property int $nodeGap Default: 8
 *    
 *
 * @property int $layoutIterations Default: 32
 *    
 *
 * @property int $min Default: 0
 *    
 *
 * @property int $max Default: 100
 *    
 *
 * @property string $minSize Default: '0%'
 *    
 *
 * @property string $maxSize Default: '100%'
 *    
 *
 * @property int $gap Default: 0
 *    
 *
 * @property string $funnelAlign Default: 'center'
 *    
 *
 * @property int $endAngle Default: -45
 *    
 *
 * @property int $splitNumber Default: 10
 *    
 *
 * @property Series\AxisLine $axisLine
 *    
 *
 * @property Series\SplitLine $splitLine
 *    
 *
 * @property Series\AxisTick $axisTick
 *    
 *
 * @property Series\AxisLabel $axisLabel
 *    
 *
 * @property Series\Pointer $pointer
 *    
 *
 * @property Series\Title $title
 *    
 *
 * @property Series\Detail $detail
 *    
 *
 * @property string $symbolPosition Default: 'start'
 *    
 *
 * @property boolean|int|string $symbolRepeat
 *    
 *
 * @property string $symbolRepeatDirection Default: 'start'
 *    
 *
 * @property int|string $symbolMargin
 *    
 *
 * @property boolean $symbolClip Default: false
 *    
 *
 * @property int $symbolBoundingData
 *    
 *
 * @property int $symbolPatternSize Default: 400
 *    
 *
 * @property array $boundaryGap Default: '["10%", "10%"]'
 *    
 *
 * @property int $singleAxisIndex Default: 0
 *    
 *
 * @property Series\RenderItem $renderItem
 *    
 *
 * {_more_}
 */
class Series extends Property {}
