<?php
require("db.class.php");
$db=new Db;
$sql="SELECT row_to_json(poi.*) AS geometrie
FROM (
    SELECT 'FeatureCollection'::text AS type, array_to_json(array_agg(features.*)) AS features
    FROM (
      SELECT 'Feature'::text AS type, st_asgeojson(st_centroid(st_union(st_transform(a.geom, 4326))))::json AS geometry, row_to_json(prop.*) AS properties
      FROM attivita a
      JOIN (
        SELECT lavoro.id, lavoro.nome, lavoro.anno, count(attivita.*) as attivita
        FROM lavoro, attivita
        WHERE attivita.lavoro = lavoro.id
        GROUP BY lavoro.id, lavoro.nome, lavoro.anno
      ) prop ON a.lavoro = prop.id
      group by prop
    ) features
) poi;";
$arr = $db->simple($sql);
echo $arr[0]['geometrie'];
?>
