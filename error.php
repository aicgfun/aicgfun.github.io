<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Ykon">
        <meta name="keywords" content="网页无法打开">
        <meta name="description" content="网页无法打开">
        <title>网页无法打开</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            body{
                padding:0;
                margin:0;
            }
        </style>
    </head>
    <body>
        <img style="margin-left:10px;width:50px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAaCAMAAADCHv/YAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAitQTFRFn8ctpMo4o8o3ocgzo8k3osk1oMcvo8k2osk0pco6+fzy7vXa9/rs8/jl/P75/v78/v/9osk2ocgy+Pvwo8o4/v79pss68ffho8k1/f77s9JY2umtqMxB/f76stJWvdhtrM5J6vPRpss7oskzpMo3nscs9fnoq85I7/bcp8w+0eOY2+qvstJV+vz08Pbd5e/E5O/En8crnsYrrtBNoMcutNNardBMpss80eSaoMgu5e/Focg08fffz+SYpcs6x96EsNFR5fDFxd2AuNVju9do9PjlzOGOoccvyuCL0OSYpco5ocky7/Xbwtt4zuKT8vfhr9BO8vjjpss+qc5F1eah4O273+y5qs1E0OOWt9Vks9NYqs1Crc9KxNx8oMgx3OqxocgwttRewdt36vPSu9dqqcxB9PnoncYos9JXv9lxqs1FqMxAuNZjsNFTn8cvosgz2eiq5vDI5/DJ/P35ttVg2Omp7vXZ7fTXnscrnsYqstJYuNRg+fvytNRc6PHL///94O26tdNb9Pjnn8csz+OWqs5Fosgx6PLNq85F1eajrM5I///+rc9Lt9Vgt9Rf/P344e29nMUo3uy1ttRgrs9MpMo6wdt2+vzzy+GN+Pvu+/32ockzqs1D3Ouy4e69rM9J8/jk8ffgzeKRq81Fqc1E1OWfxdx+nsct2+mw2emr9vrsxNx9yd+I0uafoMgw5O/CsdJW7PTT6/PS3Oqyn8cuocgxqs5HpMo5////jSIuSwAAAd9JREFUeNqE0vdb00AYB/BLmrShLaWLvTfIHrIEAREBwQkq0w0OkL1kCAoqICpbFPdEUUGakPfP44IWoU0v31/ufZ57P7m8uaAv1BZO5q8H0ZVbhAQUJdQESEVYJzqARByU5+5Gi4Sobr4YUEnF5aR/5Nu4EvHTbuyQkmTUc1cqUtuLFUhQYMtvvNIRMUifgRiGf6hPVEfyhMxOw9t0FWO6cQIQ6Aa9vO7/AYvtko2Q1RkjxIW4xX5NwAQCP+QaAF5d2yQltM8TQBvT9AQk8je6NrVASOrpLnvnLolq1JDGF56BE3lesEIi/E9nAkd4ElGfkyE5AoW3FsMjzfta0c77siF6GeLx9CLe4674X+d2ASWWVt2WTP9HkCEwmo6PEdbB+yxjJ+ZhI5zEfxT3+owsgYYUTLLAprHaCRudaAgWRGt2HMgTbTcvUhF3jjP/R/H5nBYuUugYuCAQFYRE6pB17/gmTqRT1owuCfwIHmMdP2/5o2pPcE3Ad/ICuxdRHB2ftL/FkQB01NWrW1UmhqY1rBn5TMUPgRJZKvOdu1o7EXs4rPndfP49w1F/JZK8YJGu9eUpXYW7dgSXhWkWMvHw++740FvLZPLmoKOA3k/eRPI41InA+fcK4ytnW4ABANzcGZFdd/x+AAAAAElFTkSuQmCC">
        <div style="margin-left:10px;font-size:25px"><b>网页无法打开</b></div>
        <br>
        <div style="margin-left:10px;font-size:3">位于 <b><?php

$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
echo $url;

?>
</b> 的网页无法加载，因为:</div>
        <br><font size="3" style="margin-left:10px">net::ERR_NAME_NOT_RESOLVED</font>
    </body>
</html>