<?php

function is_installed($feature)
{
    return file_exists(dirname(__FILE__)."/".$feature);
}

$hasOL2Samples = true;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MapGuide REST Samples Landing Page</title>
        <style type="text/css">
        html { padding: 0; margin: 0; }
        body {
            margin: 0px 0px 0px 0px;
            color: #000000;
            font-family: arial,verdana,helvetica,sans-serif;
            background: #f0f0f0;
            height: 100%;
        }
        .banner {
            width: 100%;
            padding: 6px 2px 6px 2px;
            background: #004282;
            color: #ffffff;
            font-family: arial,verdana,helvetica,sans-serif;
            font-weight: bold;
            font-size: 20px;
        }
        .content-body {
            padding-left: 20px;
            font-size: 0.8em;
        }
        .sample-header {
            font-weight: bold;
            text-decoration: underline;
        }
        .error { color: red; }
        </style>
    </head>
    <body>
        <div class="banner">
            MapGuide REST Samples
        </div>
        <div class="content-body">
            <p>Here you will find an assorted list of samples using the MapGuide REST API</p>
            <p><strong>NOTE: You should download the <a href="http://download.osgeo.org/mapguide/releases/2.0.0/samples/Sheboygan.mgp">Sheboygan Dataset</a> and load this in via the <a href="mapadmin/login.php">MapGuide Site Administrator</a> before running any of these samples</strong></p>
            <? if ($hasOL2Samples) { ?>
            <p><strong>NOTE: Some OpenLayers integration samples require some sample resources to be loaded. <a href="data/load.php">Click here</a> to load these resources</strong></p>
            <? } ?>
            <p>Click on a link below to go to that particular sample</p>
            <p class="sample-header">Published Data examples</p>
            <strong>Note: All examples below are configured to return 500 results maximum, at 100 results per page</strong>
            <ul>
                <li><a href="../data/property/.html">HTML Property Example</a> <a href="../data/property/.html?page=2">Page 2</a> <a href="../data/property/.html?page=2">Page 3</a></li>
                <li><a href="../data/property/.kml">KML Property Example</a> <a href="../data/property/.kml?page=2">Page 2</a> <a href="../data/property/.kml?page=2">Page 3</a></li>
                <li><a href="../data/property/.png">Map Image Property Example</a> <a href="../data/property/.png?page=2">Page 2</a> <a href="../data/property/.png?page=2">Page 3</a></li>
                <li><a href="../data/property/.georss">GeoRSS Property Example</a> <a href="../data/property/.georss?page=2">Page 2</a> <a href="../data/property/.georss?page=2">Page 3</a></li>
                <li><a href="../data/property/.atom">Atom Property Example</a> <a href="../data/property/.atom?page=2">Page 2</a> <a href="../data/property/.atom?page=2">Page 3</a></li>
                <li><a href="../data/property/.csv">CSV Property Example</a> <a href="../data/property/.csv?page=2">Page 2</a> <a href="../data/property/.csv?page=2">Page 3</a></li>
            </ul>
            <p class="sample-header">Published Data examples with filters</p>
            <strong>Note: All examples below are configured to return 500 results maximum, at 100 results per page</strong>
            <ul>
                <li><a href="../data/property/.html?filter=RNAME%20LIKE%20%27SCHMITT%25%27">HTML Property Example - Owners named SCHMITT</a></li>
                <li><a href="../data/property/.kml?filter=RNAME%20LIKE%20%27SCHMITT%25%27">KML Property Example - Owners named SCHMITT</a></li>
                <li><a href="../data/property/.png?filter=RNAME%20LIKE%20%27SCHMITT%25%27">Map Image Property Example - Owners named SCHMITT</a></li>
                <li><a href="../data/property/.html?bbox=-87.6,43.7,-87.7,43.8">HTML Property Example - Properties intersecting (-87.6,43.7,-87.7,43.8)</a></li>
                <li><a href="../data/property/.kml?bbox=-87.6,43.7,-87.7,43.8">KML Property Example - Properties intersecting (-87.6,43.7,-87.7,43.8)</a></li>
                <li><a href="../data/property/.png?bbox=-87.6,43.7,-87.7,43.8">Map Image Property Example - Properties intersecting (-87.6,43.7,-87.7,43.8)</a></li>
                
            </ul>
            <? if ($hasOL2Samples) { ?>
            <p class="sample-header">MapGuide REST API with <a href="http://www.openlayers.org">OpenLayers</a></p>
            <ul>
                <li><a href="untiled/index.html">Basic Sheboygan un-tiled map example with basic legend</a></li>
                <li><a href="tiled/index.html">Basic Sheboygan tiled map example</a></li>
                <li><a href="selection/index.html">Basic Sheboygan un-tiled map example with selection</a></li>
                <li><a href="mixed/index.html">Basic Sheboygan mixed map (tiled and untiled) example</a></li>
                <li><a href="commercial/index.html">Sheboygan map with Google/OSM layers</a></li>
                <li><a href="restsources/index.html">OpenLayers map consuming published data</a></li>
            </ul>
            <? } ?>
        </div>
    </body>
</html>