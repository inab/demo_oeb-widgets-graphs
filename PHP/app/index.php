<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>OEB widget</title>
        <script src="https://cdn.jsdelivr.net/gh/inab/oeb-widgets-graphs@main/dist/oeb-widgets-graphs.umd.js"></script>
    </head>
    <body>
        <p>This is Demo HTML</p>
        <widget-element
            id="widget-element">
        </widget-element>
        <?php
            $url = "https://raw.githubusercontent.com/inab/oeb-widgets-graphs/refs/heads/main/src/demo/files/BARPLOT.json";
            $data = file_get_contents($url);
            $vars = json_decode($data, true);
            $data = json_encode($data);
            $type = $vars['inline_data']['visualization']['type'];
        ?>
        <p>This is Demo HTML</p>
        <widget-element
            id="widget-element">
        </widget-element>
        <script>
            const widgetElement = document.getElementById('widget-element');
            let graphData = <?= $data; ?>;
            let type = "<?=$type; ?>";

            widgetElement.type = type;
            widgetElement.data = graphData;
        </script>
        </body>
    </html>
</html>